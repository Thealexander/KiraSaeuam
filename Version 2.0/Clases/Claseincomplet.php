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

mysql_select_db($database_basededatos, $basededatos);
$query_Recordset1 = "SELECT * FROM clases WHERE clases.idProfesores IS NULL";
$Recordset1 = mysql_query($query_Recordset1, $basededatos) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Profesores</title>

<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<script src="../header.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<link href="../Css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
<p></p>
<header>
<div class= "contenedor">
<div class="logo">
<center><img src="../Imagenes/sca-administrator_solo_por_illustracion.jpg" alt="" width="157" height="135"/></center>
</div >
	<nav>
<p>
	<a href="../paginas/Home.php">Inicio</a>
    <a href="ClaseRegistro.php">Registrar Clase</a>
<a href="../Profesores/Asignacion.php">Asignar Profesor a Clase</a>
    <a href="Buscar.php">Buscador</a>
<p>
	</nav>
</div>

</header>

 
 <div class="container">
 <div classases</td>
    <td>Nomb="table-responsive">
<table  class="table" width="80%">
<thead>
  <tr>
    <td>idClre_clase</td>
    <td>IDDepartamento</td>
    <td>idProfesores</td>
    <td>idAulas</td>
    <td>IDNivel</td>
    <td>Activo</td>
    <td>idTurno</td>
  </tr>
  </thead>
  <?php do { ?>
  </tbody>
    <tr>
      <td><?php echo $row_Recordset1['idClases']; ?></td>
      <td><?php echo $row_Recordset1['Nombre_clase']; ?></td>
      <td><?php echo $row_Recordset1['IDDepartamento']; ?></td>
      <td><?php echo $row_Recordset1['idProfesores']; ?></td>
      <td><?php echo $row_Recordset1['idAulas']; ?></td>
      <td><?php echo $row_Recordset1['IDNivel']; ?></td>
      <td><?php echo $row_Recordset1['Activo']; ?></td>
      <td><?php echo $row_Recordset1['idTurno']; ?></td>
    </tr>
    </tbody>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
<p>&nbsp;</p>
</div>
<div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
  </div>
</div>
</body>
<?php

mysql_free_result($Recordset1);
?>
