<?php
	$placa = $_POST['placa'];
	$marca = $_POST['estadom'];
	$color =$_POST['estadoc'];
	$referencia =$_POST['referencia'];
	$modelo =$_POST['modelo'];
	$cilindraje =$_POST['cilindraje'];

	if(isset($_POST['placa']) && !empty($_POST['placa'])
		&& isset($_POST['referencia']) && !empty($_POST['referencia'])
		&& isset($_POST['modelo']) && !empty($_POST['modelo'])
		&& isset($_POST['cilindraje']) && !empty($_POST['cilindraje'])){//miramos si la variable esta definida y no vale null
		$conn = mysql_connect("localhost","root","")or die("Error En La Conexion");//conexion al servidor
		mysql_select_db("RegistroV",$conn)or die("Error Al Insertar Marca");//seleccionamos la base de datos
		$sentenciab = ("SELECT * FROM vehiculos WHERE Placa='$placa'");
		$sentencia =("INSERT INTO vehiculos(Placa,CodMarca,CodColor,Referencia,Modelo,colindraje) values('$placa','$marca','$color','$referencia','$modelo','$cilindraje')");//guardamos la sentencia sql insertar
		$registros = mysql_query($sentenciab,$conn)or die("Error");//para ejecutar la sentencia,or die imprime el error si algo sale mal
		$datos=mysql_fetch_row($registros);
		if($datos[1] != null){
			echo 'Placa Registrada, no se Puede Ingresar La Misma Placa ',$datos[0];
		}else{
			echo 'Placa No Registrada',$datos[0];
			$registros = mysql_query($sentencia,$conn)or die("Error Al Insertar La Marca");
			echo 'Vehiculo Insertado!!';
		}
	}else{
		echo 'No se Permite Campos Nulos';
	}
?>