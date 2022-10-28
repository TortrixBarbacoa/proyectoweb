<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: dashboard.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();

$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <script src="assets/js/moduloUsuarios.js"></script>
    
</head>
<body>
    
<div class="container d-flex profbox justify-content-start my-4 mx-2 row">
    <!-- Imagen de Perfil -->
    <div class="profimgbox my-3 col-4">

    </div>
    <!-- Imagen de Perfil -->

    <!-- Primer Grupo de Inputs -->
    <div class="container mx-3 profbox col-10">

        <!-- Visualización Nombre -->
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Nombres</span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['user_nombre'];?>" aria-label="Disabled input example" disabled readonly aria-describedby="basic-addon1">
        </div>
        <!-- Visualización Nombre -->

        <!-- Visualización Apellido -->
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Apellidos</span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['user_apellido'];?>" aria-label="Disabled input example" disabled readonly aria-describedby="basic-addon1">
        </div>
        <!-- Visualización Apellido -->

        <!-- Input Username -->
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon2">Nombre de Usuario</span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['username'] ?>" aria-label="Disabled input example" disabled readonly aria-describedby="basic-addon1">
       
        </div>
        <!-- Input Username -->
    </div>
    <!-- Primer Grupo de Inputs -->
</div>
<!-- Top Input Box -->

<!-- Bot Input Box -->
<!-- Segundo Grupo de Inputs -->
<div class="container profbox justify-content-center my-4 mx-2 py-1">
        <!-- Input Nombres -->
        <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Nombres</span>
            <input type="password" class="form-control" placeholder="Digite solo sus nombres" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn ms-1 updbtn updContraseña">Actualizar Nombre</button>
        </div>
    </div>
    <!-- Input Nombre -->

        <!-- Input Apellidos -->
        <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Apellidos</span>
            <input type="password" class="form-control" placeholder="Digite sus apellidos" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn ms-1 updbtn updContraseña">Actualizar Apellidos</button>
        </div>
    </div>
    <!-- Input Apellidos -->

    <!-- Input Correo -->
    <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Correo Electrónico</span>
            <input type="text" class="form-control" placeholder="Digite el nuevo correo" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn ms-1 updbtn updCorreo">Actualizar Correo</button>
        </div>
    </div>
    <!-- Input Correo -->


    <!-- Probablemente inecesario queda pendiente -->
    <!-- Input Teléfono -->
    <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Número de Teléfono</span>
            <input type="number" class="form-control" placeholder="Digite " aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn ms-1 updbtn updContraseña">Actualizar Teléfono</button>
        </div>
    </div>
    <!-- Input Teléfono -->

    <!-- Input Contraseña -->
    <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1">Contraseña</span>
            <input type="password" class="form-control" placeholder="Contraseña Nueva" aria-label="Username" aria-describedby="basic-addon1">
            <button class="btn ms-1 updbtn updContraseña">Actualizar Contraseña</button>
        </div>
    </div>
    <!-- Input Contraseña -->
</div>
<!-- Segundo Grupo de Inputs -->
<!-- Bot Input Box -->


</body>
</html>
<!-- Top Input Box -->
