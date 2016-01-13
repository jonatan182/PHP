<?php
	session_start();
	$semestre = $_POST['semestre'];
	$_SESSION['semestre'] = $semestre;
	 include('./conexion.php');
	 $sentencia2=("SELECT * FROM materias WHERE semestre='$semestre'");
	 $resultadoc = mysql_query($sentencia2,$conn)or die('Error En La Sentencia');
	 $itemsM="";
	 
	  if(isset($_SESSION['materiasS1'])){
		$semestre1 = $_SESSION['materiasS1'];
	 }if(isset($_SESSION['materiasS2'])){
		$semestre2 = $_SESSION['materiasS2'];
	 }if(isset($_SESSION['materiasS3'])){
		$semestre3 = $_SESSION['materiasS3'];
	 }if(isset($_SESSION['materiasS4'])){
		$semestre4 = $_SESSION['materiasS4'];
	 }if(isset($_SESSION['materiasS5'])){
		$semestre5 = $_SESSION['materiasS5'];
	 }if(isset($_SESSION['materiasS6'])){
		$semestre6 = $_SESSION['materiasS6'];
	 }if(isset($_SESSION['materiasS7'])){
		$semestre7 = $_SESSION['materiasS7'];
	 }if(isset($_SESSION['materiasS8'])){
		$semestre8 = $_SESSION['materiasS8'];
	 }if(isset($_SESSION['materiasS9'])){
		$semestre9 = $_SESSION['materiasS9'];
	 }if(isset($_SESSION['materiasS10'])){
		$semestre10 = $_SESSION['materiasS10'];
	 }if(isset($_SESSION['materiasS11'])){
		$semestre11 = $_SESSION['materiasS11'];
	 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
	<form action="seleccionMaterias.php" method="post">
	<?php
		while($datoc=mysql_fetch_row($resultadoc)){
			//$itemsM .="<option value='".$datoc[1]."'>".$datoc[1]."</option>"; //concatenamos el los options para luego ser insertado en el HTML
		
	?>
		<center>
			<?php echo $datoc[1];?>
			<input type="checkbox" value="<?php echo $datoc[1];?>" name="materias[]"
				<?php 	
				 if(isset($_SESSION['materiasS1'])){
						for($i=0;$i<count($semestre1);$i++){
							if($datoc[1]==$semestre1[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS2'])){
						for($i=0;$i<count($semestre2);$i++){
							if($datoc[1]==$semestre2[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS3'])){
						for($i=0;$i<count($semestre3);$i++){
							if($datoc[1]==$semestre3[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS4'])){
						for($i=0;$i<count($semestre4);$i++){
							if($datoc[1]==$semestre4[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS5'])){
						for($i=0;$i<count($semestre5);$i++){
							if($datoc[1]==$semestre5[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS6'])){
						for($i=0;$i<count($semestre6);$i++){
							if($datoc[1]==$semestre6[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS7'])){
						for($i=0;$i<count($semestre7);$i++){
							if($datoc[1]==$semestre7[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS8'])){
						for($i=0;$i<count($semestre8);$i++){
							if($datoc[1]==$semestre8[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS9'])){
						for($i=0;$i<count($semestre9);$i++){
							if($datoc[1]==$semestre9[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS10'])){
						for($i=0;$i<count($semestre10);$i++){
							if($datoc[1]==$semestre10[$i]){
				 				echo ' checked'; 
							}
						}
					}if(isset($_SESSION['materiasS11'])){
						for($i=0;$i<count($semestre11);$i++){
							if($datoc[1]==$semestre11[$i]){
				 				echo ' checked'; 
							}
						}
					}
				?>
			/> <br/>
		</center>
	<?php
		}
	?>
	<center>
		<input type="submit" value="OK"/>
	</center>
	</form>
<body>
</body>
</html>
