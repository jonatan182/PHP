<?php
	$placa = $_POST['placa'];
	$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");
	mysql_select_db("RegistroV",$conn);
	$sentencia = ("SELECT * FROM vehiculos WHERE Placa='$placa'");
	$query = mysql_query($sentencia,$conn);//consulta para las condiciones, no se puede ejecutar dos mismas consultas por eso creamos dos 
	$query2 = mysql_query($sentencia,$conn);//consulta para el while
	$items=mysql_fetch_row($query);
		if($items[0] == null){
			echo 'Vehiculo No Encontrado';
		}else{
			echo 'Vehiculo Encontrado!!<br/>';
			while($datos = mysql_fetch_row($query2)){
						//obtenemos el nombre del color por medio de su codigo
						$sentenciac = ("SELECT Nombre FROM colores WHERE Codigo='$datos[2]'");
						$resultadoColor=mysql_query($sentenciac,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
						$datosColor=mysql_fetch_row($resultadoColor);
						
						//obtenemos el nombre de la marca 
						$sentenciam = ("SELECT Nombre FROM marcas WHERE Codigo='$datos[1]'");
						$resultadoMarca=mysql_query($sentenciam,$conn)or die("Error");
						$datosMarca=mysql_fetch_row($resultadoMarca);
						
						echo '<br/>Numero Placa: ',$datos[0],"<br/>";
						echo 'Color: ',$datosColor[0],"<br/>";
						echo 'Marca: ',$datosMarca[0],"<br/>";
						echo 'Referencia: ',$datos[3],"<br/>";
						echo 'Modelo: ',$datos[4],"<br/>";
						echo 'Cilindraje: ',$datos[5],"<br/>";
			}
		}
?>