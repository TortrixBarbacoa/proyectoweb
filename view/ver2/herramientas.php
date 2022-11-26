<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../ver2/login.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$result = array();
$result = $usrClass->getherramientas();


?>
<script src="../../assets/js/moduloUsuarios.js"></script>
<div class="card">
    <form method="POST">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">LISTADO DE HERRAMIENTAS</h1>
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoUsuario">NUEVA HERRAMIENTA</button>    
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID_H</th>
                            <th scope="col">Nombre herramienta</th>
                            <th scope="col">Estado Herramienta</th> 
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                       
                            <th><?php echo $fila['id_herramientas']; ?></th>
                            <td><?php echo $fila['nombre_herramienta']." ".$fila['apellidos']; ?></td>
                            <td><?php echo $fila['estado_herramientas']; ?></td>
                          
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-success me-md-2" id="btnActualizarUsuario" name="btnActualizarUsuario" type="button"
                                          data-bs-toggle="modal" data-bs-target="#formActualizaUsuario" onclick="obtenerUsuario(<?php echo $fila['id_herramientas']; ?>);">Actualizar Datos</button> 
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
        <br><br><br>
                </form>
      
                <br><br><br>
    </div>
    <!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR HERRAMIENTAS -->
    <div class="modal fade" id="formNuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoUsuario">NUEVA HERRAMIENTA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreh" placeholder="aqui va tu Usuario">
                        <label for="nombreh">Nombre Herramienta</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="estado" placeholder="aqui va tu nombre">
                        <label for="estado">Estado de Herramienta</label>
                    </div>
                   
     

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="newH" id="newH">Agregar Usuario</button>
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