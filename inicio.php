<?php
	$usuario=$_POST["usuario"];
	$password=$_POST["password"];
	
	$usuarioOK="Katy";
	$passwordOK="picapuu";
	
	if (!($usuario==$usuarioOK && $password==$passwordOK)){
		header("location:index.php");
	}
?>

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	<body>
	<h1>
		welcome <?php echo $usuario;?>
	</h1>
	<p class="form-imagenes">
		<img src="bateria.jpg"  alt="bateria.jpg" />
		<img src="ballena.jpg"  alt="ballena.jpg" />
		<img src="burbujas.jpg"  alt="burbujas.jpg" />
		<img src="colores.jpg"  alt="colores.jpg" />
		<img src="dos.jpg"  alt="dos.jpg" />
		<img src="gato.jpg"  alt="gato.jpg" />
		<img src="peses.jpg"  alt="peses.jpg" />
		<img src="tuyyo.jpg"  alt="tuyyo.jpg" />
	</p>
	<h3>
	espero que te guste
	</h3>
	</body>
</html>