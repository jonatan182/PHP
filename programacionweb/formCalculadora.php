<!Doctype html>
<html>
<head>
	<title>Calculadora php</title>
	<meta charset="utf-8"/>
</head>
<body>
	<form action="calculadora.php" name="form1" method="post">
		<label>Insertar Los Numeros</label>
		<br>
		<input type="text" name="num1"/>
		<br>
		<input type="text" name="num2"/>
		<br>
		<input type="text" name="num3"/>
		<br>
		<label>Selecciona Una operacion</label>
		<br>
		<select name="operacion">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
			<option value="multi">Multiplicar</option>
			<option value="divi">Dividir</option>
		</select>
		<br>
		<input type="submit" value="Resultado"/>
	</form>
</body>
</html>