<?php
session_start();

$conn = mysql_connect("localhost","root","");
mysql_select_db("plantillaFUSM",$conn);


$usuario = $_POST['user'];
$contrasena= $_POST['password'];

$sentencia= "select * from usuarios where user= '$usuario' ";
$resultado = mysql_query($sentencia,$conn);
$datos = mysql_fetch_row($resultado);

if(!isset($datos[0])){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=1\">";
}
else{
	if($contrasena == $datos[4]){
			if($datos[5]==1){
				$_SESSION['nombre']= $datos[1];
				$_SESSION['apellido']= $datos[2];
				$_SESSION['ingreso']= "ok";
				$_SESSION['tipo']=$datos[6];
				
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=principal.php\">";
			}
			else{
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=2\">";
			}
	}
	else{
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=3\">";
	}
}


?>