<?php 
session_start();
if(!$_SESSION['user_id']){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista General</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/template.css">
    <!-- CSS -->

    <!-- Google Fonts -->
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Rubik&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins&subset=latin,latin-ext'>
    <!-- Google Fonts -->

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/87a0dc1d3c.js" crossorigin="anonymous"></script>
    <!-- Fontawesome -->

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
    
        <!-- Contenedor Navbar -->
        <div class="container-fluid">

            <!-- Logo Amazing Inventions -->
            <a class="navbar-brand" href="#" style="margin-left: 50px;">
                <img src="../assets/img/logo.png" alt="" width="170.4px" height="48.8px">
            </a>
            <!-- Logo Amazing Inventions -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Configuración de Navbar -->

            <!-- Contenido de Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Título "Gestión de Inventario" -->
                <div class="navbar-nav">
                    <li class="nav-item" style="font-size: 20px; color: white; margin-left: 50px;"><h2 style="font-size: 25px;">Gestión de Inventario</h2></li>
                </div>
                <!-- Título "Gestión de Inventario" -->

                <!-- Searchbar -->
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Realizar una Búsqueda" aria-label="Search" style="width: 500px; margin-left: 52px;">
                    <button class="btn" type="submit" style="color: black; background-color: #FFCC00;">Buscar</button>
                </form>
                <!-- Searchbar -->

                <!-- Card de Usuario -->
                <li class="nav-item dropdown perf row">
                    <div class="col-3" style="height: 50px; background-color: white; margin-left: 10px; margin-right: 10px;"></div>
                    <a class="nav-link dropdown-toggle col-7" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: Lato; font-size: 18px; color: black; margin-top: 12px;">
                        Fulano Perensejo
                    </a>

                    <!-- DROPDOWN DE OPCIONES (CERRAR SESION) -->

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Ver Perfil <i class="fa-solid fa-user" style="margin-left: 5px;"></i></a></li>
                        <li><a class="dropdown-item" href="#">Configuración<i class="fa-solid fa-gear" style="margin-left: 5px;"></i></a></li>
                        <li><span class="dropdown-item" role="button" style="color: red;">Cerrar Sesión <i class="fa-solid fa-right-from-bracket" style="margin-left: 5px; color: red;"></i></span></li>
                    </ul>
                </li>   
                <!-- Card de Usuario -->
                
            </div>
            <!-- Contenido de Navbar -->

        </div>
        <!-- Contenedor Navbar -->

    </nav>
    <!-- Navbar -->
    
    <!-- Sidebar Simple -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto sticky-top" style="background-color: #FFCC00;">
                <div class="d-flex flex-sm-column flex-row flex-nowrap justify-content-center">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">

                        <!-- Botón Inicio -->
                        <li>
                            <a href="#" class="nav-link py-3 px-2 options" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Inicio" style="color: black;">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                        <!-- Botón Inicio -->
    
                        <!-- Botón Inventario Herramientas -->
                        <li class="nav-item">

                            <!-- Dropdown Herramientas -->
                            <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Inventario Herramientas" style="color: black;">
                                
                                <!-- Botón Dropdown -->
                                <button class="btn btn-secondary dropdown-toggle py-3 px-2 options" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; background-color: #FFCC00; border: none;">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                </button>
                                <!-- Botón Dropdown -->

                                <!-- Contenido Dropdown -->
                                <ul class="dropdown-menu" style="background-color: white;">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 1</a></li>
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 2</a></li>
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 3</a></li>
                                </ul>
                                <!-- Contenido Dropdown -->

                            </div>
                            <!-- Dropdown Herramientas -->

                        </li>
                        <!-- Botón Inventario Herramientas -->
    
                        <!-- Botón Inventario Materiales -->
                        <li class="nav-item">
                            <!-- Dropdown Materiales -->
                            <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Inventario Materiales" style="color: black;">
                                
                                <!-- Botón Dropdown -->
                                <button class="btn btn-secondary dropdown-toggle py-3 px-2 options" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; background-color: #FFCC00; border: none;">
                                    <i class="fa-solid fa-person-digging"></i>
                                </button>
                                <!-- Botón Dropdown -->

                                <!-- Contenido Dropdown -->
                                <ul class="dropdown-menu" style="background-color: white;">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 1</a></li>
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 2</a></li>
                                    <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 3</a></li>
                                </ul>
                                <!-- Contenido Dropdown -->

                            </div>
                            <!-- Dropdown Materiales -->

                        </li>
                        <!-- Botón Inventario Materiales -->

                        <!-- Botón Gestión Proyectos -->
                        <li class="nav-item">

                            <!-- Dropdown Proyectos -->
                            <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Gestionar Proyectos" style="color: black;">
                                
                                <!-- Botón Dropdown -->
                                <button class="btn btn-secondary dropdown-toggle py-3 px-2 options" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; background-color: #FFCC00; border: none;">
                                    <i class="fa-solid fa-list-check"></i>
                                </button>
                                <!-- Botón Dropdown -->

                                <!-- Contenido Dropdown -->
                                <ul class="dropdown-menu" style="background-color: white;">
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 1</a></li>
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 2</a></li>
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 3</a></li>
                                </ul>
                                <!-- Contenido Dropdown -->

                            </div>
                            <!-- Dropdown Proyectos -->

                        </li>
                        <!-- Botón Gestión de Proyectos -->
    
                        <!-- Botón Gestión Usuarios -->
                        <li class="nav-item">

                            <!-- Dropdown Usuarios -->
                            <div class="dropdown" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Gestionar Usuarios" style="color: black;">
                                
                                <!-- Botón Dropdown -->
                                <button class="btn btn-secondary dropdown-toggle py-3 px-2 options" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; background-color: #FFCC00; border: none;">
                                    <i class="fa-solid fa-users"></i>
                                </button>
                                <!-- Botón Dropdown -->

                                <!-- Contenido Dropdown -->
                                <ul class="dropdown-menu" style="background-color: white;">
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 1</a></li>
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 2</a></li>
                                  <li><a class="dropdown-item" href="#" style="color: black; font-family: Poppins;">Categoría 3</a></li>
                                </ul>
                                <!-- Contenido Dropdown -->

                            </div>
                            <!-- Dropdown Usuarios -->

                        </li>
                        <!-- Botón Gestión de Usuarios -->

                        <!-- Logo AI Product -->
                        <div class="pb-4">
                            <span class="d-block p-3 text-decoration-none d-flex" href="#" style="margin-top: 380px;">
                                <img src="../assets/img/prodsimpleblack.png" alt="" width="34.2px" height="29.8px">
                            </span>
                        </div>
                        <!-- Logo AI Product -->

                    </ul>
                </div>
            </div>
            <!-- Sidebar simple -->

            <!-- Contenido -->
            <div class="col-sm p-3 min-vh-100">

                <div style="height: 90px;"></div>

                <h1 class="text-center" style="margin-top: 10px;">Vista General</h1>

                <div class="divdecor"></div>

                <!-- Row Vista General de Inventarios -->
                <div class="row" style="margin-bottom: 30px;">

                    <!-- Card Inventario Herramientas -->
                    <div class="col card" style="background-color: black; margin-left: 35px; margin-right: 35px;">
                        <div class="row">

                            <!-- Texto Card -->
                            <div class="col-8">
                                <div style="margin-left: 10px; margin-bottom: 20px;">

                                    <!-- Cantidad de Registros en el Inventario -->
                                    <h2 style="font-size: 50px; color: #FFCC00; margin-top: 13px;">
                                        000
                                    </h2>
                                    <!-- Cantidad de Registros en el Inventario -->

                                    <!-- Título de Inventario -->
                                    <h3 style="font-size: 15px; color: white; margin-top: 10px;">
                                        Herramientas Registradas
                                    </h3>
                                    <!-- Título de Inventario -->

                                    <!-- Botón Ver Detalle -->
                                    <a href="#" class="btn" style="background-color: #FFCC00; color: black;"><h3 style="font-size: 12px; margin-top: 7px;">Ver Detalle <i class="fa-solid fa-chevron-right"></i></h3></a>
                                     <!-- Botón Ver Detalle -->

                                </div>
                            </div>
                            <!-- Texto Card -->
                            
                            <!-- Ícono Herramientas -->
                            <div class="col-4" style="color: #FFCC00; font-size: 100px; margin-top: 9px;">
                                <i class="fa-solid fa-toolbox"></i>
                            </div>
                            <!-- Ícono Herramientas -->

                        </div>
                    </div>
                    <!-- Card Inventario Herramientas -->

                    <!-- Card Inventario de Materiales -->
                    <div class="col card" style="background-color: black; margin-left: 35px; margin-right: 35px;">
                        <div class="row">

                            <!-- Texto Card -->
                            <div class="col-8">
                                <div style="margin-left: 10px; margin-bottom: 20px;">

                                    <!-- Cantidad de Registros en el Inventario -->
                                    <h2 style="font-size: 50px; color: #FFCC00; margin-top: 13px;">
                                        000
                                    </h2>
                                    <!-- Cantidad de Registros en el Inventario -->

                                    <!-- Título de Inventario -->
                                    <h3 style="font-size: 15px; color: white; margin-top: 10px;">
                                        Elementos de Material
                                    </h3>
                                    <!-- Título de Inventario -->

                                    <!-- Botón Ver Detalle -->
                                    <a href="#" class="btn" style="background-color: #FFCC00; color: black;"><h3 style="font-size: 12px; margin-top: 7px;">Ver Detalle <i class="fa-solid fa-chevron-right"></i></h3></a>
                                     <!-- Botón Ver Detalle -->

                                </div>
                            </div>
                            <!-- Texto Card -->
                            
                            <!-- Ícono Materiales -->
                            <div class="col-4" style="color: #FFCC00; font-size: 100px; margin-top: 9px;">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <!-- Ícono Materiales -->
                            
                        </div>
                    </div>
                    <!-- Card Inventario de Materiales -->

                    <!-- Card Gestión de Usuarios -->
                    <div class="col card" style="background-color: black; margin-left: 35px; margin-right: 35px;">
                        <div class="row">

                            <!-- Texto Card -->
                            <div class="col-8">
                                <div style="margin-left: 10px; margin-bottom: 20px;">

                                    <!-- Cantidad de Registros en el Inventario -->
                                    <h2 style="font-size: 50px; color: #FFCC00; margin-top: 13px;">
                                        000
                                    </h2>
                                    <!-- Cantidad de Registros en el Inventario -->

                                    <!-- Título de Inventario -->
                                    <h3 style="font-size: 15px; color: white; margin-top: 10px;">
                                        Usuarios Registrados
                                    </h3>
                                    <!-- Título de Inventario -->

                                    <!-- Botón Ver Detalle -->
                                    <a href="#" class="btn" style="background-color: #FFCC00; color: black;"><h3 style="font-size: 12px; margin-top: 7px;">Ver Detalle <i class="fa-solid fa-chevron-right"></i></h3></a>
                                     <!-- Botón Ver Detalle -->

                                </div>
                            </div>
                            <!-- Texto Card -->
                            
                            <!-- Ícono Usuarios -->
                            <div class="col-4" style="color: #FFCC00; font-size: 100px; margin-top: 9px;">
                                <i class="fa-solid fa-person-rays"></i>
                            </div>
                            <!-- Ícono Usuarios -->
                            
                        </div>
                    </div>
                    <!-- Card Gestión de Usuarios -->

                </div>
                <!-- Row Vista General de Inventarios -->

                <!-- Row Vista General de Inventarios 2 -->
                <div class="row">
                    
                    <!-- Card Editar Perfil -->
                    <div class="col-4 card" style="background-color: black; margin-left: 35px; margin-right: 15px;">

                        <div class="row">
                            <div class="col-8">
                                <div style="margin-left: 10px; margin-top: 20px;">
                                    
                                    <!-- Título de Card -->
                                    <h3 style="font-size: 28px; color: white; margin-top: 40px;">
                                    Editar Perfil
                                    </h3>
                                    <!-- Título de Card -->

                                    <!-- Botón Ver Detalle -->
                                    <a href="#" class="btn" style="background-color: #FFCC00; color: black;"><i class="fa-solid fa-chevron-right"></i></a>
                                    <!-- Botón Ver Detalle -->
                                    </div>
                            </div>

                            <!-- Ícono Editar Perfil -->
                            <div class="col-4" style="color: #FFCC00; font-size: 100px;">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <!-- Ícono Editar Perfil -->

                        </div>

                    </div>
                    <!-- Card Editar Perfil -->

                    <!-- Card Administrar Usuarios -->
                    <div class="col-4 card" style="background-color: black; margin-left: 35px; margin-right: 15px;">

                        <div class="row">
                            <div class="col-8">
                                <div style="margin-left: 10px; margin-top: 20px;">

                                    <!-- Título de Card -->
                                    <h3 style="font-size: 28px; color: white; margin-top: 10px;">
                                    Administrar Usuarios
                                    </h3>
                                    <!-- Título de Card -->

                                    <!-- Botón Ver Detalle -->
                                    <a href="#" class="btn" style="background-color: #FFCC00; color: black;"><i class="fa-solid fa-chevron-right"></i></a>
                                    <!-- Botón Ver Detalle -->
                                    </div>
                            </div>

                            <!-- Ícono Administrar Usuarios -->
                            <div class="col-4" style="color: #FFCC00; font-size: 100px;">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                            <!-- Ícono Administrar Usuarios -->

                        </div>

                    </div>
                    <!-- Card Administrar Usuarios -->

                    <!-- Botón Gestionar Proyectos -->
                    <a href="#" class="btn col-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Gestionar Proyectos" style="background-color: #FFCC00; margin-left: 45px; margin-right: 20px;">
                        <i style="color: black; font-size: 50px; margin-top: 47px;" class="fa-solid fa-compass-drafting text-center"></i>
                    </a>
                    <!-- Botón Gestionar Proyectos -->

                    <!-- Botón Configuración -->
                    <a href="#" class="btn col-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Configuración" style="background-color: #FFCC00; margin-left: 45px; margin-right: 20px;">
                        <i style="color: black; font-size: 50px; margin-top: 47px;" class="fa-solid fa-gear"></i>
                    </a>
                    <!-- Botón Configuración -->

                </div>
                <!-- Row Vista General de Inventarios 2 -->

            </div>
            
            <!-- Contenido -->
            
        </div>
    </div> 

    <!-- Footer -->
    <div class="w-100 p-3 d-flex justify-content-center" style="background-color: black;">
        <span class="text-center" style="margin-top: 50px; margin-bottom: 45px;">
            <h3 style="color: white; font-size: 20px;">No sé qué poner en el footer jaja</h3>
        </span>
    </div>
    <!-- Footer -->

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]', '.tt')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>