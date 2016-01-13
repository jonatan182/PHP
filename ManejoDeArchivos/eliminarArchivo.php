<?php
	$archivo = $_POST['archivo'];//obtenemos el archivo
	unlink($archivo);//para eliminar el archivo, unlink se encarga de eliminar archivos de texto plano "txt,html,php,date"
	echo 'Se Elimino Correctamente';
?>