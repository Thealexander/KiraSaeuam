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
  $updateSQL = sprintf("UPDATE estudiantes SET nivel=%s, Tutores_idTutores=%s, Activo=%s, ES_insdia=%s, ES_insmes=%s, ES_insanio=%s WHERE idEstudiantes=%s",
                       GetSQLValueString($_POST['Nivel'], "text"),
                       GetSQLValueString($_POST['txIDprofesor'], "int"),
                       GetSQLValueString(isset($_POST['checkbox']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['lsDia'], "text"),
                       GetSQLValueString($_POST['lsMes'], "text"),
                       GetSQLValueString($_POST['lsAno'], "text"),
                       GetSQLValueString($_POST['txIDes'], "int"));

  mysql_select_db($database_basededatos, $basededatos);
  $Result1 = mysql_query($updateSQL, $basededatos) or die(mysql_error());

  $updateGoTo = "/alumnos/Mostrar.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['idEstudiantes'])) {
  $colname_Recordset1 = $_GET['idEstudiantes'];
}
mysql_select_db($database_basededatos, $basededatos);
$query_Recordset1 = sprintf("SELECT * FROM estudiantes WHERE idEstudiantes = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $basededatos) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Inscripcion de Alumno</title>
<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<script src="../header.js"></script> 

</head>

<body>

<div class="container">
<header>
<div class= "contenedor">
<div class="logo">
<center><img src="../Imagenes/sca-administrator_solo_por_illustracion.jpg" alt="" width="175" height="90"/></center>
</div >
	<nav>
<p>
	<a href="../paginas/Home.php">Inicio</a>
    <a href=" Registro.php">Registro</a>
 	<a href="Mostrar.php">Mostrar</a>
    <a href="Buscar.php">Buscador</a>
<p>
	</nav>
</div>

</header>

<h3 align="center">Inscripcion de Estudiante a Profesor<br />
</h3>

<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
  <p align="center">
    <label for="txNombres"></label>
  </p>
  <p align="center">IDEstudiante:<br />
    <input type="text" name="txIDes" id="txIDes" />
  </p>
  <p align="center">IDProfesor:</p>
  <p align="center">
    <label for="txApellidos"></label>
    <input type="text" name="txIDprofesor" id="txIDprofesor" />
  </p>
  <p align="center">
    <label for="Nivel">Nivel:<br />
    </label>
  </p>
  <p align="center">
    <select name="Nivel" id="Nivel">
      <option value="Primero">Primero</option>
      <option value="Segundo">Segundo</option>
      <option value="Tercero">Tercero</option>
      <option value="Cuarto">Cuarto</option>
      <option value="Quinto">Quinto</option>
      <option value="Sexto">Sexto</option>
      <option value="Septimo">Septimo</option>
      <option value="Octavo">Octavo</option>
      <option value="Noveno">Noveno</option>
      <option value="Decimo">Decimo</option>
      <option value="Onceavo">Onceavo</option>
      <option value="Kinder">Kinder</option>
      <option value="PreKinder">PreKinder</option>
    </select>
  </p>
  <p align="center">&nbsp;</p>
  <h4 align="center">FECHA DE INSCRIPCION:</h4>
  <p align="center">Dia:</p>
  <p align="center">
    <label for="lsDia"></label>
    <select name="lsDia" id="lsDia">
      <option>Dia</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
  </p>
  <p align="center">Mes:</p>
  <p align="center">
    <label for="lsMes"></label>
    <select name="lsMes" id="lsMes">
      <option>Enero</option>
      <option>Febrero</option>
      <option>Marzo</option>
      <option>Abril</option>
      <option>Mayo</option>
      <option>Junio</option>
      <option>Julio</option>
      <option>Agosto</option>
      <option>Septiembre</option>
      <option>Octubre</option>
      <option>Noviembre</option>
      <option>Diciembre</option>
    </select>
  </p>
  <p align="center">Anio:</p>
  <p align="center">
    <label for="lsAno"></label>
    <select name="lsAno" id="lsAno">
      <option>Anio</option>
      <option value="2004"> 2004</option>
      <option value="2005"> 2005</option>
      <option value="2006"> 2006</option>
      <option value="2007"> 2007</option>
      <option value="2008"> 2008</option>
      <option value="2009"> 2009</option>
      <option value="2010"> 2010</option>
      <option value="2011"> 2011</option>
      <option value="2012"> 2012</option>
      <option value="2013"> 2013</option>
      <option value="2014"> 2014</option>
      <option value="2015"> 2015</option>
      <option value="2019"> 2016</option>
      <option value="2002"> 2002</option>
      <option value="2003"> 2003</option>
    </select>
  </p>
  <p align="center">Activo:</p>
  <p align="center">
    <input type="checkbox" name="checkbox" id="checkbox" />
  </p>
  <p align="center">
    <input type= "submit" name ="submit" value ="Subir" />
  </p>
  <input type="hidden" name="MM_update" value="form1" />
</form>
 <div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
  </div>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);

?>
