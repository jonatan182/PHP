<?php
	$fi = fopen('archivo.txt','r')//con la letra r podemos leer el archivo
	or die('Error Al Leer');
	
	/*$tra = fgets($fi); //para obtener los datos de la primer linea
	echo '-----',$tra,'----','<br/>';
	$tra = fgets($fi); //para obtener los datos de la segunda linea
	echo '-----',$tra,'----','<br/>';
	$tra = fgets($fi); //para obtener los datos de la tercera linea
	echo '-----',$tra,'----','<br/>';
	*/
	//utilizamos l while para leer todas las lineas
	while(!feof($fi)){//para acceder a cada dato insertado en el archivo uno por uno // estamos diciendo: mientras el puntero no llegue al final del archivo boy a leer lo que se encuentre dentro de el
		$traer = fgets($fi); //para obtener los datos
		$linea = nl2br($traer);//leermos los saltos de linea que particularmente se leen en el navegador si no aparecen los saltos de linea fijarnos que se hayan almacenado con doble comilla
		echo $linea;
	}//feof es el puntero del archivo de texto, cada vez que leemos una linea el puntero vale 0  hasta llegar al final el puntero vale 1 el cual los negamos para que se salga del ciclo
?>