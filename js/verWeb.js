$(document).ready(function () {
    verClickImgVid();
});
function verClickImgVid(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    $.ajax({
        data: { valor: valorInput },
        url: '../php/verWeb.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#ImgVidGalery').modal('show');
            $('#ImgVidGalery .modal-body').html(mensaje);

        },
        error: function(jqXHR)
        {
            var nroERROR = jqXHR.status;

            if (nroERROR==500) {
                $.confirm({
                    title: 'Error al buscar',
                    content: 'Recargue la página e intente de nuevo.',
                    type: "red",
                    buttons: {
                        cancel: {
                            text: 'Cerrar',
                            btnClass: 'btn-secondary',
                            action: function () {
                                // Acción cuando se hace clic en el botón de cancelación
                                // console.log('Datos cerrados');
                            }
                        }
                    }
                });
            }
        }
    });


}