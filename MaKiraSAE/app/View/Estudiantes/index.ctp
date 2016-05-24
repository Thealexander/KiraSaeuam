<h2>Estudiantes</h2>
<?php 
echo $this->Html->link('Agregar ', array('controller' => 'estudiantes', 'action' => 'agregar' ));
echo $this->Html->link('Inscripcion', array('controller' => 'estudiantes', 'action' => 'inscribir' ));
?> 
 <table>
 <tr>
	<td>ID</td>
	<td>Foto</td>
	<td>Apellidos</td>
	<td>Nombres</td>
	<td>Nivel</td>
	<td>Celular</td>
	<td>Activo</td>
	<td>Opciones</td>	
	<td>Acciones</td>	
	<td>		</td>	
	<td>		</td>
	
 </tr>
 <?php foreach ($estudiantes as $estudiantes):?>
 <td>ID</td>
	<td> <?php echo $estudiantes['Estudiantes']['Id_Estudiantes']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Fotos_Id_photo']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Estudiantes_Apellidos']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Estudiantes_Nombres']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Nivel']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Celular']; ?> </td>
	<td> <?php echo $estudiantes['Estudiantes']['Activo']; ?> </td>
	<td> <?php echo $this->Html->Link('Detalles', array('controller' => 'estudiantes', 'action' => 'visualizar', $estudiantes['Estudiantes']['Id_Estudiantes'])); ?> </td>
	<td> <?php echo $this->Html->Link('Editar', array('controller' => 'estudiantes', 'action' => 'edicion', $estudiantes['Estudiantes']['Id_Estudiantes'])); ?> </td>
	<td> <?php echo $this->Html->Link('Inscribir', array('controller' => 'estudiantes', 'action' => 'inscribir', $estudiantes['Estudiantes']['Id_Estudiantes'])); ?> </td>
	<td> <?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $estudiantes['Estudiantes']['Id_Estudiantes']), array('confirm' =>'Eliminar a' .$estudiantes['Estudiantes']['Id_Estudiantes'].'?' ))?> </td>
	<?php endforeach; ?>
 </table>
