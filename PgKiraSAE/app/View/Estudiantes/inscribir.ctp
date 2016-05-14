<h3> Inscripcion de Estudiante</h3>


<p><strong>Foto: </strong> <?php echo $estudiante['Estudiante']['Id_Estudiante']; ?> </p>
<p><strong>Foto: </strong> <?php echo $estudiante['Estudiante']['Estudiante_Nombres']['Estudiantes_Apellidos']; ?> </p>
	

<p><?php print('Estudiante Activo:'); ?></p>	
<?php
echo $this ->Form->create('Estudiante');

	echo $this ->Form->end('Finalizar Inscripcion');	


?>