<?php
	session_start();
	
	include './conexion.php';
					$horai1 = null;
					$horai2 = null;
					$horaf1 = null;
					$horaf2 = null;
					$dia1 = null;
					$dia2 = null;
					$datos=null;
	$nombreE = $_SESSION['nombreE'];
	$apellidoE = $_SESSION['apellidoE'];
	$identificacionE=$_SESSION['identificacionE'];
	
	$repetido= false;
	
	$intensidad = false;
	$cruce= true;
	$intensidadTotal=$_SESSION['intensidad'];
	echo 'Intensidad Total: '.$intensidadTotal;
	if($intensidadTotal>8){
		echo '<br/>La Intensidad Supera El Rango Estipulado Que Es De 8 Por Favor Eliminar Materias';
		$intensidad = false;
	}
	elseif(($intensidadTotal>0)&&($intensidadTotal<=8)){
		echo '<br/>Intensidad Satisfactoria';
		$intensidad = true;
	}
	if(isset($_SESSION['horario1'])){
		$datos = $_SESSION['horario1'];
		$cantidadMaterias = count($datos);
		if(count($datos)>2){
			echo 'mayor que 2<br/>';
			for($a=0;$a<$cantidadMaterias;$a++){
				if($repetido){
					break;
				}
				for($b=1;$b<$cantidadMaterias;$b++){
					if(($b==$a)&&($b<$cantidadMaterias-1)){
						++$b;
					}if($a==$cantidadMaterias-1 && $b==$cantidadMaterias-1 ){
						echo 'Rang000000000000000000o';
						break;
					}
					echo $a.$b;

					$horai1 = $datos[$a][3];
					$horai2 = $datos[$b][3];
					$horaf1 = $datos[$a][4];
					$horaf2 = $datos[$b][4];
					$dia1 = $datos[$a][5];
					$dia2 = $datos[$b][5];
					echo '<pre>'.'      Materia: A  '.$datos[$a][1].' semestre: '.$datos[$a][2].'. HoraI:'.$datos[$a][3].' HoraF:'.$datos[$a][4].' Dia:'.$datos[$a][5].'</pre>';
					echo '<pre>'.'      Materia: B  '.$datos[$b][1].' semestre: '.$datos[$b][2].' HoraI:'.$datos[$b][3].' HoraF:'.$datos[$b][4].' Dia:'.$datos[$b][5].'</pre>';
					if($horai1==$horai2){if($horaf1==$horaf2){if($dia1==$dia2){
					echo 'No Puedes Guardar Por Que Se Cruzan Los Horarios, Por Favor Verificar Materias';
					$a=0;
					$b=1;
					$_SESSION['horario1']=null;
					$cruce = false;
					$repetido = true;
					break;
					
				}
			}
		}
				}

	}
	}else{
		echo 'menor que 2';
			for($a=1;$a<=count($datos);$a++){
				for($b=0;$b<count($datos)-$a;$b++){
					echo '<pre>'.'      Materia: A  '.$datos[$a][1].' HoraI:'.$datos[$a][3].' HoraF:'.$datos[$a][4].' Dia:'.$datos[$a][5].'</pre>';
					echo '<pre>'.'      Materia: B  '.$datos[$b][1].' HoraI:'.$datos[$b][3].' HoraF:'.$datos[$b][4].' Dia:'.$datos[$b][5].'</pre>';
					$horai1 = $datos[$a][3];
					$horai2 = $datos[$b][3];
					$horaf1 = $datos[$a][4];
					$horaf2 = $datos[$b][4];
					$dia1 = $datos[$a][5];
					$dia2 = $datos[$b][5];
				}if(($horai1==$horai2)&&($horaf1==$horaf2)&&($dia1==$dia2)){
					echo 'No Puedes Guardar Por Que Se Cruzan Los Horarios, Por Favor Verificar Materias';
					$cruce = false;
					break;
				}
			}
		}
		if($cruce){
			echo 'Cruce De Materias Satisfactorio';
		}
		if($cruce and $intensidad){
			echo '<br/>Registro Guardado CorrectaMente!!'.$cantidadMaterias;
						if($cantidadMaterias ==6){
							$materia1= $datos[0][1];
							$materia2= $datos[1][1];
							$materia3= $datos[2][1];
							$materia4= $datos[3][1];
							$materia5= $datos[4][1];
							$materia6= $datos[5][1];
					$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1,materia2,materia3,materia4,materia5,materia6) 						values('$nombreE','$apellidoE','$identificacionE','$materi1','$materia2','$materia3','$materia4','$materia5','$materia6')");
			}elseif($cantidadMaterias ==5){
				$materia1= $datos[0][1];
				$materia2= $datos[1][1];
				$materia3= $datos[2][1];
				$materia4= $datos[3][1];
				$materia5= $datos[4][1];
				$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1,materia2,materia3,materia4,materia5) 						values('$nombreE','$apellidoE','$identificacionE','$materia1','$materia2','$materia3','$materia4','$materia5')");
			}elseif($cantidadMaterias ==4){
					$materia1= $datos[0][1];
					$materia2= $datos[1][1];
					$materia3= $datos[2][1];
					$materia4= $datos[3][1];
				$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1,materia2,materia3,materia4) 						values('$nombreE','$apellidoE','$identificacionE','$materia1','$materia2','$materia3','$materia4')");
			}elseif($cantidadMaterias ==3){
					$materia1= $datos[0][1];
					$materia2= $datos[1][1];
					$materia3= $datos[2][1];
				$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1,materia2,materia3) 						values('$nombreE','$apellidoE','$identificacionE','$materia1','$materia2','$materia3')");
				
			}elseif($cantidadMaterias ==2){
					$materia1= $datos[0][1];
					$materia2= $datos[1][1];
				$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1,materia2) 						values('$nombreE','$apellidoE','$identificacionE','$materia1','$materia2')");	
			}elseif($cantidadMaterias ==1){
					$materia1= $datos[0][1];
				$sentencia=("INSERT INTO  horarioestudiantes(nombre,apellido,identificacion,materia1) 						values('$nombreE','$apellidoE','$identificacionE','$materia1')");
				
			}
				$resultado = mysql_query($sentencia,$conn)or die('Error Al Guardar Horario');
				echo '<br/>Registro Guardado CorrectaMente!!';
				session_destroy();
			//session_destroy();
		}
		
	}
			
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<a href="prematricula.php">Volver</a>
<body>
</body>
</html>
