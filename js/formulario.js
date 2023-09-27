const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

// FORMULARIO PARA REGISTRAR AL USUARIO NUEVO
function HacerEnvio(){

    var formRegistro = $('#formulario').serialize();

    $.ajax({
        data: formRegistro,
        url: '../php/usuarios.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#RegistroUsr').modal('show');
            $('#RegistroUsr .modal-body').html(mensaje);

            // $('#finalUsr').addClass("ocultar-div");
            $('#div_paso2').removeClass("ocultar-div");
                
            ready();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;
   
               if(nroERROR==500){
                   $('#RegistroUsr').modal('show');
   
                   $('#RegistroC').html('Error al registrar los datos.<br>Error: Coloco dígitos indevidos y se canceló el registro del usuario.');
               }
               if(nroERROR==501){
                    $('#RegistroUsr').modal('show');

                    $('#RegistroC').html('Error al registrar los datos.<br>Error: La cédula o el nombre de usuario ya existen dentro del sistema.');
                }
               if(nroERROR==502){
                    $('#RegistroUsr').modal('show');

                    $('#RegistroC').html('Error al registrar los datos.<br>Error: Debe indicar la Dirección, división y departamento donde trabaja.');
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
    $('#registrar').prop('disabled', true); 
    
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
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, //Letras, números, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ý\s]{1,45}$/, //Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ý\s]{1,45}$/, //Letras y espacios, pueden llevar acentos.
    cedula: /^[0-9]{7,9}$/, // 7 a 9 dígitos
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z]+$/,
    password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/, // 8 a 15 dígitos
    telefono: /^\d{4}-?\d{7}$|^\d{11}$/, // 7 a 14
    pin: /^[0-9]{4,6}$/ // 7 a 14

}

const campos = {
    usuario: false,
    nombre: false,
    apellido: false,
    cedula: false,
    correo: false,
    password: false,
    pin: false,
    telefono: false
}

const validarFormulario = (e) => {
    switch(e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            
        break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            
        break;
        case "cedula":
            validarCampo(expresiones.cedula, e.target, 'cedula');
            
        break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            
        break;
        case "contraseña":
            validarCampo(expresiones.password, e.target, 'password');
            validarPassword2();
            
        break;
        case "password2":
             validarPassword2();
            
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            
        break;
        case "pin":
            validarCampo(expresiones.pin, e.target, 'pin');
            
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

const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('contraseña');
    const inputPassword2 = document.getElementById('password2');

    if (inputPassword1.value !== inputPassword2.value) {
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos['password'] = false;

    } else {
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos['password'] = true;

    }

}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});



formulario.addEventListener('submit', (e)=>{
    e.preventDefault(); //solo para evitar enviar el formulario


    const terminos = document.getElementById('terminos');
    //DESPUÉS DE COMPROBAR QUE TODOS LOS CAMPOS SON CORRECTOS, DEBAJO DE ESTO SE COLOCAN LOS DATOS PARA ENVIAR EL FORMULARIO
    if(campos.usuario && campos.nombre && campos.apellido && campos.cedula && campos.correo && campos.password && campos.telefono && campos.pin && terminos.checked) {

        HacerEnvio();           

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

});