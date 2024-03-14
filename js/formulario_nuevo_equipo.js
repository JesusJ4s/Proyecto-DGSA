const formulario_equipo = document.getElementById('formulario_equipo');
const inputs = document.querySelectorAll('#formulario_equipo input');
const submitButton1 = document.querySelector('#btn1');

// FORMULARIO PARA REGISTRAR AJUSTES
function HacerEnvio(){
    var formEquipoNuevo = $('#formulario_equipo').serialize();

    $.ajax({
        data: formEquipoNuevo,
        url: '../php/consultar_equipos.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#RegistroCPU').modal('show');
            $('#RegistroCPU .modal-body').html(mensaje);

            // verificar_bd();
            formulario_equipo.reset();

        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            if(nroERROR==501){
                $('#RegistroCPU').modal('show');

                $('#RegistroCPUC').html('Error al ingresar los datos.<br>Error: Nombre de Equipo ya Registrado.');

             }         
            if(nroERROR==502){
                $('#RegistroCPU').modal('show');

                $('#RegistroCPUC').html('Error al ingresar los datos.<br>Error: La Dirección Mac o Ip ya se encuentran registradas.');

             }     
             if(nroERROR==503){
                $('#RegistroCPU').modal('show');

                $('#RegistroCPUC').html('Error al ingresar los datos.<br>Error: Datos inválidos o faltan datos.');

             }  
        }
    });
}


const expresiones = {
    supervisor_dpto: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, //Letras
    responsable: /^[a-zA-ZÀ-ÿ\s]{4,30}$/, //Letras
    nomb_equip: /^[a-zA-Z0-9]{4,30}$/, //Letras

    BN_equipo: /^[0-9a-zA-Z]{0,7}$/, //Letras
    serial: /^[a-zA-Z0-9\-\_]{0,20}$/, //Letras
    cpu_mod: /^[a-zA-Z0-9\s]{4,25}$/, //Letras
    cpu_vel: /^\d\.\d{2}[gG][hH][zZ]$/, //Letras /\d+\.[a-zA-Z0-9]+/
    // /^\d+\.\d+[gG][hH][zZ]$/
    ramVel: /^\d{1,2}[gG][bB]$/, //Letras /^\d{1,2}[gG][bB]$/
    ip: /^((1?\d{1,2}|2([0-4]\d|5[0-5]))\.){3}(1?\d{1,2}|2([0-4]\d|5[0-5]))$/, //Letras
    mac: /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/, //Letras
    disco_duro: /^\d{1,3}([gG][bB]|[tT][bB])$/, //Letras
    disco_duro_marca: /^[a-zA-Z]{4,15}$/, //Letras
    disco_duro_serial: /^[a-zA-Z0-9_-]{4,20}$/, //Letras

    mouse_datos: /^[a-zA-Z0-9_-]{4,20}$/, //Letras
    mouse_marca: /^[a-zA-Z_-]{2,20}$/, //Letras

    monitor_datos: /^[a-zA-Z0-9_-]{4,20}$/, //Letras
    monitor_marca: /^[a-zA-Z0-9_-]{2,20}$/, //Letras
    monitor_conexion: /^[a-zA-Z0-9_-]{2,20}$/, //Letras

    regulador_datos: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    regulador_marca: /^[a-zA-Z]{4,30}$/, //Letras

    teclado_datos: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    teclado_marca: /^[a-zA-Z]{2,30}$/, //Letras

    escaner_datos: /^[a-zA-Z0-9_.-]{4,20}$/, //Letras
    escaner_modelo: /^[a-zA-Z0-9]{4,30}$/, //Letras
    escaner_marca: /^[a-zA-Z]{2,30}$/, //Letras
    escaner_operativo: /^[a-zA-Z]{1,25}$/, //Letras
    toner_tinta: /^[a-zA-Z]{1,25}$/, //Letras
    conectada_red: /^[a-zA-Z]{1,25}$/, //Letras
}
const campos = {
    supervisor_dpto: false,
    responsable: false,
    nomb_equip: false,
    BN_equipo: false,
    serial: false,
    cpu_mod: false,
    cpu_vel: false,
    ip: false,
    mac: false,
    disco_duro: false,
    disco_duro_marca: false,
    disco_duro_serial: false,
    ramVel: false,

    mouse_datos: false,
    mouse_marca: false,

    monitor_datos: false,
    monitor_marca: false,
    monitor_conexion: false,

    regulador_datos: false,
    regulador_marca: false,

    teclado_datos: false,
    teclado_marca: false,

    escaner_datos: false,
    escaner_modelo: false,
    escaner_marca: false,
    escaner_operativo: false,
    toner_tinta: false,
    conectada_red: false,

}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "supervisor_dpto":
            validarCampo(expresiones.supervisor_dpto, e.target, 'supervisor_dpto');
        break;
        case "responsable":
            validarCampo(expresiones.responsable, e.target, 'responsable');
        break;
        case "nomb_equip":
            validarCampo(expresiones.nomb_equip, e.target, 'nomb_equip');            
        break;
        case "BN_equipo":
            validarCampo(expresiones.BN_equipo, e.target, 'BN_equipo');
        break;
        case "serial":
            validarCampo(expresiones.serial, e.target, 'serial');  
        break;
        case "cpu_mod":
            validarCampo(expresiones.cpu_mod, e.target, 'cpu_mod');
        break;
        case "cpu_vel":
            validarCampo(expresiones.cpu_vel, e.target, 'cpu_vel');
        break;
        case "ip":
            validarCampo(expresiones.ip, e.target, 'ip');            
        break;
        case "mac":
            validarCampo(expresiones.mac, e.target, 'mac');
        break;
        case "disco_duro":
            validarCampo(expresiones.disco_duro, e.target, 'disco_duro');
        break;
        case "disco_duro_marca":
            validarCampo(expresiones.disco_duro_marca, e.target, 'disco_duro_marca');
        break;
        case "disco_duro_serial":
            validarCampo(expresiones.disco_duro_serial, e.target, 'disco_duro_serial');            
        break;
        case "ramVel":
            validarCampo(expresiones.ramVel, e.target, 'ramVel');
        break;
        case "mouse_datos":
            validarCampo(expresiones.mouse_datos, e.target, 'mouse_datos');
        break;
        case "mouse_marca":
            validarCampo(expresiones.mouse_marca, e.target, 'mouse_marca');
        break;
        case "monitor_datos":
            validarCampo(expresiones.monitor_datos, e.target, 'monitor_datos');
        break;
        case "monitor_marca":
            validarCampo(expresiones.monitor_marca, e.target, 'monitor_marca');
        break;
        case "monitor_conexion":
            validarCampo(expresiones.monitor_conexion, e.target, 'monitor_conexion');
        break;
        case "regulador_datos":
            validarCampo(expresiones.regulador_datos, e.target, 'regulador_datos');
        break;
        case "regulador_marca":
            validarCampo(expresiones.regulador_marca, e.target, 'regulador_marca');
        break;
        case "teclado_datos":
            validarCampo(expresiones.teclado_datos, e.target, 'teclado_datos');
        break;
        case "teclado_marca":
            validarCampo(expresiones.teclado_marca, e.target, 'teclado_marca');
        break;
        case "escaner_datos":
            validarCampo(expresiones.escaner_datos, e.target, 'escaner_datos');
        break;
        case "escaner_modelo":
            validarCampo(expresiones.escaner_modelo, e.target, 'escaner_modelo');
        break;
        case "escaner_marca":
            validarCampo(expresiones.escaner_marca, e.target, 'escaner_marca');
        break;
        case "escaner_operativo":
            validarCampo(expresiones.escaner_operativo, e.target, 'escaner_operativo');
        break;
        case "toner_tinta":
            validarCampo(expresiones.toner_tinta, e.target, 'toner_tinta');
        break;
        case "conectada_red":
            validarCampo(expresiones.conectada_red, e.target, 'conectada_red');
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
formulario_equipo.addEventListener('submit', (e) => {
    e.preventDefault(); //solo para evitar enviar el formulario

    //DESPUÉS DE COMPROBAR QUE TODOS LOS CAMPOS SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO

    // campos.supervisor_dpto && campos.responsable && campos.nomb_equip && campos.BN_equipo && campos.serial && campos.cpu_mod && campos.cpu_vel && campos.ip && campos.mac && campos.disco_duro && campos.disco_duro_marca && campos.disco_duro_serial && campos.ramVel
        if(campos.supervisor_dpto && campos.responsable && campos.nomb_equip && campos.BN_equipo && campos.serial && campos.cpu_mod && campos.cpu_vel && campos.ip && campos.mac && campos.disco_duro && campos.disco_duro_marca && campos.disco_duro_serial && campos.ramVel) {
            // alert("Llego de manera correcta");
     
            // ELIMINANDO LAS CLASES QUE PINTAN LOS INPUTS
            document.querySelectorAll('.formulario__grupo').forEach((clases) =>{
                clases.classList.remove('formulario__grupo-incorrecto');
                clases.classList.remove('formulario__grupo-correcto');
            });
            HacerEnvio();
    
        }else {
            document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
            setTimeout(() => {
                document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
            }, 4000);
        }
    
    

});
