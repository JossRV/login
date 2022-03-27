<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php include "../app/config.php" ?>
    <?php include "../app/dependencias.php"?>
</head>
<body>
    <div class="container mt-5">
        <form action="../model/usuarios/registrar.php" method="post">
            <div class="row mt-5">
                <div class="col text-center mt-4">
                    <h2>Crear Usuario Nuevo</h2>
                    <img src="../public/img/agregar-usuario (1).png" style="width:50%">
                </div>
                <div class="col-6 mb-4 mt-4">
                    <label for="" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                    <label for="" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="paterno" required>
                    <label for="" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="materno" rquired>
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" required>
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-success container-fluid mb-4">Crear Usuario Nuevo</button>
                    <a class="btn btn-outline-info container-fluid" href="../index.php">Regresar</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>