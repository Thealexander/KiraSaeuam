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
$Txest = ($_POST['txEstudiante']);
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
$query_Cursoestudiante = "SELECT clases.Nombre_clase,  profesores.profesores_nombres, profesores.Profesores_apellidos, turno.turno, aulas.Codigo_aula, edificios.Codigo_edificio  FROM clases, turno, aulas, edificios, Cursos, profesores WHERE Cursos.IDClase =clases.idClases AND Cursos.IDTurno = turno.idTurno AND clases.idProfesores = profesores.idProfesores AND clases.idAulas = aulas.idAulas AND aulas.id_edificio =edificios.idEdificios AND IDestudiante = '".$_POST["txEstudiante"]."%' ";
$Cursoestudiante = mysql_query($query_Cursoestudiante, $basededatos) or die(mysql_error());
$row_Cursoestudiante = mysql_fetch_assoc($Cursoestudiante);
$totalRows_Cursoestudiante = mysql_num_rows($Cursoestudiante);

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
 <h1 align="center">Curso de Estudiante:</h1>
  <p align="center"> </p>
  <p align="center">Identificacion de Estudiante:<br />
    <label for="txEstudiante"></label>
    <input type="text" name="txEstudiante" id="txEstudiante" />
    <br />
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">
    <label for="textfield2"></label>
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
    <input name="Submit" type="submit" value="Buscar Curso por ID de Estudiante" />
  <p align="center"><br />
  
  <p align="center">
</form>
&nbsp;
</p>
<form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
  <p align="center">&nbsp;</p>
  <table border="1">
    <tr>
      <td>Nombre_clase</td>
      <td>profesores_nombres</td>
      <td>Profesores_apellidos</td>
      <td>turno</td>
      <td>Codigo_aula</td>
      <td>Codigo_edificio</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Cursoestudiante['Nombre_clase']; ?></td>
        <td><?php echo $row_Cursoestudiante['profesores_nombres']; ?></td>
        <td><?php echo $row_Cursoestudiante['Profesores_apellidos']; ?></td>
        <td><?php echo $row_Cursoestudiante['turno']; ?></td>
        <td><?php echo $row_Cursoestudiante['Codigo_aula']; ?></td>
        <td><?php echo $row_Cursoestudiante['Codigo_edificio']; ?></td>
      </tr>
      <?php } while ($row_Cursoestudiante = mysql_fetch_assoc($Cursoestudiante)); ?>
  </table>
<p align="center">&nbsp;</p>
</form>
<p align="center">&nbsp;</p>
   <p align="center"></p>
   <p align="center"><a href="/Cursos/Menu.php">Atras</a></p>

<p align="center"> 
<p align="center">   </p>

</body>
<?php
mysql_free_result($Cursoestudiante);
?>
