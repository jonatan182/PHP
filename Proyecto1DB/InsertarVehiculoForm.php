<?php
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
	echo 'Conexion Exitosa!!';
	mysql_select_db("RegistroV",$conn);//seleccionamos la base de datos
	//$sentencia = ("SELECT * FROM contactos WHERE Telefono=$telefono");//consulta UNITARIA
	$sentencia1 = ("SELECT * FROM marcas");//consulta multiple
	$sentencia2 = ("SELECT * FROM colores");//consulta multiple
	$resultadom=mysql_query($sentencia1,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
	$resultadoc=mysql_query($sentencia2,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
	$itemsm="";
	$itemsc="";
	//$datos=mysql_fetch_row($resultado);
	while($datos=mysql_fetch_row($resultadom)){
		$itemsm .="<option value='".$datos[0]."'>".$datos[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	}
	while($datoc=mysql_fetch_row($resultadoc)){
		$itemsc .="<option value='".$datoc[0]."'>".$datoc[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	}
?>
<html>
<head>
	<title>Insertar</title>
	<link type="text/css" rel="stylesheet" href="EstilosCSS/estilos.css"/>
</head>
<body>
	<form action="GuardarVehiculo.php" method="post">
		<center>
			<table>
				<tr><td>Placa</td><td><input type="text" name="placa"/></td></tr>
				<tr><td>Marca</td><td><select name="estadom"><?php echo $itemsm;?></select></td></tr>
				<tr><td>Color</td><td><select name="estadoc"><?php echo $itemsc;?></select></td></tr>
				<tr><td>Referencia</td><td><input type="text" name="referencia"/></td></tr>
				<tr><td>Modelo</td><td><input type="text" name="modelo"/></td></tr>
				<tr><td>Cilindraje</td><td><input type="text" name="cilindraje"/></td></tr>
			</table>
			<input class="button" type="submit" value="Guardar"/>
		</center>
	</form>
	<a class="link" href="MenuForm.php">Menu</a>
</body>
</html>
