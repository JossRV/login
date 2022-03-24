<script src="../packages/js/jquery-3.6.0.min.js"></script>
<script src="../packages/js/sweetalert.js"></script>
<?php 

    session_start();
    if(isset($_SESSION['usuario'])){

?>

<html>
    <h2><?= $_SESSION['usuario']?></h2>
    <br>
    <a href="../model/usuarios/salir.php">Salir</a>
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

    }else{
        header("location:../index.php");
    }


?>