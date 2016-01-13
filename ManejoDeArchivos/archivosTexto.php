<?php
	//$fi = fopen('c:/archivo.txt','a')//abrimos y creamos nuestro archivo si no existe, la letra 'a' nos permite abrir o crear al archivo unicamente para escribir
	$fi = fopen('archivo.txt','a')//para crear el archivo en el directorio raiz
	//el primer parametro hace referencia a la direccion y el segundo
	or die("Error Al Crear Archivo");
	
	//fwrite fputs estas dos instrucciones nos permiten ingresar datos preferiblemente muchos usan la primera
	
	fwrite($fi,"Datos: ");//escribimos en el archivo "Datos:"
	fwrite($fi,"\n");//insertamos un salto de linea tiene que estar en doble comilla
	fwrite($fi,$_POST['nombre']);//insertamos el texto que escribimos en el componente con name nombre que es el text
	fwrite($fi,"\n");//insertamos salto de linea y tiene que estar en doble comilla
	fwrite($fi,$_POST['comentario']);
	
	fclose($fi);//cerramos el archivo
	echo 'Datos Guardados';
?>