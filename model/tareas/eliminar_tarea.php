<?php 
    session_start();
    include "../../app/conexion.php";
    include "../tareas.php";

    $id = $_GET['id'];
    $t = new tareas();

    if($t->eliminarTarea($id)==1){
        $_SESSION['tareasE']="eliminado";
        header("location:../../view/inicio.php");
    }else{
        $_SESSION['tareasE']='noEliminado';
        header("location:../../view/inicio.php");
    }
?>