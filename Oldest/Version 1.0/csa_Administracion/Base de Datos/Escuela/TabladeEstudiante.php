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

if ((isset($_POST['hd_del'])) && ($_POST['hd_del'] != "")) {
  $deleteSQL = sprintf("DELETE FROM estudiante WHERE IDestudiante=%s",
                       GetSQLValueString($_POST['hd_del'], "int"));

  mysql_select_db($database_escuela, $escuela);
  $Result1 = mysql_query($deleteSQL, $escuela) or die(mysql_error());

  $deleteGoTo = "TabladeEstudiante.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

mysql_select_db($database_escuela, $escuela);
$query_Tablaestudiante = "SELECT * FROM estudiante";
$Tablaestudiante = mysql_query($query_Tablaestudiante, $escuela) or die(mysql_error());
$row_Tablaestudiante = mysql_fetch_assoc($Tablaestudiante);
$totalRows_Tablaestudiante = mysql_num_rows($Tablaestudiante);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla de Estudiante</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style-normal.css" rel="stylesheet" type="text/css" />
<link href="stylesmenu.css" rel="stylesheet" type="text/css" />
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
<p>&nbsp;</p>
<p><a href="Registro Estudiante.php"><img src="add-icon.png" width="63" height="62" />Anadir</a></p>
<table width="436%" height="138" border="1">
  <tr>
    <td>IDestudiante</td>
    <td>ESnombre</td>
    <td>ESapellido</td>
    <td>lsttipo</td>
    <td>ESciudad</td>
    <td>ESpais</td>
    <td>ESfechadia</td>
    <td>ESfechames</td>
    <td>ESfechaano</td>
    <td>ESEmergencia</td>
    <td>Cedula</td>
    <td>Telefono</td>
    <td>Imagen</td>
    <td>Activo</td>
    <td>Actualizacion</td>
    <td>Opcion</td>
  </tr>
  <?php do { ?>
    <tr>
      <td height="98"><?php echo $row_Tablaestudiante['IDestudiante']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESnombre']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESapellido']; ?></td>
      <td><?php echo $row_Tablaestudiante['lsttipo']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESciudad']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESpais']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESfechadia']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESfechames']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESfechaano']; ?></td>
      <td><?php echo $row_Tablaestudiante['ESEmergencia']; ?></td>
      <td><?php echo $row_Tablaestudiante['Cedula']; ?></td>
      <td><?php echo $row_Tablaestudiante['Telefono']; ?></td>
    <td><img src="<?php echo $row_Tablaestudiante['Imagen']; ?>" / ></td>
      <td><?php echo $row_Tablaestudiante['Activo']; ?></td>
      <td><?php echo $row_Tablaestudiante['Actualizacion']; ?></td>
      <td><p><a href="editarestudiante.php?userid=<?php echo $row_Tablaestudiante['IDestudiante']; ?>"><img src="Pencil-icon.png" width="58" height="59" /></a><a href="EliminarEstudiante.php?IDestudiante=<?php echo $row_Tablaestudiante['IDestudiante']; ?>"><img src="Close-icon.png" alt="" width="49" height="49" /></a></p></td>
    </tr>
    <?php } while ($row_Tablaestudiante = mysql_fetch_assoc($Tablaestudiante)); ?>
</table>
<p>&nbsp;</p>
<form id="form2" name="form2" method="post" action="">
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Tablaestudiante);
?>
