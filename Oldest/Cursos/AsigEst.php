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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO Cursos (IDestudiante, IDClase, IDTurno) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['TxEst'], "int"),
                       GetSQLValueString($_POST['TxClase'], "int"),
                       GetSQLValueString($_POST['TxTurno'], "int"));

  mysql_select_db($database_basededatos, $basededatos);
  $Result1 = mysql_query($insertSQL, $basededatos) or die(mysql_error());

  $insertGoTo = "/Cursos/Menu.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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

</head>
<body>

<form id="form1" name="form1" method="post" action="">
 <h1 align="center">Asignacion de Clase a Estudiante:</h1>
   <p align="center"> </p>
  <p align="center">Departamento:<br />
   </p>
  <p align="center">
     <select name="TxDepartamento" id="TxDepartamnto" >
       <?php
    

mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg") or die("No se puede conectar a la base de deatos");
mysql_select_db("a1928538_dbschl") or die("No se puede conectar a la base de datos");

$query = "SELECT * FROM Departamento ORDER BY IDDepartamento";

$ListOptions = mysql_query($query);

while($row = mysql_fetch_array($ListOptions))
{
    echo "<option value='".$row['IDDepartamento']."'>".$row['Nombre']."</option>";
}

     ?>
     </select>
  </p>
  <p align="center">Nivel:</p>
  <p align="center">
    <label for="textfield2"></label>
    <select name="TxNivel" id="TxNivel" >
      <?php


mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg") or die("No se puede conectar a la base de deatos");
mysql_select_db("a1928538_dbschl") or die("No se puede conectar a la base de datos");
 $Dept = ($_POST['TxDepartamento']);   
echo $query = ("SELECT * FROM niveles ");
	

$ListOptions = mysql_query($query);

while($row = mysql_fetch_array($ListOptions))
{
    echo "<option value='".$row['idNivel']."'>".$row['NombreNivel']."</option>";

	   }?>
    </select>
  </p>
  <p align="center">
     <?php
  if (!empty($_GET['act'])) {
    echo "Cambiando Numero"; 
  } else {
?>
     <input type="hidden" name="act" value="run" />
     <?php
  }
?>
    <input name="Submit" type="submit" value="Verificar Departamento y Nivel Para Clases" />
  <p align="center"><br />
  
  <p align="center">
</form>
&nbsp;
</p>
<form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
  <p align="center">&nbsp;</p>
  <p align="center">Clase:<br />
  </p>
  <p align="center">
    <select name="TxClase" id="TxClase" >
      <br />
      <?php


mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg") or die("No se puede conectar a la base de deatos");
mysql_select_db("a1928538_dbschl") or die("No se puede conectar a la base de datos");
 $Dept = ($_POST['TxDepartamento']);   
 $Niv = ($_POST['TxNivel']); 
echo $query = ("SELECT * FROM clases where IDDepartamento = $Dept AND IDNivel = $Niv");


$ListOptions = mysql_query($query);

while($row = mysql_fetch_array($ListOptions))
{
    echo "<option value='".$row['idClases']."'>".$row['Nombre_clase']."</option>";

	   }?>
    </select>
  </p>
  <p align="center">Estudiante:</p>
  <p align="center">
    <label for="textfield"></label>
    <select name="TxEst" id="TxEst" >
      <br />
      <?php


mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg") or die("No se puede conectar a la base de deatos");
mysql_select_db("a1928538_dbschl") or die("No se puede conectar a la base de datos");
 $Niv = ($_POST['TxNivel']);   
echo $query = ("SELECT  estudiantes.idEstudiantes, estudiantes.Estudiante_names,estudiantes.Estudiantes_apellidos  FROM estudiantes,niveles WHERE NombreNivel = Nivel AND niveles.idNivel = $Niv");
	

$ListOptions = mysql_query($query);

while($row = mysql_fetch_array($ListOptions))
{
    echo "<option value='".$row['idEstudiantes']."'>".$row['Estudiante_names']. $row['Estudiantes_apellidos']. "</option>";

	   }?>
    </select>
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">Turno:</p>
  <p align="center">
    <select name="TxTurno" id="TxTurno" >
      <?php


mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg") or die("No se puede conectar a la base de deatos");
mysql_select_db("a1928538_dbschl") or die("No se puede conectar a la base de datos");
 $Dept = ($_POST['TxDepartamento']); 
  $Niv = ($_POST['TxNivel']);   
echo $query = ("SELECT  clases.idTurno, turno.turno from clases,turno WHERE turno.idTurno = clases.idTurno AND clases.IDDepartamento = $Dept AND clases.IDNivel = $Niv ");
	

$ListOptions = mysql_query($query);

while($row = mysql_fetch_array($ListOptions))
{
    echo "<option value='".$row['idTurno']."'>".$row['turno']."</option>";

	   }?>
    </select>
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">
    <input type="submit" name="button" id="button" value="Asignar Estudiante a Clase" />
  </p>
  <input type="hidden" name="MM_update" value="form2" />
  <input type="hidden" name="MM_insert" value="form2" />
</form>
<p align="center">&nbsp;</p>
   <p align="center"></p>
   <p align="center">&nbsp;</p>

<p align="center"> 
<p align="center">   </p>

</body>
</html>