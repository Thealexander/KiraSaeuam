<h3> Inscripcion de Estudiantes</h3>


<p><strong>Foto: </strong> <?php echo $estudiantes['Estudiantes']['Id_Estudiantes']; ?> </p>
<p><strong>Foto: </strong> <?php echo $estudiantes['Estudiantes']['Estudiantes_Nombres']['Estudiantes_Apellidos']; ?> </p>
	

<p><?php print('Estudiantes Activo:'); ?></p>	
<?php
echo $this ->Form->create('Estudiantes');

	echo $this ->Form->end('Finalizar Inscripcion');	


?>
