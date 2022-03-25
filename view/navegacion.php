<?php 

    session_start();
    if(isset($_SESSION['usuario'])){

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-center " href="../view/inicio.php"><h4 style="text-transform:uppercase"><?= $_SESSION['usuario']?></h4></a>
        <div class="collapse navbar-collapse d-flex justify-content-end">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class=" btn btn-outline-danger" aria-current="page" href="../model/usuarios/salir.php">Cerrar session</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
    }else{
        header("location:../index.php");
    }


?>