<?php
	session_start();
	if($_SESSION['ingresoC'] != "ok"){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.php?tipoE=4\">";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	         <?php 
				echo 'Buen Dia Coordinador ' .$_SESSION['nombreC'] . " " . $_SESSION['apellidoC'];
			?>
			<p align="right">
            	<a href="error.php?tipoE=5" >cerrar sesión </a>
            </p>
			
			<form>
				<ul>
					<li><a  href="semestre.php">Crear Semestre</a></li>
					<li><a href="guardarmaterias.php">Crear Materias</a></li>
					<li><a href="guardarHorario.php">Asignar Horario</a></li>
				</ul>
			</form>
<body>
</body>
</html>
