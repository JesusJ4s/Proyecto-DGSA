$(document).ready(function () {

    consultaCoordinaciones();
    // consultaVideos();

});
// MUESTRA AUTOMÁTICAMENTE LOS ARCHIVOS DEL SISTEMA (TABLA INTERACTIVA)
function consultaCoordinaciones() {

    var parametros =
    {
        "consultarCoordinaciones": "Coordinaciones"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "./php/consultasCoordinaciones.php",

        success: function (mensaje) {
            $('#mostrar_Coordinaciones').html(mensaje);
            new DataTable('#consultaCoor', {
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
                ActualizarTablaCoor();
            });
            // Change the background of the last cell in each row based on the value
            $('#bodyCoor tr').each(function () {
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
function ActualizarTablaCoor(){
    $('#bodyCoor tr').each(function () {
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
function ModCoord(){
     // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
     $('#bodyCoor').on('click', '#modifyCoord', function () {
        ide = $(this).closest('tr').find('td').eq(0).text();
        var parametros =
        {
            "ide": ide,
            "consultarCoordinaciones": "CoordinacionesModificar"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: './php/consultasCoordinaciones.php',
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
                $('#ModifiCoordinaciones').modal('show');

                $("#identificador").val(valores.id_coordinacion_web);
                $("#direccion").val(valores.nombre_dire);
                $("#titulo").val(valores.titulo_text1);
                $("#creacion").val(valores.fecha_creacion_coord);
                $("#visible_anterior").val(valores.id_coord_visible);
                $("#identificador").val(valores.id_coordinacion_web);
                $("#direccion").val(valores.nombre_dire);
                $("#titulo").val(valores.titulo_text1);
                $("#creacion").val(valores.fecha_creacion_coord);
                $("#visible_anterior").val(valores.id_coord_visible);
                
            }
        });

    });
}

// MODIFICAR Coordinaciones
function ModificarArchivo(){
    const form = document.getElementById('form_ModificacionesCor');

    // Creamos un objeto con los datos del formularioModificaciones
    var formData = new FormData(form);
    $.ajax({
        data: formData,
        processData: false,
        contentType: false,
        url: './php/consultasCoordinaciones.php',
        type: 'POST',
        error: function(jqXHR, xhr, status, error){
            $('#ModifiCoordinaciones').modal('hide');

            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                $.alert({
                    title: 'Error',
                    content: "Error verificar información de la Coordinación.<br>Error: Datos inválidos.",
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
                    content: "Error al Modificar la Coordinación.<br>Error: Envió datos inválidos ó la Coordinación ya no se encuentra dentro del sistema.",
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
            $('#ModifiCoordinaciones').modal('hide');

            $('#InfoGeneral').modal('show');
            $('#InfoGeneral .modal-body').html(mensaje);
            consultaCoordinaciones();
        }
    });
}

// function ModificarCo(){
//     var id = document.getElementById('buscarCoor').value;
//     var parametros = {
//         "id": id,
//         "consultarCoordinaciones":"coordiEntera"
//     };
//     $.ajax({
//         data: parametros,
//         dataType: 'json',
//         url: './php/consultasCoordinaciones.php',
//         type: 'POST',
//         error: function(jqXHR, xhr, status, error){
//             var nroERROR = jqXHR.status;
//             if (nroERROR == 500) {
//                 $.alert({
//                     title: 'Error',
//                     content: "Error al Buscar los datos.",
//                     type: "red",
//                     buttons: {
//                         cancel: {
//                             text: 'Cerrar',
//                             btnClass: 'btn-secondary',
//                             action: function () {

//                             }
//                         }
//                     }
//                 });                       
//             }
//         },
//         success: function (valores) {

//             $("#Vcoord_direccion").val(valores.Vcoord_direccion);
//             $("#Vtitulo_txt1").val(valores.Vtitulo_txt1);
//             $("#descripcion_txt1PART2").val(valores.descripcion_txt1PART2);

//             $("#Vtitulo_txt2").val(valores.Vtitulo_txt2);
//             $("#descripcion_txt2PART2").val(valores.descripcion_txt2PART2);

//             $("#Vtitulo_txt3").val(valores.Vtitulo_txt3);
//             $("#descripcion_txt3PART2").val(valores.descripcion_txt3PART2);

//             $("#Vtitulo_lista1").val(valores.Vtitulo_lista1);
//             $("#Vtitulo_lista2").val(valores.Vtitulo_lista2);

//             $("#Lista1_coordPART2").val(valores.Lista1_coordPART2);
//             $("#Lista2_coordPART2").val(valores.Lista2_coordPART2);
            
//         }
//     });
// }
