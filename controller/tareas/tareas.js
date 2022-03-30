function verDatos(idT){
    // alert(idT);
    $.ajax({
        type: "POST",
        data: "id="+idT,
        url: "../model/tareas/tarea_obtModal.php",
        success:function(respuesta){
            // console.log(respuesta);
            respuesta = jQuery.parseJSON(respuesta);
            $('#idT').val(respuesta['idTareas']);
            $('#nombreT').val(respuesta['nombreTarea']);
            $('#fechaF').val(respuesta['fechaFin']);
            $('#horaF').val(respuesta['horaFin']);
            $('#coment').val(respuesta['comentarios']);
        }
    });
}