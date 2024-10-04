$(document).ready(function () {

    consultaImagenes();
    // consultaVideos();

});
// MUESTRA AUTOMÁTICAMENTE LOS ARCHIVOS DEL SISTEMA (TABLA INTERACTIVA)
function consultaImagenes() {

    var parametros =
    {
        "consultarImgVid": "imagenes"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "./php/consultasImgVid.php",

        success: function (mensaje) {
            $('#mostrar_imagenes_web').html(mensaje);
            new DataTable('#consultaImagenes', {
                language: Traduccion,

                initComplete: function () {
                    
                    // Agregar filtros (selectores) a la tabla
                    var api = this.api();
                    api.columns([2, 3, 5, 7]).every(function () {
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
            $('#bodyImg tr').each(function () {
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
    $('#bodyImg tr').each(function () {
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
// SUBE LOS VALORES AL MODAL PARA
function ModfImg(){
     // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
     $('#bodyImg').on('click', '#modificarImg', function () {
        ide = $(this).closest('tr').find('td').eq(0).text();
        var parametros =
        {
            "ide": ide,
            "consultarImgVid": "ModifImgVid"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: './php/consultasImgVid.php',
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
                $('#ModifiImg_Vid').modal('show');

                $("#titulo").val(valores.titulo);
                $("#nombre_dire").val(valores.nombre_dire);
                $("#id_direccionVieja").val(valores.id_direccionVieja);
                $("#nombre_grupo").val(valores.nombre_grupo);
                $("#nombre_tipo").val(valores.nombre_tipo);
                $("#nombre_ImagenV").val(valores.nombre_archivo);
                $("#visible").val(valores.visible);
                $("#descripcion").val(valores.descripcion);

                $("#id_imagen").val(valores.id_imagen);
                // DATOS VIEJOS
                $("#id_galeria_grupo_anterior").val(valores.id_galeria_grupo_anterior);
                $("#visible_anterior").val(valores.visible_anterior);

                var parametros =
                {
                    "ide": ide,
                    "consultarImgVid": "SubirImagen"
                };
                console.log(valores)
                $.ajax({
                    data: parametros,
                    url: './php/consultasImgVid.php',
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
                    success: function (mensaje) {
                        $('#imV').html(mensaje);
        
                    }
                });

            }
        });

    });
}