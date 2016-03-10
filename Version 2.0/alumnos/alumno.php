 <?php require_once('../Connections/basededatos.php'); ?>

<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../paginas/Sesion.php";// cambiar aca dependiendo donde nos ubicamos
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../paginas/fail.html";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE estudiantes SET Estudiante_names=%s, Estudiantes_apellidos=%s, ES_dia=%s, ES_mes=%s, ES_anio=%s, direccion=%s, telefono=%s, celular=%s, email=%s, sexo=%s, nivel=%s, notas=%s, Tutores_idTutores=%s, nacionalidad=%s, Cedula=%s, Activo=%s, Fotos_idphoto=%s, Ciudad=%s, ES_insdia=%s, ES_insmes=%s, ES_insanio=%s, `Ultima Actualizacion`=%s WHERE idEstudiantes=%s",
                       GetSQLValueString($_POST['Estudiante_names'], "text"),
                       GetSQLValueString($_POST['Estudiantes_apellidos'], "text"),
                       GetSQLValueString($_POST['ES_dia'], "text"),
                       GetSQLValueString($_POST['ES_mes'], "text"),
                       GetSQLValueString($_POST['ES_anio'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['celular'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['nivel'], "text"),
                       GetSQLValueString($_POST['notas'], "int"),
                       GetSQLValueString($_POST['Tutores_idTutores'], "int"),
                       GetSQLValueString($_POST['nacionalidad'], "text"),
                       GetSQLValueString($_POST['Cedula'], "text"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['Fotos_idphoto'], "text"),
                       GetSQLValueString($_POST['Ciudad'], "text"),
                       GetSQLValueString($_POST['ES_insdia'], "text"),
                       GetSQLValueString($_POST['ES_insmes'], "text"),
                       GetSQLValueString($_POST['ES_insanio'], "text"),
                       GetSQLValueString($_POST['Ultima_Actualizacion'], "date"),
                       GetSQLValueString($_POST['idEstudiantes'], "int"));

  mysql_select_db($database_basededatos, $basededatos);
  $Result1 = mysql_query($updateSQL, $basededatos) or die(mysql_error());

  $updateGoTo = "../paginas/ready.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_alumnos = "-1";
if (isset($_GET['idEstudiantes'])) {
  $colname_alumnos = $_GET['idEstudiantes'];
}
mysql_select_db($database_basededatos, $basededatos);
$query_alumnos = sprintf("SELECT * FROM estudiantes WHERE idEstudiantes = %s", GetSQLValueString($colname_alumnos, "int"));
$alumnos = mysql_query($query_alumnos, $basededatos) or die(mysql_error());
$row_alumnos = mysql_fetch_assoc($alumnos);
$totalRows_alumnos = mysql_num_rows($alumnos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar-Editar Alumno</title>
<link href="../Css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
    <link rel="stylesheet" href="../Css/fonts.css">
<script src="../header.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">

</head>

<body>
<div class="contenedor">

<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" style="alignment-adjust:central">
  <center><h2 class="Cabecera"><strong>Mostrar- Actualizar Estudiante</strong></h2><center>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IdEstudiantes:</td>
      <td><?php echo $row_Recordset1['idEstudiantes']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Estudiante_names:</td>
      <td><input type="text" name="Estudiante_names" value="<?php echo htmlentities($row_alumnos['Estudiante_names'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Estudiantes_apellidos:</td>
      <td><input type="text" name="Estudiantes_apellidos" value="<?php echo htmlentities($row_alumnos['Estudiantes_apellidos'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_dia:</td>
      <td><input type="text" name="ES_dia" value="<?php echo htmlentities($row_alumnos['ES_dia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_mes:</td>
      <td><input type="text" name="ES_mes" value="<?php echo htmlentities($row_alumnos['ES_mes'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_anio:</td>
      <td><input type="text" name="ES_anio" value="<?php echo htmlentities($row_alumnos['ES_anio'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Direccion:</td>
      <td><input type="text" name="direccion" value="<?php echo htmlentities($row_alumnos['direccion'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="telefono" value="<?php echo htmlentities($row_alumnos['telefono'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Celular:</td>
      <td><input type="text" name="celular" value="<?php echo htmlentities($row_alumnos['celular'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email:</td>
      <td><input type="text" name="email" value="<?php echo htmlentities($row_alumnos['email'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td height="94" align="right" nowrap="nowrap">Sexo:</td>
      <td><input type="text" name="sexo" value="<?php echo htmlentities($row_alumnos['sexo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nivel:</td>
      <td><input type="text" name="nivel" value="<?php echo htmlentities($row_alumnos['nivel'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Notas:</td>
      <td><input type="text" name="notas" value="<?php echo htmlentities($row_alumnos['notas'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tutores_idTutores:</td>
      <td><input type="text" name="Tutores_idTutores" value="<?php echo htmlentities($row_alumnos['Tutores_idTutores'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nacionalidad:</td>
      <td><input type="text" name="nacionalidad" value="<?php echo htmlentities($row_alumnos['nacionalidad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Cedula:</td>
      <td><input type="text" name="Cedula" value="<?php echo htmlentities($row_alumnos['Cedula'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Activo:</td>
      <td><input type="text" name="Activo" value="<?php echo htmlentities($row_alumnos['Activo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fotos_idphoto:</td>
      <td><input type="text" name="Fotos_idphoto" value="<?php echo htmlentities($row_alumnos['Fotos_idphoto'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ciudad:</td>
      <td><input type="text" name="Ciudad" value="<?php echo htmlentities($row_alumnos['Ciudad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_insdia:</td>
      <td><input type="text" name="ES_insdia" value="<?php echo htmlentities($row_alumnos['ES_insdia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_insmes:</td>
      <td><input type="text" name="ES_insmes" value="<?php echo htmlentities($row_alumnos['ES_insmes'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ES_insanio:</td>
      <td><input type="text" name="ES_insanio" value="<?php echo htmlentities($row_alumnos['ES_insanio'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ultima Actualizacion:</td>
      <td><input type="text" name="Ultima_Actualizacion" value="<?php echo htmlentities($row_alumnos['Ultima Actualizacion'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="idEstudiantes" value="<?php echo $row_alumnos['idEstudiantes']; ?>" />
</form>
<p>&nbsp;</p>
<div class="table-responsive">
<table class="table" width="80%" border="0">
  <tr>
    <td width="38%">&nbsp;</td>kjlk
    <td width="29%"><p align="right">
    <form id="reporte" name="Report" method="post" action="Reporte_Individual.php"><input type="submit" value=" Generar Reporte" /></form> </p></td>
    <td width="33%">&nbsp;</td>
  </tr>
</table>
</div>
<div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
  </div>
   </div>
  
</body>
</html>
<?php
mysql_free_result($alumnos);
?>
