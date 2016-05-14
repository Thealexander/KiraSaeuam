 <script language="javascript">

</script>
 <?php

include '../js/config.php';
// $d=$_POST['q'];
$q="";
$con=Conexion();
 $sql="SELECT * FROM `profesores` WHERE `Profesores_apellidos` LIKE '".$_POST["q"]."%'";
 $query=mysql_query($sql,$con);
 
		if(mysql_num_rows($query)==0)
	{
			echo 'No se encontro Resultado.';
			}
			else
			{
				echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <thead>
      <tr>
        <td >Identificaci&oacute;n</td>
        <td >Apellidos</td>
        <td >Nombres</td>
        <td > Telefono</td>
        <td >Cedula</td>
      </tr>
       </thead>';

	while($row_Recordsetpp = mysql_fetch_array($query))
		{
	echo '<tbody>
		 <tr>
		 <td>'.$row_Recordsetpp['idProfesores'].'</td>
		<td>'.$row_Recordsetpp['Profesores_apellidos'].'</td>
		 <td>'.$row_Recordsetpp['profesores_nombres'].'</td>
		<td>'.$row_Recordsetpp['telefono'].'</td>
		 <td>'.$row_Recordsetpp['Cedula'].'</td>
		 <td><span style="cursor:pointer;"><a href=./modificar.php?idProfesores='.$row_Recordsetpp['idProfesores'].'>Editar</a></span><br><span style="cursor:pointer;"><a href=./eliminar.php?idProfesores='.$row_Recordsetpp['idProfesores'].'>Eliminar</a></span></td>
		</tr>
		</tbody>';
			
		}
		echo '</table>';
	
			}

 
mysql_close($con);
?>
 