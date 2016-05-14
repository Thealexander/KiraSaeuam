<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_escuela = "localhost";
$database_escuela = "escuela";
$username_escuela = "root";
$password_escuela = "";
$escuela = mysql_pconnect($hostname_escuela, $username_escuela, $password_escuela) or trigger_error(mysql_error(),E_USER_ERROR); 
?>