<?php
	 include('./conexion.php');
		
	 $sentencia=("SELECT * FROM semestre");
	 $resultado = mysql_query($sentencia,$conn);
	 $items="";
	 while($datos=mysql_fetch_row($resultado)){
		$items .="<option value='".$datos[1]."'>".$datos[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<form action="GuardarM.php" method="post">
		<center>
			<table>
			    <tr><td>Semestre</td><td><select name="estado"><?php echo $items;?></select></td></tr>
				<tr><td>Materia</td><td><input type="text" name="materia"/></td></tr>
				<tr><td>Intensidad</td><td><input type="text" name="intensidad"/></td></tr>
			</table>
			<input class="submit" type="submit" value="Guardar"/>
		</center>
	</form>
<body>
</body>
</html>
