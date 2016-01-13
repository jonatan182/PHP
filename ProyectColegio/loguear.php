<?php
	session_start();
	
	$usuario =$_POST['usuario'];
	$pass = $_POST['password'];
	$integrante = $_POST['select'];
	
	 include './conexion.php';
	
	 $sentencia=("SELECT * FROM usuarios WHERE user ='$usuario'");
	 $resultado = mysql_query($sentencia,$conn);
	 $datos = mysql_fetch_row($resultado);
	 
	 if(!isset($datos[0])){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=1\">";
	}
	 
	 if(($integrante == "Estudiante")and ($datos[6]==1)){
		 if(!isset($datos[0])){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=1\">";
		}
		else{
			if($pass == $datos[4]){
				if($datos[5]==1){
					$_SESSION['nombre']= $datos[1];
					$_SESSION['apellido']= $datos[2];
					$_SESSION['ingreso']= "ok";
					$_SESSION['tipo']=$datos[6];
					echo "<meta http-equiv=\"refresh\" content=\"0;URL=estudiante.php\">";
				}
				else{
					echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=2\">";
				}
		}
		else{
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=3\">";
		}
	}
	
}if(($integrante == "Coordinador")and ($datos[6]==2)){
	    if(!isset($datos[0])){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=1\">";
		}
		else{
			if($pass == $datos[4]){
				if($datos[5]==1){
					$_SESSION['nombreC']= $datos[1];
					$_SESSION['apellidoC']= $datos[2];
					$_SESSION['ingresoC']= "ok";
					$_SESSION['tipoC']=$datos[6];
				
						echo "<meta http-equiv=\"refresh\" content=\"0;URL=coordinador.php\">";
				}
				else{
					echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=2\">";
				}
		}
		else{
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=3\">";
		}
	}
}
	
?>
