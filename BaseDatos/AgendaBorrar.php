<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
	echo 'Conexion Exitosa!!';
	mysql_select_db("agenda",$conn);//seleccionamos la base de datos
	$sentencia = ("DELETE FROM contactos WHERE Nombre='$nombre' and Apellido='$apellido'");
	$datos=mysql_query($sentencia,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
?>