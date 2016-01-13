<html>
<head>
	<title>Primer Php</title>
</head>
<body style="background-color:#dddddd;">
<?php
	$dia=3;
	switch($dia){
		case 1:
			echo '<center>Es Lunes</center>';
			break;
		case 2:
			echo '<center>Es Martes</center>';
			break;
		case 3:
			echo '<center>Es Miercoles</center>';
			break;
	    case 4:
			echo '<center>Jueves</center>';
			break;
		case 5:
			echo '<center>Es Viernes</center>';
			break;
		case 6:
			echo '<center>Es Sabado</center>';
			break;
		case 7:
			echo '<center>Es Domingo</center>';
			break;
		default:
			echo 'No Es Ningun Dia De La Semana';

	}
	
?>
</body>
</html>