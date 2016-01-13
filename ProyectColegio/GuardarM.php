<?php
	$semestre = $_POST['estado'];
	$intensidad = $_POST['intensidad'];
	$materia = $_POST['materia'];
	include './conexion.php';
    $sentencia=("INSERT INTO  materias(materia,intensidad,semestre) values('$materia','$intensidad','$semestre')");
	$resultado = mysql_query($sentencia,$conn)or die('Error Al Insertar La Materia');
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=coordinador.php\">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
	<script>
		alert('Se Guardo Satisfacotiamente');
	</script>
</head>

<body>
</body>
</html>
