<?php
	session_start();
	$semestre = $_SESSION['semestre'];
	$materias =$_POST['materias'];
	if($semestre=='I'){
		$_SESSION['materiasS1']=$materias;
	}
	if($semestre=='II'){
		$_SESSION['materiasS2']=$materias;
	}if($semestre=='III'){
		$_SESSION['materiasS3']=$materias;
	}if($semestre=='IV'){
		$_SESSION['materiasS4']=$materias;
	}if($semestre=='V'){
		$_SESSION['materiasS5']=$materias;
	}if($semestre=='VI'){
		$_SESSION['materiasS6']=$materias;
	}if($semestre=='VII'){
		$_SESSION['materiasS7']=$materias;
	}if($semestre=='VIII'){
		$_SESSION['materiasS8']=$materias;
	}if($semestre=='IX'){
		$_SESSION['materiasS9']=$materias;
	}if($semestre=='X'){
		$_SESSION['materiasS10']=$materias;
	}if($semestre=='XI'){
		$_SESSION['materiasS11']=$materias;
	}
	for($i=0; $i < count($materias); $i++){
    	echo $materias[$i]."<br/>";
	}
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=seleccionSemestreAlumno.php\">";
	
?>
