<?php 

    session_start();
    // session_destroy();
    unset($_SESSION['usuario']);

    $_SESSION['cierre']=1;

    header("location:../../index.php");

?>