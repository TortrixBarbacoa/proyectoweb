<?php

class actualizarModel {

    /**
     * METODO DE ACTUALIZAR
     */
    function actusuario($nombres, $apellidos, $usuario, $password, $email, $user_update_id, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE proyectoweb
         SET innombre = '$nombres',
                        inapellido = '$apellidos',
                        inpassword = '$password',                                            

                        fecha_updated = now()
                WHERE id = $user_id";        
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