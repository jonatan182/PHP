<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo2 {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
	<form action="loguear.php" method="post">
			
			<span class="Estilo2">
			<label>Integrante
            <select name="select">
              <option>Coordinador</option>
              <option>Estudiante</option>
            </select>
            </label>
	  </span>
			<p><span class="Estilo2">Usuario</span>    
			  <input name="usuario" type="text" />
			     <br/>
		        <br/>
		        <span class="Estilo2">Contrase&ntilde;a:</span>
		      <input name="password" type="password" />
		      <br/>
		       <br/>
		      <input name="submit" type="submit" value="Ingresar"/>
			  
	                </p>
	</form>
    <form id="form1" name="form1" method="post" action="">
      <label></label>
</form>
	<form action="Inicio.php">
		<input type="submit" name="Submit" value="Volver" />
</form>
</body>
</html>
