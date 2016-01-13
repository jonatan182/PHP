<html>
<head>
	<title>Insertar</title>
	<link type="text/css" rel="stylesheet" href="EstilosCSS/estilos.css"/>
</head>
<body>
	<form action="Actualir.php" method="post">
		<input type="text" name="valor"/>
		<center>
			<table>
				<tr><td>Placa</td><td><input type="text" name="placa"/></td></tr>
				<tr><td>Marca</td><td><input type="text" name="marca"/></td></tr>
				<tr><td>Color</td><td><input type="text" name="color"/></td></tr>
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