<?php

include_once("../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
					<div class="heading mb-3">
						<h4>Crear Cuenta</h4>
					</div>
					<form>
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" id="nombres" for="nombres" placeholder="Nombre Completo" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" id="usuario" for="usuario" placeholder="Correo Electronico" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" id="password"  for="password" placeholder="Contraseña" required>
						</div>
						<div class="row mb-3">
							<div class="col-12 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Acepto todos los términos y condiciones</label>
								</div>
							</div>
						</div>
						<div class="text-left mb-3">
							<button  id="btnAgregarUsuario" class="btn btn-success me-md-2 ">Registrar</button>
						</div>

						<div class="text-white">¿Ya tienes una cuenta?
							<a href="login.php" class="login-link">Entre aquí</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>