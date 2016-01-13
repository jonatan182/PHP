<?php
	$server="localhost";//nombre servidor
	$username="root";//usuario
	$password="";//contraseña
	$db='carritocompras';//nombre base de datos
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");//hacemos la conexion
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");//seleccionamos que base de datos vamos a usar
?>