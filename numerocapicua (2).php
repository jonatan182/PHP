<html>
<head>
	<title>Primer Php</title>
</head>
<body style="background-color:#dddddd;">
<?php
	$numero=1;
	$res1=0;
	$res2=0;
	$res3=0;
	$res4=0;
	$div1=0;
	$div2=0;
	
	
	$resultado1=0;
	$resultado2=0;
	$resultado3=0;
	
	if(($numero>=1000)and ($numero<=9999)){
      
          $res1=$numero%10;
		  $div1=$numero/10;
		  
          $res2=$div1%10;
		  $div2=$div1/10;
		  
          $res3=$div2%10;
		  $div3=$div2/10;
		  
		  $res4=$div3%10;
      
		echo 'El resultado1 '.$res1.' </br>';
		echo 'div1 '. $div1.' </br>';
		echo 'El resultado2 '.$res2.' </br>';
		echo 'El resultado3 '. $res3.' </br>';
		echo 'El resultado4 '. $res4.' </br>';
		
		$resultado1=(($res1*1000)+($res2*100)+($res3*10)+($res4*1));
		$resultado2=(($res1*1)+($res2*10)+($res3*100)+($res4*1000));
       
	   /*$vector = array($res1,$res2,$res3,$res4); otra manera de comparar el valor

			
		  if (($vector[0]==$vector[3]) and ($vector[1]==$vector[2]))
		  {
			  echo 'El numero ', $numero,' SI ES CAPICUO';
		  }    */
			
		  if ($resultado1==$resultado2)
		  {
			  echo 'El numero ', $numero,' SI ES CAPICUO';
		  }    
		  else
		  {
			  echo 'El numero ',$numero,' NO ES CAPICUO';
		  }  
	  }else if(($numero>=100)&&($numero<=999)){
		  $res1=$numero%10;
		  $div1=$numero/10;
		  
          $res2=$div1%10;
		  $div2=$div1/10;
		  
          $res3=$div2%10;
		  
		$resultado1=(($res1*100)+($res2*10)+($res3*1));
		$resultado2=(($res1*1)+($res2*10)+($res3*100));
		
		if ($resultado1==$resultado2)
		  {
			  echo 'El numero ', $numero,' SI ES CAPICUO';
		  }    
		  else
		  {
			  echo 'El numero ',$numero,' NO ES CAPICUO';
		  } 
	  }else if(($numero>=10)&&($numero<=99)){
		  $res1=$numero%10;
		  $div1=$numero/10;
		  
          $res2=$div1%10;
		  
		  
		$resultado1=(($res1*10)+($res2*1));
		$resultado2=(($res1*1)+($res2*10));
		
		if ($resultado1==$resultado2)
		  {
			  echo 'El numero ', $numero,' SI ES CAPICUO';
		  }    
		  else
		  {
			  echo 'El numero ',$numero,' NO ES CAPICUO';
		  } 
	  }else if(($numero <10)||($numero>9999)){
		echo 'El numero ', $numero,' No Esta En El Rango';
	  }
		
?>
</body>
</html>