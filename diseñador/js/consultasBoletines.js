$(document).ready(function () {

    consultaBoletines();
    // consultaVideos();

});
// MUESTRA AUTOMÁTICAMENTE LOS ARCHIVOS DEL SISTEMA (TABLA INTERACTIVA)
function consultaBoletines() {

    var parametros =
    {
        "consultarBoletines": "Boletines"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "./php/consultasBoletines.php",

        success: function (mensaje) {
            $('#mostrar_boletines').html(mensaje);
            new DataTable('#consultaBol', {
                language: Traduccion,

                initComplete: function () {
                    
                    // Agregar filtros (selectores) a la tabla
                    var api = this.api();
                    api.columns([2,3, 5, 7]).every(function () {
                        var column = this;
                        var select = $('<select class="filterE form-select "><option value="">---</option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });  
                    // Obtener el índice de la columna de fechas
                    var dateColumnIndex = 1; // Reemplaza con el índice de tu columna de fechas

                    // Ordenar la columna de fechas de forma descendente (más lejano a más reciente)
                    api.column(dateColumnIndex).order('desc').draw();                  
                },
            })
            .on('draw.dt', function () {
                ActoSeguido();
            });
            // Change the background of the last cell in each row based on the value
            $('#bodyBol tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Activo") {
                    $(this).find('td:last').addClass('bg-success text-light');
                }else if (est == "Inactivo"){
                    $(this).find('td:last').addClass('bg-secondary text-light');
                }else if (est == "Eliminado"){
                    $(this).find('td:last').addClass('bg-danger text-dark');
                }
            });
        }

    });

}
function ActoSeguido(){
    $('#bodyBol tr').each(function () {
        var est = $(this).find('td:last').text();
        if (est == "Activo") {
            $(this).find('td:last').addClass('bg-success text-light');
        }else if (est == "Inactivo"){
            $(this).find('td:last').addClass('bg-secondary text-light');
        }else if (est == "Eliminado"){
            $(this).find('td:last').addClass('bg-danger text-dark');
        }
    })
}
// SUBE LOS VALORES AL MODAL PARA ACTUALIZACIÓN
function ModfBol(){
     // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
     $('#bodyBol').on('click', '#modificarBole', function () {
        ide = $(this).closest('tr').find('td').eq(0).text();
        var parametros =
        {
            "ide": ide,
            "consultarBoletines": "BoletinesModificar"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: './php/consultasBoletines.php',
            type: 'POST',
            error: function(jqXHR, xhr, status, error){
                var nroERROR = jqXHR.status;
                if (nroERROR == 500) {
                    $.alert({
                        title: 'Error',
                        content: "Error al Modificar el archivo.<br>Error: Falla en el sistema.",
                        type: "red",
                        buttons: {
                            cancel: {
                                text: 'Cerrar',
                                btnClass: 'btn-secondary',
                                action: function () {
    
                                }
                            }
                        }
                    });                       
                }
            },
            success: function (valores) {
                $('#ModifiBoletines').modal('show');

                $("#id_boletinBol").val(valores.id_boletin);
                $("#nombre_direBol").val(valores.nombre_dire);
                $("#titulo_boletinBol").val(valores.titulo_boletin);
                $("#fecha_creacionBol").val(valores.fecha_creacion);
                
            }
        });

    });
}

// MODIFICAR BOLETINES
function AccionBoletin(){
    const form = document.getElementById('form_ModificacionesBol');

    // Creamos un objeto con los datos del formularioModificaciones
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        processData: false,
        contentType: false,
        url: './php/consultasBoletines.php',
        type: 'POST',
        error: function(jqXHR, xhr, status, error){
            $('#ModifiBoletines').modal('hide');

            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                $.alert({
                    title: 'Error',
                    content: "Error verificar información del Boletín.<br>Error: Datos inválidos.",
                    type: "red",
                    buttons: {
                        cancel: {
                            text: 'Cerrar',
                            btnClass: 'btn-secondary',
                            action: function () {

                            }
                        }
                    }
                });                       
            }
            if (nroERROR == 501) {
                $.alert({
                    title: 'Error',
                    content: "Error al Modificar el Boletín.<br>Error: Envió datos inválidos ó el Boletín ya no se encuentra dentro del sistema.",
                    type: "red",
                    buttons: {
                        cancel: {
                            text: 'Cerrar',
                            btnClass: 'btn-secondary',
                            action: function () {

                            }
                        }
                    }
                });                       
            }
        },
        success: function (mensaje) {
            $('#ModifiBoletines').modal('hide');

            $('#InfoGeneral').modal('show');
            $('#InfoGeneral .modal-body').html(mensaje);
            consultaBoletines();
        }
    });
}
