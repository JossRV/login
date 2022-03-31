<?php 
    session_Start();
    include "../tareas.php";
    include "../../app/conexion.php";

    date_default_timezone_set('America/Mexico_City');
    $id_tarea = $_POST['idT'];
    $nombre_tarea = $_POST['nombreT'];
    $fecha_inicio = $_POST['fechaI'];
    $fecha_final = $_POST['fechaF'];
    $hora_inicio = $_POST['horaI'];
    $hora_final = $_POST['horaF'];
    $comentario = $_POST['coment'];
    $tupla = 1;
    $fecha_actual = date('Y-m-d'); //fecha actual 
    $hora_actual = date('H:i:s'); //hora actual

    // echo "<br>";
    // echo "fecha final: ".$fecha_final;
    // echo "<br>";
    // echo "hora final: ".$hora_final;
    // echo "<br>";
    // echo "fecha actual: ".$fecha_actual;
    // echo "<br>";
    // echo "hora actual: ".$hora_actual;
    // echo "<br>";

    if($fecha_actual >= $fecha_final){
        if($hora_actual <= $hora_final){
            $tupla = 1;
        }
        else if($hora_actual >= $hora_final){
            $tupla = 2;
        }
    }
    // else if($fecha_momento < $fecha_final){
    //     if($hora_momento <= $hora_fin || $hora_momento >= $hora_fin){
    //         $tupla = 3;
    //     }
    // }
        // echo $tupla;
    $datos = array(
        $nombre_tarea,
        $fecha_inicio,
        $fecha_final,
        $hora_inicio,
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