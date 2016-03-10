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

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE clases SET Nombre_clase=%s, IDDepartamento=%s, idProfesores=%s, idAulas=%s, IDNivel=%s, Activo=%s, idTurno=%s WHERE idClases=%s",
                       GetSQLValueString($_POST['Nombre_clase'], "text"),
                       GetSQLValueString($_POST['IDDepartamento'], "int"),
                       GetSQLValueString($_POST['idProfesores'], "int"),
                       GetSQLValueString($_POST['idAulas'], "int"),
                       GetSQLValueString($_POST['IDNivel'], "int"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['idTurno'], "int"),
                       GetSQLValueString($_POST['idClases'], "int"));

  mysql_select_db($database_basededatos, $basededatos);
  $Result1 = mysql_query($updateSQL, $basededatos) or die(mysql_error());

  $updateGoTo = "../paginas/ready.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$maxRows_ClasesID = 1;
$pageNum_ClasesID = 0;
if (isset($_GET['pageNum_ClasesID'])) {
  $pageNum_ClasesID = $_GET['pageNum_ClasesID'];
}
$startRow_ClasesID = $pageNum_ClasesID * $maxRows_ClasesID;

$colname_ClasesID = "-1";
if (isset($_GET['idClases'])) {
  $colname_ClasesID = $_GET['idClases'];
}
mysql_select_db($database_basededatos, $basededatos);
$query_ClasesID = sprintf("SELECT * FROM clases WHERE idClases = %s", GetSQLValueString($colname_ClasesID, "int"));
$query_limit_ClasesID = sprintf("%s LIMIT %d, %d", $query_ClasesID, $startRow_ClasesID, $maxRows_ClasesID);
$ClasesID = mysql_query($query_limit_ClasesID, $basededatos) or die(mysql_error());
$row_ClasesID = mysql_fetch_assoc($ClasesID);

if (isset($_GET['totalRows_ClasesID'])) {
  $totalRows_ClasesID = $_GET['totalRows_ClasesID'];
} else {
  $all_ClasesID = mysql_query($query_ClasesID);
  $totalRows_ClasesID = mysql_num_rows($all_ClasesID);
}
$totalPages_ClasesID = ceil($totalRows_ClasesID/$maxRows_ClasesID)-1;

$queryString_ClasesID = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_ClasesID") == false && 
        stristr($param, "totalRows_ClasesID") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_ClasesID = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_ClasesID = sprintf("&totalRows_ClasesID=%d%s", $totalRows_ClasesID, $queryString_ClasesID);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar-Mostrar Clase</title>

<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<link href="../Css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<script src="../header.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<link rel="icon" type="image/png" href="../Imagenes/mifavicon.png" />
</head>

<body>
<table border="0">
  <tr>
    <td><?php if ($pageNum_ClasesID > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_ClasesID=%d%s", $currentPage, 0, $queryString_ClasesID); ?>">Primero</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_ClasesID > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_ClasesID=%d%s", $currentPage, max(0, $pageNum_ClasesID - 1), $queryString_ClasesID); ?>">Anterior</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_ClasesID < $totalPages_ClasesID) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_ClasesID=%d%s", $currentPage, min($totalPages_ClasesID, $pageNum_ClasesID + 1), $queryString_ClasesID); ?>">Siguiente</a>
        <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_ClasesID < $totalPages_ClasesID) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_ClasesID=%d%s", $currentPage, $totalPages_ClasesID, $queryString_ClasesID); ?>">&Uacute;ltimo</a>
        <?php } // Show if not last page ?></td>
  </tr>
</table>
<div class="container">
 <div class="table-responsive">
   <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
     <center><h2 class="Cabecera"><strong>Mostrar- Actualizar Clase</strong></h2><center>
     <table class="table" width="80%" align="center">
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IdClases:</td>
         <td><?php echo $row_ClasesID['idClases']; ?></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">Nombre_clase:</td>
         <td><input type="text" name="Nombre_clase" value="<?php echo htmlentities($row_ClasesID['Nombre_clase'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IDDepartamento:</td>
         <td><input type="text" name="IDDepartamento" value="<?php echo htmlentities($row_ClasesID['IDDepartamento'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IdProfesores:</td>
         <td><input type="text" name="idProfesores" value="<?php echo htmlentities($row_ClasesID['idProfesores'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IdAulas:</td>
         <td><input type="text" name="idAulas" value="<?php echo htmlentities($row_ClasesID['idAulas'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IDNivel:</td>
         <td><input type="text" name="IDNivel" value="<?php echo htmlentities($row_ClasesID['IDNivel'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">Activo:</td>
         <td><input type="text" name="Activo" value="<?php echo htmlentities($row_ClasesID['Activo'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">IdTurno:</td>
         <td><input type="text" name="idTurno" value="<?php echo htmlentities($row_ClasesID['idTurno'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
       </tr>
       <tr valign="baseline">
         <td nowrap="nowrap" align="right">&nbsp;</td>
         <td><input type="submit" value="Actualizar registro" /></td>
       </tr>
     </table>
     <input type="hidden" name="MM_update" value="form1" />
     <input type="hidden" name="idClases" value="<?php echo $row_ClasesID['idClases']; ?>" />
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
mysql_free_result($ClasesID);
?>
