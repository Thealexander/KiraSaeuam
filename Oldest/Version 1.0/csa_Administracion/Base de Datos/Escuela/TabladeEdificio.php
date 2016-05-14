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

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_escuela, $escuela);
$query_Recordset1 = "SELECT * FROM edificio";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $escuela) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<table border="1">
  <tr>
    <td>IDedificio</td>
    <td>Edificio</td>
    <td>Direccion</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['IDedificio']; ?></td>
      <td><?php echo $row_Recordset1['Edificio']; ?></td>
      <td><?php echo $row_Recordset1['Direccion']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
