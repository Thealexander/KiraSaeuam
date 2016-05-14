 


CREATE TABLE `accesos` (
  `Id_Accesos` int(11) NOT NULL,
  `Nombre_User` varchar(10) NOT NULL,
  `Password_User` varchar(12) NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Id_Personal` varchar(45) DEFAULT NULL,
  `Personal_Id_Personal` int(11) NOT NULL,
  `Personal_Cargos_Id_Cargos` int(11) NOT NULL
) ;

CREATE TABLE `aulas` (
  `IdAulas` int(11) NOT NULL,
  `Codigo_aula` varchar(30) NOT NULL,
  `Descripcion` varchar(75) DEFAULT NULL,
  `Edificios_Id_Edificios` int(11) NOT NULL
) ;

CREATE TABLE `cargos` (
  `Id_Cargos` int(11) NOT NULL,
  `Cargo` varchar(45) NOT NULL,
  `DescripcionCargo` varchar(45) NOT NULL
) ;

CREATE TABLE `clases` (
  `id_Clases` int(11) NOT NULL,
  `Nombre_Clase` varchar(45) NOT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Aulas_IdAulas` int(11) NOT NULL,
  `Aulas_Edificios_Id_Edificios` int(11) NOT NULL,
  `Profesores_Id_Profesores` int(11) NOT NULL,
  `Turnos_Id_Turnos` int(11) NOT NULL,
  `Departamentos_Id_Departamento` int(11) NOT NULL,
  `Niveles_Id_Niveles` int(11) NOT NULL
) ;

CREATE TABLE `cursos` (
  `Turnos_Id_Turnos` int(11) NOT NULL,
  `Clases_id_Clases` int(11) NOT NULL,
  `Clases_Aulas_IdAulas` int(11) NOT NULL,
  `Clases_Aulas_Edificios_Id_Edificios` int(11) NOT NULL,
  `Clases_Profesores_Id_Profesores` int(11) NOT NULL,
  `Clases_Turnos_Id_Turnos` int(11) NOT NULL,
  `Clases_Departamentos_Id_Departamento` int(11) NOT NULL,
  `Clases_Niveles_Id_Niveles` int(11) NOT NULL
) ;

CREATE TABLE `departamentos` (
  `Id_Departamento` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Descripcin` varchar(45) NOT NULL
) ;

CREATE TABLE `edificios` (
  `Id_Edificios` int(11) NOT NULL,
  `Codigo_Edificio` varchar(30) NOT NULL,
  `Descripcion` varchar(45) NOT NULL
) ;

CREATE TABLE `estudiantes` (
  `Id_Estudiantes` int(11) NOT NULL,
  `Estudiante_Nombres` varchar(70) NOT NULL,
  `Estudiantes_Apellidos` varchar(70) NOT NULL,
  `Es_dia` varchar(2) NOT NULL,
  `Es_mes` varchar(2) NOT NULL,
  `Es_anio` varchar(2) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Celular` varchar(8) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `Nivel` varchar(8) NOT NULL,
  `Notas` int(11) DEFAULT NULL,
  `Nacionalidad` varchar(45) NOT NULL,
  `Cedula` varchar(45) DEFAULT NULL,
  `Activo` tinyint(1) NOT NULL,
  `Fotos_Id_photo` int(11) DEFAULT NULL,
  `Ciudad` varchar(45) DEFAULT NULL,
  `Fecha_Inscripcion` datetime DEFAULT NULL,
  `Fecha_Actualizacion` timestamp NULL DEFAULT NULL,
  `Fecha_Registro` timestamp NULL DEFAULT NULL,
  `descuento` double DEFAULT NULL
) ;

CREATE TABLE `niveles` (
  `Id_Niveles` int(11) NOT NULL,
  `Nombre_Nivel` varchar(45) NOT NULL
) ;

CREATE TABLE `notas` (
  `Primer_Parcial` double DEFAULT NULL,
  `segundo_Parcial` double DEFAULT NULL,
  `Nota_Final` double DEFAULT NULL,
  `Semestre` varchar(45) DEFAULT NULL,
  `Anio` int(10) DEFAULT NULL,
  `Estudiantes_Id_Estudiantes` int(11) NOT NULL,
  `Clases_id_Clases` int(11) NOT NULL,
  `Clases_Aulas_IdAulas` int(11) NOT NULL,
  `Clases_Aulas_Edificios_Id_Edificios` int(11) NOT NULL,
  `Clases_Profesores_Id_Profesores` int(11) NOT NULL,
  `Clases_Turnos_Id_Turnos` int(11) NOT NULL,
  `Clases_Departamentos_Id_Departamento` int(11) NOT NULL,
  `Clases_Niveles_Id_Niveles` int(11) NOT NULL
) ;

CREATE TABLE `personal` (
  `Id_Personal` int(11) NOT NULL,
  `Personal_Nombres` varchar(50) NOT NULL,
  `Personal_Apellidos` varchar(50) NOT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Celular` varchar(8) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Fecha_Modificacion` timestamp NULL DEFAULT NULL,
  `Cargos_Id_Cargos` int(11) NOT NULL,
  `Salario` double DEFAULT NULL
) ;

CREATE TABLE `profesores` (
  `Salario` float NOT NULL,
  `Departamentos_Id_Departamento` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Personal_Id_Personal` int(11) NOT NULL
) ;

CREATE TABLE `transacestudiantes` (
  `Id_TransacEstudiantes` int(11) NOT NULL,
  `Fecha_Transaccion` timestamp NOT NULL,
  `CantidadTOtal` double NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Estudiantes_Id_Estudiantes` int(11) NOT NULL,
  `Tutores_Id_tutores` int(11) NOT NULL,
  `Personal_Id_Personal` int(11) NOT NULL,
  `Personal_Cargos_Id_Cargos` int(11) NOT NULL
) ;

CREATE TABLE `turnos` (
  `Id_Turnos` int(11) NOT NULL,
  `Turno` varchar(45) NOT NULL
) ;

CREATE TABLE `tutores` (
  `Id_tutores` int(11) NOT NULL,
  `Nombres_Mama` varchar(50) NOT NULL,
  `Nombres_Papa` varchar(50) NOT NULL,
  `Apellidos_Mama` varchar(50) NOT NULL,
  `Apellidos_Papa` varchar(50) NOT NULL,
  `Telefono_Ella` varchar(8) DEFAULT NULL,
  `Telefono_El` varchar(8) DEFAULT NULL,
  `Celular_Ella` varchar(8) NOT NULL,
  `Celular_El` varchar(8) DEFAULT NULL,
  `Direccion_Ella` varchar(80) NOT NULL,
  `Direccion_El` varchar(45) DEFAULT NULL,
  `email_ella` varchar(45) DEFAULT NULL,
  `email_el` varchar(45) DEFAULT NULL,
  `Monto A Pagar` double NOT NULL,
  `Estudiantes_Id_Estudiantes1` int(11) NOT NULL,
  `Cedula_ella` varchar(14) NOT NULL,
  `Cedula_el` varchar(14) NOT NULL
) ;


ALTER TABLE `accesos`
  ADD PRIMARY KEY (`Id_Accesos`,`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`),
  ADD KEY `fk_Accesos_Personal1_idx` (`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`);

ALTER TABLE `aulas`
  ADD PRIMARY KEY (`IdAulas`,`Edificios_Id_Edificios`),
  ADD KEY `fk_Aulas_Edificios_idx` (`Edificios_Id_Edificios`);

ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id_Cargos`);

ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_Clases`,`Aulas_IdAulas`,`Aulas_Edificios_Id_Edificios`,`Profesores_Id_Profesores`,`Turnos_Id_Turnos`,`Departamentos_Id_Departamento`,`Niveles_Id_Niveles`),
  ADD KEY `fk_Clases_Aulas1_idx` (`Aulas_IdAulas`,`Aulas_Edificios_Id_Edificios`),
  ADD KEY `fk_Clases_Turnos1_idx` (`Turnos_Id_Turnos`),
  ADD KEY `fk_Clases_Departamentos1_idx` (`Departamentos_Id_Departamento`),
  ADD KEY `fk_Clases_Niveles1_idx` (`Niveles_Id_Niveles`);

ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Turnos_Id_Turnos`,`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`),
  ADD KEY `fk_Cursos_Clases1_idx` (`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`);

ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Id_Departamento`);

ALTER TABLE `edificios`
  ADD PRIMARY KEY (`Id_Edificios`);

ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`Id_Estudiantes`);

ALTER TABLE `niveles`
  ADD PRIMARY KEY (`Id_Niveles`);

ALTER TABLE `notas`
  ADD PRIMARY KEY (`Estudiantes_Id_Estudiantes`,`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`),
  ADD KEY `fk_Notas_Clases1_idx` (`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`);

ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id_Personal`,`Cargos_Id_Cargos`),
  ADD KEY `fk_Personal_Cargos1_idx` (`Cargos_Id_Cargos`);

ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Departamentos_Id_Departamento`,`Personal_Id_Personal`),
  ADD KEY `fk_Profesores_Departamentos1_idx` (`Departamentos_Id_Departamento`),
  ADD KEY `fk_Profesores_Personal1_idx` (`Personal_Id_Personal`);

ALTER TABLE `transacestudiantes`
  ADD PRIMARY KEY (`Id_TransacEstudiantes`,`Estudiantes_Id_Estudiantes`,`Tutores_Id_tutores`,`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`),
  ADD KEY `fk_TransacEstudiantes_Estudiantes1_idx` (`Estudiantes_Id_Estudiantes`),
  ADD KEY `fk_TransacEstudiantes_Tutores1_idx` (`Tutores_Id_tutores`),
  ADD KEY `fk_TransacEstudiantes_Personal1_idx` (`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`);

ALTER TABLE `turnos`
  ADD PRIMARY KEY (`Id_Turnos`);

ALTER TABLE `tutores`
  ADD PRIMARY KEY (`Id_tutores`,`Estudiantes_Id_Estudiantes1`),
  ADD KEY `fk_Tutores_Estudiantes1_idx` (`Estudiantes_Id_Estudiantes1`);


ALTER TABLE `accesos`
  MODIFY `Id_Accesos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `aulas`
  MODIFY `IdAulas` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `cargos`
  MODIFY `Id_Cargos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `clases`
  MODIFY `id_Clases` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `departamentos`
  MODIFY `Id_Departamento` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `edificios`
  MODIFY `Id_Edificios` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `estudiantes`
  MODIFY `Id_Estudiantes` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `niveles`
  MODIFY `Id_Niveles` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `personal`
  MODIFY `Id_Personal` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `transacestudiantes`
  MODIFY `Id_TransacEstudiantes` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `turnos`
  MODIFY `Id_Turnos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tutores`
  MODIFY `Id_tutores` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `accesos`
  ADD CONSTRAINT `fk_Accesos_Personal1` FOREIGN KEY (`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`) REFERENCES `personal` (`Id_Personal`, `Cargos_Id_Cargos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `aulas`
  ADD CONSTRAINT `fk_Aulas_Edificios` FOREIGN KEY (`Edificios_Id_Edificios`) REFERENCES `edificios` (`Id_Edificios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `clases`
  ADD CONSTRAINT `fk_Clases_Aulas1` FOREIGN KEY (`Aulas_IdAulas`,`Aulas_Edificios_Id_Edificios`) REFERENCES `aulas` (`IdAulas`, `Edificios_Id_Edificios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clases_Departamentos1` FOREIGN KEY (`Departamentos_Id_Departamento`) REFERENCES `departamentos` (`Id_Departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clases_Niveles1` FOREIGN KEY (`Niveles_Id_Niveles`) REFERENCES `niveles` (`Id_Niveles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clases_Turnos1` FOREIGN KEY (`Turnos_Id_Turnos`) REFERENCES `turnos` (`Id_Turnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_Cursos_Clases1` FOREIGN KEY (`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`) REFERENCES `clases` (`id_Clases`, `Aulas_IdAulas`, `Aulas_Edificios_Id_Edificios`, `Profesores_Id_Profesores`, `Turnos_Id_Turnos`, `Departamentos_Id_Departamento`, `Niveles_Id_Niveles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cursos_Turnos1` FOREIGN KEY (`Turnos_Id_Turnos`) REFERENCES `turnos` (`Id_Turnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `notas`
  ADD CONSTRAINT `fk_Notas_Clases1` FOREIGN KEY (`Clases_id_Clases`,`Clases_Aulas_IdAulas`,`Clases_Aulas_Edificios_Id_Edificios`,`Clases_Profesores_Id_Profesores`,`Clases_Turnos_Id_Turnos`,`Clases_Departamentos_Id_Departamento`,`Clases_Niveles_Id_Niveles`) REFERENCES `clases` (`id_Clases`, `Aulas_IdAulas`, `Aulas_Edificios_Id_Edificios`, `Profesores_Id_Profesores`, `Turnos_Id_Turnos`, `Departamentos_Id_Departamento`, `Niveles_Id_Niveles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Notas_Estudiantes1` FOREIGN KEY (`Estudiantes_Id_Estudiantes`) REFERENCES `estudiantes` (`Id_Estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `personal`
  ADD CONSTRAINT `fk_Personal_Cargos1` FOREIGN KEY (`Cargos_Id_Cargos`) REFERENCES `cargos` (`Id_Cargos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `profesores`
  ADD CONSTRAINT `fk_Profesores_Departamentos1` FOREIGN KEY (`Departamentos_Id_Departamento`) REFERENCES `departamentos` (`Id_Departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Profesores_Personal1` FOREIGN KEY (`Personal_Id_Personal`) REFERENCES `personal` (`Id_Personal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `transacestudiantes`
  ADD CONSTRAINT `fk_TransacEstudiantes_Estudiantes1` FOREIGN KEY (`Estudiantes_Id_Estudiantes`) REFERENCES `estudiantes` (`Id_Estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TransacEstudiantes_Personal1` FOREIGN KEY (`Personal_Id_Personal`,`Personal_Cargos_Id_Cargos`) REFERENCES `personal` (`Id_Personal`, `Cargos_Id_Cargos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TransacEstudiantes_Tutores1` FOREIGN KEY (`Tutores_Id_tutores`) REFERENCES `tutores` (`Id_tutores`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `tutores`
  ADD CONSTRAINT `fk_Tutores_Estudiantes1` FOREIGN KEY (`Estudiantes_Id_Estudiantes1`) REFERENCES `estudiantes` (`Id_Estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;
 