<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
		$diai = $_POST['dia'];
		$mesi = $_POST['mes'];
		$ani =$_POST['an'];
		$an=$ani;
		$diaf = $_POST['diaf'];
		$mesf = $_POST['mesf'];
		$anf =$_POST['anf'];
		
		$ultimoan;
		$primeran;
		$contador=0;
		
		/*echo $diai,"<br>",$mesi,"<br>",$ani;
		echo '<br>';
		echo $diaf,"<br>",$mesf,"<br>",$anf;*/
		
		for($var=0;$an<=$anf; $var++){
			if(($an%4==0)and(($an%100!=0))or($an%400==0)){
					$contador++;
					$ultimoan = $an;
					
			}
			$an++;
		}
	    if(($ani%4==0)and(($ani%100!=0))or($ani%400==0)){
			if((($mesf<=2)and($diaf<29))and($ultimoan==$anf)){
				$contador --;
			}
			else if((($mesf<2)and($diaf<=31))and($ultimoan==$anf)){
				$contador --;
			}		
		}else if((($mesf<=2)&&($diaf<29))or(($mesf==1)&&$diaf<31)){//si el año inicial no es bisiesto
			$contador --;
		}
	
		if(($ani%4==0)and(($ani%100!=0))or($ani%400==0)){
			if((($mesi>2)and($diai<31))or(($mesi==2)and($diai>29))){
				$contador --;
			}
		}
		
	
		
	
		echo 'Hay ',$contador,' Años Bisiestos';
		
	?>
</body>
</html>