

#                                                        Estudio de Factibilidad

##  Menu
- [I.Cliente](#Cliente).

- [II.Alcance](#Alcance).

- [III.Beneficios](#Beneficios).

- [IV.Aspectos técnicos](#Aspectos-técnicos).

- [V.Recursos](#Recursos).

- [VI.Alternativas y riesgos](#Alternativas-y-riesgos).



### <a name="Cliente"></a>Cliente

El sistema está diseñado para tener como clientes a Universidades, estudios técnicos, Colegios, Institutos, y otras entidades académicas y como usuarios a los clientes de estas personas, estas pueden ser estudiantes, padres de familia, profesores y administradores.

### <a name="Alcance"></a>Alcance

Este proyecto será más  factible porque  unificara   muchos aspectos tales como  salón de clases, desde gestión de clases, profesores ,estudiantes padres ,personal  administrativo y aulas, control de registro de notas, horarios de clase entre otras.
  
Lista de funciones incluidas: Registros de usuarios (alumnos, profesores, personal laboral, administradores, padres, notas escolares),  matrícula  de alumnos, inscripciones (de asignaturas, horas de clase, profesores de clases, registro de aulas, notas y edificios, Creación de respaldos y de reportes. 
Lista de funciones excluidas: Manejo de pagos y aranceles (módulo de finanzas), registro de materiales didácticos  e impresión de reportes, Privilegios de usuarios.

Dependencias: motor de base de datos MySQL, motor de base de datos PostgreSQL, framework cakePHP, Python 3.5,  Straw-Berry Perl, framework Rails, *Servidor local (EasyPHPdev o Xamp), Navegador web (Firefox 35 superior o Chrome 45)

Sistemas actuales a ser reemplazados: Este software sustituirá los sistemas obsoletos como por ejemplo el uso de Excel o de sistemas locales que corren en una sola máquina 

### <a name="Beneficios"></a>Beneficios

La principal razón por la cual se desarrollara el software es la de mejorar la eficiencia de las instituciones académicas, referente a los servicios varios que necesitan satisfacer internamente, donde la mayoría de tareas organizativas son manejadas manualmente o con softwares como Excel.

A la vez logramos brindar mayor protección, seguridad y aceleramos el acceso a la información por lo cual la instituciones ahorrarían tiempo en papeleo y otras tareas que el software cubrirá. 

Los beneficios pueden ser cuantificados:
*a)El tiempo que se tarda en hacer alguna gestión, ya que no es necesario ir hasta el centro para hacerlo, sino que se puede hacer desde sus hogares.
*b)El dinero que gastará el centro educativo a la hora de imprimir las gestiones en papel, se reducirá notoriamente.
*c)La cantidad de personas que visitan y hacen enormes filas en caja y dirección se reducirá.
*d)Aumenta la capacidad de gestión de los centros. (Respuesta más rápida)
*e) Mayor seguridad de la información, principalmente con pérdidas de datos por errores humanos.   

### <a name="Aspectos-técnicos"></a>Aspectos técnicos

Lista de requerimientos:

●	Sistemas operativos (instalación Local): Windows Xp, 10, 8, 7, OS X, Diestros Linux-BSD-Solaris.

●	Memoria RAM: 2 GB mínimo.

●	Procesador: Dual Core mínimo, 2Gz de procesador.

●	Espacio Mínimo: 15 GB de disco.

●	Motores de Base de datos: InnoDB (MySQL) y Postgres (PostgreSQL).

●	Servidor Local: Apache (recomendado Xamp).

●	Requerimiento Web: Hosting compatible con PHP5, Ajax, Perl, JavaScript, HTML5, Python, Ruby, MySQL, PostgreSQL Navegador Web compatible como php5 (Google Chrome, Mozilla Firefox).

●	Servidor: Apache.

Lista de posibles versiones:

Basic: El software solo es adaptado para uso de administradores y un director, de manera interna sin acceso a estudiantes o padres a realizar transacciones. Módulos habilitados: Inscripción, Registros, búsqueda y pagos. 

Professional: El software es adaptado para acceso de administradores, director, profesores y estudiantes. Los privilegios son adaptados por parte del Usuario root. Módulos habilitados: Niveles de usuarios, Manejo y Control de finanzas, Registro de Profesores, Personal, Alumnos. Permite la Creación de Reportes

Premium: El software tiene habilitado todos los módulos y niveles de usuario. Respaldo incorporado y creación de reportes 

Business Premium: El software cuenta con todas las opciones del Sistema en sí, Con respaldo incorporado y acceso desde Web.

a)	Usuarios y transacciones
Usuarios: Director, Profesor, Administrador, Caja, Estudiante, Padre de familia.

### <a name="Recursos"></a>Recursos

A continuación presentamos los diagramas de actividades y diagrama de Gant, en el primero ubicamos los Itos resaltados en Azul:

Diagrama de actividades
Lista de actividades	                                                          Letra	Predecesor.
1. Preparación de la Máquina de Pruebas	                                           A	
a. Instalación del Sistema Operativo a Usar	                                       A1	     A
b. Instalación de las aplicaciones para la Programación del sistema	               A2	     A
2. Migración/Creación de la Base de datos                                         	B	     A1,A2
a. Creación de la Base de datos en PostgreSQL	                                      B1	   B
b. Creación de la Base de datos en Mysql                                          	B2     B
3. Migración del código del Sistema a Cake PHP	                                    C	     B1,B2
4. Primera fase de Pruebas	                                                        D   	 C
a. Ralease de la Versión 3.0.1 Alpha	                                              D1	   D.
i. Conexión y Prueba con base de datos local PostgreSQL	                            D2	   D
ii. Conexión y Prueba con base de datos local Mysql	                                D3	   D
5. Actualización del Repositorio	                                                  E	     D1,D2,D3
6. Integración de posibles cambios a las bases de datos	                            F	     E
7. Entrega del Módulo Registros de Estudiantes	                                    G	     F
8. Entrega del Módulo Inscripción de Estudiantes	                                  H	     F
9. Entrega del Módulo Registros de Profesores	                                      I	     F
10. Entrega del Módulo Registros de Personal	                                      J	     F
11. Entrega del Módulo Registros de Aulas/Edificios	                                K	     F
12. Entrega del Módulo Inventario	                                                  L	     F
13. Entrega del Módulo Registro e Inscripción de Asignaturas	                      M	     F
14. Entrega del módulo Configuración de Usuarios	                                  N	     F
15. Entrega del Módulo Bienvenida	                                                  Ñ	     F
16. Entrega del Módulo Seguridad de Sistema	                                        O	     F
17. Entrega del Módulo Buscador	                                                    P	     F
18. Entrega del Módulo Finanzas	                                                    Q	     F
19. Segunda Fase de Revisión	                                                      R	     G-Q
20. Implementación en línea del Sistema	                                            S	     R
21. Tercer fase de Pruebas extendida	                                              T	     S
22. Creación del Manual de usuario	                                                U	     T
23. Actualización del Repositorio	                                                  V	     U
24. Finalización de los últimos entregables	                                        W	     V
25. Presentación del Sistema Release 3.7	                                          X	     W
a. Presentación de SAE + Mysql DB	                                                  X1	   X
b. Presentación de SAE + PostgreSQL DB	                                            X2	   X
26. Implementación en la institución	                                              Y	     X1,X2
27. Periodo de Pruebas y de vigilancia de adaptación de los usuarios	              Z	     Y
28. Primera Actualización del Sistema	                                              AZ	   Z

### <a name="Alternativas-y-riesgos"></a>Alternativas y riesgos

Alternativa

Comparando nuestro sistema actual en la versión 2.0 revisando sus ventajas y desventajas, es necesario un cambio radical en el aspecto y facilidad de uso, debido al deficiente aspecto visual, y la necesidad de muchas mejoras en el código y optimización de procesos, por lo cual no es necesario un desarrollo externo sino uno interno al contar un sistemas para migrarlo a un framework y mejorarlo. La creación del sistema abarcara 3 meses y se entregara en fecha negociada con la directiva de la institución, a mediados de junio, el día acordado se tendrá que haber entregado hasta el último ejecutable.

Riesgo

Entre los posibles riesgos están la falla del computador de prueba y que los hosting de pruebas no tengan características necesarias y se cuelguen, o que se ejecuten muy lentos, según la condición. Nivel de características del Software estarían la mala toma de requerimientos, mala planificación y un mal desarrollo del sistema.


