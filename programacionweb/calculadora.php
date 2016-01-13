<?php
	if((isset($_POST['num1'])&& !empty($_POST['num1']))&&//empty determina si la variable esta vacia o vale 0, lo negamos por que si vale 0 o esta vacia nos devuelve true, y lo que queremos es que nos de true cuando este un valor que no sea 0 
	   (isset($_POST['num2'])&& !empty($_POST['num2']))&&//y isset determina si la variables esta definida
	   (isset($_POST['num3'])&& !empty($_POST['num3']))){
		$numero1 = $_POST['num1'];
		$numero2 = $_POST['num2'];
		$numero3 = $_POST['num3'];
		$operacion = $_POST['operacion'];
		
		switch($operacion){
			case 'suma':
				echo $numero1+$numero2+$numero3;
				break;
			case 'resta':
				echo $numero1-$numero2-$numero3;
				break;
			case 'multi':
				echo $numero1*$numero2*$numero3;
				break;
			case 'divi':
				echo $numero1/$numero2/$numero3;
				break;
			default:
				echo 'No Se A Podido Establecer La Operacion';
		}
	}else{	
		echo 'Debes Insertar Todos los campos';
	}

?>