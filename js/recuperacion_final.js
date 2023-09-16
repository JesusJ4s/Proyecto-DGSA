formulario_recuperar.addEventListener('submit', (e)=>{
    e.preventDefault();
    CambioContr();

  });

$(document).ready(function() {

    $("#contraseña").blur(function() {
        // check if the name is valid (only letters and spaces allowed)
        if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/.test($(this).val())) {
          $(this).css("border", "1px solid green");
          document.querySelector(`#grupo__password .formulario__input-error`).classList.remove('formulario__input-error-activo');  
          cambiarBTN();

        } else {
          $(this).css("border", "1px solid red");
          document.querySelector(`#grupo__password .formulario__input-error`).classList.add('formulario__input-error-activo');
          cambiarBTN();
        }
      });
    $("#contraseña2").blur(function() {
        // check if the name is valid (only letters and spaces allowed)
        if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/.test($(this).val())) {
            $(this).css("border", "1px solid green");
            document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');  
            cambiarBTN();
        } else {
            $(this).css("border", "1px solid red");
            document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
            cambiarBTN();
        }
    });


  });


   // CAMBIAR CONTRASEÑA - ESTO ES DE OTRO DOC
   function CambioContr()
   {

    var formCambContr = $('#formulario_recuperar').serialize();

       $.ajax({
           data: formCambContr,
           url: '../php/usuarios.php',
           type: 'POST',

           beforeSend: function()
           {
               $('#respuesta').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
                $('#respuesta').hide(2);

           },

           success: function(mensaje)
           {
                $('#CambioContr').modal('show');
                $('#CambioContr .modal-body').text(mensaje);

                formulario_recuperar.reset(); 

                document.querySelectorAll("input").forEach((input) =>{
                    input.setAttribute('disabled', true);
                });
                
                $('#cambiar').prop('disabled', true);

           },
           error: function(jqXHR, xhr, status, error)
           {
               var nroERROR = jqXHR.status;
   
               if(nroERROR==500){
                   $('#CambioContr').modal('show');
   
                   $('#ContrC').html('Error al actualizar los datos.<br>Error: Contraseñas vacías.');
               }
               else if(nroERROR==501){
                   $('#CambioContr').modal('show');
   
                   $('#ContrC').html('Error al actualizar los datos.<br>Error: Contraseñas no son iguales.');
               }
               
           }
       });
   }

//    HABILITAR O DESHABILITAR EL BOTÓN DE ENVIO
   function cambiarBTN(){
        
       var pass = document.getElementById('contraseña').value;
       var pass2 = document.getElementById('contraseña2').value;

        if (pass==pass2) {
            $('#cambiar').prop("disabled", false);
        }else{
            $('#cambiar').prop("disabled", true);
        }
   }