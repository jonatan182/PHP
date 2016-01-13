<?php

	$valor=$_POST['valor'];
	$placa = $_POST['placa'];
	$marca= $_POST['marca'];
	$color = $_POST['color'];
	$referencia = $_POST['referencia'];
	$modelo = $_POST['modelo'];
	$cilindraje = $_POST['cilindraje'];

	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");
	mysql_select_db("RegistroV",$conn);
	$sentencia = ("UPDATE vehiculos set Placa='$placa',CodMarca=$marca WHERE Placa='$valor'");
	$query = mysql_query($sentencia,$conn);//consulta para las condiciones, no se puede ejecutar dos mismas consultas por eso creamos dos 
?>