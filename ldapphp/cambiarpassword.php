<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>M9 Interfícies web</title>

<!-- Bootstrap Core CSS -->
<link href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="styles/css.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
		
	<div id="fb-root"></div>
			
	<!-- Campos del formulario -->
	<div class="row">
		<form id="registro" class="col-xs-offset-3 col-xs-6" action="nuevapassword.php" method="post" enctype="application/json">
				<fieldset class="">
					<div class="titulo">
						<legend id="login" class="col-xs-offset-3 col-xs-6">BIENVENIDO A LDAP</legend>
						<h1>Conexión a LDAP daw2.net establecida</h1>
					</div>
			
					<div class="row col-xs-12">
						<label class="col-xs-offset-6 col-xs-2"><h2>Cambio de contraseña</h2></label>
							<div>
								<span>
								<label class="col-xs-offset-6 col-xs-2">Contraseña antigua:</label>
									<input class="datos col-xs-3" id="contrasena" name="contrasena" type="password" />
									<p class="g-signin2" data-onsuccess="onSignIn"></p>
									
								<label class="col-xs-offset-6 col-xs-2">Contraseña nueva:</label>									
									<input class="datos col-xs-3" id="contrasenanueva" name="contrasenanueva" type="password" />
									<p class="g-signin2" data-onsuccess="onSignIn"></p>
									
								<label class="col-xs-offset-6 col-xs-2">Marca si eres humano o robot:</label><br>									
									<input type="checkbox" name="captcha" value="humano"> Soy humano.<br>
  									<input type="checkbox" name="captcha" value="robot"> Soy robot<br>
									<p class="g-signin2" data-onsuccess="onSignIn"></p>								
								</span>
						</div>
					</div>				
				<button type="submit">validar</button>				
				<a href="salirldap.php" class="enlace col-xs-3">Salir LDAP</button></a>
							
				</fieldset>
			
			</form>
</div>	
			
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
	</body>
	</html>