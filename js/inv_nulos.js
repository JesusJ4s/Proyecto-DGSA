// CAMBIANDO SELECTORES NEGATIVOS A NULOS
$(document).ready(function(){
    // CAMBIANDO REDES
    $('#conect_red').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MOUSE
            document.getElementById("tipo_conect").disabled = true;  
            document.getElementById("internet").disabled = true;
        }
        else if ($(this).val()=="Si"){
            document.getElementById("tipo_conect").disabled = false;  
            document.getElementById("internet").disabled = false;
        }
    });
    // CAMBIANDO REDES - EDICION
    $('#conect_red_edit').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MOUSE
            document.getElementById("tipo_conect_edit").disabled = true;  
            document.getElementById("internet_edit").disabled = true;

        }
        else if ($(this).val()=="Si"){
            document.getElementById("tipo_conect").disabled = false;  
            document.getElementById("internet").disabled = false;
        }
    });
    // CAMBIANDO MOUSE
    $('#mouse_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MOUSE
            document.getElementById("mouse_datos").disabled = true;
            $('#mouse_datos').val("");            
            document.getElementById("mouse_marca").disabled = true;
            document.getElementById("mouse_conexion").disabled = true;
        }
        else if ($(this).val()=="Si"){
            document.getElementById("mouse_datos").disabled = false;
            document.getElementById("mouse_marca").disabled = false;
            document.getElementById("mouse_conexion").disabled = false;
        }
    });
    // CAMBIANDO MONITOR
    $('#monitor_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MONITOR
            document.getElementById("monitor_datos").disabled = true;
            $('#monitor_datos').val(""); 
            document.getElementById("monitor_conexion").disabled = true;
            
        }
        else if ($(this).val()!="No"){
            document.getElementById("monitor_datos").disabled = false;
            document.getElementById("monitor_conexion").disabled = false;
        }
    });
     // CAMBIANDO REGULADOR
     $('#regulador_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input REGULADOR
            document.getElementById("regulador_datos").disabled = true;
            document.getElementById("regulador_marca").disabled = true;
            $('#regulador_datos').val(""); 
            $('#regulador_marca').val(""); 
        }
        else if ($(this).val()=="Si"){
            document.getElementById("regulador_datos").disabled = false;
            document.getElementById("regulador_marca").disabled = false;

        }
    });
    // CAMBIANDO TECLADO
    $('#teclado_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input TECLADO
            document.getElementById("teclado_datos").disabled = true;
            $('#teclado_datos').val(""); 
            document.getElementById("teclado_marca").disabled = true;
            $('#teclado_marca').val(""); 
            document.getElementById("teclado_conexion").disabled = true;
        }
        else if ($(this).val()=="Si"){
            document.getElementById("teclado_datos").disabled = false;
            document.getElementById("teclado_marca").disabled = false;
            document.getElementById("teclado_conexion").disabled = false;
        }
    });
    
     // CAMBIANDO ESCANER
     $('#escaner_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input ESCANER
            document.getElementById("escaner_datos").disabled = true;
            $('#escaner_datos').val(""); 
            document.getElementById("escaner_modelo").disabled = true;
            $('#escaner_modelo').val(""); 
            document.getElementById("escaner_conexion").disabled = true;
        }
        else if ($(this).val()!="No"){
            document.getElementById("escaner_datos").disabled = false;
            document.getElementById("escaner_modelo").disabled = false;
            document.getElementById("escaner_conexion").disabled = false;
        }
    }); 
});
// DURANTE LA MODIFICACION - INDICAR SI HAY CAMBIO DE OFICINA O NO
function cambio_si(){
    document.getElementById("no_hay").disabled = false;
    document.getElementById("direccion_select").disabled = false;
    document.getElementById("division_select").disabled = false;
    document.getElementById("departamento_select").disabled = false;

    document.getElementById("si_hay").disabled = true;
}
function cambio_no(){
    document.getElementById("no_hay").disabled = true;
    document.getElementById("direccion_select").disabled = true;
    document.getElementById("division_select").disabled = true;
    document.getElementById("departamento_select").disabled = true;

    document.getElementById("si_hay").disabled = false;
}