<?php 
    // session_start();
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
    
</head>
<body>
    <?php include "../view/navegacion.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-2 mt-5 text-center">
                <h3>Tareas</h3>
                <img src="../public/img/lista-de-tareas.png" class="mt-4" alt="" style="width:50%">
                <a class="btn btn-outline-success mt-4" href="">Agregar Tarea Nueva</a>
            </div>
            <div class="col-10 mt-3 text-center">
                aqui mis tabla
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