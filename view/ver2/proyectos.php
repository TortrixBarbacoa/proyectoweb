<?php
session_start();
if (!$_SESSION['user_id']) {
    header("location: ../ver2/login.php");
}

include_once("../../model/functions.php");

$usrClass = new usuariosModel();
$result = array();
$resultRoles = array();
$result = $usrClass->getproyecto();


?> 
   <!-- Principio Primer Row -->
    <div class="row">
    <script src="../../assets/js/moduloUsuarios.js"></script>
        <!-- Vista Resumida Inventarios -->
      

        <!-- Vista Resumida Proyectos -->
       
            <div class="card">
            <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">PROYECTOS ACTIVOS</h1>
        </div>
            <div class="col text-center">
                <form method="POST">
    <div class="card-header">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           
        </div>
    </div>

    <div class="card-body">


        <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" id="btnNuevoUsuario" name="btnNuevoUsuario" type="button"
                    data-bs-toggle="modal" data-bs-target="#formNuevoUsuario">Nuevo Proyecto</button>    
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">OBSERVACION</th>
                            <th scope="col">INICIA</th>
                            <th scope="col">FINALIZ</th>
                            <th scope="col">ESTADO</th> 
                            <th scope="col">EDITAR</th>
                            <th scope="col">ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                while ($fila = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                       
                            <th><?php echo $fila['id_proyecto']; ?></th>
                            <td><?php echo $fila['observaciones']; ?></td>
                            <td><?php echo $fila['fecha_inicio']; ?></td>
                            <td><?php echo $fila['fecha_fin']; ?></td>
                            <td><?php echo $fila['estado']; ?></td>
                          
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
                </div>

            </div>

        <!-- Vista Resumida Proyectos -->
    </div>
    <!-- Fin Primer Row -->
    
    <!-- Principio Segundo Row -->
    <div class="row">
        
        <!-- Gráfica 1 -->
        <div class="col-4 container mx-2 my-4 p-5 text-center dashbox">
        <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-person-circle-check"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Operadores Disponibles</h3>
                </div>

        </div>
        <!-- Gráfica 1 -->

        <!-- Gráfica 2 -->
        <div class="col-4 container mx-2 my-4 p-5 text-center dashbox">
        <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-file-signature"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Clientes</h3>
                </div>
        </div>
        <!-- Gráfica 2 -->

        <!-- Conjunto de Task Buttons -->
      
<!-- AQUI INICIA ESTA EL FORMULARIO MODAL PARA AGREGAR USUARIOS -->
<div class="modal fade" id="formNuevoUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formNuevoUsuario">Crea tu proyecto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="obs" placeholder="aqui va tu Usuario">
                        <label for="obs">Deja tu observación</label>
                    </div>

                    <div class="row g-2">
                    <div class="col-md">
                     
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fecha_inicio" placeholder="aqui va tu nombre">
                        <label for="fecha_inicio">Fecha Inicio</label>
                    </div>   
                    </div>
                    <div class="col-md">
                                          
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fecha_fin" placeholder="aqui va tu apellido">
                        <label for="fecha_fin">Fecha Fin</label>
                    </div> 
                    
                    </div>
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


     

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="newP" id="newP">Agregar Usuario</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>