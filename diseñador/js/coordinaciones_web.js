const formulario_coordinaciones = document.getElementById('formulario_coordinaciones');
const inputs = document.querySelectorAll('#formulario_coordinaciones input');
const text = document.querySelectorAll('#formulario_coordinaciones textarea');

const expresiones = {
    titulo_txt1: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{3,255}$/,
    titulo_txt2: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{0,255}$/,
    titulo_txt3: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{0,255}$/,

    descripcion_txt1: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{20,20000}$/,
    descripcion_txt2: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,
    descripcion_txt3: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,

    titulo_lista1: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{0,255}$/,
    titulo_lista2: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{0,255}$/,

    Lista1_coord: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,
    Lista2_coord: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,


}
const campos = {
    titulo_txt1: false,
    titulo_txt2: true,
    titulo_txt3: true,

    descripcion_txt1: false,
    descripcion_txt2: true,
    descripcion_txt3: true,

    titulo_lista1: true,
    titulo_lista2: true,

    Lista1_coord: true,
    Lista2_coord: true,
}
const validarFormulario = (e) => {
    switch(e.target.name) {
        case "titulo_txt1":
            validarCampo(expresiones.titulo_txt1, e.target, 'titulo_txt1');
        break;
        case "titulo_txt2":
            validarCampo(expresiones.titulo_txt2, e.target, 'titulo_txt2');
        break;
        case "titulo_txt3":
            validarCampo(expresiones.titulo_txt3, e.target, 'titulo_txt3');
        break;
        case "descripcion_txt1":
            validarCampo(expresiones.descripcion_txt1, e.target, 'descripcion_txt1');
        break;
        case "descripcion_txt2":
            validarCampo(expresiones.descripcion_txt2, e.target, 'descripcion_txt2');
        break;
        case "descripcion_txt3":
            validarCampo(expresiones.descripcion_txt3, e.target, 'descripcion_txt3');
        break;
        case "titulo_lista1":
            validarCampo(expresiones.titulo_lista1, e.target, 'titulo_lista1');
        break;
        case "titulo_lista2":
            validarCampo(expresiones.titulo_lista2, e.target, 'titulo_lista2');
        break;
        case "Lista1_coord":
            validarCampo(expresiones.Lista1_coord, e.target, 'Lista1_coord');
        break;
        case "Lista2_coord":
            validarCampo(expresiones.Lista2_coord, e.target, 'Lista2_coord');
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
text.forEach((textarea)=>{
    textarea.addEventListener('keyup', validarFormulario);
    textarea.addEventListener('blur', validarFormulario);
});

function nuevaCoord(){

    if(campos.titulo_txt1 &&campos.titulo_txt2 &&campos.titulo_txt3 &&
        campos.descripcion_txt1 &&campos.descripcion_txt2 &&campos.descripcion_txt3 &&
        campos.titulo_lista1 &&campos.titulo_lista2 &&
        campos.Lista1_coord &&campos.Lista2_coord) {

        const form = document.getElementById('formulario_coordinaciones');

        // Creamos un objeto con los datos del formulario
        var formData = new FormData(form);
        $.ajax({
            data: formData,
            processData: false,
            contentType: false,
            url: './php/registro_coordinacion.php',
            type: 'POST',
            success: function(mensaje)
            {

                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                formulario_coordinaciones.reset();

            },
            error: function(jqXHR)
            {
                var nroERROR = jqXHR.status;
                if(nroERROR==500){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('Solo se permiten los formatos mp4, jpeg, png y webp.');
                }
    
                if(nroERROR==501){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('Ocurrió un error al intentar subir la imagen.');
                }
                if(nroERROR==502){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('Colocó dígitos inválidos');
                }
            }
        });
        // alert("llego");
    } else {
        document.getElementById('formulario__mensajeNuevaCoordi').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensajeNuevaCoordi').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }
}