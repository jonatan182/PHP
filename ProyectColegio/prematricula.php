<?php
 session_start();
 include './conexion.php';
 if(isset($_SESSION['materiasS1'])){
 	$semestre1 = $_SESSION['materiasS1'];
 }if(isset($_SESSION['materiasS2'])){
 	$semestre2 = $_SESSION['materiasS2'];
 }if(isset($_SESSION['materiasS3'])){
 	$semestre3 = $_SESSION['materiasS3'];
 }if(isset($_SESSION['materiasS4'])){
 	$semestre4 = $_SESSION['materiasS4'];
 }if(isset($_SESSION['materiasS5'])){
 	$semestre5 = $_SESSION['materiasS5'];
 }if(isset($_SESSION['materiasS6'])){
 	$semestre6 = $_SESSION['materiasS6'];
 }if(isset($_SESSION['materiasS7'])){
 	$semestre7 = $_SESSION['materiasS7'];
 }if(isset($_SESSION['materiasS8'])){
 	$semestre8 = $_SESSION['materiasS8'];
 }if(isset($_SESSION['materiasS9'])){
 	$semestre9 = $_SESSION['materiasS9'];
 }if(isset($_SESSION['materiasS10'])){
 	$semestre10 = $_SESSION['materiasS10'];
 }if(isset($_SESSION['materiasS11'])){
 	$semestre11 = $_SESSION['materiasS11'];
 }
  $intenS1=0;
  $intenS2=0;
  $intenS3=0;
  $intenS4=0;
  $intenS5=0;
  $intenS6=0;
  $intenS7=0;
  $intenS8=0;
  $intenS9=0;
  $intenS10=0;
  $intenS11=0;
  $sentencia1=null;
  $resultado1=null;
  $_SESSION['intensidad']=0;
  $array=array();
  $datos=null;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<h2>Lista Materias Seleccionadas</h2>
	<ul>
	<?php 
	 if(isset($_SESSION['materiasS1'])){
	 	$_SESSION['horario']=null;
		for($i=0;$i<count($semestre1);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre1[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre1[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			  $arrayNuevo=array($datos[3],$datos[4],$datos[5]);
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				 $array[]=$datos;
			}
			$intenS1 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 1: ".$intenS1.'</p>';
		$_SESSION['intensidad']+=$intenS1;
	}
	?>
	
	<?php 
	 if(isset($_SESSION['materiasS2'])){
	 	$_SESSION['horario']=null;
		for($i=0;$i<count($semestre2);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre2[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre2[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				 $array[]=$datos;
			}
			$intenS2 += $intensidad;
		}
	
		echo "<p style='color:Green;'>Intensidad semestre 2: ".$intenS2.'</p>';
		$_SESSION['intensidad']+=$intenS2;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS3'])){
	 $_SESSION['horario']=null;
		for($i=0;$i<count($semestre3);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre3[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre3[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				 $array[]=$datos;
			}
			$intenS3+= $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 3: ".$intenS3.'</p>';
		$_SESSION['intensidad']+=$intenS3;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS4'])){
	 $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre4);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre4[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre4[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				 $array[]=$datos;
			}
			$intenS4 += $intensidad;
		}

		echo "<p style='color:Green;'>Intensidad semestre 4: ".$intenS4.'</p>';
		$_SESSION['intensidad']+=$intenS4;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS5'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre5);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre5[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre5[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS5 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 5: ".$intenS5.'</p>';
		$_SESSION['intensidad']+=$intenS5;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS6'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre6);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre6[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre6[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS6 += $intensidad;
		}

		echo "<p style='color:Green;'>Intensidad semestre 6: ".$intenS6.'</p>';
		$_SESSION['intensidad']+=$intenS6;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS7'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre7);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre7[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre7[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS7 += $intensidad;
		}
		$_SESSION['horario1'] = $array;
		echo "<p style='color:Green;'>Intensidad semestre 7: ".$intenS7.'</p>';
		$_SESSION['intensidad']+=$intenS7;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS8'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre8);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre8[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre8[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS8 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 8: ".$intenS8.'</p>';
		$_SESSION['intensidad']+=$intenS8;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS9'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre9);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre9[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre9[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS9 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 9: ".$intenS9.'</p>';
		$_SESSION['intensidad']+=$intenS9;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS10'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre10);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre10[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre10[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS10 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 10: ".$intenS10.'</p>';
		$_SESSION['intensidad']+=$intenS10;
	}
	?>
	<?php 
	 if(isset($_SESSION['materiasS11'])){
	  $_SESSION['horario']=null;	
		for($i=0;$i<count($semestre11);$i++){
			$sentencia1=("SELECT * FROM horario WHERE materia='$semestre11[$i]'");//Consulta Intensidad
			$resultado1 = mysql_query($sentencia1,$conn)or die('Error Al Insertar Estudiante');
	?>
				<li><?php echo $semestre11[$i];?></li>
	<?php
			  while($datos=mysql_fetch_row($resultado1)){
			   echo '<pre>'.'      HoraI:'.$datos[3].' HoraF:'.$datos[4].' Dia:'.$datos[5].'</pre>';
		      	$intensidad  = (int)$datos[4]-(int)$datos[3];
				$array[]=$datos;
			}
			$intenS11 += $intensidad;
		}
		echo "<p style='color:Green;'>Intensidad semestre 11: ".$intenS11.'</p>';
		$_SESSION['intensidad']+=$intenS11;
	}
	$_SESSION['horario1'] = $array;
	?>
	</ul>
	<form action="GuardarMatricula.php" method="post">
		<input type="submit" value="Guardar"/>
	</form>
	<form action="seleccionSemestreAlumno.php" method="post">
		<input type="submit" value="Volver"/>
	</form>
<body>
</body>
</html>
