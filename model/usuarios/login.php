<?php 
    
    session_start();
    // $_SESSION['logeoMal']="";

    include "../../app/conexion.php";
    include "../../model/usuario.php";

    $usuarios = new usuario();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $respuesta = $usuarios->logear($usuario,$password);

    if($respuesta){
        $_SESSION['logueo']=1;
        header("location:../../view/inicio.php");
        // echo "estas dentro";
    }else{
        $_SESSION['logeoMal']=1;
        header("location:../../index.php");
        // echo "no entras";
    }

?>
