<?php
	$nombre = $_POST['color'];
		if(isset($_POST['color']) && !empty($_POST['color'])){//miramos si la variable esta definida y no vale null
		$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
		mysql_select_db("RegistroV",$conn)or die("Error Al Insertar Marca");//seleccionamos la base de datos
		$sentenciab = ("SELECT * FROM colores WHERE Nombre='$nombre'");
		$sentencia =("INSERT INTO colores(Nombre) values('$nombre')");//guardamos la sentencia sql insertar
		$registros = mysql_query($sentenciab,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
		$datos=mysql_fetch_row($registros);
		if($datos[1] != null){
			echo 'Color Registrado, No Se Puede Ingresar El Mismo Color: ',$datos[1];
		}else{
			echo 'Color no registrado: ',$datos[1];
			$registros = mysql_query($sentencia,$conn)or die("Error Al Insertar El Color");
			echo 'Color Insertado!!';
		}
	}else{
		echo 'No se Permite Un Color Null';
	}
		
?>