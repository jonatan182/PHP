<?php
	$persona = $_POST['estado'];
	
	echo $persona;
	
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
	echo 'Conexion Exitosa!!';
	mysql_select_db("agenda",$conn);//seleccionamos la base de datos
	$sentencia = ("SELECT * FROM contactos WHERE Nombre='$persona'");//consulta UNITARIA
	//$sentencia = ("SELECT * FROM contactos");//consulta multiple
	$resultado=mysql_query($sentencia,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
	//$datos=mysql_fetch_row($resultado);
	while($datos=mysql_fetch_row($resultado)){
		echo $datos[0],"<br/>";
		echo $datos[1],"<br/>";
		echo $datos[2],"<br/>";
		echo $datos[3],"<br/>";
		echo $datos[4],"<br/>";
	}
?>