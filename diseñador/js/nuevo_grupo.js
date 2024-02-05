const formulario = document.getElementById('formulario_nuevo_grupo');
const formularioImgVid = document.getElementById('formulario_galeria');
const inputs = document.querySelectorAll('#formulario_nuevo_grupo input');
const entradas = document.querySelectorAll('#formulario_galeria input');


const expresiones = {
    tituloNuevoGrupo: /^[a-zA-ZÀ-ý0-9\s_,-.;]{1,200}$/,
    tituloArchivo: /^[a-zA-ZÀ-ý0-9\s_,-.;]{0,100}$/,
}
const cosos = {
    tituloNuevoGrupo: true,
    tituloArchivo: true,
}
const validarFormulario = (e) => {
    switch(e.target.name) {
        case "tituloNuevoGrupo":
            validarCampo(expresiones.tituloNuevoGrupo, e.target, 'tituloNuevoGrupo');
        break;
        case "tituloArchivo":
            validarCampo(expresiones.tituloArchivo, e.target, 'tituloArchivo');
        break;
    }
}
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        cosos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        cosos[campo] = false;        
    }
}
inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});
entradas.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

function nuevoGrupo(){

    if(cosos.tituloNuevoGrupo) {

        var nuevo_grupo_direccion = document.getElementById('nuevo_grupo_direccion').value;
        var tituloNuevoGrupo = document.getElementById('tituloNuevoGrupo').value;
        var parametros =
        {
            "direccion": nuevo_grupo_direccion,
            "titulo": tituloNuevoGrupo,
            "identificador": "nuevoGrupo"
        }
        $.ajax({
            data: parametros,
            url: './php/diseño.php',
            type: 'POST',
        
            success: function(mensaje)
            {
                $('#crear_grupo').modal('hide');
                recargarListaGrupos();
                consultaImagenes();

                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
            },
            error: function(jqXHR)
            {
                $('#crear_grupo').modal('hide');

                var nroERROR = jqXHR.status;
    
                if(nroERROR==500){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('No se pudo registrar el nuevo grupo, intente de nuevo.');
                }
            }
        });

    } else {
        document.getElementById('formulario__mensajeGrupo').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensajeGrupo').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

}

function nuevoArchivo(){

    if(cosos.tituloArchivo) {

        const form = document.getElementById('formulario_galeria');

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
                formularioImgVid.reset();
                consultaImagenes();
            },
            error: function(jqXHR)
            {
                $('#crear_grupo').modal('hide');

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

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

}