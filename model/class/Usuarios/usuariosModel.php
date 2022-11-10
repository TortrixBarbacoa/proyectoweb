<?php 

class usuariosModel {

    /**
     * Funcion para obtener el listado de usuarios
     */
    function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
        user,                        
        nombres,
        apellidos,
        password,
        email                                         
        
                                                            
   
                FROM proyectoweb ";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    

    /**
     * Funcion para obtener el listado de usuarios
     */
    function getUsuarioById($user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
        user,                        
        nombres,
        apellidos,
        email                                                               
   
                FROM proyectoweb where id = $user_id";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    /**
     * funcion para crear nuevo usuario
     */
    function crearUsuario($usuario, $nombres, $apellidos, $email, $password, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "INSERT INTO proyectoweb
                    (
        user,                        
        nombres,
        apellidos,
        email,
        password,
        user_created_id,
        fecha_created
                                                          
   
                    )
                    VALUES
                    (
                    '$usuario',
                    '$nombres',
                    '$apellidos',                     
                    '$email',
                    '$password', 
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

    /**
     * Función para actualizar un usuario
     */

    function actualizarName($nombres, $user_update_id, $user_id){
        $nombres = $_POST["actualizarName"];
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE
                    SET nombres = '$nombres',
                    updated_user_id = $user_update_id,
                    WHERE id = $user_id";
    }

    function actualizarUsuario($nombres, $apellidos, $usuario, $password, $email, $user_update_id, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE proyectoweb 
                    SET nombres = '$nombres',
                        apellidos = '$apellidos',
                        user = '$usuario',
                        password = '$password',                                            
                        updated_user_id = $user_update_id,
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

    /**
     * funcion para eliminar un usuario por su id
     */
    function eliminarUsuario($user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "DELETE FROM proyectoweb WHERE id = $user_id";
        
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