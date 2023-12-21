recuperacion.addEventListener('submit', (e) => {
    e.preventDefault();


    verificacion();
});


// VERIFICACIÓN DE LAS RESPUESTAS
function verificacion() {

    var formVerificacion = $('#recuperacion').serialize();
    $.ajax({
        data: formVerificacion,
        url: '../php/usuarios.php',
        type: 'POST',

        success: function (mensaje) {
            $('#CambCont .modal-body').html(mensaje);
            $('#CambCont').modal('show');


            $('#div_cambiar').removeClass("ocultar-div");
            $('#verificar').prop('disabled', true);

            document.querySelectorAll("input").forEach((input) => {
                input.setAttribute('disabled', true);
            });

            recuperacion.reset();
        },
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#CambCont').modal('show');

                $('#CambioC').html('Error al verificar los datos, introdujo digitos inválidos.');
            }
            if (nroERROR == 501) {
                $('#CambCont').modal('show');

                $('#CambioC').html('Error al verificar los datos.<br>Error: Hay campos vacíos.');
            }
            if (nroERROR == 502) {
                $('#CambCont').modal('show');

                $('#CambioC').html('Selecciono 2 preguntas iguales. Elija 2 preguntas distintas.');
            }
            if (nroERROR == 503) {
                $('#CambCont').modal('show');

                $('#CambioC').html('Las respuestas no coinciden.');
            }
        }
    });
}



