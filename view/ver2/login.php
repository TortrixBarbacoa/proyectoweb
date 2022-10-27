<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JQUERY -->

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
</head>
<body>
    <!-- Main Container -->
    <div class="main-container d-flex justify-content-center py-4">

        <!-- Container Form Box -->
        <div class="container my-5 logbox row">
            <!-- Container Imagen -->
            <div class="col logimg"></div>
            <!-- Container Imagen -->

            <!-- Container Login -->
            <div class="col logimg2 py-5">
            <form class="form" method="POST" action="../../controller/Login/loginController.php">
                <!-- Label Iniciar Sesión -->
                <div class="text-center my-5">
                    <h1>Iniciar Sesión</h1>
                </div>
                <!-- Label Iniciar Sesión -->

                <!-- Form Email -->
                <div class="my-3 mx-4">
                    <label for="exampleFormControlInput1" class="form-label" ><h2>Usuario</h2></label>
                    <input type="user" class="form-control" id="FormUser" placeholder="Ingresar Usuario" name="inEmail">
                </div>
                <!-- Form Email -->

                <!-- Form Contraseña -->
                <div class="mt-4 mb-5 mx-4">
                    <label for="exampleFormControlInput1" class="form-label"><h2>Contraseña</h2></label>
                    <input type="user" class="form-control" id="FormPass" placeholder="Ingresar Contraseña" name="inPassword">
                </div>
                <!-- Form Contraseña -->

                <!-- Botón Ingresar -->
                <div class="container d-flex justify-content-center">
                <div class="text-capitalize text-center logbtn">
							<button type="submit" class="btn">INGRESAR</button>
						</div>
                </div>
                <!-- Botón Ingresar -->
            </div>
            </form>    <!-- form Login -->
            <!-- Container Login -->
        </div>
        <!-- Container Form Box -->
    </div>
    <!-- Main Container -->
</body>
</html>