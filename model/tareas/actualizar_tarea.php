<?php 

    include "../tareas.php";
    include "../../app/conexion.php";

    $id_tarea = $_POST['idT'];
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
        $tupla,
        $id_tarea
    );

    $t = new tareas();

    if($t->actualizarTarea($datos)==1){
        $_SESSION['tareasA']="actualizado";
        header("location:../../view/inicio.php");
    }else{
        $_SESSION['tareasA']="noActualizado";
        header("location:../../view/inicio.php");
    }

?>