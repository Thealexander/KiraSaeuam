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

mysql_select_db($database_escuela, $escuela);
$query_TablaProfesor = "SELECT * FROM profesor";
$TablaProfesor = mysql_query($query_TablaProfesor, $escuela) or die(mysql_error());
$row_TablaProfesor = mysql_fetch_assoc($TablaProfesor);
$totalRows_TablaProfesor = mysql_num_rows($TablaProfesor);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Profesor</title>
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
<p><a href="RegistroProfesor.php"><img src="add-icon.png" width="75" height="82">Anadir</a></p>
<table width="472%" border="1">
  <tr>
    <td>IDprofesor</td>
    <td>PRnombre</td>
    <td>PRapellido</td>
    <td>Correo</td>
    <td>lsttipo</td>
    <td>PRciudad</td>
    <td>PRpais</td>
    <td>PRfechadia</td>
    <td>PRfechames</td>
    <td>PRfechanano</td>
    <td>Imagen</td>
    <td>NivelEnsenanza</td>
    <td>PRemergencia</td>
    <td>Cedula</td>
    <td>Telefono</td>
    <td>Activo</td>
    <td>Actualizacion</td>
    <td>Opcion</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_TablaProfesor['IDprofesor']; ?></td>
      <td><?php echo $row_TablaProfesor['PRnombre']; ?></td>
      <td><?php echo $row_TablaProfesor['PRapellido']; ?></td>
      <td><?php echo $row_TablaProfesor['PRapellido']; ?></td>
      <td><?php echo $row_TablaProfesor['lsttipo']; ?></td>
      <td><?php echo $row_TablaProfesor['PRciudad']; ?></td>
      <td><?php echo $row_TablaProfesor['PRpais']; ?></td>
      <td><?php echo $row_TablaProfesor['PRfechadia']; ?></td>
      <td><?php echo $row_TablaProfesor['PRfechames']; ?></td>
      <td><?php echo $row_TablaProfesor['PRfechanano']; ?></td>
      <td><img src=<?php echo $row_TablaProfesor['Imagen']; ?>></td>
      <td><?php echo $row_TablaProfesor['NivelEnsenanza']; ?></td>
      <td><?php echo $row_TablaProfesor['PRemergencia']; ?></td>
      <td><?php echo $row_TablaProfesor['Cedula']; ?></td>
      <td><?php echo $row_TablaProfesor['Telefono']; ?></td>
      <td><?php echo $row_TablaProfesor['Activo']; ?></td>
      <td><?php echo $row_TablaProfesor['Actualizacion']; ?>" </td>
      <td><a href="EditarTablaprofesor.php?userid=<?php echo $row_TablaProfesor['IDprofesor']; ?>"><img src="Pencil-icon.png" width="77" height="73"></a><img src="Close-icon.png" width="71" height="60"></td>
    </tr>
    <?php } while ($row_TablaProfesor = mysql_fetch_assoc($TablaProfesor)); ?>
</table>
</body>
</html><?php
mysql_free_result($TablaProfesor);
?>
