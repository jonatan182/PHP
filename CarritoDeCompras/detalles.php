<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Detalles</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';//hacemos la conexion, inclullendo el archivo conexion.php
		$re=mysql_query("select * from productos WHERE id=".$_GET['id'])or die(mysql_error());//hacemos la consulta con respecto al id pasado por el metodo get
		while ($f=mysql_fetch_array($re)) {//Devuelve un array que corresponde a la fila recuperada y mueve el puntero de datos interno hacia delante.
	?>
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br><!--indicamos la carpeta donde esta la imagen, y con cogigo php recuperamos el nombre-->
				<span><?php echo $f['nombre'];?></span><br><!--Obtenemos el nombre-->
				<span>Precio: <?php echo $f['precio'];?></span><br><!--Obtenemos el precio-->
				<a href="./carritodecompras.php?id=<?php echo $f['id'];?>">Añadir a carrito de compras</a>
			</center>
	
	<?php
		}
	?>
	</section>
</body>
</html>
		