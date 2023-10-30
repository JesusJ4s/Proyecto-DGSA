$(document).ready(function () {
    $('#btn-ajax').click(function () {
        $.ajax({
            url: '../php/bd_auditoria.php',
            type: 'POST',
            success: function (response) {
                $('#BDauditoria').modal('show');
                $('#BDauditoria .modal-body').html(response);
                auditoriaBD();
                auditoriaUsr();

            },
            error: function () {
                // Manejo de errores en caso de que la llamada AJAX falle
                console.log('Error en la llamada AJAX');
            }
        });
    });
});
