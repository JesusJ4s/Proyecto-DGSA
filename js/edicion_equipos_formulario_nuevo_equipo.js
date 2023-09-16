const formulario_equipo_edicion = document.getElementById('formulario_equipo_edicion');
const inputs = document.querySelectorAll('#formulario_equipo_edicion input');
const submitButton1 = document.querySelector('#btn1');


// FORMULARIO PARA REGISTRAR AJUSTES
function EditEquipo(){

    var formEquip_editoNuevo = $('#formulario_equipo_edicion').serialize();

    $.ajax({
        data: formEquip_editoNuevo,
        url: '../php/consultar_equipos.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#ModifiCPU').modal('show');
            $('#ModifiCPU .modal-body').html(mensaje);

            // verificar_bd();

            formulario_equipo_edicion.reset();

        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            if(nroERROR==500){
                $('#ModifiCPU').modal('show');

                $('#ModifiCPUC').html('Error al modificar los datos.<br>Error: El equipo no existe.');

             }   
            if(nroERROR==501){
                $('#ModifiCPU').modal('show');

                $('#ModifiCPUC').html('Error al modificar los datos.<br>Error: Complete el campo <i>Descripción</i>.');

             }   
        }
    });
}


const expresiones = {
    supervisor_dpto_edit: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, //Letras
    responsable_edit: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, //Letras
    nomb_equip_edit: /^[a-zA-Z0-9]{4,30}$/, //Letras
    name_search: /^[a-zA-Z0-9]{4,30}$/, //Letras

    BN_equip_edito_edit: /^[0-9a-zA-Z]{7}$/, //Letras
    serial_edit: /^[a-zA-Z0-9\-\_]{4,20}$/, //Letras
    cpu_mod_edit: /^[a-zA-Z0-9\s]{4,25}$/, //Letras
    cpu_vel_edit: /^\d\.\d{2}[gG][hH][zZ]$/, //Letras /\d+\.[a-zA-Z0-9]+/
    // /^\d+\.\d+[gG][hH][zZ]$/
    ram_vel_edit: /^\d{1,2}[gG][bB]$/, //Letras /^\d{1,2}[gG][bB]$/
    ip_edit: /^((1?\d{1,2}|2([0-4]\d|5[0-5]))\.){3}(1?\d{1,2}|2([0-4]\d|5[0-5]))$/, //Letras
    mac_mostrar: /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/, //Letras
    disco_duro_edit: /^\d{1,3}([gG][bB]|[tT][bB])$/, //Letras
    disco_duro_marca_edit: /^[a-zA-Z]{4,15}$/, //Letras
    disco_duro_serial_edit: /^[a-zA-Z0-9_-]{4,20}$/, //Letras

    mouse_datos_edit: /^[a-zA-Z0-9_-]{4,20}$/, //Letras
    monitor_datos_edit: /^[a-zA-Z0-9_-]{4,20}$/, //Letras
    regulador_datos_edit: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    regulador_marca_edit: /^[a-zA-Z]{4,30}$/, //Letras

    teclado_datos_edit: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    teclado_marca_edit: /^[a-zA-Z]{2,30}$/, //Letras

    escaner_datos_edit: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    escaner_modelo_edit: /^[a-zA-Z0-9]{4,30}$/, //Letras
}
const campos = {
    supervisor_dpto_edit: true,
    responsable_edit: true,
    nomb_equip_edit: true,
    name_search: true,

    BN_equip_edito_edit: true,
    serial_edit: true,
    cpu_mod_edit: true,
    cpu_vel_edit: true,
    ip_edit: true,
    mac_mostrar: true,
    disco_duro_edit: true,
    disco_duro_marca_edit: true,
    disco_duro_serial_edit: true,
    ram_vel_edit: true,
    mouse_datos_edit: true,
    monitor_datos_edit: true,
    regulador_datos_edit: true,
    regulador_marca_edit: true,

    teclado_datos_edit: true,
    teclado_marca_edit: true,

    escaner_datos_edit: true,
    escaner_modelo_edit: true
}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "supervisor_dpto_edit":
            validarCampo(expresiones.supervisor_dpto_edit, e.target, 'supervisor_dpto_edit');
        break;
        case "responsable_edit":
            validarCampo(expresiones.responsable_edit, e.target, 'responsable_edit');
        break;
        case "nomb_equip_edit":
            validarCampo(expresiones.nomb_equip_edit, e.target, 'nomb_equip_edit');            
        break;
        case "name_search":
            validarCampo(expresiones.name_search, e.target, 'name_search');            
        break;
        case "BN_equip_edito_edit":
            validarCampo(expresiones.BN_equip_edito_edit, e.target, 'BN_equip_edito_edit');
        break;
        case "serial_edit":
            validarCampo(expresiones.serial_edit, e.target, 'serial_edit');  
        break;
        case "cpu_mod_edit":
            validarCampo(expresiones.cpu_mod_edit, e.target, 'cpu_mod_edit');
        break;
        case "cpu_vel_edit":
            validarCampo(expresiones.cpu_vel_edit, e.target, 'cpu_vel_edit');
        break;
        case "ip_edit":
            validarCampo(expresiones.ip_edit, e.target, 'ip_edit');            
        break;
        case "mac_mostrar":
            validarCampo(expresiones.mac_mostrar, e.target, 'mac_mostrar');
        break;
        case "disco_duro_edit":
            validarCampo(expresiones.disco_duro_edit, e.target, 'disco_duro_edit');
        break;
        case "disco_duro_marca_edit":
            validarCampo(expresiones.disco_duro_marca_edit, e.target, 'disco_duro_marca_edit');
        break;
        case "disco_duro_serial_edit":
            validarCampo(expresiones.disco_duro_serial_edit, e.target, 'disco_duro_serial_edit');            
        break;
        case "ram_vel_edit":
            validarCampo(expresiones.ram_vel_edit, e.target, 'ram_vel_edit');
        break;
        case "mouse_datos_edit":
            validarCampo(expresiones.mouse_datos_edit, e.target, 'mouse_datos_edit');
        break;
        case "monitor_datos_edit":
            validarCampo(expresiones.monitor_datos_edit, e.target, 'monitor_datos_edit');
        break;
        case "regulador_datos_edit":
            validarCampo(expresiones.regulador_datos_edit, e.target, 'regulador_datos_edit');
        break;
        case "regulador_marca_edit":
            validarCampo(expresiones.regulador_marca_edit, e.target, 'regulador_marca_edit');
        break;
        case "teclado_datos_edit":
            validarCampo(expresiones.teclado_datos_edit, e.target, 'teclado_datos_edit');
        break;
        case "teclado_marca_edit":
            validarCampo(expresiones.teclado_marca_edit, e.target, 'teclado_marca_edit');
        break;
        case "escaner_datos_edit":
            validarCampo(expresiones.escaner_datos_edit, e.target, 'escaner_datos_edit');
        break;
        case "escaner_modelo_edit":
            validarCampo(expresiones.escaner_modelo_edit, e.target, 'escaner_modelo_edit');
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;        
    }
}
inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

// formulario_ajustesUSR.addEventListener('submit', (e)=>{
formulario_equipo_edicion.addEventListener('submit', (e) => {
    e.preventDefault(); //solo para evitar enviar el formulario

    //DESPUÉS DE COMPROBAR QUE TODOS LOS CAMPOS SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO
    if(campos.supervisor_dpto_edit && campos.responsable_edit && campos.nomb_equip_edit && campos.BN_equip_edito_edit && campos.serial_edit && campos.cpu_mod_edit && campos.cpu_vel_edit && campos.ip_edit && campos.mac_mostrar && campos.disco_duro_edit && campos.disco_duro_marca_edit && campos.disco_duro_serial_edit && campos.ram_vel_edit) {
        // alert("Llego de manera correcta");
    
        // ELIMINANDO LAS CLASES QUE PINTAN LOS INPUTS
        document.querySelectorAll('.formulario__grupo').forEach((clases) =>{
            clases.classList.remove('formulario__grupo-incorrecto');
            clases.classList.remove('formulario__grupo-correcto');
        });
        EditEquipo();

    }else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 4000);
    }
    
    

});
