$(document).ready(function(){
    $('.ocultar-spinner').hide();
});

// Consulta de equipos de la dirección
function consulta_dir()
{
    direccion = document.getElementById('direccion_select').value;   
    var parametros =
    {
        "varDireccion" : direccion,
        "busqueda": "1"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#respuesta_consulta').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#respuesta_consulta').html(mensaje);
            new DataTable('#table-dir', {
                language: Traduccion,
            });
        }
    });
}
// REPORTE INDIVIDUAL
function consulta_PC_ind(){
    $('#body-dir-busqueda').on('click','#btnNameEquipo',function(){
        con_name = $(this).closest('tr').find('td').eq(2).text();
        var parametros=
        {
            "con_name":con_name,
            "busqueda":"dato_solo"
        }
        $.ajax({
            data: parametros,
            url: '../php/consultar_equipos_individuales.php',
            type: 'POST',
            error: function(jqXHR)
            {
                alert("error")
            },   
            success: function(mensaje)
            {
                // Redireccionar a la página deseada
                window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
            }
        });

    });
}
// REPORTE POR FECHA
function consulta_PC_fecha() {
    var fecha1 = document.getElementById('fecha1').value;
    var fecha2 = document.getElementById('fecha2').value;
    var parametros = 
    {
        "fecha1":fecha1,
        "fecha2":fecha2,
        "busqueda":"dato_fecha"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_individuales.php',
        type: 'POST',
        error: function(jqXHR)
        {
            var nroERROR = jqXHR.status;


            if(nroERROR==500){
                alert("Error al buscar el rango de fecha")
            }

        },   
        success: function(mensaje)
        {
            // Redireccionar a la página deseada
            window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
        }
    });

}
// REPORTES DE TODOS LOS EQUIPOS
function consulta_PC_todos() {

    var parametros = 
    {
        "busqueda":"dato_todos"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_individuales.php',
        type: 'POST',
        error: function(jqXHR)
        {
            alert("error")
        },   
        success: function(mensaje)
        {
            // Redireccionar a la página deseada
            window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
        }
    });

}
// REPORTES POR DIRECCION
function consulta_PC_direc() {
    var direccion = document.getElementById('direccion_select').value;
    var parametros = 
    {
        "direccion":direccion,
        "busqueda":"dato_dire"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_individuales.php',
        type: 'POST',
        error: function(jqXHR)
        {
            alert("error")
        },   
        success: function(mensaje)
        {
            // Redireccionar a la página deseada
            window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
        }
    });

}
// REPORTES POR DIVISION
function consulta_PC_divi() {
    var division = document.getElementById('division_select').value;
    var parametros = 
    {
        "division":division,
        "busqueda":"dato_divi"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_individuales.php',
        type: 'POST',
        error: function(jqXHR)
        {
            alert("error")
        },   
        success: function(mensaje)
        {
            // Redireccionar a la página deseada
            window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
        }
    });

}
// REPORTES POR DEPARTAMENTO
function consulta_PC_depa() {
    var departamento = document.getElementById('departamento_select').value;
    var parametros = 
    {
        "departamento":departamento,
        "busqueda":"dato_depa"
    }
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_individuales.php',
        type: 'POST',
        error: function(jqXHR)
        {
            alert("error")
        },   
        success: function(mensaje)
        {
            // Redireccionar a la página deseada
            window.open('../reportes/parque_tecnologico_reporte.php', "_blank");
        }
    });

}
// Consulta de equipos de las divisiones
function consulta_div(){
    division = document.getElementById('division_select').value;
    var parametros =
    {
        "varDivision" : division,
        "busqueda": "2"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#respuesta_consulta').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#respuesta_consulta').html(mensaje);
            new DataTable('#table-divi', {
                language: Traduccion,
            });
        }
    });
}
// Consulta de equipos de los departamentos
function consulta_dep(){
    departamento = document.getElementById('departamento_select').value;
    var parametros =
    {
        "varDpto" : departamento,
        "busqueda": "3"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#respuesta_consulta').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#respuesta_consulta').html(mensaje);
            new DataTable('#table-depa', {
                language: Traduccion,
            });
        }
    });
}
// Consulta de equipos por fecha
function fechas(){
    fechax1 = document.getElementById('fecha1').value;
    fechax2 = document.getElementById('fecha2').value;

    var parametros =
    {
        "fecha1" : fechax1,
        "fecha2" : fechax2,
        "busqueda": "4"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#respuesta_fechas').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#respuesta_fechas').html(mensaje);
            new DataTable('#dataTable_fecha', {
                language: Traduccion,
            });
        }
    });
}
// MUESTRA EL TOTAL DE EQUIPOS
function total_equi(){

    var parametros =
    {
        "busqueda": "6"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#total_equipos').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#total_equipos').html(mensaje);
        }
    });
  
}

// CONSULTA EL EQUIPO PARA SU EDICIÓN - PARA REPORTES
// CONSULTA LA MAYORÍA DE LOS DATOS DEL EQUIPO REGISTRADO EN LA BD
function edit_equipo(){
    name_search = document.getElementById('name_search').value;
    var parametros =
    {
        "name_sea": name_search,
        "busqueda": "7"
    };

    $.ajax({
        data: parametros,
        dataType: 'json',
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('.ocultar-spinner').show(2);
            $('.ocultar-class').hide();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;


            if(nroERROR==500){
                $('#ModifiCPU').modal('show');

                $('#ModifiCPUC').html('El equipo no se encuentra registrado en el sistema.');
            }

            $('.ocultar-spinner').hide(5);
            $('.ocultar-class').show(5);   
            $('#ediciones_div').addClass('ocultar-div');


            
            formulario_equipo_edicion.reset();
        },
        complete: function()
        {
            $('.ocultar-spinner').hide(2);
            $('.ocultar-class').show(2);                   
        },

        success: function(valores)
        {
            $("#id_del_equipo").val(valores.id_case);

            $("#fecha_reg").val(valores.fecha_inventario);
            $("#ingeniero_mostrar").val(valores.nombre);
            $("#depto_mostrar").val(valores.nombre_dpto);
            $("#id_dep").val(valores.dpto_inv_id);

            $("#division_mostrar").val(valores.nombre_div);
            $("#id_div").val(valores.division_inv_id);

            $("#direccion_mostrar").val(valores.nombre_dire);
            $("#id_dir").val(valores.direccion_inv_id);

            $("#responsable_edit").val(valores.responsable);
            $("#supervisor_dpto_edit").val(valores.supervisor_dpto);
            $("#nomb_equip_edit").val(valores.nombre_equipo);

            $("#BN_equipo_mostrar").val(valores.BN_equipo);
            $("#serial_equipo_mostrar").val(valores.serial_equipo);
            $("#tipo_equipo_mostrar").val(valores.tipo_de_equipo);
            $("#cpu_mostrar").val(valores.cpu_modelo);
            $("#cpu_vel_mostrar").val(valores.cpu_velocidad);
            $("#mac_mostrar").val(valores.mac);
            $("#ip_edit").val(valores.ip);
            $("#disco_duro_edit").val(valores.disco_duro_cap);
            $("#disco_duro_marca_edit").val(valores.disco_duro_marca);
            $("#disco_duro_serial_edit").val(valores.disco_duro_serial);
            $("#ram_cant_edit").val(valores.ram);
            $("#ram_vel_edit").val(valores.ram_velocidad);
            $("#vr_win_edit").val(valores.windows_ver);
            $("#conect_red_edit").val(valores.conect_red);
            $("#tipo_conect_edit").val(valores.tipo_conexion);
            $("#internet_edit").val(valores.internet);

            $("#mouse_selector").val(valores.mouse);
            $("#mouse_datos").val(valores.BN_serial_mouse);
            $("#mouse_marca").val(valores.mouse_marca);
            $("#mouse_conexion").val(valores.mouse_conexion);

            $("#monitor_selector").val(valores.monitor);
            $("#monitor_marca").val(valores.monitor_marca);
            $("#monitor_conexion").val(valores.monitor_conexion);
            $("#monitor_datos").val(valores.BN_serial_monitor);

            $("#regulador_selector").val(valores.regulador);
            $("#regulador_marca").val(valores.regulador_marca);
            $("#regulador_datos").val(valores.BN_serial_regulador);

            $("#teclado_selector").val(valores.teclado);
            $("#teclado_datos").val(valores.BN_serial_teclado);

            $("#teclado_marca").val(valores.teclado_marca);
            $("#teclado_conexion").val(valores.teclado_conexion);

            $("#escaner_selector").val(valores.escaner);
            $("#escaner_datos").val(valores.BN_serial_escaner);
            $("#escaner_marca").val(valores.escaner_marca);
            $("#escaner_modelo").val(valores.escaner_modelo);
            $("#escaner_conexion").val(valores.escaner_conexion);

            $('#ediciones_div').removeClass('ocultar-div');
        }
    });
}
// CONSULTA EL EQUIPO PARA SOPORTE TECNICO
function ver_equipo_soporte(){
    name_search = document.getElementById('name_edit').value;
    var parametros =
    {
        "name_sea": name_search,
        "busqueda": "7"
    };

    $.ajax({
        data: parametros,
        dataType: 'json',
        url: '../php/consultar_equipos.php',
        type: 'POST',

        beforeSend: function()
        {
            $('.ocultar-spinner').show(2);
            $('.ocultar-class').hide();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;


            if(nroERROR==500){
                $('#InfoGeneral').modal('show');

                $('#InfoGeneralC').html('El equipo no se encuentra registrado en el sistema.');
            }

            $('.ocultar-spinner').hide(5);
            $('.ocultar-class').show(5);                   

            
            formulario_solicitud_sopor.reset();
        },
        complete: function()
        {
            $('.ocultar-spinner').hide(2);
            $('.ocultar-class').show(2);                   
        },

        success: function(valores)
        {
            $("#id_del_equipo").val(valores.id_case);

            $("#depto_mostrar").val(valores.nombre_dpto);
            $("#id_dep").val(valores.dpto_inv_id);

            $("#division_mostrar").val(valores.nombre_div);
            $("#id_div").val(valores.division_inv_id);

            $("#direccion_mostrar").val(valores.nombre_dire);
            $("#id_dir").val(valores.direccion_inv_id);

            $("#BN_equipo_mostrar").val(valores.BN_equipo);
            $("#serial_equipo_mostrar").val(valores.serial_equipo);

            document.getElementById('name_edit').setAttribute('readonly', true);
        }
    });
}
