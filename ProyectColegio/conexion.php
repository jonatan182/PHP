<?php
	$conn = mysql_connect("localhost","root","root")or die("Error En La Conexion");
	$basedatos = mysql_select_db("ColNotas",$conn)or die("Error En La base de Datos");
?>