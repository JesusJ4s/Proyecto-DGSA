const formulario = document.getElementById('cambio_cargo');
const inputs = document.querySelectorAll('#cambio_cargo input');
// const button = document.querySelectorAll('#aceptar');


// FORMULARIO PARA REGISTRAR AL USUARIO NUEVO
function HacerEnvio(){

    var cedula = document.getElementById('cedulaCargo').value;
    var contra = document.getElementById('contraseña').value;
    var parametros =
    {
        "cedula": cedula,
        "contraseña": contra,
        "ingreso": "RecuperacionUSR",
    }
    $.ajax({
        data: parametros,
        url: '../php/usuarios.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#recuperacion').modal('show');
            $('#recuperacion .modal-body').html(mensaje);

            // $('#finalUsr').addClass("ocultar-div");
            $('#formulario_mostrar_Cam').addClass("ocultar-div");
            $('#mostrar_mensaje_ci').removeClass("ocultar-div");
            $('#tabla_usuarios').removeClass('ocultar-div');
   
            ready();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;
   
               if(nroERROR==501){
                    $('#recuperacion').modal('show');

                    $('#recuperacionC').html('Error al registrar los datos.<br>Error: Colocó un dato invalido.');
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
    // $('#verUSR').prop('disabled', true); 
    
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
    // varUsuario = document.getElementById('usuario').value;
    // alert(varUsuario);
}


const expresiones = {
    contraseña: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/, // 8 a 15 dígitos
}

const campos = {
    contraseña: false,
}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "contraseña":
            validarCampo(expresiones.contraseña, e.target, 'contraseña');
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
    if(campos.contraseña) {

        HacerEnvio();        

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

});