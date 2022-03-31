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
            $('#fechaI').val(respuesta['fechaInicio']);
            $('#fechaF').val(respuesta['fechaFin']);
            $('#horaI').val(respuesta['horaInicio']);
            $('#horaF').val(respuesta['horaFin']);
            $('#coment').val(respuesta['comentarios']);
        }
    });
}