<?php
    session_start();
    session_destroy();
    header('location:../../view/ver2/dashboard.php');
?>