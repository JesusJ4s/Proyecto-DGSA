const formulario_boletines = document.getElementById('formulario_boletines');
const inputs = document.querySelectorAll('#formulario_boletines input');
const text = document.querySelectorAll('#formulario_boletines textarea');

const expresiones = {
    tituloBoletin: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/,
    descripcion_boletin1: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{20,20000}$/,
    descripcion_boletin2: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,
    descripcion_boletin3: /^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/,
}
const campos = {
    tituloBoletin: false,
    descripcion_boletin1: false,
    descripcion_boletin2: true,
    descripcion_boletin3: true
}
const validarFormulario = (e) => {
    switch(e.target.name) {
        case "tituloBoletin":
            validarCampo(expresiones.tituloBoletin, e.target, 'tituloBoletin');
        break;
        case "descripcion_boletin1":
            validarCampo(expresiones.descripcion_boletin1, e.target, 'descripcion_boletin1');
        break;
        case "descripcion_boletin2":
            validarCampo(expresiones.descripcion_boletin2, e.target, 'descripcion_boletin2');
        break;
        case "descripcion_boletin3":
            validarCampo(expresiones.descripcion_boletin3, e.target, 'descripcion_boletin3');
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

function nuevoBoletin(){

    if(campos.tituloBoletin && campos.descripcion_boletin1 && campos.descripcion_boletin2 && campos.descripcion_boletin3) {

        const form = document.getElementById('formulario_boletines');

        // Creamos un objeto con los datos del formulario
        var formData = new FormData(form);
        $.ajax({
            data: formData,
            processData: false,
            contentType: false,
            url: './php/diseño.php',
            type: 'POST',
            success: function(mensaje)
            {
                // $('#crear_grupo').modal('hide');
                // recargarListaGrupos();
                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                formulario_boletines.reset();
                // consultaImagenes();
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
        document.getElementById('formulario__mensajeBoletin').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensajeBoletin').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }
}