<?php 
    
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
            <div class="col- mt-5 text-center">
                <h3>Tareas <img src="../public/img/lista-de-tareas.png" class="" alt="" style="width:3%"></h3>
                <a class="btn btn-outline-success" data-bs-toggle="collapse" href="#insertarTarea">
                    Agregar Tarea Nueva
                </a>
                <?php include "../view/tareas/insertar_tarea.php" ?>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row my-5">
            <div class="col mt-3 text-center">
                <table class="table" >
                    <thead>
                        <th>Nombre de la tarea</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha fin</th>
                        <th>Hora de inicio</th>
                        <th>Hora fin</th>
                        <th>Comentario de tarea</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Finalizar</th>
                    </thead>
                    <tbody>
                    <?php 
                            // foreach($verTareas as $key):
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>hola</td>
                            <td>
                                <a href="" class="link link-dark">
                                    <i class="fa-solid fa-pen-to-square"></i>

                                </a>                                
                            </td>
                            <td>
                                <a href="" class="link link-dark">
                                    <i class="fa-solid fa-trash"></i>

                                </a>
                            </td>
                            <td>
                                <a href="" class="link link-dark">
                                <i class="fa-duotone fa-check-double"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            // endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
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
?>