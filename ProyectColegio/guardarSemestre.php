<?php
	$semestre = $_POST['semestre'];
	include './conexion.php';
    $sentencia=("INSERT INTO  semestre(semestre) values('$semestre')");
	$resultado = mysql_query($sentencia,$conn)or die('Error Al Insertar Semestre');
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=coordinador.php\">";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<script>
		alert('Se Guardo Satisfacotiamente');
	</script>
</head>
<body>
</body>
</html>