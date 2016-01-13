<?php
	$servidor = "localhost";
	$usuario = "root";
	$baseDatos = "loguin";
	$conn = mysql_connect($servidor,$usuario,"")or die('Error En La Conexion Con El Servidor');	
	//echo 'Conexion Con El Servidor Exitosa!!';
	$db = mysql_select_db($baseDatos,$conn)or die('Error En La Conexion Con La Base de Datos');
	//echo 'Conexion Con La Base de Datos Exitosa!!';
?>
