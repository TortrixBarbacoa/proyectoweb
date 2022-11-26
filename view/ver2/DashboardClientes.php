<?php 
session_start();
if(!$_SESSION['user_id']){
    header("location: ../ver2/login.php");
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <script src="../../assets/js/moduloUsuarios.js"></script>
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JQUERY -->

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/cssVer2/style.css">
    <!-- CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/cssVer2/stylelog.css">
    <!-- CSS -->

    <!-- Google Fonts -->
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Rubik&subset=latin,latin-ext'>
    <link  rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins&subset=latin,latin-ext'>
    <!-- Google Fonts -->

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/87a0dc1d3c.js" crossorigin="anonymous"></script>
    <!-- Fontawesome -->

    <!-- ContentManager -->
    <script src="../../assets/js/contenManager.js"></script>  
    <!-- Fontawesome -->

</head>
<body>

    <!-- Inicio Dashboard -->
    <div class="main-container d-flex">
        <!-- Inicio Sidebar -->
        <div class="sidebar" id="sidenav">
            <div class="header-box text-center py-3 ">
                <img src="../../assets/img/logo.png" alt="" width="170.4px" height="48.8px">
                <button class="btn d-md-none d-block close-btn "><i class="fa-solid fa-bars-staggered"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class="marginside active"> <a href="#" onclick="cargarContenido('login.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-server"></i>Iniciar Sesion</a></li>
                <li class="marginside active"> <a href="#" onclick="cargarContenido('register.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-address-card"></i>Registrarse</a></li>
                <li class="marginside active"> <a href="#" onclick="cargarContenido('mainHome.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-chalkboard"></i>Pagina Inicio</a></li>
                <li class="marginside"> <a href="#" onclick="cargarContenido('mainDash.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-person-digging"></i>Materiales</a></li>
                <li class="marginside"> <a href="#" class="text-decoration-none px-3 textside"><i class="fa-solid fa-screwdriver-wrench"></i> Herramientas</a></li>
                <li class="marginside"> <a  href="#"  onclick="cargarContenido('trabajadores.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-users"></i> Personal</a></li>
                <li class="marginside"> <a href="#"  class="text-decoration-none px-3 textside"><i class="fa-solid fa-compass-drafting"></i> Proyectos</a></li>
                <li class="marginside"> <a href="#" onclick="cargarContenido('../ver2/Clientes.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-address-book"></i> Clientes</a></li>
            </ul>
            <hr class="hrcol mx-2">
            <ul class="list-unstyled px-2">
            <li><!-- Example single danger button -->
            <div class="btn-group dropend">
            <button type="button" class="btn btn-Warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-gear"></i> Configuración
           
            
             </button>
             <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#" onclick="cargarContenido('../Usuarios/usuariosView.php');">Listado Usuarios</a></li>
             <li><a class="dropdown-item" href="#">Listado de Tareas</a></li>
             <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Listado de Pendientes</a></li>
             </ul>
                </div>    
               </li>
                <li class="marginside"> <a href="#"  onclick="cargarContenido('mainEditProf.php');" class="text-decoration-none px-3 textside"><i class="fa-solid fa-user-pen"></i> Editar Perfil</a></li>
                <li class="marginside"> <a href="../../controller/Login/logout.php" class="text-decoration-none px-3 textside textlogout"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a></li>
            </ul>

            <div class="fixed-bottom profile">
            <h5>Usuario en linea: <br>
            <?php echo $_SESSION['username'];?>
            <span class="badge badge-secondary"></span><i class="fa-solid fa-signal"></i></h5>
            </div>
        <!-- Fin Sidebar -->
        </div>
        <!-- Contenido Dashboard -->
        <div class="content">

            <!-- Inicio Contenido Dashboard -->
            <div class="container top px-md-4 py-md-4 row">
                <div class="text-start col-11">

                </div>

                <div class="col-1 text-end">
                    <button class="btn dtheme dtbut"><i class="fa-solid fa-lightbulb"></i></button>
                </div>
            </div>


            <!-- Inicio Contenido Refrescable -->
            <div class="container gx-5" style="width: 100%; height: auto;">
            <div class="wrapper">
            <div class="container">
            

        <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
            <div class="container " id="contenedorPrincipal">
        
            </div>
        </main>

    
</div>
</div>
<br>
            
            <!-- Fin Contenido Refrescable -->
        </div>
        <!-- Fin del dashboard -->

        <!-- Inicio de footer adaptable -->
        <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">FullStackAttempters.com</a>
  </div>
  <!-- Copyright -->
</footer>

    </div>
    <!-- Fin Dashboard -->

    <!-- Script Sidebar -->
    <script>
        $(".sidebar ul li").on('click' , function(){
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        })
    </script>
    <!-- Script Sidebar -->

    <!-- Script Tooltips -->
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <!-- Script Tooltips -->

    <script>
        const darkTheme = document.querySelector(".dtheme")

        darkTheme.addEventListener('click' , () => {
            document.body.classList.toggle('dark-theme-var');

        })
    </script>



</body>
</html>

<script>
    $(document).ready(function () { 

        //INICIALIZAR EL EFECTO DEL ESTADO DEL SERVIDOR
        $body = $('body');
        $(document).on({
            ajaxStart: function () {
                $body.addClass('loading');
            },
            ajaxStop: function () {
                $body.removeClass('loading');
            }
        });
        
        //CARGANDO EL CONTENIDO PRINCIPAL
        cargarContenido('mainHome.php');
    });
</script>