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
   <!-- Principio Primer Row -->
    <div class="row">
    <script src="../../assets/js/moduloUsuarios.js"></script>
        <!-- Vista Resumida Inventarios -->
        <div class="col-5 mr-3 row">
            <div class="row">
                <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-person-circle-check"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Operadores Disponibles</h3>
                </div>

                <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-hammer"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Herramientas en Inventario</h3>
                </div>
            </div>

            <div class="row">
                <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-user-group"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Usuarios</h3>
                </div>

                <div class="col p-3 m-2 dashbox">
                    <h4><i class="fa-solid fa-file-signature"></i></h4>
                    <span><h4>00</h4></span>
                    <h3>Clientes</h3>
                </div>
            </div>
        </div>
        <!-- Vista Resumida Inventarios -->

        <!-- Vista Resumida Proyectos -->
        <div class="col-7 ml-3 row overflow-auto dashover text-center" style="height: 345px;">
            <div class="container row mt-4">
                <div class="col text-center">
                    <h2>Proyecto</h2>
                </div>
                <div class="col text-center">
                    <h2>Cliente</h2>
                </div>
                <div class="col text-center">
                    <h2>Estado</h2>
                </div>
            </div>

            <hr class="hrcol mb-4">

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="pend">Suspendido</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="cancel">Cancelado</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="succ">Finalizado</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="activ">Activo</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="cancel">Cancelado</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="succ">Finalizado</h3>
                </div>
            </div>

            <div class="container row my-3">
                <div class="col text-center">
                    <h3>Proyecto</h3>
                </div>
                <div class="col text-center">
                    <h3>Cliente</h3>
                </div>
                <div class="col text-center">
                    <h3 class="activ">Activo</h3>
                </div>
            </div>
        </div>
        <!-- Vista Resumida Proyectos -->
    </div>
    <!-- Fin Primer Row -->
    
    <!-- Principio Segundo Row -->
    <div class="row">
        
        <!-- Gráfica 1 -->
        <div class="col-4 container mx-2 my-4 p-5 text-center dashbox">
            <h2>.</h2>
            <h2>.</h2>
            <h2>Espacio para futura gráfica</h2>
            <h2>.</h2>
            <h2>.</h2>
        </div>
        <!-- Gráfica 1 -->

        <!-- Gráfica 2 -->
        <div class="col-4 container mx-2 my-4 p-5 text-center dashbox">
            <h2>.</h2>
            <h2>.</h2>
            <h2>Espacio para futura gráfica</h2>
            <h2>.</h2>
            <h2>.</h2>
        </div>
        <!-- Gráfica 2 -->

        <!-- Conjunto de Task Buttons -->
        <div class="col-3 container mx-3 gx-5 my-4 px-2 text-center">
          
            <div class="taskbox my-3 p-2">
            <li class="marginside"> <a href="#" onclick="cargarContenido('proyectos.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-person-digging"></i>Nuevo Proyecto</a></li>
          
            </div>
        </div>
          
        <!-- Conjunto de Task Buttons -->
    </div>
    <!-- Fin Segundo Row -->
    