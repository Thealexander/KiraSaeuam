
-- ----------------------------
-- Table structure for Accesos
-- ----------------------------
DROP TABLE IF EXISTS "public"."Accesos";
CREATE TABLE "public"."Accesos" (
"Id_Accesos" int4 NOT NULL,
"Nombre_User" varchar(10) COLLATE "default" NOT NULL,
"Password_User" varchar(12) COLLATE "default" NOT NULL,
"Activo" int2 NOT NULL,
"Id_Personal" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Accesos
-- ----------------------------

-- ----------------------------
-- Table structure for Aulas
-- ----------------------------
DROP TABLE IF EXISTS "public"."Aulas";
CREATE TABLE "public"."Aulas" (
"Id_Aulas" int4 NOT NULL,
"Codigo_aula" varchar(30) COLLATE "default" NOT NULL,
"Descripcion" varchar(75) COLLATE "default" NOT NULL,
"Id_Edificio" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Aulas
-- ----------------------------

-- ----------------------------
-- Table structure for Cargos
-- ----------------------------
DROP TABLE IF EXISTS "public"."Cargos";
CREATE TABLE "public"."Cargos" (
"Id_Cargos" int4 NOT NULL,
"Cargo" varchar(45) COLLATE "default" NOT NULL,
"DescripcionCargo" varchar(45) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Cargos
-- ----------------------------

-- ----------------------------
-- Table structure for Clases
-- ----------------------------
DROP TABLE IF EXISTS "public"."Clases";
CREATE TABLE "public"."Clases" (
"Id_Clases" int4 NOT NULL,
"Nombre_Clase" varchar(45) COLLATE "default" NOT NULL,
"Activo" int2 NOT NULL,
"Id_Aula" int4 NOT NULL,
"Id_Profesores" int4 NOT NULL,
"Id_Turnos" int4 NOT NULL,
"Id_Departamentos" int4 NOT NULL,
"Id_Niveles" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Clases
-- ----------------------------

-- ----------------------------
-- Table structure for Cursos
-- ----------------------------
DROP TABLE IF EXISTS "public"."Cursos";
CREATE TABLE "public"."Cursos" (
"Id_Turno" int4 NOT NULL,
"Id_Clases" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Cursos
-- ----------------------------

-- ----------------------------
-- Table structure for Departamentos
-- ----------------------------
DROP TABLE IF EXISTS "public"."Departamentos";
CREATE TABLE "public"."Departamentos" (
"Id_Departamento" int4 NOT NULL,
"Nombre" varchar(45) COLLATE "default" NOT NULL,
"Descripcion" varchar(45) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Departamentos
-- ----------------------------

-- ----------------------------
-- Table structure for Edificios
-- ----------------------------
DROP TABLE IF EXISTS "public"."Edificios";
CREATE TABLE "public"."Edificios" (
"Id_Edificios" int4 NOT NULL,
"Codigo_Edicio" varchar(30) COLLATE "default" NOT NULL,
"Descripcion" varchar(45) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Edificios
-- ----------------------------

-- ----------------------------
-- Table structure for Estudiantes
-- ----------------------------
DROP TABLE IF EXISTS "public"."Estudiantes";
CREATE TABLE "public"."Estudiantes" (
"Id_Estudiantes" int4 NOT NULL,
"Estudiantes_Nombres" varchar(50) COLLATE "default" NOT NULL,
"Estudiantes_Apellidos" varchar(50) COLLATE "default" NOT NULL,
"Es_dia" varchar(2) COLLATE "default" NOT NULL,
"Es_mes" varchar(2) COLLATE "default" NOT NULL,
"Es_Anio" varchar(2) COLLATE "default" NOT NULL,
"Direccion" varchar(100) COLLATE "default" NOT NULL,
"Telefono" varchar(8) COLLATE "default",
"Celular" varchar(8) COLLATE "default" NOT NULL,
"email" varchar(45) COLLATE "default",
"sexo" varchar(1) COLLATE "default" NOT NULL,
"genero" varchar(4) COLLATE "default" NOT NULL,
"nivel" varchar(8) COLLATE "default" NOT NULL,
"Notas" int4,
"Nacionalidad" varchar(45) COLLATE "default" NOT NULL,
"Cedula" varchar(14) COLLATE "default",
"Activo" int2 NOT NULL,
"Fotos_ID_photo" int4 NOT NULL,
"Ciudad" varchar(45) COLLATE "default",
"Fecha_Registro" timestamp(6),
"Fecha_Actualizacion" timestamp(6),
"Fecha_UltimaInscripcion" timestamp(6),
"descuento" float4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Estudiantes
-- ----------------------------

-- ----------------------------
-- Table structure for Niveles
-- ----------------------------
DROP TABLE IF EXISTS "public"."Niveles";
CREATE TABLE "public"."Niveles" (
"Id_Niveles" int4 NOT NULL,
"Nombre_Nivel" varchar(30) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Niveles
-- ----------------------------

-- ----------------------------
-- Table structure for Notas
-- ----------------------------
DROP TABLE IF EXISTS "public"."Notas";
CREATE TABLE "public"."Notas" (
"Primer_Parcial" float8,
"Segundo_Parcial" float8,
"Nota_Final" float8,
"Semestre" varchar(45) COLLATE "default",
"Anio" varchar(10) COLLATE "default",
"Id_Estudiante" int4 NOT NULL,
"Id_Clases" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Notas
-- ----------------------------

-- ----------------------------
-- Table structure for Personal
-- ----------------------------
DROP TABLE IF EXISTS "public"."Personal";
CREATE TABLE "public"."Personal" (
"Id_Personal" int4 NOT NULL,
"Personal_Nombres" varchar(50) COLLATE "default" NOT NULL,
"Personal_Apellidos" varchar(50) COLLATE "default" NOT NULL,
"Telefono" varchar(8) COLLATE "default",
"Celular" varchar(8) COLLATE "default" NOT NULL,
"email" varchar(45) COLLATE "default",
"direccion" varchar(100) COLLATE "default" NOT NULL,
"Fecha_Registro" timestamp(6),
"Fecha_Moficacion" timestamp(6),
"Salario" float4 NOT NULL,
"Id_Cargo" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Personal
-- ----------------------------

-- ----------------------------
-- Table structure for Profesores
-- ----------------------------
DROP TABLE IF EXISTS "public"."Profesores";
CREATE TABLE "public"."Profesores" (
"Descripcion" varchar(100) COLLATE "default" NOT NULL,
"Id_Profesor" int4 NOT NULL,
"Id_Departamento" int4 NOT NULL,
"Id_Clase" int4 NOT NULL,
"Id_Turno" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Profesores
-- ----------------------------

-- ----------------------------
-- Table structure for Transacestudiantes
-- ----------------------------
DROP TABLE IF EXISTS "public"."Transacestudiantes";
CREATE TABLE "public"."Transacestudiantes" (
"Id_TransacEstudiantes" int4 NOT NULL,
"Fecha_Transaccion" timestamp(6) NOT NULL,
"CantidadTotal" float8 NOT NULL,
"Descripcion" varchar(100) COLLATE "default" NOT NULL,
"Id_Estudiante" int4 NOT NULL,
"Id_Tutores" int4 NOT NULL,
"Id_Generadordetransaccion" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Transacestudiantes
-- ----------------------------

-- ----------------------------
-- Table structure for Turnos
-- ----------------------------
DROP TABLE IF EXISTS "public"."Turnos";
CREATE TABLE "public"."Turnos" (
"Id_Turnos" int4 NOT NULL,
"Turno" varchar(20) COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Turnos
-- ----------------------------

-- ----------------------------
-- Table structure for Tutores
-- ----------------------------
DROP TABLE IF EXISTS "public"."Tutores";
CREATE TABLE "public"."Tutores" (
"Id_Tutores" int4 NOT NULL,
"Nombres_Mama" varchar(50) COLLATE "default" NOT NULL,
"Nombres_Papa" varchar(50) COLLATE "default" NOT NULL,
"Apellidos_mama" varchar(50) COLLATE "default" NOT NULL,
"Apellidos_Papa" varchar(50) COLLATE "default" NOT NULL,
"Telefono_ella_oOficial" varchar(8) COLLATE "default",
"Telefono_el_oOpcional" varchar(8) COLLATE "default",
"Celular_ella_oOficial" varchar(8) COLLATE "default" NOT NULL,
"Celular_el_oOpcional" varchar(8) COLLATE "default",
"Direccion_ella_oOficial" varchar(80) COLLATE "default" NOT NULL,
"Direccion_el_oOpcional" varchar(80) COLLATE "default",
"email_ella" varchar(45) COLLATE "default",
"email_el" varchar(45) COLLATE "default",
"Monto_a_pagar" float8 NOT NULL,
"Id_Estudiante" int4 NOT NULL,
"cedula_ella" varchar(14)[] COLLATE "default" NOT NULL,
"cedula_el" varchar(14)[] COLLATE "default" NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Tutores
-- ----------------------------

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table Aulas
-- ----------------------------
ALTER TABLE "public"."Aulas" ADD PRIMARY KEY ("Id_Aulas");

-- ----------------------------
-- Primary Key structure for table Cargos
-- ----------------------------
ALTER TABLE "public"."Cargos" ADD PRIMARY KEY ("Id_Cargos");

-- ----------------------------
-- Primary Key structure for table Clases
-- ----------------------------
ALTER TABLE "public"."Clases" ADD PRIMARY KEY ("Id_Clases");

-- ----------------------------
-- Primary Key structure for table Departamentos
-- ----------------------------
ALTER TABLE "public"."Departamentos" ADD PRIMARY KEY ("Id_Departamento");

-- ----------------------------
-- Primary Key structure for table Edificios
-- ----------------------------
ALTER TABLE "public"."Edificios" ADD PRIMARY KEY ("Id_Edificios");

-- ----------------------------
-- Primary Key structure for table Estudiantes
-- ----------------------------
ALTER TABLE "public"."Estudiantes" ADD PRIMARY KEY ("Id_Estudiantes");

-- ----------------------------
-- Primary Key structure for table Niveles
-- ----------------------------
ALTER TABLE "public"."Niveles" ADD PRIMARY KEY ("Id_Niveles");

-- ----------------------------
-- Primary Key structure for table Personal
-- ----------------------------
ALTER TABLE "public"."Personal" ADD PRIMARY KEY ("Id_Personal");

-- ----------------------------
-- Primary Key structure for table Profesores
-- ----------------------------
ALTER TABLE "public"."Profesores" ADD PRIMARY KEY ("Id_Profesor");

-- ----------------------------
-- Primary Key structure for table Transacestudiantes
-- ----------------------------
ALTER TABLE "public"."Transacestudiantes" ADD PRIMARY KEY ("Id_TransacEstudiantes");

-- ----------------------------
-- Primary Key structure for table Turnos
-- ----------------------------
ALTER TABLE "public"."Turnos" ADD PRIMARY KEY ("Id_Turnos");

-- ----------------------------
-- Primary Key structure for table Tutores
-- ----------------------------
ALTER TABLE "public"."Tutores" ADD PRIMARY KEY ("Id_Tutores");

-- ----------------------------
-- Foreign Key structure for table "public"."Accesos"
-- ----------------------------
ALTER TABLE "public"."Accesos" ADD FOREIGN KEY ("Id_Personal") REFERENCES "public"."Personal" ("Id_Personal") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Aulas"
-- ----------------------------
ALTER TABLE "public"."Aulas" ADD FOREIGN KEY ("Id_Edificio") REFERENCES "public"."Edificios" ("Id_Edificios") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Clases"
-- ----------------------------
ALTER TABLE "public"."Clases" ADD FOREIGN KEY ("Id_Aula") REFERENCES "public"."Aulas" ("Id_Aulas") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Clases" ADD FOREIGN KEY ("Id_Turnos") REFERENCES "public"."Turnos" ("Id_Turnos") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Clases" ADD FOREIGN KEY ("Id_Profesores") REFERENCES "public"."Profesores" ("Id_Profesor") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Clases" ADD FOREIGN KEY ("Id_Niveles") REFERENCES "public"."Niveles" ("Id_Niveles") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Cursos"
-- ----------------------------
ALTER TABLE "public"."Cursos" ADD FOREIGN KEY ("Id_Turno") REFERENCES "public"."Turnos" ("Id_Turnos") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Cursos" ADD FOREIGN KEY ("Id_Clases") REFERENCES "public"."Clases" ("Id_Clases") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Notas"
-- ----------------------------
ALTER TABLE "public"."Notas" ADD FOREIGN KEY ("Id_Estudiante") REFERENCES "public"."Estudiantes" ("Id_Estudiantes") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Notas" ADD FOREIGN KEY ("Id_Clases") REFERENCES "public"."Clases" ("Id_Clases") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Personal"
-- ----------------------------
ALTER TABLE "public"."Personal" ADD FOREIGN KEY ("Id_Cargo") REFERENCES "public"."Cargos" ("Id_Cargos") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Profesores"
-- ----------------------------
ALTER TABLE "public"."Profesores" ADD FOREIGN KEY ("Id_Profesor") REFERENCES "public"."Personal" ("Id_Personal") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Profesores" ADD FOREIGN KEY ("Id_Turno") REFERENCES "public"."Turnos" ("Id_Turnos") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Profesores" ADD FOREIGN KEY ("Id_Clase") REFERENCES "public"."Clases" ("Id_Clases") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Profesores" ADD FOREIGN KEY ("Id_Departamento") REFERENCES "public"."Departamentos" ("Id_Departamento") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Transacestudiantes"
-- ----------------------------
ALTER TABLE "public"."Transacestudiantes" ADD FOREIGN KEY ("Id_Estudiante") REFERENCES "public"."Estudiantes" ("Id_Estudiantes") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Transacestudiantes" ADD FOREIGN KEY ("Id_Generadordetransaccion") REFERENCES "public"."Personal" ("Id_Personal") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."Transacestudiantes" ADD FOREIGN KEY ("Id_Tutores") REFERENCES "public"."Tutores" ("Id_Tutores") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."Tutores"
-- ----------------------------
ALTER TABLE "public"."Tutores" ADD FOREIGN KEY ("Id_Estudiante") REFERENCES "public"."Estudiantes" ("Id_Estudiantes") ON DELETE NO ACTION ON UPDATE NO ACTION;
