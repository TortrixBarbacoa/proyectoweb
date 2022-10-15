<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>AMAZING INVENTIONS PRODUCT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" href="../assets/img/simplelogo.png">
</head>
<body class="fondo">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="../assets/img/logoprodblack.png" width="550px">
					</div>

					<form class="form" method="POST" action="../controller/Login/loginController.php">

					<div class="heading mb-3">
						<h4>Inicie sesión en su cuenta</h4>
					</div>

						<!-- INPUT DE CORREO ELECTRONICO -->
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" placeholder="Correo Electronico" required id="inEmail" name="inEmail">
						</div>

						
						<!-- INPUT PASSWORD -->
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="Password" placeholder="Contraseña" required id="inPassword" name="inPassword">
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Recordar Usuario</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="forget.html" class="forget-link">Contraseña olvidada</a>
							</div>
						</div>
						
						<!-- BOTON DE INICIO DE SESION -->
						<div class="text-left mb-3">
							<button type="submit" class="btn">INGRESAR</button>
						</div>
						<div class="row mb-3">
						</div>
						<div class="text-white1">¿No tienes una cuenta?
							<a href="register.html" class="register-link">Registrarse aquí</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>
