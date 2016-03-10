<?php

include '../js/config.php';
$con=Conexion();


// Recibimos la variable Cedula pasada mediante el metodo GET
// y depositamos el valor de esta en la variable llamada $Cedula
$eliminar="";
//$eliminar=$_GET['idEstudiantes'];
$query="SELECT `idClases` FROM `clases` WHERE  '".$_GET["idClases"]."=".$eliminar."'";
$result=mysql_query($query,$con) or die("Error: ".mysql_error());

// Verificamos con la consulta SELECT si existe un registro asociado al número
// recibido concretamos la consulta DELETE, sino avisamos que fué imposible realizarla

if(mysql_num_rows($result) > 0){
	$query="DELETE FROM `clases` WHERE `idClases` ='".$_GET["idClases"]."=".$eliminar."'";
	$result=mysql_query($query,$con) or die("Error: ".mysql_error());

header ("Location: ../paginas/ready.php");

}else{
	header ("Location: ../paginas/error.php");
}
// Cerramos la conexión
mysql_close($con);
 
?>