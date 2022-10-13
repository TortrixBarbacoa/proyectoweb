<?php

class loginModel {

    /**
     * METODO DE AUTENTICACION
     */

     function autenticar($email, $pass){
        $connClass = new Tools();
        $conexion = $connClass->conectar();

        $sql = "SELECT
                    *
                FROM
                    email
                WHERE
                    UPPER(email) = UPPER('$email')
                    and password = '$pass'";

        $resultado = mysqli_query($conexion, $sql);
        $connClass->desconectar($conexion);
        
        return $resultado;
     }


}

?>