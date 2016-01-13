<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo =$_POST['correo'];
	$telefono =$_POST['tel'];
	$celular =$_POST['cel'];
	
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
	echo 'Conexion Exitosa!!';
	mysql_select_db("agenda",$conn);//seleccionamos la base de datos
	$sentencia = ("INSERT INTO contactos(Nombre,Apellido,Correo,Telefono,Celular) values('$nombre','$apellido','$correo',$telefono,$celular)");//guardamos la sentencia sql insertar
	mysql_query($sentencia,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
	echo 'Listo';
	
	
	
?>