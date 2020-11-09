$(document).ready(function() {

    var check1 = 0, check2 = 0;

    $('#check1').click(function() {
        if(check1 == 0){
            check1 = 1;
        }else{
            check1 = 0;
        }
    });

    $('#check2').click(function() {
        if(check2 == 0){
            check2 = 1;
        }else{
            check2 = 0;
        }
    });

    $('.bee_add_usuario').on('submit', bee_add_usuario);

    function bee_add_usuario(){
        
        event.preventDefault();

        var form = $('.bee_add_usuario'),
            hook = 'bee_hook',
            action = 'add',
            data = new FormData(form.get(0));
            data.append('hook', hook);
            data.append('action', action);
            data.append('check1', check1);
            data.append('check2', check2);

        var nombre = $('#nombre').val(),
            apellido = $('#apellido').val(),
            email = $('#email').val();

            if(nombre === '' || nombre.length < 2) {

                Swal.fire(
    
                    'Ingrese todos los campos!',
                    'Ingrese un nombre válido',
                    'warning'

                  )

                return;
    
            }
    
            if(!validarCaracteres(nombre)){
    
                Swal.fire(
    
                    'Ingrese todos los campos!',
                    'Ingrese un nombre válido',
                    'warning'

                  )
    
                return;
    
            }

            // validar apellido
            if(apellido === '' || apellido.length < 2) {
    
                Swal.fire(
                    'Ingrese todos los campos!',
                    'Ingrese un apellido válido',
                    'warning'
                  )

                return;
            }

            if(!validarCaracteres(apellido)){
    
                Swal.fire(

                    'Ingrese todos los campos!',
                    'Ingrese un apellido válido',
                    'warning'

                  )
    
                return;
    
            }
    
            // validar email
            if(email === '' || email.length < 2) {
                Swal.fire(
                    'Ingrese todos los campos!',
                    'Ingrese un email válido',
                    'warning'
                  )

                return;
    
            }
    
            if(!validarEmail(email)){
    
                Swal.fire(
    
                    'Ingrese todos los campos!',
                    'Ingrese un email válido',
                    'warning'
    
                  )
    
                return;
    
            }
    
            function validarEmail(email) {
    
                emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    
                if (emailRegex.test(email)) {
    
                    return true;
    
                } else {
    
                    return false;
    
                }
    
            }
    
            function validarCaracteres(caracter) {

                caracteregex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
    
                if (caracteregex.test(caracter)) {
    
                    return true;
                } else {
    
                    return false;
                }

            }
        

        $.ajax({
            url: 'ajax/bee_add_usuario',
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data: data,

            beforeSend: function() {

            }

        }).done(function(res) {

            if(res.status === 201){

                Swal.fire(

                    'Registro Exitoso!',
                    'Bienvenido: '+ res.data.nombre + ' ' + res.data.apellido,
                    'success'

                  )

            }

        }).fail(function(err) {

            Swal.fire(

                'Error!',
                'Datos faltantes o correo repetido!',
                'error'

              )

        }).always(function() {

        })
    }

});

