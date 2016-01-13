<?php

	session_start();
	
	$_SESSION['nombreE']= $_POST['nombre'];
	$_SESSION['apellidoE']= $_POST['apellido'];
	$_SESSION['identificacionE']= $_POST['identificacion'];
	
	
	include './conexion.php';
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$identificacion = $_POST['identificacion'];
	$edad = $_POST['edad'];
	
	$sentencia=("INSERT INTO  estudiantes(nombre,apellido,edad,identificacion) values('$nombre','$apellido','$edad','$identificacion')");
	$resultado = mysql_query($sentencia,$conn)or die('Error Al Insertar Estudiante');
	$_SESSION['ingresoE']="ok";
	echo "<meta http-equiv=\"refresh\"content=\"0;URL=seleccionSemestreAlumno.php\">";
?>