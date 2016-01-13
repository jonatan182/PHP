<?php
	 $conn = mysql_connect("localhost","root","")or die("Error De Conexion");
	 mysql_select_db("RegistroV",$conn);//seleccionamos la base de datos
	 $sentencia = ("SELECT * FROM marcas");//seleccionamos los datos de la tabla marcas
	 $query = mysql_query($sentencia,$conn)or die("Error En El Query");
	 $items="";
	 while($datos=mysql_fetch_row($query)){
		$items .="<option value='".$datos[0]."'>".$datos[1]."</option>"; //mostramos el nombre y cada item vale el codigo propio
	}
?>
<!Doctype html>
<html>
<head>
	<title>Buscar Marca</title>
	<link type="text/css" rel="stylesheet" href="EstilosCSS/estilos.css"/>
</head>
<body>
	<form action="BuscarMarca.php" method="post">
		<center>
			Marca <select name="marca"><?php echo $items;?></select></br>
			<input class="button" type="submit" value="Ver"/>
		</center>
	</form>
	<a class="link" href="MenuForm.php">Menu</a>
</body>
</html>