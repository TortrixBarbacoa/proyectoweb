<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../../view/ver2/mainEditProf.php");
}

include_once("model/functions.php");
$usrClass = new actualizarModel();
$result = 0;
$respuesta = array();


$actusuario = (isset($_POST['actualizar_usuario'])) ? $_POST['actualizar_usuario'] : "0";

if($actusuario == 1){
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";


    $result = $usrClass->actusuario($nombres, $apellidos, $password, $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}

?>