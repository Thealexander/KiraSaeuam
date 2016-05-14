<h3>Detalles del Estudiante <?php echo $estudiante['Estudiante']['Estudiante_Nombres'] ['Estudiantes_Apellidos']?></h3>
echo $this->Html->link('Mostrar Estudiantes', array('controller' => 'estudiantes', 'action' => 'index' ));

 
<p><strong>Descuento(Beca): </strong> <?php echo $estudiante['Estudiante']['descuento']; ?> </p>

<p><strong>ID: </strong> <?php echo $estudiante['Estudiante']['Id_Estudiante']; ?> </p>
<p><strong>Activo: </strong> <?php echo $estudiante['Estudiante']['Activo']; ?> </p>
<p><strong>Nivel-Año: </strong> <?php echo $estudiante['Estudiante']['Niveles_Id_Niveles']; ?> </p>
<p><strong>Nacionalidad: </strong> <?php echo $estudiante['Estudiante']['Nacionalidad']; ?> </p>
<p><strong>Ciudad: </strong> <?php echo $estudiante['Estudiante']['Ciudad']; ?> </p>
<p><strong>Direccion: </strong> <?php echo $estudiante['Estudiante']['Direccion']; ?> </p>
<p><strong>Telefono: </strong> <?php echo $estudiante['Estudiante']['Telefono']; ?> </p>
<p><strong>Celular: </strong> <?php echo $estudiante['Estudiante']['Celular']; ?> </p>
<p><strong>Correo Electronico: </strong> <?php echo $estudiante['Estudiante']['email']; ?> </p>
<p><strong>Sexo: </strong> <?php echo $estudiante['Estudiante']['sexo']; ?> </p>
<p><strong>Genero: </strong> <?php echo $estudiante['Estudiante']['genero']; ?> </p>
<p><strong>Cedula: </strong> <?php echo $estudiante['Estudiante']['Cedula']; ?> </p>
<p><strong>Fecha de Nacimiento: </strong> <?php echo $estudiante['Estudiante']['Es_dia']['Es_mes']['Es_anio']; ?> </p>
<p><strong>Fecha de Registro: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiante['Estudiante']['Fecha_Registro']) ; ?> </p>
<p><strong>Fecha de Inscripción: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiante['Estudiante']['Fecha_Inscripcion']); ?> </p>
<p><strong>Fecha Ultima Modificacion: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiante['Estudiante']['Fecha_Actualizacion']); ?> </p>

