<?php
	$marca = $_POST['marca'];

	if(isset($_POST['marca']) && !empty($_POST['marca'])){//miramos si la variable esta definida y no vale null
		$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
		mysql_select_db("RegistroV",$conn)or die("Error Al Insertar Marca");//seleccionamos la base de datos
		$sentenciab = ("SELECT * FROM marcas WHERE Nombre='$marca'");
		$sentenciai =("INSERT INTO marcas(Nombre) values('$marca')");//guardamos la sentencia sql insertar
		$registros = mysql_query($sentenciab,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
		$datos=mysql_fetch_row($registros);
		if($datos[1] != null){
			echo 'marca registrada, no se Puede Ingresar La Misma Marca ',$datos[1];
		}else{
			echo 'marca no registrada',$datos[1];
			$registros = mysql_query($sentenciai,$conn)or die("Error Al Insertar La Marca");
			echo 'Marca Insertada!!';
		}
		//comparando mayusculas
		/*
		if($datos[1]==$_POST['marca']){
			echo 'Marca Registrada, No Se Puede Ingresar La Misma Marca',$datos[1];
		}else {
			echo 'Marca No Registrada',$datos[1];
			$registros = mysql_query($sentenciai,$conn)or die("Error Al Insertar La Marca");
			echo 'Marca Insertada!!';
		}*/
		
	}else{
		echo 'No se Permite Una Marca Null';
	}
?>