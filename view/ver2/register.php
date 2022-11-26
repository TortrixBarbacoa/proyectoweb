<?php

session_start();

include_once("../../model/functions.php");
include_once("../../model/class/reg/registerModel.php");
$usrClass = new usuariosModel();
$loginModel = new loginModel();
$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JQUERY -->
    <script src="../../assets/js/moduloUsuarios.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/cssVer2/stylelog.css">
    <!-- CSS -->

    <!-- Google Fonts -->
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Rubik&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins&subset=latin,latin-ext'>
    <!-- Google Fonts -->

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/87a0dc1d3c.js" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
</head>
<body>
    
    <!-- Main Container -->
    <div id="bck" class="main-container d-flex justify-content-center py-4">
    
        <!-- Container Form Box -->
        <div class="container my-5 regbox row">
            <!-- Container Imagen -->
            <div class="col regimg"></div>
            <!-- Container Imagen -->

            <!-- Container Login -->
            <div class="col logimg2 py-5">
            <form class="form" method="POST" action="../../controller/Usuarios/usuariosController.php">
                <!-- Label Iniciar Sesión -->
                <div class="text-center my-2">
                    <h1>Formulario de Registro</h1>
                </div>
                <!-- Label Iniciar Sesión -->

                <!-- Form Email -->
                <div class="my-3 mx-4">
                    <label for="exampleFormControlInput1" class="form-label" id="usuario" ><h2>Usuario</h2></label>
                    <input type="text" class="form-control" id="usuario" placeholder="Ingresar Usuario" name="usuario">
                </div>
    
                <div class="my-5 mx-4">
                <div class="input-group">
                <span class="input-group-text">Nombres y Apellidos</span>
                <input type="text" aria-label="Nombres" id="nombres" name="nombres" class="form-control">
                <input type="text" aria-label="Apellidos" id="apellidos" name="apellidos"class="form-control">
                </div>
                </div>
                <!-- Form Email -->
                <!-- Form Email -->
                <div class="my-3 mx-4">
                    <label for="exampleFormControlInput1" id="emails" class="form-label" ><h2>Correo:</h2></label>
                    <input type="text" class="form-control" id="email" placeholder="Ingrese su Correo electronico" name="email">
                </div>
                <!-- Form Email -->

                <!-- Form Contraseña -->
                <div class="mt-4 mb-4 mx-4">
                    <label for="password" class="form-label"><h2>Contraseña</h2></label>
                    <input type="Password" class="form-control" id="password" placeholder="Ingresar Contraseña" name="password">
                </div>

                <!-- Form Contraseña -->
                 <div class="mt-4 mb-5 mx-4">
                    <label for="exampleFormControlInput1" class="form-label"><a href="login.php"><h2>Ya tienes cuenta?</h2></a></label>
                    
                </div>

                <!-- Botón Ingresar -->
                <div class="container d-flex justify-content-center">
                <div class="text-capitalize text-center logbtn">
							<button type="button" id="regC" name="regC" class="btn">REGISTRAR</button>
						</div>
                </div>
                <!-- Botón Ingresar -->
            </div>
            </form>    <!-- form Login -->
            <!-- Container Login -->
        </div>
        <!-- Container Form Box -->
    </div>
    <!-- Main Container -->
</body>
</html>