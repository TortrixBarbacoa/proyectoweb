<?php 

class usuariosModel {

    /**
     * Funcion para obtener el listado de usuarios
     */
    function getClientes(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql="SELECT 
        id_cliente,
        nombre_cliente,
        nit,
        estado
        
        FROM Clientes";
        ;

        
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
        user,                        
        nombres,
        apellidos,
        password,
        email,
        roles_id,
        rol_name                                                                                   
   
                FROM proyectoweb";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    function getherramientas(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql="SELECT id_herramientas,
        nombre_herramienta,
        usuario_creacion_id,
        fecha_creacion,
        herramienta_updated_id,
        fecha_actualizacion,
        estado_herramientas

                FROM herramientas";

        
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }


    function getherramientasbyId($herramientas_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql="SELECT id_herramientas,
        nombre_herramienta,
        usuario_creacion_id,
        fecha_creacion,
        herramienta_updated_id,
        fecha_actualizacion,
        estado_herramientas

                FROM herramientas where id_herramientas=$herramientas_id";

        
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
        password,
        email,
        roles_id,
        rol_name                                                             
   
                FROM proyectoweb where id = $user_id";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }


    function getroll(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id_rol,
        nombre,                        
        usuario_creacion_id, 
        usuario_creacion, 
        usuario_updated_id, 
        fecha_actualizacion, 
        estado
                                                     
   
                FROM roles
                WHERE id_rol>=0";
 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }

    function getproyecto(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT
        id_proyecto,
        observaciones,
        fecha_inicio,
        fecha_fin,
        estado
        FROM proyecto";

 
        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }

    function getrollbyusuarioid(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
        user,                        
        nombres,
        apellidos,
        password,
        email,
        roles_id                                            
   
                FROM proyectoweb
                WHERE roles_id=1";

        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    
    function getpersonalbyusuarioid(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT id,
        user,                        
        nombres,
        apellidos,
        password,
        email,
        roles_id,
        rol_name                                            
   
                FROM proyectoweb
                WHERE roles_id>=0";

        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return $resultado;
    }
    /**
     * funcion para crear nuevo usuario
     */
    function crearUsuario($usuario, $nombres, $apellidos, $email, $password,$rol_name, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "INSERT INTO proyectoweb
        (
        user,                        
        nombres,
        apellidos,
        email,
        password,
        rol_name,
        estado,
        user_create_id,
        fecha_created)
        VALUES
        (
        '$usuario',
        '$nombres',
        '$apellidos',                     
        '$email',
        '$password', 
        '$rol_name', 
        'A', 
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

    function crearHerramientas($nombreh, $estado, $herramienta_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
       
       $sql= "INSERT INTO herramientas
        (
        nombre_herramienta,
        estado_herramientas,
        usuario_creacion_id,
        fecha_creacion)
        VALUES(
        '$nombreh',
        '$estado',
        '$herramienta_id',
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
    
    function crearproyecto($obs, $fecha_inicio, $fecha_fin){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
       $sql="INSERT INTO proyecto
       (
        observaciones,
        fecha_inicio,
        fecha_fin,
        estado,
        fecha_creacion
        )
       VALUES(
       '$obs',
       '$fecha_inicio',
       '$fecha_fin',
       'ACTIVO',
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

    function actualizarName($nombres, $update_user_id, $user_id){
        $nombres = $_POST["actualizarName"];
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE
                    SET nombres = '$nombres',
                    update_user_id = $update_user_id,
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

    function actualizarUsuario($nombres, $apellidos, $usuario, $password, $email, $update_user_id, $user_id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "UPDATE proyectoweb 
                    SET nombres = '$nombres',
                        apellidos = '$apellidos',
                        user = '$usuario',
                        email = '$email',
                        password = '$password',                                            
                        update_user_id = $update_user_id,
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