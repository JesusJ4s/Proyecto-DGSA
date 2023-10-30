$(document).ready(function () {

    mostrarSoportes();
    mostrarSoportes1_2();
    alertaSoporte();

    mostrarSoportes_cantidad();
    mostrar_soportes_FINALIZADOS();
    mostrar_soportes_final();
    mostrar_soportes_componentes();
    mostrar_soportes_Conocimiento();

    mostrarSoportesRechazados();
    mostrarSoportesRechazadosVista();

});
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES DEL SISTEMA EN ESPERA (TABLA INTERACTIVA)
function mostrarSoportes() {

    var parametros =
    {
        "buscar_soporte": "tab_esp_inter"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes').html(mensaje);
            new DataTable('#dataTable_espera', {
                language: Traduccion,
            });

            // Change the background of the last cell in each row based on the value
            $('#dataTable_espera tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "En Espera") {
                    $(this).find('td:last').addClass('bg-warning text-dark');
                }
            });
        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES DEL SISTEMA EN ESPERA (TABLA VISTA)
function mostrarSoportes1_2() {

    var parametros =
    {
        "buscar_soporte": "tab_esp_vista"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_basico').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_basico').html(mensaje);
            new DataTable('#dataTable_consul', {
                language: Traduccion,
            });
            $('#dataTable_consul tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "En Espera") {
                    $(this).find('td:last').addClass('bg-warning text-dark');
                }
                if (est == "En Proceso") {
                    $(this).find('td:last').addClass('bg-secondary text-light');
                }
            });

        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES DEL SISTEMA EN PROCESO (TABLA INTERACTIVA)
function mostrar_soportes_final() {
    var parametros =
    {
        "buscar_soporte": "tab_procs_inter"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_final').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_final').html(mensaje);
            new DataTable('#dataTable_proc', {
                language: Traduccion,
            });
            // Change the background of the last cell in each row based on the value
            $('#dataTable_proc tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "En Proceso") {
                    $(this).find('td:last').addClass('bg-secondary text-light');
                }
            });
        }
    });
}
function mostrar_soportes_componentes() {
    var parametros =
    {
        "buscar_soporte": "tab_espera_comp"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_final').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_componentes').html(mensaje);
            new DataTable('#dataTable_componentes', {
                language: Traduccion,
            });
            // Change the background of the last cell in each row based on the value
            // $('#dataTable_componentes tr').each(function () {
            //     var est = $(this).find('td:last').text();
            //     if (est == "Falta Repuesto") {
            //         $(this).find('td:last').addClass('bg-secondary text-light');
            //     }
            // });
        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES DEL SISTEMA FINALIZADOS (TABLA INTERACTIVA)
function mostrar_soportes_FINALIZADOS() {
    var parametros =
    {
        "buscar_soporte": "tab_final_ING"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_Ingenieros').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_Ingenieros').html(mensaje);
            new DataTable('#dataTable_ING', {
                language: Traduccion,
            });
            // Change the background of the last cell in each row based on the value
            $('#dataTable_ING tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Finalizado") {
                    $(this).find('td:last').addClass('bg-success text-light');
                }
            });
        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES DEL SISTEMA FINALIZADOS (TABLA DE VISTA)
function mostrar_soportes_Conocimiento() {
    var parametros =
    {
        "buscar_soporte": "tab_final_inter"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_Conocimiento').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_Conocimiento').html(mensaje);
            new DataTable('#dataTable_fin', {
                language: Traduccion,
            });
            // Change the background of the last cell in each row based on the value
            $('#dataTable_fin tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Finalizado") {
                    $(this).find('td:last').addClass('bg-success text-light');
                }
            });
        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES RECHAZADOS (TABLA INTERACTIVA)
function mostrarSoportesRechazados() {
    var parametros =
    {
        "buscar_soporte": "rechazado"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_rechazado').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_rechazado').html(mensaje);
            new DataTable('#dataTable_rec', {
                language: Traduccion,
            });
            $('#dataTable_rec tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Rechazado") {
                    $(this).find('td:last').addClass('bg-danger text-light');
                }
            });
        }
    });
}
// MUESTRA AUTOMÁTICAMENTE LOS SOPORTES RECHAZADOS (TABLA VISTA)
function mostrarSoportesRechazadosVista() {
    var parametros =
    {
        "buscar_soporte": "rechazado_vista"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/consultar_soportes.php",

        beforeSend: function () {
            $('#mostrar_soportes_rechazado_vista').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function (mensaje) {
            $('#mostrar_soportes_rechazado_vista').html(mensaje);
            new DataTable('#dataTable_rec_vista', {
                language: Traduccion,
            });
            // Change the background of the last cell in each row based on the value
            $('#dataTable_rec_vista tr').each(function () {
                var est = $(this).find('td:last').text();
                if (est == "Rechazado Definitivo") {
                    $(this).find('td:last').addClass('bg-danger text-light');
                }
            });
        }
    });
}

// CUENTA LA CANTIDAD DE COLUMNAS PARA MOSTRARLAS
function mostrarSoportes_cantidad() {

    var parametros =
    {
        "buscar_soporte": "cantidad_Registros"

    };

    $.ajax({
        data: parametros,
        dataType: 'json',
        url: '../php/consultar_soportes.php',
        type: 'POST',

        beforeSend: function () {

        },
        error: function () {
            alert("Fallo al buscar cantidad sopote técnico");
            $('.ocultar-class').hide();
        },
        complete: function () {
            $('.ocultar-spinner').hide(2);
            $('.ocultar-class').show(2);
        },

        success: function (valores) {
            $("#compoCampana").val(valores.respuesto);


            $("#espera").val(valores.contador1);
            $("#procesoN").val(valores.contador2);
            $("#rechazado").val(valores.contador3);
            $("#cant_sopor").val(valores.campana);


        }
    });
}
// *****************************************************************************************


// LLAMA A LOS DATOS DE UNA SOLICITUD EN ESPECÍFICO, PARA SER ATENDIDA
function AtenderSoli() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-body').on('click', 'tr', function () {
        // nroCaso=$(this).find('#input_td').val();
        nomb_equipo = $(this).find('td').eq(2).text();

        id = $(this).find('td').eq(0).text();
        // nroCaso = $("#mac_edit").val();
        var parametros =
        {
            "nomb_equipo": nomb_equipo,
            "id": id,
            "buscar_soporte": "llenarInputs_espera"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_soportes.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;

                // alert("La solicitud a la que intenta acceder ya se encuentra en proceso o finalizada. Igualmente puede verificar la Dirección MAC");
                if (nroERROR == 500) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al registrar solicitud.<br>Error: Hubo errores al verificar datos de la solicitud.');
                }
                if (nroERROR == 501) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al registrar solicitud.<br>Error: La solicitud a la que intenta acceder ya se encuentra en otro estado.');
                }


                $('#tabla_soportes').removeClass('ocultar-div');
                $('#formulario_mostrar').addClass('ocultar-div');

                $('.ocultar-class').hide();
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },

            success: function (valores) {
                $('#formulario_mostrar').removeClass('ocultar-div');

                // INFORMACIÓN DEL EQUIPO
                $("#depto_mostrar").val(valores.nombre_dpto);
                $("#division_mostrar").val(valores.nombre_div);
                $("#direccion_mostrar").val(valores.nombre_dire);
                $("#responsable_edit").val(valores.responsable);
                $("#supervisor_dpto_edit").val(valores.supervisor_dpto);

                $("#nombre_equipo").val(valores.nombre_equipo);
                $("#ip_edit").val(valores.ip);
                $("#vr_win_edit").val(valores.windows_ver);

                // INFORMACIÓN DE LA SOLICITUD
                $("#id_soporte").val(valores.id_soporte);
                $("#soporteUso").val(valores.uso_equipo);
                $("#soporteNivel").val(valores.nivel_soporte);
                $("#soporteDesc").val(valores.soporte_descripcion);
                $("#soporteFecha").val(valores.fecha_soporte_solicitud);
                $("#soporteEst").val(valores.estado);

                inputEstado = $("#soporteEst").val();

                if (inputEstado == "1") {
                    $('#soporteEst').addClass('bg-warning text-dark');
                    $("#soporteEst").val('En Espera');
                }

                $('#tabla_soportes').addClass('ocultar-div');

                // Habilita la casilla para la contraseña
                $('#contra_jefe').prop('disabled', false);


            }
        });

    });

}

// LLAMA A LOS DATOS DE UNA SOLICITUD EN ESPECÍFICO, PARA SER FINALIZADA
function FinalizarSoli() {

    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-final').on('click', 'tr', function () {
        // macFinale=$(this).find('#input_final').val();
        nombre_equipo = $(this).find('td').eq(2).text();

        idFinale = $(this).find('td').eq(0).text();

        var parametros =
        {
            "nombre_equipo": nombre_equipo,
            "NroCasoFinal": idFinale,
            "buscar_soporte": "llenarInputs_proceso"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_soportes.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                // alert("No se encontraron los datos.");
                var nroERROR = jqXHR.status;

                if (nroERROR == 500) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Datos ingresados inválidos.');
                }
                if (nroERROR == 501) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Solicitud no encontrada en el sistema.');
                }
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },

            success: function (valores) {
                $('#tabla_soportes2').addClass('ocultar-div');

                $('#formulario_Final').removeClass('ocultar-div');

                // INFORMACIÓN DEL EQUIPO
                $("#depto_mostrar2").val(valores.nombre_dpto);
                $("#division_mostrar2").val(valores.nombre_div);
                $("#direccion_mostrar2").val(valores.nombre_dire);
                $("#responsable_edit2").val(valores.responsable);

                $("#nombre_equipo2").val(valores.nombre_equipo);
                $("#ip_edit2").val(valores.ip);

                // INFORMACIÓN DE LA SOLICITUD
                $("#id_soporte2").val(valores.id_soporte);
                $("#soporteNivel2").val(valores.nivel_soporte);
                $("#soporteFecha2").val(valores.fecha_soporte_solicitud);
                $("#soporteEst2").val(valores.estado);

                $("#fecha_aceptacion").val(valores.fecha_soporte_aceptacion);



                inputEstado = $("#soporteEst2").val();

                if (inputEstado == "2") {
                    $('#soporteEst2').addClass('bg-secondary text-light');
                    $("#soporteEst2").val('En Proceso');

                }
            }
        });

    });
}
// LLAMA A LOS DATOS DE UNA SOLICITUD EN ESPECÍFICO, PARA SER FINALIZADA
function FinalizarSoli2() {

    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-componentes').on('click', 'tr', function () {
        // macFinale=$(this).find('#input_final').val();
        nombre_equipo = $(this).find('td').eq(2).text();

        idFinale = $(this).find('td').eq(0).text();

        var parametros =
        {
            "nombre_equipo": nombre_equipo,
            "NroCasoFinal": idFinale,
            "buscar_soporte": "llenarInputs_proceso"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_soportes.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                // alert("No se encontraron los datos.");
                var nroERROR = jqXHR.status;

                if (nroERROR == 500) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Datos ingresados inválidos.');
                }
                if (nroERROR == 501) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Solicitud no encontrada en el sistema.');
                }
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },

            success: function (valores) {
                $('#tabla_soportes2').addClass('ocultar-div');

                $('#formulario_Final').removeClass('ocultar-div');

                // INFORMACIÓN DEL EQUIPO
                $("#depto_mostrar2").val(valores.nombre_dpto);
                $("#division_mostrar2").val(valores.nombre_div);
                $("#direccion_mostrar2").val(valores.nombre_dire);
                $("#responsable_edit2").val(valores.responsable);

                $("#nombre_equipo2").val(valores.nombre_equipo);
                $("#ip_edit2").val(valores.ip);

                // INFORMACIÓN DE LA SOLICITUD
                $("#id_soporte2").val(valores.id_soporte);
                $("#soporteNivel2").val(valores.nivel_soporte);
                $("#soporteFecha2").val(valores.fecha_soporte_solicitud);
                $("#soporteEst2").val(valores.estado);

                $("#fecha_aceptacion").val(valores.fecha_soporte_aceptacion);



                inputEstado = $("#soporteEst2").val();

                if (inputEstado == "2") {
                    $('#soporteEst2').addClass('bg-secondary text-light');
                    $("#soporteEst2").val('En Proceso');
                }
                if (inputEstado == "6") {
                    $('#soporteEst2').addClass('bg-warning text-dark');
                    $("#soporteEst2").val('Faltan Repuestos');

                }
            }
        });

    });
}

// RECHAZA LA SOLICITUD DESDE EL MODAL DE RECHAZO
function funRecarga() {
    $('#parte1').removeClass("ocultar-div");
    $('#formulario_mostrar').addClass("ocultar-div");
    $('#tabla_soportes').removeClass('ocultar-div');
    formu_finalizar_soli.reset();
    form_aceptar_soli.reset();
    mostrarSoportesRechazados();
    mostrarSoportes();
    mostrar_soportes_final();
    mostrarSoportes_cantidad();
    mostrar_soportes_componentes();
}
function enviarRechazo() {

    idRech = document.getElementById('id_soporte').value;
    var parametros =
    {
        "idRech": idRech,
        "buscar_soporte": "iniciarRechazo"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function (jqXHR, xhr, status, error) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al rechazar la solicitud.<br>Error: Casillas están vacías.');
            }
            if (nroERROR == 501) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al rechazar la solicitud.<br>Error: La solicitud no fue encontrada.');
            }

            funRecarga();

        },

        success: function (mensaje) {
            $('#Modal_Notifi .modal-body').html(mensaje);
            $('#Modal_Notifi').modal('show');
            funRecarga();

        }
    });
}
// LLAMA A LOS DATOS DE UNA SOLICITUD EN ESPECÍFICO, PARA SER RECHAZADA DEFINITIVAMENTE
function RechazarSolicitud() {

    $('#body-rechazo').on('click', 'tr', function () {
        idRech = $(this).find('td').eq(0).text();
        nombre_equipo = $(this).find('td').eq(2).text();
        var parametros =
        {
            "nombre_equipo": nombre_equipo,
            "idRech": idRech,
            "buscar_soporte": "llenarInputs_rechazar"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_soportes.php',
            type: 'POST',
            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                // alert("No se encontraron los datos.");
                var nroERROR = jqXHR.status;

                if (nroERROR == 500) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al solicitar los datos.<br>Error: Datos inválidos.');
                }
                if (nroERROR == 501) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al solicitar los datos.<br>Error: Error al buscar la solicitud.');
                }
                $('#tabla_soportes3').removeClass('ocultar-div');
                $('#formulario_rechazo').addClass('ocultar-div');

                $('.ocultar-class').hide();
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },

            success: function (valores) {
                $('#tabla_soportes3').addClass('ocultar-div');

                $('#formulario_rechazo').removeClass('ocultar-div');

                // INFORMACIÓN DEL EQUIPO
                $("#depto_mostrar3").val(valores.nombre_dpto);
                $("#division_mostrar3").val(valores.nombre_div);
                $("#direccion_mostrar3").val(valores.nombre_dire);

                $("#responsable_edit3").val(valores.responsable);
                $("#nombre_equipo3").val(valores.nombre_equipo);
                $("#ip_edit3").val(valores.ip);

                // INFORMACIÓN DE LA SOLICITUD
                $("#id_soporte3").val(valores.id_soporte);
                $("#soporteNivel3").val(valores.nivel_soporte);
                $("#soporteFecha3").val(valores.fecha_soporte_solicitud);
                $("#soporteEst3").val(valores.estado);

                $("#fecha_rechazo").val(valores.fecha_soporte_aceptacion);

                inputEstado = $("#soporteEst3").val();

                if (inputEstado == "4") {
                    $('#soporteEst3').addClass('bg-danger text-light');
                    $("#soporteEst3").val('Rechazado');

                }
            }
        });
    });
}
function funRecarga2() {
    $('#formulario_Final').addClass("ocultar-div");
    $('#tabla_soportes2').removeClass('ocultar-div');
    $('#parte2').removeClass("ocultar-div");
    formu_finalizar_soli.reset();
    mostrarSoportesRechazados();
    mostrarSoportes();
    mostrar_soportes_final();
    mostrarSoportes_cantidad();
    mostrar_soportes_componentes();
}
//ENVIA LA SOLICITUD DE SOPORTE TÉCNICO A EN ESPERA DE COMPONETES
function enviarEspera() {
    var nombre_equipo = document.getElementById('nombre_equipo2').value;
    var texto = document.getElementById('descripcion_compo').value;
    var soporte = document.getElementById('id_soporte2').value;
    var parametros =
    {
        "nombre_equipo": nombre_equipo,
        "texto": texto,
        "soporte": soporte,
        "buscar_soporte": "espera_componentes"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;
            if (nroERROR == 500) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al mover solicitud.<br>Error: Hubo errores al verificar datos de la solicitud.');
            }
            if (nroERROR == 501) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al mover solicitud.<br>Error: Colocó menos de 20 carácteres en la descripción o colocó datos inválidos.');
            }
        },
        success: function (mensaje) {
            $('#Modal_Notifi .modal-body').html(mensaje);
            $('#Modal_Notifi').modal('show');

            funRecarga2();
        }
    });
}
// SOLICITAR HISTORIAL DE DATOS
function verInformacion(){
    $('#body-componentes').on('click','#btnInfor',function(){
        con_name = $(this).closest('tr').find('td').eq(2).text();
        var parametros=
        {
            "con_name":con_name,
            "buscar_soporte":"informacion"
        }
        $.ajax({
            data: parametros,
            url: '../php/consultar_soportes.php',
            type: 'POST',
            error: function(jqXHR)
            {
                alert("error")
            },   
            success: function(mensaje)
            {
                $('#Modal_Notifi .modal-body').html(mensaje);
                $('#Modal_Notifi').modal('show');
            }
        });

    });
}
//********************************************************************************************************
// DESBLOQUEO DE BOTÓN DE ENVÍO Y RECHAZO  

// ACEPTAR SOLICITUD Y SUBIR AL SISTEMA

function Aceptar_Soli() {
    nroCaso = document.getElementById('id_soporte').value;
    nombre_equipo = document.getElementById('nombre_equipo').value;
    ingeniero_selector = document.getElementById('ingeniero_selector').value;
    var parametros =
    {
        "ingeniero_selector": ingeniero_selector,
        "nroCaso": nroCaso,
        "nombre_equipo": nombre_equipo,
        "buscar_soporte": "espera_proceso"
    };
    $.ajax({

        data: parametros,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al aceptar la solicitud.<br>Error: Datos ingresados inválidos.');
            }
            if (nroERROR == 501) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al aceptar la solicitud.<br>Error: Solicitud ya en proceso o rechazada.');
            }
        },

        success: function (mensaje) {

            mostrarSoportes();
            mostrar_soportes_final();
            mostrarSoportesRechazados();
            mostrarSoportes_cantidad();

            $('#Modal_Notifi .modal-body').text(mensaje);
            $('#Modal_Notifi').modal('show');
            $('#parte1').removeClass("ocultar-div");
            $('#formulario_mostrar').addClass('ocultar-div');
            $('#tabla_soportes').removeClass('ocultar-div');

            form_aceptar_soli.reset();
        }
    });
}
// FINALIZAR SOLICITUD
function FinalizarSolicitud() {

    nombre_equipo = document.getElementById('nombre_equipo2').value;
    nroCaso = document.getElementById('id_soporte2').value;
    comentario = document.getElementById('descripcion').value;
    var parametros =
    {
        "nombre_equipo": nombre_equipo,
        "nroCaso": nroCaso,
        "comentario": comentario,
        "buscar_soporte": "finalizar_proceso"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function (jqXHR) {
            // alert("No se encontraron los datos.");
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Datos ingresados inválidos.');
            }
            if (nroERROR == 501) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: El comentario debe ser mayor a 20 carácteres.');
            }
            if (nroERROR == 502) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: La solicitud ya fue procesada.');
            }

        },
        success: function (mensaje) {
            mostrar_soportes_final();
            mostrar_soportes_Conocimiento();
            mostrarSoportes_cantidad();
            mostrar_soportes_componentes();
            mostrar_soportes_FINALIZADOS();
            $('#Modal_Notifi .modal-body').text(mensaje);
            $('#Modal_Notifi').modal('show');
            $('#parte2').removeClass("ocultar-div");
            $('#formulario_Final').addClass("ocultar-div");
            $('#tabla_soportes2').removeClass('ocultar-div');
            formu_finalizar_soli.reset();
            form_aceptar_soli.reset();
        }
    });
}
// CONFIRMAR RECHAZO SOLICITUD DE MANERA DEFINITIVA
function rechazar_solicitudFunction() {

    nombre_equipo = document.getElementById('nombre_equipo3').value;
    nroCaso = document.getElementById('id_soporte3').value;
    comentario = document.getElementById('descripcion2').value;
    var parametros =
    {
        "nombre_equipo": nombre_equipo,
        "nroCasoRech": nroCaso,
        "comentarioRech": comentario,
        "buscar_soporte": "Rechazar_Final"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function (jqXHR, xhr, status, error) {
            // alert("No se encontraron los datos.");
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Datos ingresados inválidos.');
            }
            if (nroERROR == 501) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: Debe llenar completamente los campos solicitados.');
            }
            if (nroERROR == 502) {
                $('#Modal_Notifi').modal('show');

                $('#Modal_NotifiC').html('Error al finalizar el rechazo.<br>Error: La solicitud ya fue rechazada.');
            }
            // $('#tabla_soportes3').removeClass('ocultar-div');
            // $('#formulario_rechazo').addClass('ocultar-div');

            // $('.ocultar-class').hide();
        },
        success: function (mensaje) {
            mostrarSoportes();
            mostrar_soportes_final();
            mostrarSoportesRechazados();
            mostrarSoportesRechazadosVista();
            mostrarSoportes_cantidad();

            $('#Modal_Notifi .modal-body').text(mensaje);
            $('#Modal_Notifi').modal('show');
            $('#parte3').removeClass("ocultar-div");
            $('#formulario_rechazo').addClass("ocultar-div");
            $('#tabla_soportes3').removeClass('ocultar-div');
            formu_finalizar_soli.reset();
            form_aceptar_soli.reset();
            formu_rechazar_soli.reset();



        }
    });
}
//********************************************************************************************************
// ALERTAS
function alertaSoporte(){
    var parametros =
    {
        "alerta": "soporteTecnico"
    };
    $.ajax({
        data: parametros,
        url: '../php/notificaciones_general.php',
        type: 'POST',
        success: function(mensaje)
        {
            $('#notificaciones3').html(mensaje);
        }
    });
    
}
// VER REPORTE
function verReporteSoli(){
    $('#body-soport-ING').on('click','#btnRepor',function(){
        con_id = $(this).closest('tr').find('td').eq(0).text();
        con_name = $(this).closest('tr').find('td').eq(1).text();
        var parametros=
        {
            "con_id":con_id,
            "con_name":con_name,
            "busqueda":"soporteFinalizado"
        }
        $.ajax({
            data: parametros,
            url: '../php/consultar_equipos_individuales.php',
            type: 'POST',
            error: function(jqXHR)
            {
                var nroERROR = jqXHR.status;

                if (nroERROR == 500) {
                    $('#Modal_Notifi').modal('show');

                    $('#Modal_NotifiC').html('Error al buscar el reporte.');
                }
            },   
            success: function(mensaje)
            {
                window.open('../reportes/soporteEquipo.php', "_blank");

            }
        });

    });
}