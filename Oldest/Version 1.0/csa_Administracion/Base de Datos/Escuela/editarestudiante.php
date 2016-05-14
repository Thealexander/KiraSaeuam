<?php require_once('Connections/escuela.php'); ?>
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
	
		$tipo_prod = $_POST['lsttipo'];

//Guardar imagen
if(is_uploaded_file($_FILES['Imagen']['tmp_name'])) { // verifica haya sido cargado el archivo
$ruta ="images/$tipo_prod/".$_FILES['Imagen']['name'];
move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta);
}
	
  $updateSQL = sprintf("UPDATE estudiante SET ESnombre=%s, ESapellido=%s, lsttipo=%s, ESciudad=%s, ESpais=%s, ESfechadia=%s, ESfechames=%s, ESfechaano=%s, ESEmergencia=%s, Cedula=%s, Telefono=%s, Imagen=%s, Activo=%s, Actualizacion=%s WHERE IDestudiante=%s",
                       GetSQLValueString($_POST['ESnombre'], "text"),
                       GetSQLValueString($_POST['ESapellido'], "text"),
                       GetSQLValueString($_POST['lsttipo'], "text"),
                       GetSQLValueString($_POST['ESciudad'], "text"),
                       GetSQLValueString($_POST['ESpais'], "text"),
                       GetSQLValueString($_POST['ESfechadia'], "text"),
                       GetSQLValueString($_POST['ESfechames'], "text"),
                       GetSQLValueString($_POST['ESfechaano'], "text"),
                       GetSQLValueString($_POST['ESEmergencia'], "int"),
                       GetSQLValueString($_POST['Cedula'], "int"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($ruta, "text"),
                       GetSQLValueString(isset($_POST["checkbox"]) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['Actualizacion'], "date"),
                       GetSQLValueString($_POST['IDestudiante'], "int"));

  mysql_select_db($database_escuela, $escuela);
  $Result1 = mysql_query($updateSQL, $escuela) or die(mysql_error());

  $updateGoTo = "TabladeEstudiante.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_EditEstudiante = "-1";
if (isset($_GET['userid'])) {
  $colname_EditEstudiante = $_GET['userid'];
}
mysql_select_db($database_escuela, $escuela);
$query_EditEstudiante = sprintf("SELECT * FROM estudiante WHERE IDestudiante = %s", GetSQLValueString($colname_EditEstudiante, "int"));
$EditEstudiante = mysql_query($query_EditEstudiante, $escuela) or die(mysql_error());
$row_EditEstudiante = mysql_fetch_assoc($EditEstudiante);
$totalRows_EditEstudiante = mysql_num_rows($EditEstudiante);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Estudiante</title>
<link href="stylesmenu.css" rel="stylesheet" type="text/css" />
<link href="css/style-normal.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Menu Principal</span></a></li>
     <li><a href='TabladeEstudiante.php'><span>Estudiante</span></a></li>
   <li><a href='Tabladeprofesor.php'><span>Profesor</span></a></li>
     <li><a href='TabladeCurso.php'><span>Curso</span></a></li>
       <li><a href='TabladeNivel.php'><span>Nivel</span></a></li>
   <li class='last'><a href='TabladeEdificio.php'><span>Edificio</span></a></li>
</ul>
</div>
<body>
<form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IDestudiante:</td>
      <td><?php echo $row_EditEstudiante['IDestudiante']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre:</td>
      <td><input type="text" name="ESnombre" value="<?php echo htmlentities($row_EditEstudiante['ESnombre'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Apellido:</td>
      <td><input type="text" name="ESapellido" value="<?php echo htmlentities($row_EditEstudiante['ESapellido'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sexo:</td>
      <td><input type="text" name="lsttipo" value="<?php echo htmlentities($row_EditEstudiante['lsttipo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ciudad:</td>
      <td><input type="text" name="ESciudad" value="<?php echo htmlentities($row_EditEstudiante['ESciudad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Pais:</td>
      <td><input type="text" name="ESpais" value="<?php echo htmlentities($row_EditEstudiante['ESpais'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fechadia:</td>
      <td><input type="text" name="ESfechadia" value="<?php echo htmlentities($row_EditEstudiante['ESfechadia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fechames:</td>
      <td><input type="text" name="ESfechames" value="<?php echo htmlentities($row_EditEstudiante['ESfechames'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fechaano:</td>
      <td><input type="text" name="ESfechaano" value="<?php echo htmlentities($row_EditEstudiante['ESfechaano'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Emergencia:</td>
      <td><input type="text" name="ESEmergencia" value="<?php echo htmlentities($row_EditEstudiante['ESEmergencia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Cedula:</td>
      <td><input type="text" name="Cedula" value="<?php echo htmlentities($row_EditEstudiante['Cedula'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="<?php echo htmlentities($row_EditEstudiante['Telefono'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Imagen:</td>
      <td><label for="fileField"></label>
      <input type="file" name="Imagen" id="Imagen" value="<?php echo htmlentities($row_EditEstudiante['Imagen'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Activo:</td>
      <td><input type="checkbox" name="checkbox" id="checkbox" value="<?php echo htmlentities($row_EditEstudiante['Activo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Editar y Salvar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="IDestudiante" value="<?php echo $row_EditEstudiante['IDestudiante']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($EditEstudiante);
?>
