<?php require_once('/Connections/base_datos.php'); ?>
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

//Guardar imagen
if(is_uploaded_file($_FILES['FileImagen']['tmp_name'])) { // verifica haya sido cargado el archivo
$ruta ="images/$tipo_prod/".$_FILES['FileImagen']['name'];
move_uploaded_file($_FILES['FileImagen']['tmp_name'], $ruta);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "Form1")) {
  $insertSQL = sprintf("INSERT INTO estudiantes (Estudiante_names, Estudiantes_apellidos, direccion, telefono, celular, email, sexo, fechanac_estudiante, fechainscrp_estudiante, nacionalidad, Cedula, Fotos_idphoto, Ciudad) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nombres_alumno'], "text"),
                       GetSQLValueString($_POST['Apellidos_alumno'], "text"),
                       GetSQLValueString($_POST['Direccion_alumno'], "text"),
                       GetSQLValueString($_POST['telefono_alumno'], "text"),
                       GetSQLValueString($_POST['celular_alumno'], "text"),
                       GetSQLValueString($_POST['ecorreo_alumno'], "text"),
                       GetSQLValueString($_POST['Sexo'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "date"),
                       GetSQLValueString($_POST['fecha_registro'], "date"),
                       GetSQLValueString($_POST['Pais'], "text"),
                       GetSQLValueString($_POST['Cedula'], "text"),
					  GetSQLValueString($ruta, "text"),
					   GetSQLValueString($_POST['Ciudad_alumno'], "text"));

  mysql_select_db($database_base_datos, $base_datos);
  $Result1 = mysql_query($insertSQL, $base_datos) or die(mysql_error());

  $insertGoTo = "../paginas/operacion Completada.php";
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
<title>Registro de Nuevo Alumno</title>
<style type="text/css">
.Titulo {
	text-align: center;
}
.titulo1 {
	font-size: 24px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>

<body>

<table width="131%" border="0">
  <tr>
    <td width="8%" rowspan="2">&nbsp;</td>
    <td width="59%" colspan="2" class="Titulo"> <p align="center> <span class="titulo1" >"Registro de Nuevo Alumno" </span></p></td>
  </tr>
  <tr>
    <td height="352" colspan="2">
    <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="Form1">
    <p>  <span id="sprytextfield1">
      <label for="Nombres_alumno">Nombres del Alumno: </label>
      <input type="text" name="Nombres_alumno" id="Nombres_alumno" required/>
      <span class="textfieldRequiredMsg"></span></span>
  	 </p>
     <p> <span id="sprytextfield2">
  	  <label for="Apellidos_alumno">Apellidos del Alumno:</label>
  	  <input type="text" name="Apellidos_alumno" id="Apellidos_alumno" required />
  	  <span class="textfieldRequiredMsg"> </span></span>
      </p>
      <p> <span id="sprytextfield3">
      <label for="fecha_nacimiento">fecha de Nacimiento: </label>
      <input type="text" name="fecha_nacimiento" id="fecha_nacimiento"required />
      <span class="textfieldRequiredMsg"> </span><span class="textfieldInvalidFormatMsg"> .</span></span></p>
  
      <span id="sprytextfield11">
      <label for="Cedula_alumno">Cedula:</label>
      <input type="text" name="Cedula_alumno" id="Cedula_alumno" />
      <span class="textfieldRequiredMsg">opcional.</span></span>
      <p><span id="sprytextfield4">
        <label for="Ciudad_alumno">Ciudad Actual: </label>
        <input type="text" name="Ciudad_alumno" id="Ciudad_alumno" required/>
      </span></p>
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
      <p>&nbsp;</p>
      <p> <span id="sprytextfield6">
        <label for="Direccion_alumno">Direccion de habitacion:</label>
        <input type="text" name="Direccion_alumno" id="Direccion_alumno" required/>
        <span class="textfieldRequiredMsg"></span></span></p>
      <p><span id="sprytextfield7">
      <label for="ecorreo_alumno">Correo electronico:</label>
      <input type="text" name="ecorreo_alumno" id="ecorreo_alumno" />
      <span class="textfieldRequiredMsg"></span><span class="textfieldInvalidFormatMsg">Opcional.</span></span></p>
      <p><span id="sprytextfield8">
      <label for="telefono_alumno">Telefono:</label>
      <input type="text" name="telefono_alumno" id="telefono_alumno" />
      <span class="textfieldRequiredMsg"> </span><span class="textfieldInvalidFormatMsg"> </span></span></p>
      <p><span id="sprytextfield9">
      <label for="celular_alumno">Celular: </label>
      <input type="text" name="celular_alumno" id="celular_alumno" required/>
      <span class="textfieldRequiredMsg"> </span><span class="textfieldInvalidFormatMsg"> </span></span></p>
      <p><span id="sprytextfield10">
      <label for="fecha_registro">Fecha de registro: </label>
      <input type="text" name="fecha_registro" id="fecha_registro" required/>
      <span class="textfieldRequiredMsg"></span><span class="textfieldInvalidFormatMsg"> </span></span></p>
      <p>
      <label for="Sexo">Sexo: </label>
      <select name="Sexo" id="Sexo"><option>Seleccionar...</option>
      <option>M</option> <option>F </option>
      </select>
      </p>
      <p>
      <label for="FileImagen">Imagen: </label>
      <input type="file" name="FileImagen" id="FileImagen" />
      </p>
      <p>Activo:
      <input type="checkbox" name="checkbox" id="checkbox" /> 
      <label for="checkbox"></label>
      <label for="checkbox"></label>
      </p>
      <p align="center">
      <input type="submit" name="button" id="button" value="Registrar" />
      </p> 
      <p align="center">&nbsp;</p>
      <input type="hidden" name="MM_insert" value="Form1" />
<div align="center">
    
    </form></td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "date", {hint:"mm/dd/aa"});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "email", {hint:"usuario@servidor.com"});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"2000-0000", hint:"xxxx-xxxx"});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "phone_number", {format:"phone_custom", pattern:"8000-0000", hint:"xxxx-xxxx"});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "date", {hint:"mm/dd/aa"});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {hint:"XXX-XXXX-XXXN"});
</script>
</body>
</html>