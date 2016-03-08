#                                     SAE (Sistema Administrador Educativo)  

## Menu
- [I.Descripcion](#Descripcion).
- [II.Resumen Ejecutivo](#Resumen-Ejecutivo).
- [III.Descripcion de detalles Tecnicos](#Descripcion-de-detalles-Tecnicos).
- [IV.Clientes](#Clientes).
- [V.Usuarios](#Usuarios).
- [VI.Enlace de Repositorio](#Enlace-de-Repositorio).
- [VII.Roles de los miembros](#Roles-de-los-miembros).
- [VIII.Entregables](#Entregables).
- [IX.Anotaciones](#Anotaciones).
- [X.Referencias externas](#Referencias-externas).
  
## <a name="Descripcion"></a>Descripcion

Es un programa de administración, control y manejo de clases, horarios, personal y finanzas (pagos y recargos) de una institución académica. El programa tendrá la capacidad de tener niveles de privilegios de usuario. Se podrá acceder a la aplicación por computador y web o por dispositivo móvil (aplicación o web App).
El Sistema `SAE` busca ser creado con la utilizacion o implementacion de codigo javascript, python, perl y ruby, para optimizacion de funciones, como lenguaje base de la aplicacion Php, y Cakephp como framework.
La base de datos de `SAE` estaran en dos versiones para prueba de estabilidad, seguridad, y velocidad, tales seran en Firebird, PostgreSQL y MySQL.

El software contara con:

* Manejo de niveles de Usuario
* Registro y control de notas y pagos de Usuarios (estudiantes)
* Manejo de Profesores y Personal
* Manejo y registro de Clases y horarios
* Manejo y control de finanzas
 
## <a name="Resumen-Ejecutivo"></a>Resumen Ejecutivo

El programa `SAE` es un sistema de administración para diversas tareas que  se necesitan mantener controladas y supervisas en los sectores educativos, escuelas, colegios particulares y técnicos, institutos educativos, entre otros. Con SAE se logra mantener un control y manejo de clases, horarios, personal y finanzas (pagos y recargos) de una institución académica. Permitiendo así salvar lo más preciado para toda persona como es el tiempo y la información, en el caso de los centros educativos, mantener un control más detallado de su comunidad estudiantil y las finanzas y roles que conlleva.

El programa tiene la capacidad de mantener niveles de privilegios de usuario. Limitando y garantizando un correcto acceso a la información que se debe mostrar al nivel de usuario dado (padres, administradores, estudiantes, directores, profesores). Ahorrando tiempo en organizar eventos o actividades. Se podrá acceder a la aplicación por computador y web o por dispositivo móvil (aplicación o web App), facilitando a los usuarios acceder en cualquier parte que se encuentren para acceder a su información (padres, estudiantes), o manteniendo una seguridad de acceso a instalaciones e información privada del centro (administradores, profesores).

El software contara con:

- ` Manejo de niveles de Usuario:` Los privilegios y limitaciones para el acceso al sistema.

- `Registro y control de notas y pagos de Usuarios (estudiantes):` Registrar, deshabilitar, inscribir alumnos y padres de familias (dado el caso tutores), ver notas obtenidas durante cada periodo escolar, además de sus cuotas de pagos, moras, recargos, descuentos, etc.

- `Manejo de Profesores y Personal:` Organización de clases, marcar horarios, salarios y otros datos.

- `Manejo y registro de Clases y horarios:` Manejo de salones de clases, y horario de las materias.

-  `Manejo y control de finanzas:` Control de pagos, y gastos que realiza el centro educativo.

Se presentarán 4 versiones:

- `Basic:` El software solo es adaptado para uso de administradores y un director, de manera interna sin acceso a estudiantes o padres a realizar transacciones. Módulos habilitados: Inscripción, Registros, búsqueda y pagos. 

- `Professional:` El software es adaptado para acceso de administradores, director, profesores y estudiantes. Los privilegios son adaptados por parte del Usuario root. Módulos habilitados: Niveles de usuarios, Manejo y Control de finanzas, Registro de Profesores, Personal, Alumnos. Permite la Creación de Reportes

- `Premium:` El software tiene habilitado todos los módulos y niveles de usuario. Respaldo incorporado y creación de reportes 

- `Business Premium:` El software cuenta con todas las opciones del Sistema en sí, Con respaldo incorporado y acceso desde Web.

## <a name="Descripcion-de-detalles-Tecnicos"></a>Descripcion de detalles Tecnicos

###A. 	`Requerimientos Local:` 

- Sistemas operativos (instalación Local): Windows Xp, 10, 8, 7, OS X, Diestros Linux-BSD-Solaris
- Memoria RAM: 2gigas mínimo.
- Procesador: Dual Core mínimo, 1Gz de procesador.
- Espacio Mínimo: 15gigbytes de disco
- Motores de Base de datos: Inobd (MySQL) y Postgres (PostgreSQL)
- Servidor Local: Apache (recomendado Xamp)

###B.	`	Requerimiento Web:` 

- Hosting compatible con PHP5, Ajax, Perl, JavaScript, HTML5, Python, Ruby, 
  MySQL, PostgreSQL
- Navegador Web compatible como php5 (Google Chrome, Mozilla Firefox)
- Servidor: Apache

## <a name="Clientes"></a>Clientes

Los posibles clientes serian escuelas, secundarias, universidades y colegios técnicos.

## <a name="Usuarios"></a>Usuarios

Los usuarios finales serian: profesores, padres, alumnos, directores y administradores de estos centros educativos.

## <a name="Enlace-de-Repositorio"></a>Enlace de Repositorio

- `Repositorio:`https://github.com/Thealexander/Saeuam
- `Sitio Web1:` http://sae.heliohost.org/ --PostgreSQl db
- `Sitio Web2:` http://scadministrator.netai.net/ --Mysql db
- `Documentos:` https://drive.google.com/folderview?id=0B3LlhRNr0vrdZTlNY0ZoTktqMEU&usp=sharing

  
## <a name="Roles-de-los-miembros"></a>Roles de los miembros

A.	 `Aldair Peralta:` Apih97/ 13010231/ https://github.com/Apih97

Mini Biografía: Estudiante de la carrera de Ingeniería en gerencia Informática, 
actualmente cursando cuarto año, paciente, analítico, inventivo. Actual en el uso de PHP, Visual Basic, Java, SQL Server, MySQL.
Rol en el proyecto: Programador, desarrollador, investigador y escritor.

B.	`Brayan Gaitan:` TheAlexander / 11020330/ https://github.com/Thealexander/Saeuam

MiniBiografia: Estudiante de Ingenieria en Sistemas de Informacion, cursando quinto año, sanguíneo, hardworking, multitasking, creativo, Lider.En uso de PHP, Java, C, C++, Asp.net, javascript, Visual Basic, Python, Ruby on rails, Perl, Shell, MySQL, SQL Server, PostgreSQL. 
Rol en Proyecto: Líder, Programador, desarrollador, investigador.
 
C.	`Virgilio Paniagua:` virgiliopaniagua18 / 12020098/ https://github.com/virgiliopaniagua18

Mini Biografía: Trabajo en equipo, excelente relaciones interpersonales y sentido de responsabilidad. Actual tengo conocimiento en Visual Basic, Java, SQL Server, MySQL.
Rol en el proyecto: Programador y desarrollador.

D.	`Rigoberto López:` rigobertoloopez / 13010649/ https://github.com/rigobertolopez

Mini Biografía: Estudiante de la carrera de Ingeniería en gerencia Informática, Actual mente me encanta trabajar en equipo para de desarrollar ideas con el propósito de adquirir nuevo conocimientos soy amble comprensivo y analítico y honesto en la información .Actual en el uso de Visual Basic, Java, SQL Server, MySql. Windows server
Rol en el proyecto: Programar, investigar .desarrollar y escribir

## <a name="Entregables"></a>Entregables

1- Presentacion digital de los avances del sistema SAE.

2- Manual de usuario del sistema SAE.

3- Pagina web online 

4- Usuario y clave de acceso para realizar pruebas.

5- Un CD ejecutable.

6- SAE con gestor de base de datos MYSQL.

7- SAE con gestor de base de datos POSTGRESQL.

8- Repositorio en linea.

9- Un Installer del sistemas SAE.

## <a name="Anotaciones"></a>Anotaciones

El sistema será creado bajo la licencia `BSD modifica` o `Nueva Licencia BSD`, ya que esta elimina la cláusula de publicad que tenía la licencia BSD Antigua, esta consta de tres clausulas, en la numera 3, impide que un receptor del software pueda tener usar el nombre del autor sin el permiso de este y es muy similar a la licencia MIT (1).

1. Las redistribuciones del código fuente deben conservar el aviso de copyright anterior, esta lista de condiciones y el siguiente descargo de responsabilidad.
2. Las redistribuciones en formato binario deben reproducir el aviso de copyright anterior, esta lista de condiciones y la siguiente renuncia en la documentación y/u otros materiales suministrados con la distribución.
3. Ni el nombre de los titulares de derechos de autor ni los nombres de sus colaboradores pueden usarse para apoyar o promocionar productos derivados de este software sin permiso previo y por 

ESTE SOFTWARE SE SUMINISTRA POR <TITULAR DEL COPYRIGHT> ''COMO ESTÁ'' Y CUALQUIER GARANTÍA EXPRESA O IMPLÍCITAS, INCLUYENDO, PERO NO LIMITADO A, LAS GARANTÍAS IMPLÍCITAS DE COMERCIALIZACIÓN Y APTITUD PARA UN PROPÓSITO DETERMINADO SON RECHAZADAS. EN NINGÚN CASO <TITULAR DEL COPYRIGHT> SERÁ RESPONSABLE POR NINGÚN DAÑO DIRECTO, INDIRECTO, INCIDENTAL, ESPECIAL, EJEMPLAR O CONSECUENTE (INCLUYENDO, PERO NO LIMITADO A, LA ADQUISICIÓN DE BIENES O SERVICIOS; LA PÉRDIDA DE USO, DE DATOS O DE BENEFICIOS; O INTERRUPCIÓN DE LA ACTIVIDAD EMPRESARIAL) O POR CUALQUIER TEORÍA DE RESPONSABILIDAD, YA SEA POR CONTRATO, RESPONSABILIDAD ESTRICTA O AGRAVIO (INCLUYENDO NEGLIGENCIA O CUALQUIER OTRA CAUSA) QUE SURJA DE CUALQUIER MANERA DEL USO DE ESTE SOFTWARE, INCLUSO SI SE HA ADVERTIDO DE LA POSIBILIDAD DE TALES DAÑOS.

La documentación del software estará licenciada bajo por la combinación de licencias `Creative Commons de atribución y no comercial (CCBY-NC) (2)`El sistema usara dos bases de datos, una en PostgreSQL (almacenamiento de usuarios administrativos para acceso) y MySQL (base de datos general del software), se creara una versión base y otras ediciones del software según requiera la empresa solicitante.

### <a name="Referencias-externas"></a>Referencias externas
                       
1. https://es.wikipedia.org/wiki/Licencia_BSD
2. https://es.wikipedia.org/wiki/Licencias_Creative_Commons
