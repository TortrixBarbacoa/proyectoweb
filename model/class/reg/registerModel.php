<?php

class registerModel {

    /**
     * METODO DE AUTENTICACION
     */

    function registrarcliente($usuario, $nombres, $apellidos, $email, $password, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "INSERT INTO proyectoweb
        (
        user,                        
        nombres,
        apellidos,
        email,
        password,
        estado,
        roles_id,
        rol_name,
        user_create_id,
        fecha_created)
        VALUES
        (
        '$usuario',
        '$nombres',
        '$apellidos',                     
        '$email',
        '$password', 
        'A',
        '1',
        'Cliente',   
        '$user_id',                                                          
        now())";        

        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            $conexionClass->desconectar($conexion);
            return 0;
        }
    }



}

?>