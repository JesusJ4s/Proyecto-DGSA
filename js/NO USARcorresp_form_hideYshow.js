$(document).ready(function(){
    hideForm();
})
const registeredRadio = document.querySelector('input[name="regis"][value="si"]');
const notRegisteredRadio = document.querySelector('input[name="regis"][value="no"]');
const registrationForm = document.getElementById('registration-form');

// Función para ocultar el formulario
function hideForm() {
    // registrationForm.style.display = 'none';
    registrationForm.classList.add('ocultar-div');
    document.getElementById('registrar').classList.add('ocultar-div');
    document.getElementById('registrado').classList.remove('ocultar-div');

    // ATRIBUTO REQUIRED EN INPUTS
    document.getElementById('nombre_emp').removeAttribute('required');
    document.getElementById('rif_empresa_regis').removeAttribute('required');
    document.getElementById('dedicacion').removeAttribute('required');
        //Removiendo valores y clases de estilo 
    document.getElementById('nombre_emp').value= '';
    document.getElementById('rif_empresa_regis').value= '';
    document.getElementById('dedicacion').value= '';
    document.getElementById('grupo__nombre_emp').classList.remove('formulario__grupo-correcto');
    document.getElementById('grupo__nombre_emp').classList.remove('formulario__grupo-incorrecto');
    document.getElementById('grupo__rif_empresa_regis').classList.remove('formulario__grupo-correcto');
    document.getElementById('grupo__rif_empresa_regis').classList.remove('formulario__grupo-incorrecto');
    document.getElementById('grupo__dedicacion').classList.remove('formulario__grupo-correcto');
    document.getElementById('grupo__dedicacion').classList.remove('formulario__grupo-incorrecto');



    document.getElementById('corres_registro_btn').removeAttribute('disabled', false);


    // LO MISMO PERO EN EL FORMULARIO FINAL
    document.getElementById('nroOficio').setAttribute('required', true);
    document.getElementById('fecha_salida').setAttribute('required', true);
    document.getElementById('asunto').setAttribute('required', true);
    // document.getElementById('fecha_llegada').setAttribute('required', true);
    document.getElementById('rif_empresa').setAttribute('required', true);

}

// Función para mostrar el formulario
function showForm() {
    // registrationForm.style.display = 'block';
    registrationForm.classList.remove('ocultar-div');
    document.getElementById('registrado').classList.add('ocultar-div');

    document.getElementById('rif_empresa').classList.remove('border-grey');
    document.getElementById('rif_empresa').classList.remove('border-good');
    document.getElementById('registrar').classList.remove('ocultar-div');
    document.getElementById('rif_empresa').value= '';
    document.getElementById('procedencia').value= '';

    // ATRIBUTO REQUIRED EN INPUTS
    document.getElementById('nombre_emp').setAttribute('required', true);
    document.getElementById('rif_empresa_regis').setAttribute('required', true);
    document.getElementById('dedicacion').setAttribute('required', true);

    document.getElementById('corres_registro_btn').setAttribute('disabled', true);

    // LO MISMO PERO EN EL FORMULARIO FINAL
    document.getElementById('nroOficio').removeAttribute('required');
    document.getElementById('fecha_salida').removeAttribute('required');
    document.getElementById('asunto').removeAttribute('required');
    // document.getElementById('fecha_llegada').removeAttribute('required');
    document.getElementById('rif_empresa').removeAttribute('required');

}


// Evento "change" para los elementos de radio
registeredRadio.addEventListener('change', hideForm);
notRegisteredRadio.addEventListener('change', showForm);

// Ocultar el formulario inicialmente si la opción "está registrado" está seleccionada
if (registeredRadio.checked) {
hideForm();
}