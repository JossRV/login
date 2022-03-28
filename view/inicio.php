<?php 
    include "../app/conexion.php";
    include "../model/tareas.php";

    $t = new tareas();
    $sql = "SELECT * FROM t_tareas";
    $verTar = $t->mostrarTareas($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "../app/config.php" ?>
    <?php require "../app/dependencias.php"?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITULO_PAGINA ?></title>
    <!-- <link rel="stylesheet" href="../packages/fontawesome/css/all.min.css"> -->
    
</head>
<body>
    <?php include "../view/navegacion.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col mt-4 text-center">
                <h3>Tareas <img src="../public/img/lista-de-tareas.png" class="" alt="" style="width:3%"></h3>
                <a class="btn btn-outline-success" data-bs-toggle="collapse" href="#insertarTarea">
                    Agregar Tarea Nueva
                </a>
            </div>
            <div class="col-3"></div>
            <?php include "../view/tareas/insertar_tarea.php" ?>
        </div>
        <?php 
            foreach ($verTar as $key):
        ?>
        <div class="row mt-3 mb-3" style="border:solid; border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
            <div class="col-9 py-4">
                <!-- informacion xd -->
                <p>
                    Nombre de tarea: <?=$key['nombre_tarea']?>
                </p>
                <p>
                    Fecha y hora de inicio: <?=$key['fecha_incio']?>, <?=$key['hora_inicio']?> 
                </p>
                <p>
                    Fecha y hora de vencimiento: <?=$key['fecha_fin']?>, <?=$key['hora_fin']?>
                </p>
                <p>
                    comentario: <br>
                    <?=$key['comentario']?>
                </p>
            </div>
            <div class="col-3 align-self-center text-center">
                <!-- botones -->
                <div class="row">
                    <div class="col">
                        <a class="btn btn-outline-warning container-fluid" data-bs-toggle="collapse" href="#editarTarea">
                            Editar tarea 
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <a href="../model/tareas/eliminar_tarea.php?id=<?=$key['id_tarea']?>" class="btn btn-outline-danger container-fluid" style="text-decoration:none;">
                            Eliminar tarea
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <a href="" class="btn btn-outline-success container-fluid" style="text-decoration:none;">
                            Finalizar tarea 
                            <i class="fa-duotone fa-check-double"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            endforeach;
        ?>
        <div class="row">
            <div class="col">
                <?php include "../view/tareas/actualizar_tarea.php" ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php 

// alerta de inicio de sesion
    if(isset($_SESSION['logueo'])==1){
        echo ' 
            <script>
                swal({
                    title: "Yea!!",
                    text: "Usted a ingresado",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['logueo']);
    }

// alerta de CRUD tareas
    if(isset($_SESSION['tareasI'])=="insertado"){
        echo ' 
            <script>
                swal({
                    title: "Tarea registada con exito",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['tareasI']);
    }else if(isset($_SESSION['tareasI'])=="noInsertado"){
        echo ' 
            <script>
                swal({
                    title: "No se pudo registar la tarea",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['tareasI']);
    }else if(isset($_SESSION['tareasE'])=="eliminado"){
        echo ' 
            <script>
                swal({
                    title: "Eliminacion Exitosa",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['tareasE']);
    }else if(isset($_SESSION['tareasE'])=="noEliminado"){
        echo ' 
            <script>
                swal({
                    title: "No se pudo eliminar",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['tareasE']);
    }
?>