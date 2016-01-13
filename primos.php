<?php
	//rango
	/*$numero=8;
	$divisor=0;
	$i=1;
	$a=1;
	for($a=1;$a<=$numero;$a++){
		for($i=2;$i<=$numero;$i++){
			if(($a%$i==0)&&($a!=$i)){
				break;
			}
			else if(($i>$a)&&($a%$i!=0)){
				echo $a;
				primo();
				break;
			}
			
		}

	}*/
	//cantidad
		$numero = 2;
		$contadorPrimos=2;
		$cantidad=8;
		while($contadorPrimos<=$cantidad){
			if(esPrimo($numero)){
				echo $numero,'</br>';
				$contadorPrimos++;
			}
			$numero++;
		}
		
	function esPrimo($numero){//declaracion del metodo
		$i=2;
		$divisor=0;
		for($i=2;$i<=$numero;$i++){
			if($numero%$i==0){
				$divisor=$i;
				break;
			}	
		}
		if($divisor==$numero){
			return true;
		}

		return false;
	}
?>