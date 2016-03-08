<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_basededatos = "mysql13.000webhost.com";
$database_basededatos = "a1928538_dbschl";
$username_basededatos = "a1928538_dbschl";
$password_basededatos = "1521aHg";
$basededatos = mysql_pconnect($hostname_basededatos, $username_basededatos, $password_basededatos) or trigger_error(mysql_error(),E_USER_ERROR); 
?>