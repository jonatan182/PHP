<!--No Indicamos el doctype-->
<?php //los comentarios son igual que java para una linea "//" para varia lineas /*linea1 \n linea2*/
	echo'Primer PHP </br>'; //para imprimir
	$edad=18; //para crear las variables de enteros       Nota: PHP Es CAseSencitive
	$nombre='jonatan'; //para crear variables tipo cadena String
	
	if($edad<18){
		echo ' Senor '.$nombre.' Eres Menor De Edad, No Puedes Ingresar';
	}else if($edad>=18){
		echo 'Senor '.$nombre.' Eres Mayor de Edad, Puedes Ingresar';
	}
?>