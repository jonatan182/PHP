<?php
	
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
	echo 'Conexion Exitosa!!';
	mysql_select_db("agenda",$conn);//seleccionamos la base de datos
	//$sentencia = ("SELECT * FROM contactos WHERE Telefono=$telefono");//consulta UNITARIA
	$sentencia = ("SELECT * FROM contactos");//consulta multiple
	$resultado=mysql_query($sentencia,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
	$items="";
	//$datos=mysql_fetch_row($resultado);
	while($datos=mysql_fetch_row($resultado)){
		$items .="<option value='".$datos[1]."'>".$datos[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	}
?>
<html>
<head>
<title>Llenar un Combobox/Select con registros de una Tabla</title>
<link href="contactos.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form action="ComboBoxPreuba.php" method="post">
	   <select name="estado">
		   <?php echo $items; ?>
	   </select>
	   <input type="text" name "nombre"/>
	   <input type="submit" value="Guardar"/>
   </form>
   
</body>
</html>