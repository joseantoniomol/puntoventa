<?php

// session_start();
// // cambiar esta variable cuando ya este en produccion
// $_SESSION["instalacion"]="http://localhost/samantha1";

// // este es el email que va a recivir las notificaciones
// $_SESSION["email1"]="molinaalpizar@gmail.com";



// $instalacion = $_SESSION["instalacion"];
?>


<?php  
// 	if(!isset($_COOKIE["userfusion"])) {
// 	echo "";

// } else {
// header ("Location: $instalacion/inicio.php");
// }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<base href=".">
	<title>Punto venta</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../resources/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../resources/css/login.css">

</head>

<body>
	<div id="logo" align="center"><img src="../../resources/images/logo.png"></div>

	<div id="login">
		<form action="sesion.php" method="post" accept-charset="utf-8">                                                                                       
			<div id="container">
				<div align="center" style="color:red"></div>

				<div id="login_form">
					<div class="input-group">
						<span class="input-group-addon input-sm"><i class="fas fa-user"></i></span>
						<input class="form-control" placeholder="Usuario" name="usuario" type="username" size="40" autofocus="" required>
					</div>

					<div class="input-group">
						<span class="input-group-addon input-sm"><i class="fas fa-key"></i></span>
						<input class="form-control" placeholder="Contraseña" name="contrasenna" type="password" size="40" required>
					</div>

					
					<input class="btn btn-primary btn-block" type="submit" name="entrar" value="Entrar">
				</div>
			</div>
		</form>
		<h1>Punto venta</h1>

	</div>

</body></html>