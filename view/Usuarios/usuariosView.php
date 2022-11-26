<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../ver2/login.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$result = array();
$resultRoles = array();
$result = $usrClass->getUsuarios();
$resultRoles = $usrClass->getroll();

?>

<script src="../../assets/js/moduloUsuarios.js"></script>
<div class="card">
    <form method="POST">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">LISTADO DE USUARIOS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoUsuario">Nuevo Usuario</button>    
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">ROLL</th>
                            <th scope="col">EMAIL</th> 
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                       
                            <th><?php echo $fila['id']; ?></th>
                            <td><?php echo $fila['user']; ?></td>
                            <td><?php echo $fila['nombres']." ".$fila['apellidos']; ?></td>
                            <td><?php echo $fila['rol_name']; ?></td>
                            <td><?php echo $fila['email']; ?></td>
                          
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-success me-md-2" id="btnActualizarUsuario" name="btnActualizarUsuario" type="button"
                                          data-bs-toggle="modal" data-bs-target="#formActualizaUsuario" onclick="obtenerUsuario(<?php echo $fila['id']; ?>);">Actualizar Datos</button> 
                                    </div>
                            </td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-danger me-md-2" id="btnEliminarUsuario"
                                        onclick="eliminarUsuario(<?php echo $fila['id']; ?>);" name="btnEliminarUsuario"
                                        type="button">Eliminar</button>
                                </div>
                            </td>
                        </tr>

                    <?php 
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
                </form>
                <br><br><br>
    </div>
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
    <div class="modal fade" id="formNuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoUsuario">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario" placeholder="aqui va tu Usuario">
                        <label for="usuario">Usuario</label>
                    </div>

                    <div class="row g-2">
                    <div class="col-md">
                     
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" placeholder="aqui va tu nombre">
                        <label for="nombres">Nombres</label>
                    </div>   
                    </div>
                    <div class="col-md">
                                          
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos" placeholder="aqui va tu apellido">
                        <label for="apellidos">Apellidos</label>
                    </div> 
                    </div>
                    </div>
               



                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="aqui va tu clave">
                        <label for="email">Correo Electronico</label>
                    </div>
                    <div class="form-floating input-group mb-3">
                
                    <label class="input-group-text">Roll</label>
                     <select class="form-select" id="roll_name">
                        <?php
                        while($dato =mysqli_fetch_array($resultRoles)){

                           
                        
                        ?>
                        
                     <option selected value="<?php echo $dato[nombre]; ?>" id="roll_name"><?php echo $dato['nombre'];?></option>
                          
                    <?php
                      }
                      ?>
                        </select>
                               
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="aqui va tu clave">
                        <label for="password">Clave</label>
                   

     

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="newUsuario" id="newUsuario">Agregar Usuario</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA Actualizar USUARIOS -->
    <div class="modal fade" id="formActualizaUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formActualizaUsuario">Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  aria-label="Disabled input example" id="id_upd">
                        <label for="id_upd">ID</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres_upd" placeholder="aqui va tu nombre">
                        <label for="nombres_upd">Nombres</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidos_upd" placeholder="aqui va tu apellido">
                        <label for="apellidos_upd">Apellidos</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario_upd" placeholder="username">
                        <label for="usuario_upd">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email_upd" placeholder="">
                        <label for="email_upd">correo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_upd" placeholder="aqui va tu clave">
                        <label for="password_upd">Clave</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="actUsuario">Actualizar Usuario</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>