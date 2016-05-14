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
  $updateSQL = sprintf("UPDATE profesor SET PRnombre=%s, PRapellido=%s, lsttipo=%s, Correo=%s, PRciudad=%s, PRpais=%s, PRfechadia=%s, PRfechames=%s, PRfechanano=%s, Imagen=%s, NivelEnsenanza=%s, PRemergencia=%s, Cedula=%s, Telefono=%s, Activo=%s, Actualizacion=%s WHERE IDprofesor=%s",
                       GetSQLValueString($_POST['PRnombre'], "text"),
                       GetSQLValueString($_POST['PRapellido'], "text"),
                       GetSQLValueString($_POST['lsttipo'], "text"),
                       GetSQLValueString($_POST['Correo'], "text"),
                       GetSQLValueString($_POST['PRciudad'], "text"),
                       GetSQLValueString($_POST['PRpais'], "text"),
                       GetSQLValueString($_POST['PRfechadia'], "text"),
                       GetSQLValueString($_POST['PRfechames'], "text"),
                       GetSQLValueString($_POST['PRfechanano'], "text"),
                       GetSQLValueString($_POST['Imagen'], "text"),
                       GetSQLValueString($_POST['NivelEnsenanza'], "int"),
                       GetSQLValueString($_POST['PRemergencia'], "int"),
                       GetSQLValueString($_POST['Cedula'], "int"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['Actualizacion'], "date"),
                       GetSQLValueString($_POST['IDprofesor'], "int"));

  mysql_select_db($database_escuela, $escuela);
  $Result1 = mysql_query($updateSQL, $escuela) or die(mysql_error());
}

$colname_Recordset1 = "-1";
if (isset($_GET['IDprofesor'])) {
  $colname_Recordset1 = $_GET['IDprofesor'];
}
mysql_select_db($database_escuela, $escuela);
$query_Recordset1 = sprintf("SELECT * FROM profesor WHERE IDprofesor = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $escuela) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IDprofesor:</td>
      <td><?php echo $row_Recordset1['IDprofesor']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRnombre:</td>
      <td><input type="text" name="PRnombre" value="<?php echo htmlentities($row_Recordset1['PRnombre'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRapellido:</td>
      <td><input type="text" name="PRapellido" value="<?php echo htmlentities($row_Recordset1['PRapellido'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lsttipo:</td>
      <td><input type="text" name="lsttipo" value="<?php echo htmlentities($row_Recordset1['lsttipo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Correo:</td>
      <td><input type="text" name="Correo" value="<?php echo htmlentities($row_Recordset1['Correo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRciudad:</td>
      <td><input type="text" name="PRciudad" value="<?php echo htmlentities($row_Recordset1['PRciudad'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRpais:</td>
      <td><input type="text" name="PRpais" value="<?php echo htmlentities($row_Recordset1['PRpais'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRfechadia:</td>
      <td><input type="text" name="PRfechadia" value="<?php echo htmlentities($row_Recordset1['PRfechadia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRfechames:</td>
      <td><input type="text" name="PRfechames" value="<?php echo htmlentities($row_Recordset1['PRfechames'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRfechanano:</td>
      <td><input type="text" name="PRfechanano" value="<?php echo htmlentities($row_Recordset1['PRfechanano'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Imagen:</td>
      <td><input type="text" name="Imagen" value="<?php echo htmlentities($row_Recordset1['Imagen'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NivelEnsenanza:</td>
      <td><input type="text" name="NivelEnsenanza" value="<?php echo htmlentities($row_Recordset1['NivelEnsenanza'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PRemergencia:</td>
      <td><input type="text" name="PRemergencia" value="<?php echo htmlentities($row_Recordset1['PRemergencia'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Cedula:</td>
      <td><input type="text" name="Cedula" value="<?php echo htmlentities($row_Recordset1['Cedula'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="<?php echo htmlentities($row_Recordset1['Telefono'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Activo:</td>
      <td><input type="text" name="Activo" value="<?php echo htmlentities($row_Recordset1['Activo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Actualizacion:</td>
      <td><input type="text" name="Actualizacion" value="<?php echo htmlentities($row_Recordset1['Actualizacion'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="IDprofesor" value="<?php echo $row_Recordset1['IDprofesor']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
