<?php 
    session_start();
    include_once "../../app/conexion.php";
    include_once "../tareas.php";

    $id=$_POST['id'];
    $c = new conexion();
    $conectado = $c->conectar();
    $sql="SELECT * FROM t_tareas WHERE id_tarea='$id'";
    // echo $id;
    $result=mysqli_query($conectado,$sql);
    $verTar=mysqli_fetch_array($result);

    $dato = array(
        "idTareas" => $verTar['id_tarea'],
        "nombreTarea" => $verTar['nombre_tarea'],
        "fechaFin" => $verTar['fecha_fin'],
        "horaFin" => $verTar['hora_fin'],
        "comentarios" => $verTar['comentario']
    );
    echo json_encode($dato);
?>