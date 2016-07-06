<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gracias Por Tu Opinión</title>
<link rel="stylesheet" type="text/css" href="css/respuesta.css">
</head>
<body>
<header>
	<section id="top-logo">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 col-xs-12">
				<a href="index.html"><img class="logo" src="img/logo.png"></a>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</section>
</header>
<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["email"];
	$contenido = $_POST["mensaje"];

	$para = "tamashipruebaweb@gmail.com";
	$asunto = "Contacto Tamashi";
	
	$mensaje = "
	Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	";

	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	
	mail ($para,$asunto,$mensaje,$header);

	echo "Hemos recibido tu mensaje satisfactoriamente!";
?>

</body>
</html>