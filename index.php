<?php 

    session_start();
    // session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once "app/dependencias.php" ?>
</head>
<body>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col">
                <h2 >Login con php y mysql</h2>
                <img src="public/img/usuario.png" alt="icon" class="mt-5 mb-5" style="width:60%">
                <form action="./model/usuarios/login.php" method="post">
                    <input type="text" class="form-control mt-3" name="usuario" placeholder="cliente">
                    <input type="password" class="form-control mt-3" name="password" placeholder="contraseña">
                    <button class="btn btn-outline-dark container-fluid mt-3" >Iniciar sesion</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>
<?php 

    if(isset($_SESSION['logeoMal'])==1){
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
        unset($_SESSION['logeoMal']);
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