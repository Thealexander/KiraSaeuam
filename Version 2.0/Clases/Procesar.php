 <script language="javascript">

</script>
 <?php

include '../js/config.php';
// $d=$_POST['q'];
$q="";
$con=Conexion();
 $sql="SELECT * FROM `clases` WHERE `Nombre_clase` LIKE '".$_POST["q"]."%'";
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
        <td >IdClase</td>
        <td >Nombre Clase</td>
        <td > IdProfesor</td>
      </tr>
       </thead>';

	while($row_Recordsetcc = mysql_fetch_array($query))
		{
	echo '<tbody>
		 <tr>
		 <td>'.$row_Recordsetcc['idClases'].'</td>
		<td>'.$row_Recordsetcc['Nombre_clase'].'</td>
		 <td>'.$row_Recordsetcc['idProfesores'].'</td>
		 <td><span style="cursor:pointer;"><a href=./modificar.php?idClases='.$row_Recordsetcc['idClases'].'>Editar</a></span><br><span style="cursor:pointer;"><a href=./eliminar.php?idClases='.$row_Recordsetcc['idClases'].'>Eliminar</a></span></td>
		</tr>
		</tbody>';
			
		}
		echo '</table>';
	
			}

 
mysql_close($con);
?>
 