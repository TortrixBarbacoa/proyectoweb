<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: login.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$loginModel = new loginModel();
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
    <script src="../../assets/js/moduloUsuarios.js"></script>
    
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
            <span class="input-group-text" id="basic-addon2">Usuario</span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['username'];?>" aria-label="Disabled input example" disabled readonly aria-describedby="basic-addon1">
       
        </div>
        <!-- Input Username -->
         <!-- Input Correo -->
         <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon2">Email</span>
            <input type="text" class="form-control" value="<?php echo $_SESSION['e_mail'];?>" aria-label="Disabled input example" disabled readonly aria-describedby="basic-addon1">
       
        </div>
        <!-- Input Correo -->
        
    </div>
    <!-- Primer Grupo de Inputs -->
</div>
<!-- Top Input Box -->

<!-- Bot Input Box -->
<!-- Segundo Grupo de Inputs -->
<div class="container profbox justify-content-center my-4 mx-2 py-1">
<form class="form" method="POST" action="../../controller/ActualizarUsuario/actualizarUcontroller.php">
        <!-- Input Nombres -->
        <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" for="innombre" id="basic-addon1">Nombres</span>
            <input class="form-control" id="innombre"  placeholder="Digite solo sus nombres" aria-label="Nombres" aria-describedby="basic-addon1">
           
        </div>
    </div>
    <!-- Input Nombre -->

        <!-- Input Apellidos -->
        <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text"  for="inapellido" id="basic-addon1">Apellidos</span>
            <input class="form-control" id="inapellido" placeholder="Digite sus apellidos" aria-label="Apellidos" aria-describedby="basic-addon1">
           
          
        </div>
    </div>
    <!-- Input Apellidos -->
   
    <!-- Input Contraseña -->
    <div class="container profbox my-2">
        <div class="input-group my-3">
            <span class="input-group-text" id="basic-addon1" for="inpassword">Contraseña</span>
            <input type="password" class="form-control"   id="inpassword" placeholder="Contraseña Nueva" aria-label="password" aria-describedby="basic-addon1">
           
        </div>
        <button type="button" class="btn btn-primary" id="aactUsuario">Actualizar Usuario</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
    </div>
    
       
</form>
    <!-- Input Contraseña -->
</div>
<!-- Segundo Grupo de Inputs -->
<!-- Bot Input Box -->


</body>
</html>
<!-- Top Input Box -->
