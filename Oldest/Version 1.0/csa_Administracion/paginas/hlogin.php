<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de Usuarios</title>
              <script language="LiveScript">
		  function pushbutton() 
		  {
			  alert("Accediendo");
			   }
			  </script>
  <style type="text/css">
  #caja
  	  {
	  background:#CCCCCC;
	   padding:1em;
	border: 1px solid white
	border= radious:6px;
	   
	  
	  }
  </style>
 
<style type="text/css">
.Nombre_user {
	text-align: right;
}
.contra_pass {
	text-align: right;
}
.cabecera_entrada {
	text-align: center;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.cabecara_inicio {
	font-weight: bold;
	text-align: center;
}
.cabecera_in {
	font-size: 18px;
	font-weight: bold;
	text-align: center;
}
.orilla1 {
	color: #0CF;
	
	
}
</style>
</head>

<body>
<form name="form1" method="post" action="../ ">
<p> 
</p>
<table width="100%" border="0" style="text-align:center">
  <tr>
    <td width="45%" height="71"></td>
    <td width="24%" rowspan="2">
    <center><img src="../Imagenes/37572_Universidad_Americana_.jpg" width="127" height="84" alt="Whereis" /></center></td>
  </tr>
  <tr>
    <td height="32"><center>
      <h2><strong>Schoolar Control &amp; Administrator</strong></h2></center></td>
    </tr>
  <tr>
    <td height="370">
      <div id="caja">
        <table width="auto"  border="0" style="text-align:center">
          <tr>
            <td colspan="3" class="cabecera_in"><div align="center">Inicio de Sesi&oacute;n</div></td>
            </tr>
          <tr>
            <td colspan="3"><div align="center"></div></td>
            </tr>
          <tr>
            <td width="39%" class="Nombre_user"><div align="rigth">Nombre de Usuario:</div></td>
            <td width="26%"> 
              <div align="center">
                <input type="text" name="usein">
              </div></td>
            <td width="35%"><div align="center"></div></td>
            </tr>
          <tr>
            <td class="contra_pass"><div align="right">Password:</div></td>
            <td> <div align="center">
              <input type="password" name="contrain">
              </div></td>
            <td><div align="center"></div></td>
            </tr>
          <tr>
            <td colspan="2"><div align="center"></div></td>
            <td>
              
              
              
              <div align="">
                <input type="submit" name="Acceso" value="Acceder" onclick="pushbutton()">
                
                
                
              </div></td>
            </tr>
          </table>
      </div></td>
      <td>&nbsp;</td>
    </tr>
</table>


<p>
</p>
</form>	
</body>
</html>