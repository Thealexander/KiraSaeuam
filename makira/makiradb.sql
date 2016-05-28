SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `accesos` (
  `Id_Accesos` int(11) NOT NULL,
  `Nombre_User` varchar(35) NOT NULL,
  `Password_User` varchar(15) NOT NULL,
  `Personal_Id_Personal` int(11) DEFAULT NULL,
  `Activo` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `aulas` (
  `Id_Aulas` int(11) NOT NULL,
  `Codigo_Aula` varchar(30) NOT NULL,
  `Descripcion` varchar(15) DEFAULT NULL,
  `Edificios_Id_Edificios` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `cargos` (
  `Id_Cargos` int(11) NOT NULL,
  `Cargo` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `carreras` (
  `IdCarrera` int(11) NOT NULL,
  `Nombre_Carrera` varchar(100) NOT NULL,
  `Id_Facultad` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Duracion` double NOT NULL,
  `Id_ConjuntoClases` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `clases` (
  `Id_Clases` int(11) NOT NULL,
  `Nombre_Clase` varchar(100) NOT NULL,
  `Creditos` int(9) NOT NULL,
  `Activo` tinyint(4) NOT NULL,
  `Aulas_Id_Aulas` int(11) DEFAULT NULL,
  `Profesores_Id_Profesores` int(11) DEFAULT NULL,
  `Turno_Id_Turnos` int(11) DEFAULT NULL,
  `Departamentos_Id_Depertamentos` int(11) DEFAULT NULL,
  `Niveles_Id_Niveles` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

CREATE TABLE `cursos` (
  `Turnos_Id_Turnos` int(11) NOT NULL,
  `Clases_Id_Clases` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `departamentos` (
  `Id_Departamento` int(11) NOT NULL,
  `Departamento_Nombre` varchar(45) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `edificios` (
  `Id_Edificios` int(11) NOT NULL,
  `Codigo_Edificio` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `estudiantes` (
  `Id_Estudiantes` int(11) NOT NULL,
  `Estudiantes_Nombres` varchar(60) NOT NULL,
  `Estudiantes_Apellidos` varchar(60) NOT NULL,
  `Fecha_nacimiento` datetime DEFAULT NULL,
  `Fecha_registro` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Fecha_actualizacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Fecha_inscripcion` time DEFAULT NULL,
  `Nivel-anio` int(11) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Celular` varchar(8) NOT NULL,
  `Notas` int(11) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `nacionalidad` varchar(35) NOT NULL,
  `Cedula` varchar(15) DEFAULT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Departamento` varchar(45) NOT NULL,
  `Fotos_Id_Photo` int(11) NOT NULL,
  `decuento` double NOT NULL,
  `Tutores_Id_Tutores` int(11) DEFAULT NULL,
  `Monto_a_pagar` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

CREATE TABLE `niveles` (
  `Id_Niveles` int(11) NOT NULL,
  `Nombre_Nivel` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `notas` (
  `Primer_Parcial` double DEFAULT NULL,
  `Segundo_Parcial` double DEFAULT NULL,
  `Nota_Final` double DEFAULT NULL,
  `Periodo_Id_Periodo` int(11) DEFAULT NULL,
  `Estudiantes_Id_Estudiantes` int(11) DEFAULT NULL,
  `Clases_Id_Clases` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `periodos` (
  `Id_Periodo` int(11) NOT NULL,
  `NumerodePeriodo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `personal` (
  `Id_Personal` int(11) NOT NULL,
  `Personal_Nombre` varchar(60) NOT NULL,
  `Personal_Apellidos` varchar(60) NOT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Celular` varchar(8) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha_nacimiento` datetime DEFAULT NULL,
  `Fecha_registro` datetime DEFAULT NULL,
  `Fecha_modificacion` datetime DEFAULT NULL,
  `Salario` double NOT NULL,
  `Cargos_Id_Cargos` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `profesores` (
  `Personal_Id_Personal` int(11) NOT NULL,
  `Departamentos_Id_Departamentos` int(11) DEFAULT NULL,
  `Fotos_Id_photo` varchar(255) DEFAULT NULL,
  `documento_vitae` varchar(255) DEFAULT NULL,
  `Clases_Id_Clases` int(11) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `transacestudiantes` (
  `Id_TransacEstudiantes` int(11) NOT NULL,
  `Fecha_Tracsaciones` time DEFAULT NULL,
  `Cantidad_Total` double NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Estudiantes_Id_Estudiantes` int(11) DEFAULT NULL,
  `Tutores_Id_Tutores` int(11) DEFAULT NULL,
  `Personal_IdPersonal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `turnos` (
  `Id_Turnos` int(11) NOT NULL,
  `Turno` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `tutores` (
  `Id_tutores` int(11) NOT NULL,
  `Nombres_Tutor1` varchar(60) NOT NULL,
  `Nombres_Tutor2` varchar(60) NOT NULL,
  `Nombres_Tutor3` varchar(60) DEFAULT NULL,
  `Apellidos_Tutor1` varchar(60) NOT NULL,
  `Apellidos_Tutor2` varchar(60) DEFAULT NULL,
  `Apellidos_Tutor3` varchar(60) DEFAULT NULL,
  `Telefono` varchar(8) DEFAULT NULL,
  `Celular_Opcion1` varchar(8) NOT NULL,
  `Celuar_opcion2` varchar(8) DEFAULT NULL,
  `Direccion` varchar(100) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `Cedula_Tutor1` varchar(15) NOT NULL,
  `Cedula_Tutor2` varchar(15) DEFAULT NULL,
  `Cedula_Tutor3` varchar(15) DEFAULT NULL,
  `Estudiantes_Id_Estudiantes` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `accesos`
  ADD PRIMARY KEY (`Id_Accesos`);

ALTER TABLE `aulas`
  ADD PRIMARY KEY (`Id_Aulas`);

ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id_Cargos`);

ALTER TABLE `carreras`
  ADD PRIMARY KEY (`IdCarrera`);

ALTER TABLE `clases`
  ADD PRIMARY KEY (`Id_Clases`);

ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Turnos_Id_Turnos`);

ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Id_Departamento`);

ALTER TABLE `edificios`
  ADD PRIMARY KEY (`Id_Edificios`);

ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`Id_Estudiantes`);

ALTER TABLE `niveles`
  ADD PRIMARY KEY (`Id_Niveles`);

ALTER TABLE `periodos`
  ADD PRIMARY KEY (`Id_Periodo`);

ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id_Personal`);

ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Personal_Id_Personal`);

ALTER TABLE `transacestudiantes`
  ADD PRIMARY KEY (`Id_TransacEstudiantes`);

ALTER TABLE `turnos`
  ADD PRIMARY KEY (`Id_Turnos`);

ALTER TABLE `tutores`
  ADD PRIMARY KEY (`Id_tutores`);


ALTER TABLE `accesos`
  MODIFY `Id_Accesos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `aulas`
  MODIFY `Id_Aulas` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `cargos`
  MODIFY `Id_Cargos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `carreras`
  MODIFY `IdCarrera` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `clases`
  MODIFY `Id_Clases` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `departamentos`
  MODIFY `Id_Departamento` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `edificios`
  MODIFY `Id_Edificios` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `estudiantes`
  MODIFY `Id_Estudiantes` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `niveles`
  MODIFY `Id_Niveles` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `periodos`
  MODIFY `Id_Periodo` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `personal`
  MODIFY `Id_Personal` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `profesores`
  MODIFY `Personal_Id_Personal` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `transacestudiantes`
  MODIFY `Id_TransacEstudiantes` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `turnos`
  MODIFY `Id_Turnos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tutores`
  MODIFY `Id_tutores` int(11) NOT NULL AUTO_INCREMENT;SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
