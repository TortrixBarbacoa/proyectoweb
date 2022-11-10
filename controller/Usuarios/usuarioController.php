<?php 
session_start();
if (!$_SESSION['user_id']){
    header("location: ../../view/ver2/login.php");
}


include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$result = 0;
$respuesta = array();

$obtenerUsuario = (isset($_POST['obtener_usuario'])) ? $_POST['obtener_usuario'] : "0";
$crearUsuario = (isset($_POST['crear_usuario'])) ? $_POST['crear_usuario'] : "0";
$actualizarUsuario = (isset($_POST['actualizar_usuario'])) ? $_POST['actualizar_usuario'] : "0";
$eliminarUsuario = (isset($_POST['eliminar_usuario'])) ? $_POST['eliminar_usuario'] : "0";
$actualizarName = (isset($_POST['actualizar_nombres'])) ? $_POST['actualizar_nombres'] : "0";


if($obtenerUsuario == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";
        
    $result = $usrClass->getUsuarioById($user_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['nombres'] = $fila['nombres'];
        $respuesta['apellidos'] = $fila['apellidos'];
        $respuesta['user'] = $fila['user'];
        $respuesta['password'] = $fila['password'];
        $respuesta['email'] = $fila['email'];
        $respuesta['telefono'] = $fila['telefono'];

    }

    echo json_encode($respuesta);
}

if($crearUsuario == 1){

    $usuario = (isset($_POST['user'])) ? $_POST['user'] : "0";
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
    
   
        
    $result = $usrClass->crearUsuario( $usuario, $nombres, $apellidos, $email, $password,  $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if ($actualizarName ==1) {
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";

    $result = $usrClass->actualizarName($nombres $_SESSION['user_id'])

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}


if($actualizarUsuario == 1){
    $user_id = (isset($_POST['id'])) ? $_POST['id'] : "0";
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $usuario = (isset($_POST['user'])) ? $_POST['user'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "0";
        
    $result = $usrClass->actualizarUsuario($nombres, $apellidos, $usuario, $password, $email, $telefono, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($eliminarUsuario == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";

    $result = $usrClass->eliminarUsuario($user_id);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

?>