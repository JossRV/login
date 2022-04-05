<?php 

    session_start();
    // session_destroy();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    require_once "app/config.php";
    require_once "app/dependencias.php";
    ?>  

    <title><?=TITULO_PAGINA?></title>
</head>
<body>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col">
                <h2 >Login con php y mysql</h2>
                <img src="public/img/usuario (2).png" alt="icon" class="mt-4 mb-4" style="width:60%">
                <form action="./model/usuarios/login.php" method="post">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control mb-3" name="usuario" id="usuarioLog" required>
                    <label for="" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="passLog" required>
                    <button class="btn btn-outline-info container-fluid mt-4 mb-3" id="inciaSession">Iniciar sesion</button>
                    <a href="view/registrar_usuario.php" class="link-info">Crear nuevo usuario</a>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
<?php 

    if(isset($_SESSION['logueoMal'])==1){
        echo ' 
            <script>
                swal({
                    title: "Oh no!!",
                    text: "usuario incorrecto",
                    icon: "warning",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['logueoMal']);
    }
    if(isset($_SESSION['registro'])==1){
        echo ' 
            <script>
                swal({
                    title: "Registrado!!",
                    text: "puede inicar sesion",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['registro']);
    }
    if(isset($_SESSION['cierre'])==1){
        echo ' 
            <script>
                swal({
                    title: "Session Finalizada!!",
                    text: "nos vemos en el siguiente inicio",
                    icon: "success",
                    button: "Aceptar"
                });
            </script>
        ';
        unset($_SESSION['cierre']);
    }

?>
<!-- 
<script>
    swal({
        title: "Oh no!!",
        text: "usuario incorrecto",
        icon: "warning",
        button: "Aceptar"
    });
</script> -->