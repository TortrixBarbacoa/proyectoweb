<?php
echo "1 paso";

ob_start();
session_start();
echo "2 paso";

include_once("../../model/functions.php");

$loginModel = new loginModel();

$email = $_POST['inEmail'];
$clave = $_POST['inPassword'];
$result = array();


$result = $loginModel->autenticar($email, $clave);

if($row = mysqli_fetch_array($result)){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nombre'] = $row['nombres'];
    $_SESSION['user_apellido'] = $row['apellidos'];
    $_SESSION['username'] = $row['user'];
    $_SESSION['e_mail'] = $row['email']; 
    $_SESSION['roll'] = $row['rol_name']; 
    $_SESSION['rol_id'] = $row['roles_id']; 
    
    header("location: ../../view/ver2/dashboard.php");

}else{

    echo "<script>
            alert('AUTENTICACIÓN FALLIDA, AL PARECER SU CORREO O CLAVE SON INVÁLIDOS');
            history.back();
        </script>";
    exit(-1);
    
}

   


echo "ultimo paso";

ob_end_flush();
?>