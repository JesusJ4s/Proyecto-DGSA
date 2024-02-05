$(document).ready(function () {

    consultaInstrumento();
    // consultaVideos();

});
// MUESTRA AUTOMÁTICAMENTE LOS ARCHIVOS DEL SISTEMA (TABLA INTERACTIVA)
function consultaInstrumento() {

    var parametros =
    {
        "consultarInstrumento": "Instrumento"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "./php/consultasInstrumentos.php",

        success: function (mensaje) {
            $('#mostrar_instrumentos').html(mensaje);
            new DataTable('#consultaInst', {
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
            $('#bodyInstr tr').each(function () {
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
    $('#bodyInstr tr').each(function () {
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
function ModfInstru(){
     // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
     $('#bodyInstr').on('click', '#modificarInstru', function () {
        ide = $(this).closest('tr').find('td').eq(0).text();
        var parametros =
        {
            "ide": ide,
            "consultarInstrumento": "InstruModificar"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: './php/consultasInstrumentos.php',
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
                $('#ModifiInstru').modal('show');

                $("#id_instruM").val(valores.id_instruM);
                $("#nombre_direInstruM").val(valores.nombre_direInstruM);
                $("#tituloInstruM").val(valores.tituloInstruM);
                $("#tipoInstruM").val(valores.tipoInstruM);
                
            }
        });

    });
}

// MODIFICAR BOLETINES
function ModificarInstrumento(){
    const form = document.getElementById('form_ModificacionesInstru');

    // Creamos un objeto con los datos del formularioModificaciones
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        processData: false,
        contentType: false,
        url: './php/consultasInstrumentos.php',
        type: 'POST',
        error: function(jqXHR, xhr, status, error){
            $('#ModifiInstru').modal('hide');

            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                $.alert({
                    title: 'Error',
                    content: "Error verificar información del Documento.<br>Error: Datos inválidos.",
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
                    content: "Error al Modificar el Instrumento.<br>Error: Envió datos inválidos ó el Instrumento ya no se encuentra dentro del sistema.",
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
            $('#ModifiInstru').modal('hide');

            $('#InfoGeneral').modal('show');
            $('#InfoGeneral .modal-body').html(mensaje);
            consultaInstrumento();
        }
    });
}
