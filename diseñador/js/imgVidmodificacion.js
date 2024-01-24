const formularioModificaciones = document.getElementById('form_Modificaciones');
const inputsModifi = document.querySelectorAll('#form_Modificaciones input');

const expresionesMod = {
    tituloR: /^[a-zA-ZÀ-ý0-9\s_,-.;]{1,200}$/,
}
const camposMod = {
    tituloR: true,
}
const validarFormularioMod = (e) => {
    switch(e.target.name) {
        case "tituloR":
            validarCampoMod(expresionesMod.tituloR, e.target, 'tituloR');
        break;
    }
}
const validarCampoMod = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        camposMod[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        camposMod[campo] = false;        
    }
}
inputsModifi.forEach((input)=>{
    input.addEventListener('keyup', validarFormularioMod);
    input.addEventListener('blur', validarFormularioMod);
});
function ModificarArchivo(){

    if(camposMod.tituloR) {

        const form = document.getElementById('form_Modificaciones');

        // Creamos un objeto con los datos del formularioModificaciones
        var formData = new FormData(form);

        $.ajax({
            data: formData,
            processData: false,
            contentType: false,
            url: './php/diseño.php',
            type: 'POST',
            success: function(mensaje)
            {
                $('#ModifiImg_Vid').modal('hide');

                $('#InfoGeneral').modal('show');
                $('#InfoGeneral .modal-body').html(mensaje);
                formularioModificaciones.reset();
                consultaImagenes();
            },
            error: function(jqXHR)
            {
                $('#ModifiImg_Vid').modal('hide');

                var nroERROR = jqXHR.status;
    
                if(nroERROR==500){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('Colocó algún dígito inválido.');
                }
    
                if(nroERROR==501){
                    $('#InfoGeneral').modal('show');
    
                    $('#InfoGeneral .modal-body').html('El archivo al que intenta acceder no fue encontrado.');
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