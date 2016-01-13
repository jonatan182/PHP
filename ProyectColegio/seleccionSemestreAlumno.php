<?php
	session_start();
	if($_SESSION['ingresoE']!="ok"){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=registroEstudiante.php\">";
	}else{
		 include('./conexion.php');
			
		 $sentencia=("SELECT * FROM semestre");
		 $resultado = mysql_query($sentencia,$conn);
		 $items="";
		 while($datos=mysql_fetch_row($resultado)){
			$items .="<option value='".$datos[1]."'>".$datos[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<form action="materiasSemestre.php" method="post">
		Semestre<select name="semestre"><?php echo $items;?></select>
		<br/>
		<input type="submit" value="Ver"/>
		<br/>
	</form>
	<form action="prematricula.php" method="post">
			<input type="submit" value="Prematricula"/>
	</form>
<body>
</body>
</html>
