<?php 

    include "../tareas.php";
    include "../../app/conexion.php";

    date_default_timezone_set('America/Mexico_City'); //cambiar la fecha en la que estamos de acuerdo a la zona horaria
    $idTupla = $_GET['id'];
    $t = new tareas();
    $c = new conexion();
    $conectado = $c->conectar();
    $sql = "SELECT * FROM t_tareas WHERE id_tarea='$idTupla'";
    // echo $id;
    $result=mysqli_query($conectado,$sql);
    $verTar=mysqli_fetch_array($result);

    $tupla=0;
    $fecha_fin = $verTar['fecha_fin'];
    $hora_fin = $verTar['hora_fin'];
    $fecha_momento = date('Y-m-d'); //fecha actual 
    $hora_momento = date('H:i:s'); //horaa actual

    echo $idTupla;
    // echo "<br>";
    // echo $fecha_fin;
    // echo "<br>";
    // echo $hora_fin;
    // echo "<br>";
    // echo $fecha_momento;
    // echo "<br>";
    // echo $hora_momento;
    // echo "<br>";

    if($fecha_momento < $fecha_fin){
        if($hora_momento <= $hora_fin || $hora_momento >= $hora_fin){
            $tupla = 3;
        }
    }else if($fecha_momento >= $fecha_fin){
        if($hora_momento <= $hora_fin){
            $tupla = 3;
        }else if($hora_momento >= $hora_fin){
            $tupla = 2;
        }
    }
    // echo $tupla;
    $datos = array(
        $tupla,
        $idTupla
    );

    if($t->actualizarTupla($datos)==1){
        header("location:../../view/inicio.php");
    }else{
        echo "no se realizo";
    }

?>