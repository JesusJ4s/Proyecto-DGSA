// CAMBIANDO SELECTORES NEGATIVOS A NULOS
$(document).ready(function(){
    // CAMBIANDO REDES
    $('#conect_red').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MOUSE
            document.getElementById("tipo_conect").disabled = true;  
            document.getElementById("internet").disabled = true;
            $("#tipo_conect").addClass("bg-secondary");
            $("#internet").addClass("bg-secondary");

        }
        else if ($(this).val()=="Si"){
            document.getElementById("tipo_conect").disabled = false;  
            document.getElementById("internet").disabled = false;
            $("#tipo_conect").removeClass("bg-secondary");
            $("#internet").removeClass("bg-secondary");

        }
    });
    // CAMBIANDO REDES - EDICION
    $('#conect_red_edit').on ('change', function(){
        if ($(this).val()=="No"){
            document.getElementById("tipo_conect_edit").disabled = true;  
            document.getElementById("internet_edit").disabled = true;
            $("#tipo_conect_edit").addClass("bg-secondary");
            $("#internet_edit").addClass("bg-secondary");
        }
        else if ($(this).val()=="Si"){
            document.getElementById("tipo_conect_edit").disabled = false;  
            document.getElementById("internet_edit").disabled = false;
            $("#tipo_conect_edit").removeClass("bg-secondary");
            $("#internet_edit").removeClass("bg-secondary");
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
            $("#mouse_datos").addClass("bg-secondary");
            $("#mouse_marca").addClass("bg-secondary");
            $("#mouse_conexion").addClass("bg-secondary");
            document.querySelectorAll('[id*="mouse"]').forEach((elemento) =>{
                elemento.classList.remove('formulario__grupo-incorrecto');
                elemento.classList.remove('formulario__grupo-correcto');
                elemento.classList.remove('formulario__input-error-activo');
            });

        }
        else if ($(this).val()=="Si"){
            document.getElementById("mouse_datos").disabled = false;
            document.getElementById("mouse_marca").disabled = false;
            document.getElementById("mouse_conexion").disabled = false;
            $("#mouse_datos").removeClass("bg-secondary");
            $("#mouse_marca").removeClass("bg-secondary");
            $("#mouse_conexion").removeClass("bg-secondary");

        }
    });
    // CAMBIANDO MONITOR
    $('#monitor_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input MONITOR
            document.getElementById("monitor_datos").disabled = true;
            $('#monitor_datos').val(""); 
            document.getElementById("monitor_marca").disabled = true;
            $('#monitor_marca').val(""); 
            document.getElementById("monitor_conexion").disabled = true;
            $('#monitor_conexion').val(""); 
            $("#monitor_datos").addClass("bg-secondary");
            $("#monitor_marca").addClass("bg-secondary");
            $("#monitor_conexion").addClass("bg-secondary");
            document.querySelectorAll('[id*="monitor"]').forEach((elemento) =>{
                elemento.classList.remove('formulario__grupo-incorrecto');
                elemento.classList.remove('formulario__grupo-correcto');
                elemento.classList.remove('formulario__input-error-activo');
            });
            
        }
        else if ($(this).val()=="Si"){
            document.getElementById("monitor_datos").disabled = false;
            document.getElementById("monitor_marca").disabled = false;
            document.getElementById("monitor_conexion").disabled = false;

            $("#monitor_datos").removeClass("bg-secondary");
            $("#monitor_marca").removeClass("bg-secondary");
            $("#monitor_conexion").removeClass("bg-secondary");

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
            $("#regulador_datos").addClass("bg-secondary");
            $("#regulador_marca").addClass("bg-secondary");
            document.querySelectorAll('[id*="regulador"]').forEach((elemento) =>{
                elemento.classList.remove('formulario__grupo-incorrecto');
                elemento.classList.remove('formulario__grupo-correcto');
                elemento.classList.remove('formulario__input-error-activo');
            });
        }
        else if ($(this).val()=="Si"){
            document.getElementById("regulador_datos").disabled = false;
            document.getElementById("regulador_marca").disabled = false;
            $("#regulador_datos").removeClass("bg-secondary");
            $("#regulador_marca").removeClass("bg-secondary");



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
            $("#teclado_datos").addClass("bg-secondary");
            $("#teclado_marca").addClass("bg-secondary");
            $("#teclado_conexion").addClass("bg-secondary");
            document.querySelectorAll('[id*="teclado"]').forEach((elemento) =>{
                elemento.classList.remove('formulario__grupo-incorrecto');
                elemento.classList.remove('formulario__grupo-correcto');
                elemento.classList.remove('formulario__input-error-activo');
            });
        }
        else if ($(this).val()=="Si"){
            document.getElementById("teclado_datos").disabled = false;
            document.getElementById("teclado_marca").disabled = false;
            document.getElementById("teclado_conexion").disabled = false;
            $("#teclado_datos").removeClass("bg-secondary");
            $("#teclado_marca").removeClass("bg-secondary");
            $("#teclado_conexion").removeClass("bg-secondary");

        }
    });
    
    //  CAMBIANDO ESCANER
     $('#escaner_selector').on ('change', function(){
        if ($(this).val()=="No"){
            // Activando el modo solo lectura del input ESCANER
            document.getElementById("escaner_datos").disabled = true;
            $('#escaner_datos').val(""); 
            document.getElementById("escaner_modelo").disabled = true;
            $('#escaner_modelo').val(""); 
            document.getElementById("escaner_marca").disabled = true;
            $('#escaner_marca').val(""); 
            document.getElementById("escaner_conexion").disabled = true;
            document.getElementById("escaner_operativo").disabled = true;
            document.getElementById("toner_tinta").disabled = true;
            document.getElementById("conectada_red").disabled = true;

            $("#escaner_datos").addClass("bg-secondary");
            $("#escaner_modelo").addClass("bg-secondary");
            $("#escaner_conexion").addClass("bg-secondary");
            $("#escaner_marca").addClass("bg-secondary");
            $("#escaner_operativo").addClass("bg-secondary");
            $("#toner_tinta").addClass("bg-secondary");
            $("#conectada_red").addClass("bg-secondary");
            document.querySelectorAll('[id*="escaner"]').forEach((elemento) =>{
                elemento.classList.remove('formulario__grupo-incorrecto');
                elemento.classList.remove('formulario__grupo-correcto');
                elemento.classList.remove('formulario__input-error-activo');
            });
        }
        else if ($(this).val()!="No"){
            document.getElementById("escaner_datos").disabled = false;
            document.getElementById("escaner_modelo").disabled = false;
            document.getElementById("escaner_conexion").disabled = false;
            document.getElementById("escaner_marca").disabled = false;
            document.getElementById("escaner_operativo").disabled = false;
            document.getElementById("toner_tinta").disabled = false;
            document.getElementById("conectada_red").disabled = false;
            $("#escaner_datos").removeClass("bg-secondary");
            $("#escaner_modelo").removeClass("bg-secondary");
            $("#escaner_conexion").removeClass("bg-secondary");
            $("#escaner_marca").removeClass("bg-secondary");
            $("#escaner_operativo").removeClass("bg-secondary");
            $("#toner_tinta").removeClass("bg-secondary");
            $("#conectada_red").removeClass("bg-secondary");
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