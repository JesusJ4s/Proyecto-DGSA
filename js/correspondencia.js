$(document).ready(function () {
    notificacionesCorresp();
    contador_correspondencia();
    tabla_correspondencia();
    tabla_correspondencia_indiv();
    tabla_correspondencia_indiv_FIN();
    tabla_correspondencia_indiv_FIN_ADMIND();
    notificacionesCorrespALERTA();
})


// NOTIFICACIONES DEL INDEX SOBRE LA LLEGADA DE NOTIFICACIONES
function notificacionesCorresp(){
    var parametros =
    {
        "alerta": "notificaciones"
    };
    $.ajax({
        data: parametros,
        url: '../php/notificaciones_general.php',
        type: 'POST',
        success: function(mensaje)
        {
            $('#notificaciones').html(mensaje);
        }
    });
    
}
function notificacionesCorrespALERTA(){
    var parametros =
    {
        "alerta": "notificacionesALERTA"
    };
    $.ajax({
        data: parametros,
        url: '../php/notificaciones_general.php',
        type: 'POST',
        success: function(mensaje)
        {
            $('#notificacionesALERTA').html(mensaje);
        }
    });
    
}
function contador_correspondencia() {
    var parametros =
    {
        "correspondencia": "contador"
    }
    $.ajax({
        data: parametros,
        dataType: 'json',
        type: "POST",
        url: "../php/correspondencia.php",
        error: function () {
            alert("error");
        },
        success: function (valores) {
            $('#contador').val(valores.contador);
        }
    })
}
function tabla_correspondencia_indiv() {
    var parametros =
    {
        "correspondencia": "tabla_indiv"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/correspondencia.php",
        error: function () {
            alert("error");
        },
        success: function (mensaje) {
            $('#tabla_correspondencia_indivi').html(mensaje);
            new DataTable('#dataTable_corres_ind', {
                language: Traduccion,
            });
            $('#tabla_correspondencia_indivi tr').each(function () {
                var fecha = $(this).find('td:nth-child(6)').text();

                if (fecha) {
                    var fecha2 = new Date(fecha);

                    var diferencia = Date.now() - fecha2.getTime();
                    var dias = Math.abs(diferencia) / (1000 * 60 * 60 * 24);

                    if (dias >= 2 ) {
                        $(this).find('td:nth-child(6)').addClass('bg-danger text-light');
                    }
                }
            });           
        }
    })
}
// TODOS LOS REGISTROS (SOLO JEFE CORRESPONDENCIA)
function tabla_correspondencia() {
    var parametros =
    {
        "correspondencia": "tabla"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/correspondencia.php",
        error: function () {
            alert("error al imprimir la tabla");
        },
        success: function (mensaje) {
            $('#tabla_correspondencia').html(mensaje);
            new DataTable('#dataTable_corres', {
                language: Traduccion,
                initComplete: function () {
                    var api = this.api();
                    // Obtener el índice de la columna de fechas
                    var dateColumnIndex = 0; // Reemplaza con el índice de tu columna de fechas

                    // Ordenar la columna de fechas de forma descendente (más lejano a más reciente)
                    api.column(dateColumnIndex).order('desc').draw();
                }
            });
            $('#dataTable_corres tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "En espera") {
                    $(this).find('td:last').addClass('bg-warning text-dark');
                } else if (est == "Confirmado") {
                    $(this).find('td:last').addClass('bg-success text-dark');
                }else if (est == "Alerta") {
                    $(this).find('td:last').addClass('bg-danger text-dark');
                }
            });
        }
    })
}
// BUSCAR EMPRESA
function empresas_fun() {
    Rif = document.getElementById('rif_empresa').value;
    identifi = document.getElementById('identificador').value;
    var parametros =
    {
        "rif": Rif,
        "identificador": identifi,
        "correspondencia": "empresas"
    }
    $.ajax({
        data: parametros,
        dataType: 'json',
        type: "POST",
        url: "../php/correspondencia.php",
        error: function (jqXHR, xhr, status, error) {
            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                document.getElementById('rif_empresa').classList.add('border-grey');
                document.getElementById('rif_empresa').classList.remove('border-good');
                document.getElementById('procedencia').value = '';
                document.getElementById('idEmpresa').value = '';


            }

        },
        success: function (valores) {
            $('#procedencia').val(valores.nombre_emp);
            $('#idEmpresa').val(valores.idEmpresa);
            document.getElementById('rif_empresa').classList.remove('border-grey');
            document.getElementById('rif_empresa').classList.add('border-good');
        }
    })

}
// GUARDA EL VALOR PARA ACEPTAR CORRESPONDENCIA
function datosTabla() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#bodyCorresInd').on('click', 'tr', function () {
        // nroCaso=$(this).find('#input_td').val();
        const nroAdmin = $(this).find('td').eq(4).text();

        const input = document.getElementById("cosasJS");
        input.value = nroAdmin;
    });
}
// CONFIRMAR CORRESPONDENCIA Y RECARGAR TABLAS
function confirmarCorres() {
    const nro = document.getElementById('cosasJS').value;
    const nota_final = document.getElementById('descripcion').value;
    var parametros =
    {
        "nroAdmin": nro,
        "nota_final": nota_final,
        "correspondencia": "confirmarCo"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/correspondencia.php",
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                $('#infoCorres .modal-body').html('Error aceptar la correspondencia.<br>Error: No se hizo selección correcta o datos inválidos.');

                $('#infoCorres').modal('show');
            }

        },
        success: function (mensaje) {
            $('#infoCorres .modal-body').html(mensaje);
            $('#infoCorres').modal('show');
            tabla_correspondencia_indiv();
            tabla_correspondencia_indiv_FIN();
            tabla_correspondencia_indiv_FIN_ADMIND();

        }
    })
}
// TABLAS DE CORRESPONDENCIAS ACEPTADAS
function tabla_correspondencia_indiv_FIN() {
    var parametros =
    {
        "correspondencia": "tabla_indiv_FIN"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/correspondencia.php",
        error: function () {
            alert("error");
        },
        success: function (mensaje) {
            $('#tabla_correspondencia_indivi_FIN').html(mensaje);
            new DataTable('#dataTable_corres_ind_FIN', {
                language: Traduccion,
            });
            $('#tabla_correspondencia_indivi_FIN tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Confirmado") {
                    $(this).find('td:last').addClass('bg-success text-light');
                }
            });
        }
    })
}
function tabla_correspondencia_indiv_FIN_ADMIND() {
    var parametros =
    {
        "correspondencia": "tabla_indiv_FIN_ADMIN"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/correspondencia.php",
        error: function () {
            alert("error");
        },
        success: function (mensaje) {
            $('#tabla_correspondencia_indivi_FIN_admin').html(mensaje);
            new DataTable('#dataTable_corres_ind_FIN_AD', {
                language: Traduccion,
                initComplete: function () {
                    var api = this.api();
                    // Obtener el índice de la columna de fechas
                    var dateColumnIndex = 0; // Reemplaza con el índice de tu columna de fechas

                    // Ordenar la columna de fechas de forma descendente (más lejano a más reciente)
                    api.column(dateColumnIndex).order('desc').draw();
                    // Agregar filtros (selectores) a la tabla
                    api.columns([4, 7]).every(function () {
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
                }
            });
            $('#tabla_correspondencia_indivi_FIN_admin tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Confirmado") {
                    $(this).find('td:last').addClass('bg-success text-light');
                }
                if (est == "En espera") {
                    $(this).find('td:last').addClass('bg-warning text-dark');
                }
            });
        }
    })
}
// REPORTE CORRESPONDENCIA
function reporteCorres(){
    const fecha1 = document.getElementById('inicial').value;
    const fecha2 = document.getElementById('final').value;
    var parametros = 
    {
        "fecha1": fecha1,
        "fecha2": fecha2,
        "buscar": "reporte"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/reportes_corresp.php",
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;
            $.alert({
                title: 'Error',
                content: "Error en las fechas",
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
        },
        success: function (mensaje) {
            window.open('../reportes/reporte_correspondencia.php', "_blank");
        }
    });
}