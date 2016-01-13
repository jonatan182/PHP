<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : OpenSpace 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140131

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<?php
session_start();

$tipo = $_GET['tipoE'];
if ($tipo==1)
 $mensaje = "Usuario no existe"; 
if ($tipo==2)
 $mensaje = "Usuario inactivo"; 
if ($tipo==3)
 $mensaje = "Contraseña Incorrecta"; 
if ($tipo==4)
 $mensaje = "Ingreso no autorizado"; 
if ($tipo==5){
 session_destroy();
 $mensaje = "Sesión finalizada"; 
}


?>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Ejemplo FUSM</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li><a href="#" accesskey="3" title="">About Us</a></li>
				<li><a href="#" accesskey="4" title="">Careers</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">
		<div class="title">
			<h2>ERROR</h2>
			<span><?php echo $mensaje;?></span> </div>
		<div class="boxA"></div>
	  <div class="boxB"></div>
	  <div class="boxC"></div>
  </div>
	<div id="page" class="container">
		<div class="boxA">
			<h2>Ingreso:    	    </h2>
			<ul class="style4"><li><form action="validar.php" method="post">
              Usuario: 
              <label>
              <input type="text" name="user" id="textfield" />
              </label>
	          <br>
	          Contraseñs: 
              <label>
              <input type="password" name="password" id="textfield2" />
              </label>
		        
	          <br>
              <label>
              <input type="submit" name="button" id="button" value="Enviar" />
              </label>
              </form>
			</li>
		  </ul>
	  </div>
		<div class="boxB">
			<h2>&nbsp;</h2>
			<ul class="style3">
				<li class="first"></li>
			</ul>
		</div>
		<div class="boxC">
			<h2>&nbsp;</h2>
	  </div>
	</div>
</div>
<div id="welcome-wrapper">
	<div id="welcome" class="container">
		<div class="title">
			<h2>&nbsp;</h2>
		</div>
		</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
