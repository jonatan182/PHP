<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<?php
	session_start();
	$mensaje = $_GET['success'];
	
	$semestre = $_SESSION['semestre'];
	 include('./conexion.php');
	 $sentencia2=("SELECT * FROM materias WHERE semestre='$semestre'");
	 $resultadoc = mysql_query($sentencia2,$conn)or die('Error En La Sentencia');
	 $itemsM="";
	while($datoc=mysql_fetch_row($resultadoc)){
		$itemsM .="<option value='".$datoc[1]."'>".$datoc[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<h3 style="color:Green;"><?php echo '*'.$mensaje?></h3>
	<form action="GuardarHorar.php" method="post">
		<center>
			<table>
			 	<tr><td>Materias</td><td><select name="estado"><?php echo $itemsM;?></td></tr>
				<tr><td>Hora De Inicio</td><td><select name="horai">
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					</select>
					</td></tr>
				<tr><td>Hora Final</td><td><select name="horaf">
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					</select>
					</td></tr>
				<tr><td>Dia</td><td><select name="dia">
					<option value="Lunes">Lunes</option>
					<option value="Martes">Martes</option>
					<option value="Miercoles">Miercoles</option>
					<option value="Jueves">Jueves</option>
					<option value="Viernes">Viernes</option>
					</select>
					</td></tr>
			</table>
			<input type="submit" value="Guardar"/>
		</center>
	</form>
<body>
</body>
</html>
<body>
</body>
</html>
