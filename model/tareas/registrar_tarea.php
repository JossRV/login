<?php 
    session_start();
    include "../../app/conexion.php";
    include "../tareas.php";

    $t = new tareas();

    $nombre_tarea = $_POST['nombreT'];
    $fecha_final = $_POST['fechaF'];
    $hora_final = $_POST['horaF'];
    $comentario = $_POST['coment'];
    $tupla = 1;

    $datos = array(
        $nombre_tarea,
        $fecha_final,
        $hora_final,
        $comentario,
        $tupla
    );

    if($t->insertarTarea($datos)==1){
        $_SESSION['tareasI']="insertado";
        header("location:../../view/inicio.php");
    }else{
        $_SESSION['tareasI']="noInsertado";
        header("location:../../view/inicio.php");
    }

?>