const formulario_ajustesUSR = document.getElementById('formulario_ajustesUSR');
const inputs = document.querySelectorAll('#formulario_ajustesUSR input');
const submitButton1 = document.querySelector('#submit_ajustes');

const Ajustes_de_usuario = document.getElementById('AjustesPreguntas');
const inputs2 = document.querySelectorAll('#AjustesPreguntas input');
const submitButton2 = document.querySelector('#extr_submit');


// FORMULARIO PARA REGISTRAR AJUSTES
function HacerEnvio(){

    var formAjustes = $('#formulario_ajustesUSR').serialize();

    $.ajax({
        data: formAjustes,
        url: '../php/usuarios.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#myModal_ajustes').modal('show');
            $('#myModal_ajustes .modal-body').html(mensaje);

            verificar_bd();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            if(nroERROR==500){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Datos obligatorios vacíos.');

             }   
            if(nroERROR==507){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Datos obligatorios vacíos. ');

             }   
             if(nroERROR==501){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Cedula inexistente en el sistema.');

             } 
             if(nroERROR==502){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Nombre de Usuario no disponible.');

             } 
             if(nroERROR==503){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Datos incorrectos en las preguntas de seguridad.');

             } 
             if(nroERROR==504){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al actualizar los datos.<br>Error: Datos inválidos ingresados.404');

             } 
        }
    });
}


const expresiones = {
    usuario: /^[a-zA-Z0-9À-ý\_\-]{4,16}$/, //Letras, números, guion y guion_bajo
    correo: /^[a-zA-ZÀ-ý0-9_.+-]+@[a-zA-Z0-9-]+\.[a-z]+$/,
    contraseña: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/, // 8 a 15 dígitos
    telefono: /^\d{4}-?\d{7}$|^\d{11}$/, // 7 a 14
    telefono2: /^\d{4}-?\d{7}$|^\d{11}$/, // 7 a 14
    respuesta_1: /^[a-zA-ZÀ-ý]{3,16}$/, //Letras, números
    respuesta_2: /^[a-zA-ZÀ-ý]{3,16}$/, //Letras, números
    respuesta_3: /^[a-zA-ZÀ-ý]{3,16}$/, //Letras, números
    pinSeguridad: /^[0-9]{4,6}$/ // 7 a 14


}

const campos = {
    usuario: true,
    correo: true,
    contraseña: true,
    telefono: true,
    telefono2: true,
    respuesta_3: true,
    respuesta_1: true,
    respuesta_2: true,
    pinSeguridad: true

}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
        break;
        case "contraseña":
            validarCampo(expresiones.contraseña, e.target, 'contraseña');            
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;
        case "telefono2":
            validarCampo(expresiones.telefono2, e.target, 'telefono2');  
        break;
        case "respuesta_3":
            validarCampo(expresiones.respuesta_3, e.target, 'respuesta_3');
        break;
        case "respuesta_1":
            validarCampo(expresiones.respuesta_1, e.target, 'respuesta_1');
        break;
        case "respuesta_2":
            validarCampo(expresiones.respuesta_2, e.target, 'respuesta_2');            
        break;
        case "pinSeguridad":
            validarCampo(expresiones.pinSeguridad, e.target, 'pinSeguridad');
            
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
inputs2.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

// formulario_ajustesUSR.addEventListener('submit', (e)=>{
submitButton1.addEventListener('click', (e) => {
    e.preventDefault(); //solo para evitar enviar el formulario

    //DESPUÉS DE COMPROBAR QUE TODOS LOS CAMPOS SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO
    if(campos.usuario && campos.contraseña && campos.pinSeguridad) {
        // alert("PP");
 
        // ELIMINANDO LAS CLASES QUE PINTAN LOS INPUTS
        document.querySelectorAll('.formulario__grupo').forEach((clases) =>{
            clases.classList.remove('formulario__grupo-incorrecto');
            clases.classList.remove('formulario__grupo-correcto');
        });
        HacerEnvio();
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 4000);
    }

});


// ***************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************
// FORMULARIO PARA MODIFICAR PREGUNTAS
function HacerEnvioExtra(){

    var formAjustes = $('#AjustesPreguntas').serialize();

    $.ajax({
        data: formAjustes,
        url: '../php/usuarios.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#myModal_ajustes').modal('show');
            $('#myModal_ajustes .modal-body').html(mensaje);

            verificar_bd();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            if(nroERROR=="500"){
                $('#myModal_ajustes').modal('show');

                $('#myModal_ajustesC').html('Error al cambiar las preguntas de seguridad.<br>Error: Campos vacíos');

             }  
            
        }
    });
}

// Ajustes_de_usuario.addEventListener('submit', (e)=>{
submitButton2.addEventListener('click', (e) => {
    e.preventDefault(); //solo para evitar enviar el formulario

    //DESPUÉS DE COMPROBAR QUE TODOS LOS campos2 SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO
    if(campos.respuesta_3 && campos.respuesta_1 && campos.respuesta_2) {

        // ELIMINANDO LAS CLASES QUE PINTAN LOS INPUTS
        document.querySelectorAll('.formulario__grupo').forEach((clases) =>{
            clases.classList.remove('formulario__grupo-incorrecto');
            clases.classList.remove('formulario__grupo-correcto');
        });
        HacerEnvioExtra();
    } else {
        document.getElementById('formulario__mensaje2').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje2').classList.remove('formulario__mensaje-activo');
        }, 4000);
    }

});