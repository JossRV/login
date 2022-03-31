<?php 
    session_start();
    include "../../app/conexion.php";
    include "../tareas.php";

    $t = new tareas();

    date_default_timezone_set('America/Mexico_City');
    $nombre_tarea = $_POST['nombreT'];
    $fecha_inicio = $_POST['fechaI'];
    $hora_inicio = $_POST['horaI'];
    $fecha_final = $_POST['fechaF'];
    $hora_final = $_POST['horaF'];
    $comentario = $_POST['coment'];
    $tupla = 1;
    $fecha_actual = date('Y-m-d'); //fecha actual 
    $hora_actual = date('H:i:s'); //hora actual

    // echo $idTupla;
    // echo "<br>";
    // echo $fecha_fin;
    // echo "<br>";
    // echo $hora_fin;
    // echo "<br>";
    // echo $fecha_momento;
    // echo "<br>";
    // echo $hora_momento;
    // echo "<br>";

    if($fecha_actual >= $fecha_final){
        if($hora_actual <= $hora_final){
            $tupla = 1;
        }
        else if($hora_actual >= $hora_final){
            $tupla = 2;
        }
    }

    // echo $tupla;
    $datos = array(
        $nombre_tarea,
        $fecha_inicio,
        $fecha_final,
        $hora_inicio,
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