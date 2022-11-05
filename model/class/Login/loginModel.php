<?php

class loginModel {

    /**
     * METODO DE AUTENTICACION
     */

     function autenticar($usuario, $pass){
        $connClass = new Tools();
        $conexion = $connClass->conectar();

        $sql = "SELECT
                    *
                FROM
                    proyectoweb
                WHERE
                    UPPER(user) = UPPER('$usuario')
                    and password = '$pass'";

        $resultado = mysqli_query($conexion, $sql);
        $connClass->desconectar($conexion);
        
        return $resultado;
     }


}

?>