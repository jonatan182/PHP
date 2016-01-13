<?php
	 $conn = mysql_connect("localhost","root","")or die("Error De Conexion");
	 mysql_select_db("RegistroV",$conn);//seleccionamos la base de datos
	 $sentencia = ("SELECT * FROM colores");//seleccionamos los datos de la tabla marcas
	 $query = mysql_query($sentencia,$conn)or die("Error En El Query");
	 $items="";
	 while($datos=mysql_fetch_row($query)){
		$items .="<option value='".$datos[0]."'>".$datos[1]."</option>"; //mostramos el nombre y cada item vale el codigo propio
	}
?>
<!Doctype html>
<html>
<head>
	<title>Buscar Color</title>
	<link type="text/css" rel="stylesheet" href="EstilosCSS/estilos.css"/>
</head>
<body>
	<form action="BuscarColor.php" method="post">
		<center>
			Color <select name="color"><?php echo $items;?></select></br>
			<input class="button" type="submit" value="Ver"/>
		</center>
	</form>
	<a class="link"href="MenuForm.php">Menu</a>
</body>
</html>