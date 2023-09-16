const formulario = document.getElementById('formulario_preguntas');
const inputs = document.querySelectorAll('#formulario_preguntas input')

// FORMULARIO PARA REGISTRAR AL USUARIO NUEVO
function preguntas(){

    var formRegistroPreguntas = $('#formulario_preguntas').serialize();

    
    $.ajax({
        data: formRegistroPreguntas,
        url: '../php/usuarios.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#RegistroPre').modal('show');
            $('#RegistroPre .modal-body').html(mensaje);

            // $('#finalUsr').addClass("ocultar-div");
            $('#div_paso2').removeClass("ocultar-div");
                
            ready();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;
   
               if(nroERROR==500){
                   $('#RegistroPre').modal('show');
   
                   $('#RegistroPreC').html('Error al registrar los datos.<br>Error: Coloco dígitos indevidos y se canceló el registro de los datos.');
               }
               if(nroERROR==501){
                    $('#RegistroPre').modal('show');

                    $('#RegistroPreC').html('Error al registrar los datos.<br>Error: Repitió una pregunta de la lista.');
                }
               if(nroERROR==502){
                    $('#RegistroPre').modal('show');

                    $('#RegistroPreC').html('Error al registrar los datos.<br>Error: No se puede realizar el registro porque ya hizo la actualización, o no hizo el proceso correctamente.');
                }
        }
    });
}

function ready(){
    // VACIANDO FORMULARIO
    formulario.reset();
    // INHABILITANDO INPUTS, SE PODRÁ? SÍ
    document.querySelectorAll("input").forEach((input) =>{
        input.setAttribute('disabled', true);
    });
    $('#formulario_preguntas').prop('disabled', true); 
    document.getElementById('registrar_extras').setAttribute('disabled', true);

    // MOSTRANDO Y ELIMINANDO MENSAJES DE FINALIZACION
    document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
    setTimeout(() => {
        document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
    }, 3000 );
    document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');

    // ELIMINANDO LAS CLASES QUE PINTAN LOS INPUTS
    document.querySelectorAll('.formulario__grupo').forEach((clases) =>{
        clases.classList.remove('formulario__grupo-incorrecto');
        clases.classList.remove('formulario__grupo-correcto');
    });
    
}


const expresiones = {
    respuesta1: /^[a-zA-ZÀ-ý]{1,20}$/, //Letras, pueden llevar acentos.
    respuesta2: /^[a-zA-ZÀ-ý]{1,20}$/, //Letras, pueden llevar acentos.
    respuesta3: /^[a-zA-ZÀ-ý]{1,20}$/, //Letras, pueden llevar acentos.
    telefono: /^\d{4}-?\d{7}$|^\d{11}$/, // 7 a 14
}

const campos = {
    respuesta1: false,
    respuesta2: false,
    respuesta3: false,
    telefono: false
}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "respuesta1":
            validarCampo(expresiones.respuesta1, e.target, 'respuesta1');
        break;
        case "respuesta2":
            validarCampo(expresiones.respuesta2, e.target, 'respuesta2');
            
        break;
        case "respuesta3":
            validarCampo(expresiones.respuesta3, e.target, 'respuesta3');
            
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            
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



formulario.addEventListener('submit', (e)=>{
    e.preventDefault(); //solo para evitar enviar el formulario

    //DESPUÉS DE COMPROBAR QUE TODOS LOS CAMPOS SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO
    if(campos.respuesta1 && campos.respuesta2 && campos.respuesta3) {

        preguntas();

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

});