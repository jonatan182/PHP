<?php
	$user = $_POST['usuario'];
	$pass = $_POST['contrasena'];
	include './conexion.php';
	$query = mysql_query("SELECT * FROM log WHERE usuario='$user' AND Contrasena='$pass'");
	while ($f=mysql_fetch_array($query)) {
				$nombre=$f['nombre'];
				$usuario=$f['usuario'];
				$contra=$f['Contrasena'];
			}
	if(($user!=null)&&($pass!=null)){
		header('Location: SUCCESS.html');
		
	}else
	{
		header('Location: contact.html');
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
