 <script language="javascript">

</script>
 <?php

include '../js/config.php';
// $d=$_POST['q'];
$q="";
$con=Conexion();
 $sql="SELECT * FROM `estudiantes` WHERE `Estudiantes_apellidos` LIKE '".$_POST["q"]."%'";
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
        <td >Grado</td>
      </tr>
       </thead>';

	while($row_Recordset2 = mysql_fetch_array($query))
		{
	echo '<tbody>
		 <tr>
		 <td>'.$row_Recordset2['idEstudiantes'].'</td>
		<td>'.$row_Recordset2['Estudiantes_apellidos'].'</td>
		 <td>'.$row_Recordset2['Estudiante_names'].'</td>
		<td>'.$row_Recordset2['telefono'].'</td>
		 <td>'.$row_Recordset2['nivel'].'</td>
		 <td><span style="cursor:pointer;"><a href=./modificar.php?idEstudiantes='.$row_Recordset2['idEstudiantes'].'>Editar</a></span><br><span style="cursor:pointer;"><a href=./eliminar.php?idEstudiantes='.$row_Recordset2['idEstudiantes'].'>Eliminar</a></span></td>
		</tr>
		</tbody>';
			
		}
		echo '</table>';
	
			}

 
mysql_close($con);
?>
 