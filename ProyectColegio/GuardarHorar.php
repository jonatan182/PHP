<?php
	session_start();
	
	$semestre = $_SESSION['semestre'];
	$materia = $_POST['estado'];
	$horai = $_POST['horai'];
	$horaf = $_POST['horaf'];
	$dia = $_POST['dia'];
	$intensidad;
	
	include './conexion.php';
	$sentencia2=("SELECT intensidad FROM materias WHERE materia='$materia'");
	$sentencia3=("SELECT materia,horaInicio,horaFinal,dia FROM horario WHERE materia='$materia' 
				and horaInicio='$horai' and horaFinal='$horaf' and dia='$dia'");
	$sentencia4=("SELECT materia FROM horario WHERE materia='$materia'");
	$sentencia5=("SELECT semestre,horaInicio,horaFinal,dia FROM horario WHERE semestre='$semestre' and horaInicio='$horai' and horaFinal='$horaf' and dia='$dia'");
	
	$resultadoM = mysql_query($sentencia2,$conn)or die('Error En la consulta');
	$resultadoMa = mysql_query($sentencia3,$conn)or die('Error En La consulta');
	$resultadoMaE = mysql_query($sentencia4,$conn)or die('Error En La consulta');
	$resultadoMaH = mysql_query($sentencia5,$conn)or die('Error En La consulta');
	
	$datos=mysql_fetch_row($resultadoM);
	$datosM=mysql_fetch_row($resultadoMa);
	$datosMaE=mysql_fetch_row($resultadoMaE);
	$datosMaH=mysql_fetch_row($resultadoMaH);
	$intensidad = $datos[0];
	
	$_SESSION['intensidad']=$intensidad;
	
	if($datosM[0]!=null){
		echo 'Materia ya Se Encuentra Registrada En El Mismo Horario';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=errorHorario.php?error=2\">";
	}elseif($datosMaE[0]!=null){
		echo 'Materia Y Tiene Un Horario Asignado';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=errorHorario.php?error=3\">";
	}elseif(($horaf-$horai)>$intensidad){
		$_SESSION['ErrorIntensidad']='Intensidad Horaria No Correspondiente, Tiene Que Ser Igual A La Estipulada';
		echo 'Error En La Intensidad De La Materia';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=errorHorario.php?error=1\">";
	}elseif(($horaf-$horai)<$intensidad){
		$_SESSION['ErrorIntensidad']='Intensidad Horaria No Correspondiente, Tiene Que Ser Igual A La Estipulada';
		echo 'Error En La Intensidad De La Materia';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=errorHorario.php?error=1\">";
	}
	elseif($datosMaH[0]!=null){
		echo 'Error No Puedes Ingresar El Mismo Horario De Otra Materia';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=errorHorario.php?error=4\">";
	}
	
	elseif($resultadoMa[0]==null){
		$sentencia=("INSERT INTO  horario(materia,semestre,horaInicio,horaFinal,dia) values('$materia','$semestre','$horai','$horaf','$dia')");
		$resultado = mysql_query($sentencia,$conn)or die('Error Al Insertar Semestre');
		echo 'Se Guardo Satisfactoriamente!!';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=Success.php?success='Horario Ingresado CorrectaMente'\">";
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
