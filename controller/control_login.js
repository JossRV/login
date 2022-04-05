$(document).ready(()=>{

    // alertaValidaciones('hola mundo');
    function alertaValidaciones(msj){
        swal({
            title: 'Error!',
            text: msj,
            icon: 'error',
            button: 'Aceptar',
            timer: '2000'
        });
    }
    function validacion(){
        if($('#usuarioLog').val() == "" && $('#passLog').val() == ""){
            alertaValidaciones('Todos los Campos estan vacios');
        }else if($('#usuarioLog').val()==""){
            alertaValidaciones('Ingrese su usuario porfavor');
        }else if($('#passLog').val()==""){
            alertaValidaciones('Ingrese su contraseña profavor');
        }
    }

    $('#usuarioLog').on('input', function(){
        this.value = this.value.replace(/[^a-zA-z ñÑ]/g,'');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#passLog').on('input', function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ 0-9]/g,'');
    });

    $('#inciaSession').click(()=>{
        validacion();
    });
});