<?php 
echo "PASO 1"; 
session_start();
if (!$_SESSION['user_id']){
 
}


echo "PASO 2";

include_once("../../model/functions.php");

echo "PASO 3";
$usrClass = new usuariosModel();
$result = 0;
$respuesta = array();

$obtenerUsuario = (isset($_POST['obtener_usuario'])) ? $_POST['obtener_usuario'] : "0";
$obtenerrol= (isset($_POST['obtener_rol'])) ? $_POST['obtener_rol'] : "0";
$crearUsuario = (isset($_POST['crear_usuario'])) ? $_POST['crear_usuario'] : "0";
$crearHerramientas = (isset($_POST['crear_herramientas'])) ? $_POST['crear_herramientas'] : "0";
$actualizarUsuario = (isset($_POST['actualizar_usuario'])) ? $_POST['actualizar_usuario'] : "0";
$eliminarUsuario = (isset($_POST['eliminar_usuario'])) ? $_POST['eliminar_usuario'] : "0";
$actualizarName = (isset($_POST['actualizar_nombres'])) ? $_POST['actualizar_nombres'] : "0";
$crearcliente = (isset($_POST['crear_cliente'])) ? $_POST['crear_cliente'] : "0";
$crearproyecto = (isset($_POST['crear_proyecto'])) ? $_POST['crear_proyecto'] : "0";
echo "PASO 4";

if($obtenerUsuario == 1){
    $user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : "0";
        
    $result = $usrClass->getUsuarioById($user_id);

    if ($fila = mysqli_fetch_array($result)){
        $respuesta['id'] = $fila['id'];
        $respuesta['user'] = $fila['user'];
        $respuesta['nombres'] = $fila['nombres'];
        $respuesta['apellidos'] = $fila['apellidos'];
        $respuesta['email'] = $fila['email'];
        $respuesta['password'] = $fila['password'];
      
    }

    echo json_encode($respuesta);
}


if($crearUsuario == 1){

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
    $rol_name = (isset($_POST['roll_name'])) ? $_POST['roll_name'] : "0";
   
        
    $result = $usrClass->crearUsuario($usuario, $nombres, $apellidos, $email, $password,$rol_name, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($crearHerramientas == 1){

    $nombreh = (isset($_POST['nombreh'])) ? $_POST['nombreh'] : "0";
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "0";

    
   
        
    $result = $usrClass->crearHerramientas($nombreh, $estado,  $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($crearcliente == 1){

    $nombre_cliente = (isset($_POST['nombre'])) ? $_POST['nombre'] : "0";
    $nit = (isset($_POST['nit'])) ? $_POST['nit'] : "0";
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "0";    

   
        
    $result = $usrClass->crearcliente($nombre_cliente, $nit, $estado, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($crearproyecto == 1){

    $obs = (isset($_POST['obs'])) ? $_POST['obs'] : "0";
    $fecha_inicio = (isset($_POST['fecha_inicio'])) ? $_POST['fecha_inicio'] : "0";
    $fecha_fin = (isset($_POST['fecha_fin'])) ? $_POST['fecha_fin'] : "0";    

   
        
    $result = $usrClass->crearproyecto($obs, $fecha_inicio, $fecha_fin, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

if($actualizarUsuario == 1){


    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
   
        
    $result = $usrClass->actualizarUsuario($nombres, $apellidos, $usuario, $password, $email, $_SESSION['user_id']);

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