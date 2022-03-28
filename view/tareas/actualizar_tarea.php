<div class="collapse mt-4" id="editarTarea">
    <div class="card card-body text-center mb-4">
        <form action="../model/tareas/actualizar_tarea.php" method="post">
            <h5>Actualizar informacion de la tarea</h5>
            <div class="row mt-3">
                <div class="col">
                    <div class="input-group">
                        <label class="input-group-text">Nombre de la tarea</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <label class="input-group-text">Fecha que finaliza tarea</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col mt-3">
                    <div class="input-group">
                        <label class="input-group-text">Hora que finaliza tarea</label>
                        <input type="time" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group">
                        <label class="input-group-text">Comentario</label>
                        <textarea class="form-control" aria-label="With textarea" style=""></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-dark container-fluid mt-3">Actualizar tarea</button>
                </div>
            </div>
        </form>
    </div>
</div>