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
  $updateSQL = sprintf("UPDATE profesores SET profesores_nombres=%s, Profesores_apellidos=%s, Sexo=%s, telefono=%s, celular=%s, Cedula=%s, direccion=%s, Nacionalidad=%s, Ciudad=%s, correo=%s, IDDepartamento=%s, Salario=%s, Dinero=%s, FotoProf=%s, ProfDia=%s, ProfMes=%s, ProfAnio=%s, id_Turno=%s, IDCargo=%s, Activo=%s WHERE idProfesores=%s",
                       GetSQLValueString($_POST['profesores_nombres'], "text"),
                       GetSQLValueString($_POST['Profesores_apellidos'], "text"),
                       GetSQLValueString($_POST['Sexo'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['celular'], "text"),
                       GetSQLValueString($_POST['Cedula'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['Nacionalidad'], "text"),
                       GetSQLValueString($_POST['Ciudad'], "text"),
                       GetSQLValueString($_POST['correo'], "text"),
                       GetSQLValueString($_POST['IDDepartamento'], "int"),
                       GetSQLValueString($_POST['Salario'], "double"),
                       GetSQLValueString($_POST['Dinero'], "text"),
                       GetSQLValueString($_POST['FotoProf'], "text"),
                       GetSQLValueString($_POST['ProfDia'], "text"),
                       GetSQLValueString($_POST['ProfMes'], "text"),
                       GetSQLValueString($_POST['ProfAnio'], "text"),
                       GetSQLValueString($_POST['id_Turno'], "int"),
                       GetSQLValueString($_POST['IDCargo'], "int"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['idProfesores'], "int"));

  mysql_select_db($database_basededatos, $basededatos);
  $Result1 = mysql_query($updateSQL, $basededatos) or die(mysql_error());

  $updateGoTo = "../paginas/ready.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_row_Recordsetpp = "-1";
if (isset($_GET['idProfesores'])) {
  $colname_row_Recordsetpp = $_GET['idProfesores'];
}
mysql_select_db($database_basededatos, $basededatos);
$query_row_Recordsetpp = sprintf("SELECT * FROM profesores WHERE idProfesores = %s", GetSQLValueString($colname_row_Recordsetpp, "int"));
$row_Recordsetpp = mysql_query($query_row_Recordsetpp, $basededatos) or die(mysql_error());
$row_row_Recordsetpp = mysql_fetch_assoc($row_Recordsetpp);
$totalRows_row_Recordsetpp = mysql_num_rows($row_Recordsetpp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modificar Profesor</title>
<link href="../Css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<script src="../header.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
</head>

<body>
<header>
<div  class="container">
<div class="logo">
<center><img src="../Imagenes/sca-administrator_solo_por_illustracion.jpg" alt="" width="175" height="90"/></center>
</div >
	<nav>
<p>
	<a href="../paginas/Home.php">Inicio</a>
    <a href="Registro.php">Registro</a>
 	<a href=" Asignacion.php">Asignaciones</a>
    <a href=" Buscar.php">Buscador</a>
<p>
	</nav>
</div>

</header>
<div class="container">
<div class="table-responsive">
  <center><h2 class="Cabecera"><strong>Mostrar- Actualizar Profesor</strong></h2></center>
  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
    <table class="table" align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">IdProfesores:</td>
        <td><?php echo $row_Recordsetpp['idProfesores']; ?></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Profesores_nombres:</td>
        <td><input type="text" name="profesores_nombres" value="<?php echo htmlentities($row_row_Recordsetpp['profesores_nombres'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Profesores_apellidos:</td>
        <td><input type="text" name="Profesores_apellidos" value="<?php echo htmlentities($row_row_Recordsetpp['Profesores_apellidos'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Sexo:</td>
        <td><input type="text" name="Sexo" value="<?php echo htmlentities($row_row_Recordsetpp['Sexo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Telefono:</td>
        <td><input type="text" name="telefono" value="<?php echo htmlentities($row_row_Recordsetpp['telefono'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Celular:</td>
        <td><input type="text" name="celular" value="<?php echo htmlentities($row_row_Recordsetpp['celular'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Cedula:</td>
        <td><input type="text" name="Cedula" value="<?php echo htmlentities($row_row_Recordsetpp['Cedula'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Direccion:</td>
        <td><input type="text" name="direccion" value="<?php echo htmlentities($row_row_Recordsetpp['direccion'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Nacionalidad:</td>
        <td><input type="text" name="Nacionalidad" value="<?php echo htmlentities($row_row_Recordsetpp['Nacionalidad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Ciudad:</td>
        <td><input type="text" name="Ciudad" value="<?php echo htmlentities($row_row_Recordsetpp['Ciudad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Correo:</td>
        <td><input type="text" name="correo" value="<?php echo htmlentities($row_row_Recordsetpp['correo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">IDDepartamento:</td>
        <td><input type="text" name="IDDepartamento" value="<?php echo htmlentities($row_row_Recordsetpp['IDDepartamento'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Salario:</td>
        <td><input type="text" name="Salario" value="<?php echo htmlentities($row_row_Recordsetpp['Salario'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Dinero:</td>
        <td><input type="text" name="Dinero" value="<?php echo htmlentities($row_row_Recordsetpp['Dinero'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">FotoProf:</td>
        <td><input type="text" name="FotoProf" value="<?php echo htmlentities($row_row_Recordsetpp['FotoProf'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">ProfDia:</td>
        <td><input type="text" name="ProfDia" value="<?php echo htmlentities($row_row_Recordsetpp['ProfDia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">ProfMes:</td>
        <td><input type="text" name="ProfMes" value="<?php echo htmlentities($row_row_Recordsetpp['ProfMes'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">ProfAnio:</td>
        <td><input type="text" name="ProfAnio" value="<?php echo htmlentities($row_row_Recordsetpp['ProfAnio'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Id_Turno:</td>
        <td><input type="text" name="id_Turno" value="<?php echo htmlentities($row_row_Recordsetpp['id_Turno'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">IDCargo:</td>
        <td><input type="text" name="IDCargo" value="<?php echo htmlentities($row_row_Recordsetpp['IDCargo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Activo:</td>
        <td><input type="text" name="Activo" value="<?php echo htmlentities($row_row_Recordsetpp['Activo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Actualizar registro" /></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1" />
    <input type="hidden" name="idProfesores" value="<?php echo $row_row_Recordsetpp['idProfesores']; ?>" />
  </form>
  <p>&nbsp;</p>
</div>
<div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
</div>
</div>
  
</body>
</html>
<?php
mysql_free_result($row_Recordsetpp);
?>
