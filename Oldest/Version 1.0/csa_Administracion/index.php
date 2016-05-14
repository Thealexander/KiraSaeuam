<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ScA Administrator</title>

<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:right;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>

</head>

<body>
 <table width="80%" border="0">
  <tr>
    <td height="94" colspan="3">  <div id="header" style="width: auto; height:auto; border:1px solid red; text-align:center">
    <ul class="nav">
    <li><a href="index.php?alum=mostrar ">Alumnos</a>  				  <ul> 
                  <li><a href="index.php?alum=Registro">Nuevo Registro</a></li>
                  <li><a href="index.php?alum=Inscripcion">Inscripciones</a></li>
                   <li><a href="index.php?alum=mostrar">Registros</a></li
                  ></ul></li>
    <li><a href="index.php?proff=Tablasmostrar">Profesores</a>
      <ul> 
         <li><a href="index.php?proff=Registro">Nuevo Registro</a></li>
         <li><a href="index.php?proff=Tablasmostrar">Profesores</a></li>
                  </ul></li>
    <li><a href="index.php?persl=tablasmostrar">Personal</a> <ul> 
       <li><a href="index.php?persl=Registro">Nuevo Registro</a></li>
       <li><a href="index.php?persl=tablasmostrar">Personal</a></li>            
                  </ul></li>
     <li><a href="index.php?classd=tablasmostrar">Clases </a> <ul> 
       <li><a href="index.php?classd=Registro">Nuevo Ingreso</a></li>
       <li><a href="index.php?classd=tablasmostrar">Clases Disponibles</a></li>            
                  </ul></li>
    
    </ul>
    
    </div> </td>
   </tr>
  <tr>
    <td width="18%" height="444"> 
    <div style="width: auto; height: auto; border: 1px solid red; text-align: right; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold;">
   <span style="text-align: center"><a href="index.php?page=Home">Inicio</a></span>
   <p></p>
   <span style="text-align: center"><a href="index.php?page=Acerca_de">Acerca de</a></span>
   <p></p>
   <span style="text-align: center"><a href="index.php?page=login">Iniciar Sesion</a></span>
   <p></p>
   </div> 
 </td>
    <td width="61%"><div style="width: 100%; height:auto; border:1px solid red; text-align:Left">
   <?php
  if (isset($_GET['page']))
  	  {
	  $page_name = $_GET['page'];
	  include("paginas/".$page_name.".php");
	  } 
elseif   (isset($_GET['alum']))
  	  {
	  $alum_name = $_GET['alum'];
	  include("Alumnos/".$alum_name.".php");
	  }
   ?>
   </div>
   
   </td>
    <td width="21%">&nbsp;</td>
   </tr>
  <tr>
    <td height="41" colspan="3">&nbsp;</td>
   </tr>
</table>
<p>&nbsp;</p>
</body>
</html>