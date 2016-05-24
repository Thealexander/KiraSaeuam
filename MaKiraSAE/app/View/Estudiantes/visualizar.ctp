<h3>Detalles del Estudiantes <?php echo $estudiantes['Estudiantes']['Estudiantes_Nombres'] ['Estudiantes_Apellidos']?></h3>
echo $this->Html->link('Mostrar Estudiantes', array('controller' => 'estudiantes', 'action' => 'index' ));

 
<p><strong>Descuento(Beca): </strong> <?php echo $estudiantes['Estudiantes']['descuento']; ?> </p>

<p><strong>ID: </strong> <?php echo $estudiantes['Estudiantes']['Id_Estudiante']; ?> </p>
<p><strong>Activo: </strong> <?php echo $estudiantes['Estudiantes']['Activo']; ?> </p>
<p><strong>Nivel-Año: </strong> <?php echo $estudiantes['Estudiantes']['Niveles_Id_Niveles']; ?> </p>
<p><strong>Nacionalidad: </strong> <?php echo $estudiantes['Estudiantes']['Nacionalidad']; ?> </p>
<p><strong>Ciudad: </strong> <?php echo $estudiantes['Estudiantes']['Ciudad']; ?> </p>
<p><strong>Direccion: </strong> <?php echo $estudiantes['Estudiantes']['Direccion']; ?> </p>
<p><strong>Telefono: </strong> <?php echo $estudiantes['Estudiantes']['Telefono']; ?> </p>
<p><strong>Celular: </strong> <?php echo $estudiantes['Estudiantes']['Celular']; ?> </p>
<p><strong>Correo Electronico: </strong> <?php echo $estudiantes['Estudiantes']['email']; ?> </p>
<p><strong>Sexo: </strong> <?php echo $estudiantes['Estudiantes']['sexo']; ?> </p>
<p><strong>Genero: </strong> <?php echo $estudiantes['Estudiantes']['genero']; ?> </p>
<p><strong>Cedula: </strong> <?php echo $estudiantes['Estudiantes']['Cedula']; ?> </p>
<p><strong>Fecha de Nacimiento: </strong> <?php echo $estudiantes['Estudiantes']['Es_dia']['Es_mes']['Es_anio']; ?> </p>
<p><strong>Fecha de Registro: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiantes['Estudiantes']['Fecha_Registro']) ; ?> </p>
<p><strong>Fecha de Inscripción: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiantes['Estudiantes']['Fecha_Inscripcion']); ?> </p>
<p><strong>Fecha Ultima Modificacion: </strong> <?php echo $this->Time->format('d-m-Y; h:i A', $estudiantes['Estudiantes']['Fecha_Actualizacion']); ?> </p>

