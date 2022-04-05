$(document).ready(()=>{
    $('#nombreReg').on('input',function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g,'');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#paternoReg').on('input',function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g,'');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#maternoReg').on('input',function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g,'');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#usuarioReg').on('input',function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ]/g,'');
        this.value = this.value.charAt(0).toUpperCase()+this.value.slice(1);
    });
    $('#passReg').on('input',function(){
        this.value = this.value.replace(/[^a-zA-Z ñÑ 0-9]/g,'');
    });

    function alertaValidaciones(msj){
        swal({
            title: 'Error!',
            text: msj,
            icon: 'error',
            button: 'Aceptar',
            timer: '2000'
        });
    }

    function validaciones(){
        if(
            $('#nombreReg').val() == "" &&
            $('#paternoReg').val() == "" &&
            $('#maternoReg').val() == "" &&
            $('#usuarioReg').val() == "" &&
            $('#passReg').val() == ""
        ){
            alertaValidaciones('Todos los campos estan vacios');
        }else if($('#nombreReg').val() == ""){
            alertaValidaciones('Porfavor ingrese su nombre');
        }else if($('#paternoReg').val() == ""){
            alertaValidaciones('Porfavor ingrese su apellido paterno');
        }else if($('#maternoReg').val() == ""){
            alertaValidaciones('Porfavor ingrese su apellido materno');
        }else if($('#usuarioReg').val() == ""){
            alertaValidaciones('Porfavor cree su usuario');
        }else if($('#passReg').val() == ""){
            alertaValidaciones('Porfavor cree su contraseña');
        }
    }

    $('#crearUsuario').click(()=>{
        validaciones();
    });
});