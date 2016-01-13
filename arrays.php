<?php
	//arrays predefinidos
	echo "Predefinido</br>";
	$arr = array("Jonatan Velandia",21," Masculino");//no indicamos el nombre del index por defecto son los numeros del 0 en adelante
	echo $arr[0]," ",$arr[1]," ",$arr[2];
	
	//arrays asociativos o personalizados
	echo "</br>Asociativo</br>";
	$asociativo=array("clave1"=>"Jonatan Velandia","clave2"=>21,"clave3"=>"Masculino");//la diferencia es que en este indicamos el nombre del index
	echo $asociativo["clave1"]," ",$asociativo["clave2"]," ",$asociativo["clave3"];
?>