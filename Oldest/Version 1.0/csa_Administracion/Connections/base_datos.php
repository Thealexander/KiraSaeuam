<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_base_datos = "sql13.000webhost.com";
$database_base_datos = "a1928538_dbschl";
$username_base_datos = "a1928538_dbschl";
$password_base_datos = "1521aaHg";
$base_datos = mysql_pconnect($hostname_base_datos, $username_base_datos, $password_base_datos) or trigger_error(mysql_error(),E_USER_ERROR); 
?>