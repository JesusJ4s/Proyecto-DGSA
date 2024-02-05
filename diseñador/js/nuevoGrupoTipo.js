const formulario_grupoInstrumento = document.getElementById('formulario_grupoInstrumento');
const formulario_TipoInstrumento = document.getElementById('formulario_TipoInstrumento');
const formulario_Instrumentos = document.getElementById('formulario_Instrumentos');

const grupoInstrumentoInputs = document.querySelectorAll('#formulario_grupoInstrumento input');
const TipoInstrumentoInputs = document.querySelectorAll('#formulario_TipoInstrumento input');
const formulario_InstrumentosInputs = document.querySelectorAll('#formulario_Instrumentos input');


const expreRegulares = {
    NuevoGrupInstrumento: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/,
    NuevoTipoInstru: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/,
    tituloInstrumentoLegal: /^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/,
}
const falseAtrue = {
    NuevoGrupInstrumento: false,
    NuevoTipoInstru: false,
    tituloInstrumentoLegal: false,
}
const verificarFormulario = (e) => {
    switch(e.target.name) {
        case "NuevoGrupInstrumento":
            verificarCampo(expreRegulares.NuevoGrupInstrumento, e.target, 'NuevoGrupInstrumento');
        break;
        case "NuevoTipoInstru":
            verificarCampo(expreRegulares.NuevoTipoInstru, e.target, 'NuevoTipoInstru');
        break;
        case "tituloInstrumentoLegal":
            verificarCampo(expreRegulares.tituloInstrumentoLegal, e.target, 'tituloInstrumentoLegal');
        break;
    }
}
const verificarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        falseAtrue[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        falseAtrue[campo] = false;        
    }
}
grupoInstrumentoInputs.forEach((input)=>{
    input.addEventListener('keyup', verificarFormulario);
    input.addEventListener('blur', verificarFormulario);
});
TipoInstrumentoInputs.forEach((input)=>{
    input.addEventListener('keyup', verificarFormulario);
    input.addEventListener('blur', verificarFormulario);
});
formulario_InstrumentosInputs.forEach((input)=>{
    input.addEventListener('keyup', verificarFormulario);
    input.addEventListener('blur', verificarFormulario);
});

function nuevoGrupoInstrumento(){

    if(falseAtrue.NuevoGrupInstrumento) {

        var nuevo_grupoInstru_direccion = document.getElementById('nuevo_grupoInstru_direccion').value;
        var NuevoGrupInstrumento = document.getElementById('NuevoGrupInstrumento').value;
        var parametros =
        {
            "direccion": nuevo_grupoInstru_direccion,
            "titulo": NuevoGrupInstrumento,
            "identificador": "nuevoGrupoInstru"
        }
        $.ajax({
            data: parametros,
            url: './php/InstrumentosLegales.php',
            type: 'POST',
        
            success: function(mensaje)
            {
                $('#grupo_instru_legal').modal('hide');

                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                recargarListaGruposInstru();
                formulario_grupoInstrumento.reset();
            },
            error: function(jqXHR)
            {
                $('#grupo_instru_legal').modal('hide');

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
function nuevoTipoInstrumento(){

    if(falseAtrue.NuevoTipoInstru) {

        var TipoInstru = document.getElementById('NuevoTipoInstru').value;
        var parametros =
        {
            "titulo": TipoInstru,
            "identificador": "nuevotipoInstru"
        }
        $.ajax({
            data: parametros,
            url: './php/InstrumentosLegales.php',
            type: 'POST',
        
            success: function(mensaje)
            {
                $('#crear_Tipo').modal('hide');

                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                recargarListaTiposInstru();
                formulario_TipoInstrumento.reset();
            },
            error: function(jqXHR)
            {
                $('#crear_Tipo').modal('hide');

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

function nuevoInstrumentoLegal(){

    if(falseAtrue.tituloInstrumentoLegal) {

        const form = document.getElementById('formulario_Instrumentos');

        // Creamos un objeto con los datos del formulario
        var formInstru = new FormData(form);

        $.ajax({
            data: formInstru,
            processData: false,
            contentType: false,
            url: './php/InstrumentosLegales.php',
            type: 'POST',
            success: function(mensaje)
            {
                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                formulario_Instrumentos.reset();

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

    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }

}