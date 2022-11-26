<?php
ob_start();
session_start();

include_once("../../model/functions.php");

$registerModel = new registerModel();

$usuario = $_POST['inuser'];
$nombres = $_POST['innombres'];
$apellidos = $_POST['inapellidos'];
$email = $_POST['inEmail'];
$clave = $_POST['inPassword'];

$result = 0;
$respuesta = array();

$registrarCliente =(isset($_POST['registrar_cliente'])) ? $_POST['registrar_cliente'] : "0";

if($registrarCliente == 1){

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "0";
    $nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : "0";
    $apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : "0";    
    $email = (isset($_POST['email'])) ? $_POST['email'] : "0";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "0";
    
   
        
    $result = $usrClass->crearUsuario($usuario, $nombres, $apellidos, $email, $password,  $_SESSION['user_id']);

    $respuesta['resultado'] = $result;
    echo json_encode($respuesta);
}


echo "ultimo paso";

ob_end_flush();
?>