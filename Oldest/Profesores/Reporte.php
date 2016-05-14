<?php require_once('../Connections/basededatos.php'); ?>
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

$maxRows_Profesor = 10;
$pageNum_Profesor = 0;
if (isset($_GET['pageNum_Profesor'])) {
  $pageNum_Profesor = $_GET['pageNum_Profesor'];
}
$startRow_Profesor = $pageNum_Profesor * $maxRows_Profesor;

mysql_select_db($database_basededatos, $basededatos);
$query_Profesor = "SELECT * FROM profesores";
$query_limit_Profesor = sprintf("%s LIMIT %d, %d", $query_Profesor, $startRow_Profesor, $maxRows_Profesor);
$Profesor = mysql_query($query_limit_Profesor, $basededatos) or die(mysql_error());
$row_Profesor = mysql_fetch_assoc($Profesor);

if (isset($_GET['totalRows_Profesor'])) {
  $totalRows_Profesor = $_GET['totalRows_Profesor'];
} else {
  $all_Profesor = mysql_query($query_Profesor);
  $totalRows_Profesor = mysql_num_rows($all_Profesor);
}
$totalPages_Profesor = ceil($totalRows_Profesor/$maxRows_Profesor)-1;
?>
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
$fecha= date('d_m_Y');
header ("content-type: application/vnd.ms-excel");
header ("content-Disposition: attachment; filename=Reporte_Profesores_$fecha.xlsx");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mostrar Registros de Alumnos </title>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../header.js"></script>
<link href="../Css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<script language="javascript">
function emergente(url){
	var top=(new Number(screen.height) /2 ) -(350 /2);
	var left=(new Number(screen.width) /2 ) -(450 /2);
	window.open(url,'alumno', 'top=' +top + 'left=' + left + 'toolbar=no,scrollbars=yes,width=450,height=350')
	}
</script>
</head>

<body>

<header>
<div class= "contenedor">
<div class="logo">
<center><img src="../Imagenes/sca-administrator_solo_por_illustracion.jpg" alt="" width="175" height="90"/></center>
</div >
	<nav>
<p>
	<a href="../paginas/Home.php">Inicio</a>
    <a href="Registro.php">Registro</a>
 	<a href="Inscripcion.php">Inscripcion</a>
    <a href="Buscar.php">Buscar</a>
<p>
	</nav>
</div>

</header>

 
 <div class="container">
 <div class="table-responsive">
<table  class="table" width="80%">
 <thead>
  <tr>
    <td>IDProfesor</td>
    <td>FotoProf</td>
    <td>profesores_nombres</td>
    <td>Sexo</td>
    <td>IDDepartamento</td>
    <td>Salario</td>
    <td>Dinero</td>
    <td>Nacimiento</td>
    <td>Tiempo de Trabajo</td>
    <td>Activo</td>
  </tr>
   </thead>
    <tbody>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Profesor['idProfesores']; ?></td>
      <td><img src="data:image/jpeg;base64,<?php echo base64_encode($row_Profesor['FotoProf']); ?>" width="100" height="100" /></td>
      <td><?php echo $row_Profesor['profesores_nombres']; ?>       <?php echo $row_Profesor['Profesores_apellidos']; ?></td>
      <td><?php echo $row_Profesor['Sexo']; ?></td>
      <td><?php echo $row_Profesor['IDDepartamento']; ?></td>
      <td><?php echo $row_Profesor['Salario']; ?></td>
      <td><?php echo $row_Profesor['Dinero']; ?></td>
      <td><?php echo $row_Profesor['ProfDia']; ?>/<?php echo $row_Profesor['ProfMes']; ?>/<?php echo $row_Profesor['ProfAnio']; ?></td>
      <td><?php echo $row_Profesor['id_Turno']; ?></td>
      <td><?php echo $row_Profesor['Activo']; ?></td>
    </tr>
    <?php } while ($row_Profesor = mysql_fetch_assoc($Profesor)); ?>
 </tbody>
</table>
<table class="table" width="80%" border="0">
  <tr>
    <td width="49%">&nbsp;</td>
    <td width="39%"></td>
    <td width="12%">&nbsp;</td>
  </tr>
</table>

</div>
<div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
  </div>
  </div>
</body>

</html><?php
mysql_free_result($Profesor);
?>
