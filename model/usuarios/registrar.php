<?php 
    session_start();
    include "../../app/conexion.php";
    include "../../model/usuario.php";
    
    $usuarios = new usuario();
    $nombre = $_POST['nombre'];
    $aPaterno = $_POST['paterno'];
    $aMaterno = $_POST['materno'];
    $usuario = $_POST['usuario'];
    $pass = sha1($_POST['password']);

    $datos = array(
        $usuario,
        $pass,
        $nombre,
        $aPaterno,
        $aMaterno
    );

    

    if($usuarios->registrarUsuario($datos)==1){
        $_SESSION['registro']=1;
        header("location:../../index.php");
    }
?>