<?php 

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        // require_once "../../app/config.php";
        // require_once "../../app/dependencias.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <form action="../../model/tareas/actualizar_tarea.php" method="post">
                    <h5>Actualizar informacion de la tarea</h5>
                                <input type="text" hidden id="idT" name="idT">
                                <div class="input-group">
                                    <label class="input-group-text">Nombre de la tarea</label>
                                    <input type="text" class="form-control" id="nombreT" name="nombreT">
                                </div>
                                <div class="input-group mt-3">
                                        <label class="input-group-text">Fecha que finaliza tarea</label>
                                        <input type="date" class="form-control" id="fechaF" name="fechaF">
                                    </div>
                                <div class="input-group mt-3">
                                    <label class="input-group-text">Hora que finaliza tarea</label>
                                    <input type="time" class="form-control" id="horaF" name="horaF">
                                </div>
                                <div class="input-group mt-3">
                                    <label class="input-group-text">Comentario</label>
                                    <textarea class="form-control" aria-label="With textarea" id="coment" name="coment"></textarea>
                                </div>
                    <button class="btn btn-outline-dark">Actualizar tarea</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html> -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="modal fade" id="editarTarea">
            <div class="modal-dialog modal-dialog-centered text-center">
                <div class="modal-content">
                    <form action="../model/tareas/actualizar_tarea.php" method="post">
                        <div class="modal-header">
                            <h5>Actualizar informacion de la tarea</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <div class="row mt-3">
                                    <div class="col">
                                        <input type="text" hidden id="idT" name="idT">
                                        <div class="input-group">
                                            <label class="input-group-text">Nombre de la tarea</label>
                                            <input type="text" class="form-control" id="nombreT" name="nombreT">
                                        </div>
                                        <div class="input-group mt-3">
                                                <label class="input-group-text">Fecha que inicia tarea</label>
                                                <input type="date" class="form-control" id="fechaI" name="fechaI">
                                        </div>
                                        <div class="input-group mt-3">
                                                <label class="input-group-text">Fecha que finaliza tarea</label>
                                                <input type="date" class="form-control" id="fechaF" name="fechaF">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="input-group-text">Hora que inicia tarea</label>
                                            <input type="time" class="form-control" id="horaI" name="horaI">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="input-group-text">Hora que finaliza tarea</label>
                                            <input type="time" class="form-control" id="horaF" name="horaF">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="input-group-text">Comentario</label>
                                            <textarea class="form-control" aria-label="With textarea" id="coment" name="coment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-outline-dark">Actualizar tarea</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // function verDatos(id,nombre_tarea,fecha_fin,hora_fin,comentario){
    //     $('idT').val(id);
    //     $('#nombreT').val(nombre_tarea);
    //     $('#fechaF').val(fecha_fin);
    //     $('#horaF').val(hora_fin);
    //     $('#coment').val(comentario);
    // }
</script>