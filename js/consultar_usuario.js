var submitButton1 = document.querySelector('#cambCargo');
var submitCambInactivo = document.getElementById('activarUsr');

$(document).ready(function () {

    consultar_todos();
    consultar_SinAcceso();
    consultar_Inactivos();
    consultar_ci2();
    $('#spinner').hide();
    auditoriaUsr();
    auditoriaBD();

    // oo();
});

//****************************************************

// VERIFICA EL PIN DE SEGURIDAD PARA CAMBIAR CONTRASEÑA
function verificacion() {
    pin = document.getElementById('pin_se').value;
    cedulaRecuperar = document.getElementById('cedulaCargo').value;
    contraseñaCambio = document.getElementById('contraseña').value;
    // pin_form= document.getElementById('pin_form');
    var parametros =
    {
        "pin": pin,
        "cedulaRecuperar": cedulaRecuperar,
        "que_buscar": "VerificacionPin"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',
        error: function (jqXHR, xhr, status, error) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#mensaje_contraseña').html("Pin errada");
                // pin_form.reset();

            }

        },
        success: function (mensaje) {
            $('#mensaje_contraseña').html("Pin correcto");
            $('#aceptar').prop('disabled', false);
        }
    });
}

// ****************************************************
// CONSULTAR TODOS
function consultar_todos() {
    var parametros =
    {
        "que_buscar": "todaLaTabla_Cargos"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        success: function (mensaje) {
            $('#tabla_usuarios').html(mensaje);
            new DataTable('#dataTable_gestion', {
                language: Traduccion,
            });
        }
    });
}
function consultar_SinAcceso() {
    var parametros =
    {
        "que_buscar": "sinAcceso"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        success: function (mensaje) {
            $('#tabla_usuario2').html(mensaje);
            new DataTable('#dataTable_SinAcc', {
                language: Traduccion,
            });
        }
    });
}
function consultar_Inactivos() {
    var parametros =
    {
        "que_buscar": "inactivos"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        success: function (mensaje) {
            $('#tabla_usuariosInactivos').html(mensaje);
            new DataTable('#dataTable_Inactivos', {
                language: Traduccion,
            });
        }
    });
}

// CONSULTAR POR CEDULAS
// IMPRESIÓN DE LA TABLA CON DATOS PARA CAMBIO DE CONTRASEÑA POR PARTE DEL ADMIN
function consultar_ci2() {
    var parametros =
    {
        "que_buscar": "tabla_recuperacion"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        beforeSend: function () {
            $('#mostrar_mensaje_ci').removeClass('ocultar-div');

        },
        success: function (mensaje) {
            $('#mostrar_mensaje_ci').html(mensaje);
            // $('#tabla_usuarios').classList.add("ocultar-div");
            // document.getElementById("tabla_usuarios").classList.add("ocultar-div");
            new DataTable('#Recup_contra', {
                language: Traduccion,
            });

            // $("#obligatorio").classList.add("ocultar-div");


        }
    });
}
// SE ACTIVA MEDIANTE LOS BOTONES DE LAS TABLAS QUE SE IMPRIMEN

// LLENA EL FORMULARIO PARA CAMBIAR EL CARGO (GESTIÓN DE USUARIO)
function cambioCargo_ind() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-rol').on('click', 'tr', function () {
        nroCI = $(this).find('td').eq(1).text();

        var parametros =
        {
            "nroCI": nroCI,
            "que_buscar": "datos_CambioCargo"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_cod.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;
                alert("Estatus " + status + nroERROR)
                $('.ocultar-class').hide();
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },
            success: function (valores) {
                // alert("llego");
                $('#formulario_mostrar_Cam').removeClass('ocultar-div');
                $('#tituloUsr').removeClass('ocultar-div');
                // $('#mostrar_mensaje_ci').addClass('ocultar-div');
                $('#tablaConAccs').addClass('ocultar-div');
                $('#tablaSinAccs').addClass('ocultar-div');

                // $("#cedula_usr").prop("disabled", true);

                // INFORMACIÓN DEL USUARIO
                $("#nombreCargo").val(valores.nombreCargo);
                $("#cedulaCargo").val(valores.cedulaCargo);
                $("#usuarioCargo").val(valores.usuarioCargo);
                $("#id_dir").val(valores.id_dir);
                $("#id_div").val(valores.id_div);
                $("#id_dep").val(valores.id_dep);

                $("#cargoOrig").val(valores.cargoOrig);

                $("#nombre_dpto").val(valores.nombre_dpto);
                $("#nombre_div").val(valores.nombre_div);
                $("#nombre_dire").val(valores.nombre_dire);
            }
        });

    });

}
function cambioCargo_ind2() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-sinAcceso').on('click', 'tr', function () {
        nroCI = $(this).find('td').eq(1).text();

        var parametros =
        {
            "nroCI": nroCI,
            "que_buscar": "datos_CambioCargo"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_cod.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;
                alert("Estatus " + status + nroERROR)
                $('.ocultar-class').hide();
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },
            success: function (valores) {
                $('#formulario_mostrar_Cam').removeClass('ocultar-div');
                $('#tituloUsr').removeClass('ocultar-div');
                $('#mostrar_mensaje_ci').addClass('ocultar-div');
                $('#tablaConAccs').addClass('ocultar-div');
                $('#tablaSinAccs').addClass('ocultar-div');

                $("#cedula_usr").prop("disabled", true);

                // INFORMACIÓN DEL EQUIPO
                $("#nombreCargo").val(valores.nombreCargo);
                $("#cedulaCargo").val(valores.cedulaCargo);
                $("#usuarioCargo").val(valores.usuarioCargo);
                $("#id_dir").val(valores.id_dir);
                $("#id_div").val(valores.id_div);
                $("#id_dep").val(valores.id_dep);

                $("#cargoOrig").val(valores.cargoOrig);

                $("#nombre_dpto").val(valores.nombre_dpto);
                $("#nombre_div").val(valores.nombre_div);
                $("#nombre_dire").val(valores.nombre_dire);
            }
        });

    });

}
// LLENA EL FORMULARIO PARA RECUPERAR USUARIO (GESTIÓN DE USUARIO)
function recuperarUSR() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-recuperacion').on('click', 'tr', function () {
        nroCI = $(this).find('td').eq(1).text();
        cargo = $(this).find('td').eq(4).text();

        var parametros =
        {
            "nroCI": nroCI,
            "cargo": cargo,
            "que_buscar": "formRecuperarUsr"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_cod.php',
            type: 'POST',

            beforeSend: function () {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();


            },
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;

                alert("Estatus " + status)

                $('.ocultar-class').hide();
            },
            complete: function () {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);
            },

            success: function (valores) {
                // alert("llego");

                $('#formulario_mostrar_Cam').removeClass('ocultar-div');
                $('#mostrar_mensaje_ci').addClass('ocultar-div');
                $('#tabla_usuarios').addClass('ocultar-div');

                $("#cedula_usr").prop("disabled", true);
                // INFORMACIÓN DEL EQUIPO
                $("#nombreCargo").val(valores.nombreCargo);
                $("#cedulaCargo").val(valores.cedulaCargo);
                $("#usuarioCargo").val(valores.usuarioCargo);
            }
        });

    });

}
// CAMBIO DE ROL DESDE EL ADMINISTRADOR
function editUsuarios() {
    var cambio_cargo = $('#cambio_cargo').serialize();

    $.ajax({
        data: cambio_cargo,
        url: '../php/usuarios.php',
        type: 'POST',

        success: function (mensaje) {
            $('#myModal_gestion').modal('show');
            $('#myModal_gestion .modal-body').html(mensaje);

            $('#formulario_mostrar_Cam').addClass('ocultar-div');
            $('#tituloUsr').addClass('ocultar-div');
            $('#tablaConAccs').removeClass('ocultar-div');
            $('#tablaSinAccs').removeClass('ocultar-div');

            consultar_todos();
            consultar_SinAcceso();
            consultar_Inactivos();

            cambio_no();

        },
        error: function (jqXHR, xhr, status, error) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al ingresar al sistema.<br>Error: Datos vacíos.');

            }
            if (nroERROR == 501) {
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al ingresar al sistema.<br>Error: Cedula inexistente en el sistema.');

            }
            if (nroERROR == 502) {
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al ingresar al sistema.<br>Error: Nombre de Usuario ya ocupado por otro usuario.');

            }
        }
    });
}
// PRE-CARGAR DATOS DEL USUARIO INACTIVO
function activarUsrDatos() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-Inactivos').on('click', 'tr', function () {
        nroCI = $(this).find('td').eq(1).text();

        var parametros =
        {
            "nroCI": nroCI,
            "ingreso": "InactivoActivoCambio"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/usuarios.php',
            type: 'POST',
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;
                alert("Estatus " + status + nroERROR)
            },
            success: function (valores) {
                $("#datosInpCed").prop("readonly", true);
                $("#datosInpStat").prop("readonly", true);
                // INFORMACIÓN DEL USUARIO
                $("#datosInpCed").val(valores.cedulaStatus);
                $("#datosInpStat").val(valores.Status);

            }
        });

    });

}
// PASAR DE INACTIVO A ACTIVO DENTRO DEL SISTEMA
function editCargoUsr() {
    var cedulaInac = document.getElementById('datosInpCed').value;
    var statusInac = document.getElementById('datosInpStat').value;
    var parametros =
    {
        "cedulaInac": cedulaInac,
        "statusInac": statusInac,
        "ingreso": "cambioStatus",
    };
    $.ajax({
        data: parametros,
        url: '../php/usuarios.php',
        type: 'POST',

        success: function (mensaje) {
            $('#myModal_gestion').modal('show');
            $('#myModal_gestion .modal-body').html(mensaje);
            consultar_todos();
            consultar_SinAcceso();
            consultar_Inactivos();

        },
        error: function (jqXHR) {
            var nroERROR = jqXHR.status;

            if (nroERROR == 500) {
                $('#myModal_gestion').modal('show');

                $('#myModal_gestionC').html('Error al verificar al usuario.<br>Error: Datos vacíos, o la cedula no existe.');

            }
        }
    });
}
// IMPRIMIR TABLA DE AUDITORIA
function auditoriaUsr() {
    var parametros =
    {
        "que_buscar": "auditoriaUsr"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        success: function (mensaje) {
            $('#auditoriaUsr').html(mensaje);
            new DataTable('#dataTable_AuditoUsr', {
                language: Traduccion,
                initComplete: function () {
                    // agregar filtros (selectores) a tabla 
                    this.api().columns([1, 3]).every(function () {
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
                },
            });


        }
    });
}
// IMPRIMIR DATOS COMPLETOS DEL SUJETO AUDITADO EN CIERTO CAMPO
function auditoriaDatos() {
    // TOMAR VALOR DE UNA COLUMNA DE UNA TABLA
    $('#body-AudiUsr').on('click', '#VerAudi', function () {
        fecha = $(this).closest('tr').find('td').eq(0).text();
        cedula = $(this).closest('tr').find('td').eq(2).text();
        var parametros =
        {
            "fecha": fecha,
            "cedula": cedula,
            "que_buscar": "auditoriaDatos"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/consultar_cod.php',
            type: 'POST',
            error: function (jqXHR, xhr, status, error) {
                var nroERROR = jqXHR.status;
                alert("Estatus " + status + nroERROR)
            },
            success: function (valores) {
                $('#AuditoriaDatos').modal('show');
                $("#nombreAudi").val(valores.nombre);
                $("#cedulaAudi").val(valores.cedulaCargo);
                $("#UsrAudi").val(valores.nombreUsuario);
                $("#fechaAudi").val(valores.fecha_cambio);
                $("#AccionAudi").val(valores.nombreAccion);
                $("#descripcionAudi").val(valores.descripcion);
            }
        });

    });

}

// IMPRIMIR TABLA DE AUDITORIA DE LA BASE DE DATOS - DATOS INDIVIDUALES
function auditoriaBD() {
    var parametros =
    {
        "que_buscar": "BaseDatos"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_cod.php',
        type: 'POST',

        success: function (mensaje) {
            $('#auditoriaBaseDatos').html(mensaje);
            new DataTable('#dataTable_BaseDatos', {
                language: Traduccion,
                initComplete: function () {
                    // agregar filtros (selectores) a tabla 
                    this.api().columns([1]).every(function () {
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
                },
            });


        }
    });
}

submitButton1.addEventListener('click', (e) => {
    e.preventDefault();

    editUsuarios();

});
submitCambInactivo.addEventListener('click', (e) => {
    e.preventDefault();

    editCargoUsr();

});