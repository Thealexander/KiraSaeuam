/*
Navicat PGSQL Data Transfer

Source Server         : PgKiraSAE
Source Server Version : 90501
Source Host           : localhost:5432
Source Database       : pgkiradb
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90501
File Encoding         : 65001

Date: 2016-05-26 22:20:20
*/


-- ----------------------------
-- Table structure for accesos
-- ----------------------------
DROP TABLE IF EXISTS "public"."accesos";
CREATE TABLE "public"."accesos" (
"Id_accesos" int4 NOT NULL,
"Nombre_User" varchar(35) COLLATE "default" NOT NULL,
"Password_User" varchar(35) COLLATE "default",
"Personal_Id_Personal" int4,
"Activo" int2 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for aulas
-- ----------------------------
DROP TABLE IF EXISTS "public"."aulas";
CREATE TABLE "public"."aulas" (
"Id_aulas" int4 NOT NULL,
"Codigo_aula" varchar(35) COLLATE "default" NOT NULL,
"Descripcion" varchar(100) COLLATE "default",
"Edificio_Id_Edificios" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for cargos
-- ----------------------------
DROP TABLE IF EXISTS "public"."cargos";
CREATE TABLE "public"."cargos" (
"Id_Cargos" int4 NOT NULL,
"Cargo" varchar(45) COLLATE "default" NOT NULL,
"Descripcion" varchar(100) COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for carreras
-- ----------------------------
DROP TABLE IF EXISTS "public"."carreras";
CREATE TABLE "public"."carreras" (
"Id_Carreras" int4 NOT NULL,
"Nombre_Carrera" varchar(100) COLLATE "default" NOT NULL,
"Facultad_Id_Facultad" int4 NOT NULL,
"Descripcion" varchar(100) COLLATE "default",
"Duracion" float4 NOT NULL,
"ConjuntodeClases_Id_ConjuntoClases" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for clases
-- ----------------------------
DROP TABLE IF EXISTS "public"."clases";
CREATE TABLE "public"."clases" (
"Id_clases" int4 NOT NULL,
"Nombre_Clases" varchar(100) COLLATE "default" NOT NULL,
"Activo" int2 NOT NULL,
"Creditos" int4 NOT NULL,
"Aulas_Id_Aulas" int4,
"Profesores_Id_Profesores" int4,
"Turnos_Id_turnos" int4,
"Departamentos_Id_departamentos" int4,
"Niveles_Id_niveles" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS "public"."cursos";
CREATE TABLE "public"."cursos" (
"Turnos_Id_Turnos" int4,
"Clases_Id_Clases" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for departamentos
-- ----------------------------
DROP TABLE IF EXISTS "public"."departamentos";
CREATE TABLE "public"."departamentos" (
"Id_departamentos" int4 NOT NULL,
"Nombre_Departamento" varchar(45) COLLATE "default" NOT NULL,
"Descripcion" varchar(100) COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for edificios
-- ----------------------------
DROP TABLE IF EXISTS "public"."edificios";
CREATE TABLE "public"."edificios" (
"Id_Edificios" int4 NOT NULL,
"codigo_edificio" varchar(30) COLLATE "default" NOT NULL,
"Descripcion" varchar(100) COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for estudiantes
-- ----------------------------
DROP TABLE IF EXISTS "public"."estudiantes";
CREATE TABLE "public"."estudiantes" (
"Id_Estudiantes" int4 NOT NULL,
"Estudiantes_Nombres" varchar(60) COLLATE "default" NOT NULL,
"Estudiantes_Apellidos" varchar(60) COLLATE "default" NOT NULL,
"Fecha_nacimiento" timestamp(6),
"Fecha_registro" timestamp(6),
"Fecha_actualizacion" timestamp(6),
"Nivel-anio" varchar(8) COLLATE "default" NOT NULL,
"email" varchar(45) COLLATE "default",
"Direccion" varchar(100) COLLATE "default",
"Telefono" varchar(8) COLLATE "default",
"Celular" varchar(8) COLLATE "default" NOT NULL,
"Notas" int4,
"sexo" varchar(1) COLLATE "default" NOT NULL,
"genero" varchar(15) COLLATE "default" NOT NULL,
"nacionalidad" varchar(35) COLLATE "default" NOT NULL,
"Cedula" varchar(15) COLLATE "default",
"Ciudad" varchar(45) COLLATE "default" NOT NULL,
"Departamento" varchar(45) COLLATE "default",
"decuento" float4 NOT NULL,
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for facultades
-- ----------------------------
DROP TABLE IF EXISTS "public"."facultades";
CREATE TABLE "public"."facultades" (
"Id_Facultad" int4 NOT NULL,
"Nombre_Facultad" varchar(45) COLLATE "default" NOT NULL,
"Personal_Id_Personal" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for niveles
-- ----------------------------
DROP TABLE IF EXISTS "public"."niveles";
CREATE TABLE "public"."niveles" (
"Id_Niveles" int4 NOT NULL,
"Nombre_Nivel" varchar(45) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for notas
-- ----------------------------
DROP TABLE IF EXISTS "public"."notas";
CREATE TABLE "public"."notas" (
"Primer_Parcial" float4,
"Segundo_Parcial" float4,
"Nota_Final" float4,
"Periodos_Id_Periodo" int4,
"Estudiantes_Id_Estudiantes" int4,
"Clases_Id_Clases" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for periodo
-- ----------------------------
DROP TABLE IF EXISTS "public"."periodo";
CREATE TABLE "public"."periodo" (
"Id_Periodo" int4 NOT NULL,
"NumerodePeriodo" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS "public"."personal";
CREATE TABLE "public"."personal" (
"Id_Personal" int4 NOT NULL,
"Personal_Nombre" varchar(60) COLLATE "default" NOT NULL,
"Personal_Apellidos" varchar(60) COLLATE "default" NOT NULL,
"Telefono" varchar(8) COLLATE "default",
"Celular" varchar(8) COLLATE "default" NOT NULL,
"Email" varchar(35) COLLATE "default",
"Direccion" varchar(100) COLLATE "default" NOT NULL,
"Fecha_nacimiento" timestamp(6),
"Fecha_registro" timestamp(6),
"Fecha_modificacion" timestamp(6),
"Salario" float4 NOT NULL,
"Cargos_Id_Cargos" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table accesos
-- ----------------------------
ALTER TABLE "public"."accesos" ADD PRIMARY KEY ("Id_accesos");

-- ----------------------------
-- Primary Key structure for table aulas
-- ----------------------------
ALTER TABLE "public"."aulas" ADD PRIMARY KEY ("Id_aulas");

-- ----------------------------
-- Primary Key structure for table cargos
-- ----------------------------
ALTER TABLE "public"."cargos" ADD PRIMARY KEY ("Id_Cargos");

-- ----------------------------
-- Primary Key structure for table carreras
-- ----------------------------
ALTER TABLE "public"."carreras" ADD PRIMARY KEY ("Id_Carreras");

-- ----------------------------
-- Primary Key structure for table clases
-- ----------------------------
ALTER TABLE "public"."clases" ADD PRIMARY KEY ("Id_clases");

-- ----------------------------
-- Primary Key structure for table departamentos
-- ----------------------------
ALTER TABLE "public"."departamentos" ADD PRIMARY KEY ("Id_departamentos");

-- ----------------------------
-- Primary Key structure for table edificios
-- ----------------------------
ALTER TABLE "public"."edificios" ADD PRIMARY KEY ("Id_Edificios");

-- ----------------------------
-- Primary Key structure for table estudiantes
-- ----------------------------
ALTER TABLE "public"."estudiantes" ADD PRIMARY KEY ("Id_Estudiantes");

-- ----------------------------
-- Primary Key structure for table facultades
-- ----------------------------
ALTER TABLE "public"."facultades" ADD PRIMARY KEY ("Id_Facultad");

-- ----------------------------
-- Primary Key structure for table niveles
-- ----------------------------
ALTER TABLE "public"."niveles" ADD PRIMARY KEY ("Id_Niveles");

-- ----------------------------
-- Primary Key structure for table periodo
-- ----------------------------
ALTER TABLE "public"."periodo" ADD PRIMARY KEY ("Id_Periodo");

-- ----------------------------
-- Primary Key structure for table personal
-- ----------------------------
ALTER TABLE "public"."personal" ADD PRIMARY KEY ("Id_Personal");
