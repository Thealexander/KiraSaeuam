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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	$tipo_prod = $_POST['lsTipo'];

//Guardar imagen
if(is_uploaded_file($_FILES['fleImagen']['tmp_name'])) { // verifica haya sido cargado el archivo
$ruta ="images/$tipo_prod/".$_FILES['fleImagen']['name'];
move_uploaded_file($_FILES['fleImagen']['tmp_name'], $ruta);
}
  $insertSQL = sprintf("INSERT INTO estudiante (ESnombre, ESapellido, lsttipo, ESciudad, ESpais, ESfechadia, ESfechames, ESfechaano, ESEmergencia, Cedula, Telefono, Imagen, Activo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['txNombres'], "text"),
                       GetSQLValueString($_POST['txCorreo'], "text"),
                       GetSQLValueString($_POST['lsTipo'], "text"),
                       GetSQLValueString($_POST['txCiudad'], "text"),
                       GetSQLValueString($_POST['Pais'], "text"),
                       GetSQLValueString($_POST['lsDia'], "text"),
                       GetSQLValueString($_POST['lsMes'], "text"),
                       GetSQLValueString($_POST['lsAno'], "text"),
                       GetSQLValueString($_POST['TelEmergencia'], "int"),
                       GetSQLValueString($_POST['txCedula'], "int"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($ruta, "text"),
                       GetSQLValueString(isset($_POST["checkbox"]) ? "true" : "", "defined","1","0"));

  mysql_select_db($database_escuela, $escuela);
  $Result1 = mysql_query($insertSQL, $escuela) or die(mysql_error());

  $insertGoTo = "TabladeEstudiante.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<html>
<head>
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
<title>Registro Estudiante</title>
<link href="css/style-normal.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="stylesmenu.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 align="center">&nbsp;</h1>
<h1 align="center">Registro de Estudiante</h1>
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
  <p align="center">Pais:</p>
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
  <p align="center">Tipo:</p>
  <p align="center">
    <label for="lsTipo"></label>
    <select name="lsTipo" id="lsTipo">
      <option>Hombre</option>
      <option>Mujer</option>
    </select>
  </p>
  <p align="center">Imagen:</p>
  <p align="center">
    <label for="fleImagen"></label>
    <input type="file" name="fleImagen" id="fleImagen" />
  </p>
  <p align="center">Telefono:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="Telefono" id="Telefono" />
  </p>
  <p align="center">Telefono Emergencia:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="TelEmergencia" id="Telemergencia" />
  </p>
  <p align="center">Cedula:</p>
  <p align="center">
    <label for="textfield"></label>
    <input type="text" name="txCedula" id="txCedula" />
  </p>
  <h2 align="center">FECHA DE NACIMIENTO:</h2>
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
        <option value="1961"> 1961</option>
          <option value="1962"> 1962</option>
          <option value="1963"> 1963</option>
          <option value="1964"> 1964</option>
          <option value="1965"> 1965</option>
          <option value="1966"> 1966</option>
          <option value="1967"> 1967</option>
          <option value="1968"> 1968</option>
          <option value="1969"> 1969</option>
          <option value="1970"> 1970</option>
          <option value="1971"> 1971</option>
          <option value="1972"> 1972</option>
          <option value="1973"> 1973</option>
          <option value="1974"> 1974</option>
          <option value="1975"> 1975</option>
          <option value="1976"> 1976</option>
          <option value="1977"> 1977</option>
          <option value="1978"> 1978</option>
          <option value="1979"> 1979</option>
          <option value="1980"> 1980</option>
          <option value="1981"> 1981</option>
          <option value="1982"> 1982</option>
          <option value="1983"> 1983</option>
          <option value="1984"> 1984</option>
          <option value="1985"> 1985</option>
          <option value="1986"> 1986</option>
          <option value="1987"> 1987</option>
          <option value="1988"> 1988</option>
          <option value="1989"> 1989</option>
          <option value="1990"> 1990</option>
          <option value="1991"> 1991</option>
          <option value="1992"> 1992</option>
          <option value="1993"> 1993</option>
          <option value="1994"> 1994</option>
          <option value="1995"> 1995</option>
          <option value="1996"> 1996</option>
          <option value="1997"> 1997</option>
          <option value="1998"> 1998</option>
          <option value="1999"> 1999</option>
          <option value="2000"> 2000</option>
          <option value="2001"> 2001</option>
          <option value="2002"> 2002</option>
          <option value="2003"> 2003</option>
    </select>
  </p>
  
  <p align="center">Activo:</p>
  <p align="center">
    <input type="checkbox" name="checkbox" id="checkbox" />
    <label for="checkbox"></label>
    <label for="checkbox"></label>
  </p>
  <p align="center">
    <input type="submit" name="button" id="button" value="registrar" />
  </p>
  <p align="center">&nbsp;</p>
  <div align="center">
    <input type="hidden" name="MM_insert" value="form1" />
  </div>
</form>



</body>
</html>
