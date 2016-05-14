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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Alumno</title>
<link href="../Css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../Css/Styles.css" type="text/css">
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<script src="../header.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">

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
    <a href="Mostrar.php">Mostrar</a>
 	<a href="Inscripcion.php">Inscripcion</a>
    <a href="Buscar.php">Buscar</a>
<p>
	</nav>
</div>

</header>

<form action="Registro.php" method="POST" enctype="multipart/form-data">


<h1 align="center">&nbsp;</h1>
<h3 align="center">Registro de Estudiante</h3>
<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">

  <p align="center">
    <label for="txNombres"></label>
  </p>
  <p align="center">Nombre:<br />
    <input type="text" name="txNombres" id="txNombres" />
  </p>
  <p align="center">Apellidos:</p>
  <p align="center">
    <label for="txApellidos"></label>
    <input type="text" name="txApellidos" id="txApellidos" />
  </p>
  <p align="center">Email:</p>
  <p align="center">
    <label for="txCorreo"></label>
    <input type="text" name="txCorreo" id="txCorreo" />
  </p>
  <p align="center">Nacionalidad:</p>
  <p align="center">
    <label for="Pais"></label>
    <select name="Pais" size="1" id="Pais">
<option value="Afganistán ">Afganistán </option>
<option value="Akrotiri ">Akrotiri </option>
<option value="Albania ">Albania </option>
<option value="Alemania ">Alemania </option>
<option value="Andorra ">Andorra </option>
<option value="Angola ">Angola </option>
<option value="Anguila ">Anguila </option>
<option value="Antártida ">Antártida </option>
<option value="Antigua y Barbuda ">Antigua y Barbuda </option>
<option value="Antillas Neerlandesas ">Antillas Neerlandesas </option>
<option value="Arabia Saudí ">Arabia Saudí </option>
<option value="Arctic Ocean ">Arctic Ocean </option>
<option value="Argelia ">Argelia </option>
<option value="Argentina ">Argentina </option>
<option value="Armenia ">Armenia </option>
<option value="Aruba ">Aruba </option>
<option value="Ashmore andCartier Islands ">Ashmore andCartier Islands </option>
<option value="Atlantic Ocean ">Atlantic Ocean </option>
<option value="Australia ">Australia </option>
<option value="Austria ">Austria </option>
<option value="Azerbaiyán ">Azerbaiyán </option>
<option value="Bahamas ">Bahamas </option>
<option value="Bahráin ">Bahráin </option>
<option value="Bangladesh ">Bangladesh </option>
<option value="Barbados ">Barbados </option>
<option value="Bélgica ">Bélgica </option>
<option value="Belice ">Belice </option>
<option value="Benín ">Benín </option>
<option value="Bermudas ">Bermudas </option>
<option value="Bielorrusia ">Bielorrusia </option>
<option value="Birmania Myanmar ">Birmania Myanmar </option>
<option value="Bolivia ">Bolivia </option>
<option value="Bosnia y Hercegovina ">Bosnia y Hercegovina </option>
<option value="Botsuana ">Botsuana </option>
<option value="Brasil ">Brasil </option>
<option value="Brunéi ">Brunéi </option>
<option value="Bulgaria ">Bulgaria </option>
<option value="Burkina Faso ">Burkina Faso </option>
<option value="Burundi ">Burundi </option>
<option value="Bután ">Bután </option>
<option value="Cabo Verde ">Cabo Verde </option>
<option value="Camboya ">Camboya </option>
<option value="Camerún ">Camerún </option>
<option value="Canadá ">Canadá </option>
<option value="Chad ">Chad </option>
<option value="Chile ">Chile </option>
<option value="China ">China </option>
<option value="Chipre ">Chipre </option>
<option value="Clipperton Island ">Clipperton Island </option>
<option value="Colombia ">Colombia </option>
<option value="Comoras ">Comoras </option>
<option value="Congo ">Congo </option>
<option value="Coral Sea Islands ">Coral Sea Islands </option>
<option value="Corea del Norte ">Corea del Norte </option>
<option value="Corea del Sur ">Corea del Sur </option>
<option value="Costa de Marfil ">Costa de Marfil </option>
<option value="Costa Rica ">Costa Rica </option>
<option value="Croacia ">Croacia </option>
<option value="Cuba ">Cuba </option>
<option value="Dhekelia ">Dhekelia </option>
<option value="Dinamarca ">Dinamarca </option>
<option value="Dominica ">Dominica </option>
<option value="Ecuador ">Ecuador </option>
<option value="Egipto ">Egipto </option>
<option value="El Salvador ">El Salvador </option>
<option value="El Vaticano ">El Vaticano </option>
<option value="Emiratos Árabes Unidos ">Emiratos Árabes Unidos </option>
<option value="Eritrea ">Eritrea </option>
<option value="Eslovaquia ">Eslovaquia </option>
<option value="Eslovenia ">Eslovenia </option>
<option value="España ">España </option>
<option value="Estados Unidos ">Estados Unidos </option>
<option value="Estonia ">Estonia </option>
<option value="Etiopía ">Etiopía </option>
<option value="Filipinas ">Filipinas </option>
<option value="Finlandia ">Finlandia </option>
<option value="Fiyi ">Fiyi </option>
<option value="Francia ">Francia </option>
<option value="Gabón ">Gabón </option>
<option value="Gambia ">Gambia </option>
<option value="Gaza Strip ">Gaza Strip </option>
<option value="Georgia ">Georgia </option>
<option value="Ghana ">Ghana </option>
<option value="Gibraltar ">Gibraltar </option>
<option value="Granada ">Granada </option>
<option value="Grecia ">Grecia </option>
<option value="Groenlandia ">Groenlandia </option>
<option value="Guam ">Guam </option>
<option value="Guatemala ">Guatemala </option>
<option value="Guernsey ">Guernsey </option>
<option value="Guinea ">Guinea </option>
<option value="Guinea Ecuatorial ">Guinea Ecuatorial </option>
<option value="Guinea-Bissau ">Guinea-Bissau </option>
<option value="Guyana ">Guyana </option>
<option value="Haití ">Haití </option>
<option value="Honduras ">Honduras </option>
<option value="Hong Kong ">Hong Kong </option>
<option value="Hungría ">Hungría </option>
<option value="India ">India </option>
<option value="Indian Ocean ">Indian Ocean </option>
<option value="Indonesia ">Indonesia </option>
<option value="Irán ">Irán </option>
<option value="Iraq ">Iraq </option>
<option value="Irlanda ">Irlanda </option>
<option value="Isla Bouvet ">Isla Bouvet </option>
<option value="Isla Christmas ">Isla Christmas </option>
<option value="Isla Norfolk ">Isla Norfolk </option>
<option value="Islandia ">Islandia </option>
<option value="Islas Caimán ">Islas Caimán </option>
<option value="Islas Cocos ">Islas Cocos </option>
<option value="Islas Cook ">Islas Cook </option>
<option value="Islas Feroe ">Islas Feroe </option>
<option value="Islas Georgia del Sur y Sandwich del Sur ">Islas Georgia del Sur y Sandwich del Sur </option>
<option value="Islas Heard y McDonald ">Islas Heard y McDonald </option>
<option value="Islas Malvinas ">Islas Malvinas </option>
<option value="Islas Marianas del Norte ">Islas Marianas del Norte </option>
<option value="IslasMarshall ">IslasMarshall </option>
<option value="Islas Pitcairn ">Islas Pitcairn </option>
<option value="Islas Salomón ">Islas Salomón </option>
<option value="Islas Turcas y Caicos ">Islas Turcas y Caicos </option>
<option value="Islas Vírgenes Americanas ">Islas Vírgenes Americanas </option>
<option value="Islas Vírgenes Británicas ">Islas Vírgenes Británicas </option>
<option value="Israel ">Israel </option>
<option value="Italia ">Italia </option>
<option value="Jamaica ">Jamaica </option>
<option value="Jan Mayen ">Jan Mayen </option>
<option value="Japón ">Japón </option>
<option value="Jersey ">Jersey </option>
<option value="Jordania ">Jordania </option>
<option value="Kazajistán ">Kazajistán </option>
<option value="Kenia ">Kenia </option>
<option value="Kirguizistán ">Kirguizistán </option>
<option value="Kiribati ">Kiribati </option>
<option value="Kuwait ">Kuwait </option>
<option value="Laos ">Laos </option>
<option value="Lesoto ">Lesoto </option>
<option value="Letonia ">Letonia </option>
<option value="Líbano ">Líbano </option>
<option value="Liberia ">Liberia </option>
<option value="Libia ">Libia </option>
<option value="Liechtenstein ">Liechtenstein </option>
<option value="Lituania ">Lituania </option>
<option value="Luxemburgo ">Luxemburgo </option>
<option value="Macao ">Macao </option>
<option value="Macedonia ">Macedonia </option>
<option value="Madagascar ">Madagascar </option>
<option value="Malasia ">Malasia </option>
<option value="Malaui ">Malaui </option>
<option value="Maldivas ">Maldivas </option>
<option value="Malí ">Malí </option>
<option value="Malta ">Malta </option>
<option value="Man, Isle of ">Man, Isle of </option>
<option value="Marruecos ">Marruecos </option>
<option value="Mauricio ">Mauricio </option>
<option value="Mauritania ">Mauritania </option>
<option value="Mayotte ">Mayotte </option>
<option value="México ">México </option>
<option value="Micronesia ">Micronesia </option>
<option value="Moldavia ">Moldavia </option>
<option value="Mónaco ">Mónaco </option>
<option value="Mongolia ">Mongolia </option>
<option value="Montserrat ">Montserrat </option>
<option value="Mozambique ">Mozambique </option>
<option value="Namibia ">Namibia </option>
<option value="Nauru ">Nauru </option>
<option value="Navassa Island ">Navassa Island </option>
<option value="Nepal ">Nepal </option>
<option value="Nicaragua ">Nicaragua </option>
<option value="Níger ">Níger </option>
<option value="Nigeria ">Nigeria </option>
<option value="Niue ">Niue </option>
<option value="Noruega ">Noruega </option>
<option value="Nueva Caledonia ">Nueva Caledonia </option>
<option value="Nueva Zelanda ">Nueva Zelanda </option>
<option value="Omán ">Omán </option>
<option value="Pacific Ocean ">Pacific Ocean </option>
<option value="Países Bajos ">Países Bajos </option>
<option value="Pakistán ">Pakistán </option>
<option value="Palaos ">Palaos </option>
<option value="Panamá ">Panamá </option>
<option value="Papúa-Nueva Guinea ">Papúa-Nueva Guinea </option>
<option value="Paracel Islands ">Paracel Islands </option>
<option value="Paraguay ">Paraguay </option>
<option value="Perú ">Perú </option>
<option value="Polinesia Francesa ">Polinesia Francesa </option>
<option value="Polonia ">Polonia </option>
<option value="Portugal ">Portugal </option>
<option value="Puerto Rico ">Puerto Rico </option>
<option value="Qatar ">Qatar </option>
<option value="Reino Unido ">Reino Unido </option>
<option value="República Centroafricana ">República Centroafricana </option>
<option value="República Checa ">República Checa </option>
<option value="República Democrática del Congo ">República Democrática del Congo </option>
<option value="República Dominicana ">República Dominicana </option>
<option value="Ruanda ">Ruanda </option>
<option value="Rumania ">Rumania </option>
<option value="Rusia ">Rusia </option>
<option value="Sáhara Occidental ">Sáhara Occidental </option>
<option value="Samoa ">Samoa </option>
<option value="Samoa Americana ">Samoa Americana </option>
<option value="San Cristóbal y Nieves ">San Cristóbal y Nieves </option>
<option value="San Marino ">San Marino </option>
<option value="San Pedro y Miquelón ">San Pedro y Miquelón </option>
<option value="San Vicente y las Granadinas ">San Vicente y las Granadinas </option>
<option value="Santa Helena ">Santa Helena </option>
<option value="Santa Lucía ">Santa Lucía </option>
<option value="Santo Tomé y Príncipe ">Santo Tomé y Príncipe </option>
<option value="Senegal ">Senegal </option>
<option value="Seychelles ">Seychelles </option>
<option value="Sierra Leona ">Sierra Leona </option>
<option value="Singapur ">Singapur </option>
<option value="Siria ">Siria </option>
<option value="Somalia ">Somalia </option>
<option value="Southern Ocean ">Southern Ocean </option>
<option value="Spratly Islands ">Spratly Islands </option>
<option value="Sri Lanka ">Sri Lanka </option>
<option value="Suazilandia ">Suazilandia </option>
<option value="Sudáfrica ">Sudáfrica </option>
<option value="Sudán ">Sudán </option>
<option value="Suecia ">Suecia </option>
<option value="Suiza ">Suiza </option>
<option value="Surinam ">Surinam </option>
<option value="Svalbard y Jan Mayen ">Svalbard y Jan Mayen </option>
<option value="Tailandia ">Tailandia </option>
<option value="Taiwán ">Taiwán </option>
<option value="Tanzania ">Tanzania </option>
<option value="Tayikistán ">Tayikistán </option>
<option value="TerritorioBritánicodel Océano Indico ">TerritorioBritánicodel Océano Indico </option>
<option value="Territorios Australes Franceses ">Territorios Australes Franceses </option>
<option value="Timor Oriental ">Timor Oriental </option>
<option value="Togo ">Togo </option>
<option value="Tokelau ">Tokelau </option>
<option value="Tonga ">Tonga </option>
<option value="Trinidad y Tobago ">Trinidad y Tobago </option>
<option value="Túnez ">Túnez </option>
<option value="Turkmenistán ">Turkmenistán </option>
<option value="Turquía ">Turquía </option>
<option value="Tuvalu ">Tuvalu </option>
<option value="Ucrania ">Ucrania </option>
<option value="Uganda ">Uganda </option>
<option value="Unión Europea ">Unión Europea </option>
<option value="Uruguay ">Uruguay </option>
<option value="Uzbekistán ">Uzbekistán </option>
<option value="Vanuatu ">Vanuatu </option>
<option value="Venezuela ">Venezuela </option>
<option value="Vietnam ">Vietnam </option>
<option value="Wake Island ">Wake Island </option>
<option value="Wallis y Futuna ">Wallis y Futuna </option>
<option value="West Bank ">West Bank </option>
<option value="World ">World </option>
<option value="Yemen ">Yemen </option>
<option value="Yibuti ">Yibuti </option>
<option value="Zambia ">Zambia </option>
<option value="Zimbabue ">Zimbabue </option>
</select>

  </p>
  <p align="center">Ciudad:</p>
  <p align="center">
    <label for="txContrasena"></label>
    <label for="textfield"></label>
    <input type="text" name="txCiudad" id="txCiudad" />
  </p>
  <p align="center">
    <label for="Direccion">Direccion:<br />
    </label>
    <input type="text" name="Direccion" id="Direccion" />
  </p>
  <p align="center">Sexo:</p>
  <p align="center">
    <label for="lsTipo"></label>
    <select name="lsTipo" id="lsTipo">
      <option>Hombre</option>
      <option>Mujer</option>
    </select>
  </p>
  <p align="center">Telefono:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="Telefono" id="Telefono" />
  </p>
  <p align="center">Celular:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="TCelular" id="Telemergencia" />
  </p>
  <p align="center">Cedula:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="txCedula" id="txCedula" />
  </p>
  <h3 align="center">FECHA DE NACIMIENTO:</h3>
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
  <p align="center">&nbsp;</p>
  <p align="center">Imagen:
    <label for="checkbox"></label>
    <label for="checkbox"></label>
  </p>
  <p align="center">
    <input type= "file" name= "image">
    <br>
    <input type= "submit" name ="submit" value ="Subir Estudiante"onclick="/alumnos/Mostrar.php"></p></form>
    
    
<?php

if(isset($_POST['submit']))
{
	mysql_connect("mysql13.000webhost.com","a1928538_dbschl","1521aHg");
	mysql_select_db("a1928538_dbschl");
	$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
	$txnombres= ($_POST['txNombres']);
	$txapellidos= ($_POST['txApellidos']);
	$dia= ($_POST['lsDia']);
   $mes = ($_POST['lsMes']);
   $ano =($_POST['lsAno']);
   $direccion=($_POST['Direccion']);
   $Telefono =($_POST['Telefono']);
   $celular =($_POST['TCelular']);
     $correo = ($_POST['txCorreo']);
       $sexo = ($_POST['lsTipo']);
      $pais = ($_POST['Pais']);
    $cedula = ($_POST['txCedula']);
	$ciudad =  ($_POST['txCiudad']);

if(substr($imageType,0,5) == "image")
{
  mysql_query("INSERT INTO estudiantes (Estudiante_names, Estudiantes_apellidos, ES_dia, ES_mes, ES_anio, direccion, telefono, celular, email, sexo, nacionalidad, Cedula, Fotos_idphoto, Ciudad) VALUES ('$txnombres',
  '$txapellidos','$dia','$mes','$ano','$direccion','$Telefono','$celular','$correo','$sexo','$pais','$cedula','$imageData','$ciudad')");
   echo "Codigo Funcionando" ;
   
   $insertGoTo= "/Alumnos/Mostrar.php";
  if(isset($_SERVER['QUERY_STRING']))
  {
	  $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
	  $insertGoTo .=$_SERVER['QUERY_STRING'];
		  }
		  header(sprintf("Location: %s", $insertGoTo));
}
else 
{
 	echo "Solo Imagenes estan permitidas";
}


}
?>
 
 <div id="footer">
  <p> Copyright Softeasy unt&copy; - 2015</p>
  </div>

</div>
</body>
</html>