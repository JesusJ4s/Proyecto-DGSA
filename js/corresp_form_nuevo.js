const formCorrespondencia = document.getElementById('formCorrespondencia');
const inputs = document.querySelectorAll('#formCorrespondencia input');
const submit1 = document.querySelector('#corres_registro_btn');
const submit2 = document.querySelector('#regisEmpresa');

// FORMULARIO PARA REGISTRAR AJUSTES

function registroCorrespondencia(){

    var formCorresNuevo = $('#formCorrespondencia').serialize();
    $.ajax({
        data: formCorresNuevo,
        url: '../php/correspondencia.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#modal_registro').modal('hide');
            $('#RegistroCorres').modal('show');
            $('#RegistroCorres .modal-body').html(mensaje);

            contador_correspondencia();
            tabla_correspondencia();
            formCorrespondencia.reset();
            finalizando();
        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            $('#modal_registro').modal('hide');

            if(nroERROR==500){
                formCorrespondencia.reset();
                $('#RegistroCorres').modal('show');
                $('#RegistroCorresC').html('Error al registrar los datos.<br>Error: Ingreso digitos indebidos.');
             }    
            if(nroERROR==501){
                $('#RegistroCorres').modal('show');
                $('#RegistroCorresC').html('Error al ingresar los datos.<br>Error: Hay campos vacíos, por favor verifique.');
             }     
            if(nroERROR==502){
                $('#RegistroCorres').modal('show');
                $('#RegistroCorresC').html('Error al ingresar los datos.<br>Error: El rif no está registrado en el sistema.');
             }     
            if(nroERROR==503){
                formCorrespondencia.reset();
                $('#RegistroCorres').modal('show');
                $('#RegistroCorresC').html('Error al ingresar los datos.<br>Error: Al no ser empleado de correspondencia no puede realizar ésta acción.');
             }     
        }
    });
}
// FORMULARIO PARA REGISTRAR EMPRESA
function registroEmp(){
    rif = document.getElementById('rif_empresa_regis').value;
    identi = document.getElementById('identificador2').value;
    nombre = document.getElementById('nombre_emp').value;
    dediEmp = document.getElementById('dedicacion').value;
    var datos =
    {
        "rif": rif,
        "identi": identi,
        "nombre": nombre,
        "dediEmp": dediEmp,
        "correspondencia": "registroEmp"
    }

    $.ajax({
        data: datos,
        url: '../php/correspondencia.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#registroEmpresaM').modal('hide');
            $('#RegistroCorres').modal('show');
            $('#RegistroCorres .modal-body').html(mensaje);

            // AGREGANDO NUEVOS VALORES A LOS INPUTS
            var rif_safe = document.getElementById('rif_empresa_regis').value;
            document.getElementById('rif_empresa').value=rif_safe;
                // Obtener referencia al campo de entrada "rif_empresa"
                var rifEmpresaInput = document.getElementById('rif_empresa');

                // Asignar el foco al campo de entrada
                rifEmpresaInput.focus();
            empresas_fun();
            finalizando();
            tabla_empresas_corr();
                 
        },
        error: function(jqXHR)
        {
            var nroERROR = jqXHR.status;

            $('#registroEmpresaM').modal('hide');
            $('#modal_registro').modal('hide');


            if(nroERROR==500){
                $('#RegistroCorres').modal('show');

                $('#RegistroCorresC').html('Error al registrar los datos.<br>Error: Ingreso digitos indebidos.');

             }    
            if(nroERROR==501){
                $('#RegistroCorres').modal('show');

                $('#RegistroCorresC').html('Error al registrar los datos.<br>Error: Hay campos vacíos.');

             }     
            if(nroERROR==502){
                $('#RegistroCorres').modal('show');

                $('#RegistroCorresC').html('Error al registrar los datos.<br>Error: Dicho rif ya fue registrado en el sistema.');
             }     
             if(nroERROR==503){
                $('#RegistroCorres').modal('show');

                $('#RegistroCorresC').html('Error al ingresar los datos.<br>Error: Al no ser empleado de correspondencia no puede realizar ésta acción.');
             }   
        }
    });
}

function finalizando(){
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
    nroOficio: /^[0-9]{1,20}$/,
    fecha_salida: /^\d{4}-\d{2}-\d{2}$/,
    asunto: /^[a-zA-ZÀ-ÿ\s]{4,255}$/,
    rif_empresa: /^[0-9\-]{1,20}$/,
    idEmpresa: /^[0-9]$/,
    rif_empresa_regis: /^[0-9\-]{1,20}$/,
    nombre_emp: /^[a-zA-ZÀ-ÿ0-9\s]{4,45}$/,
    dedicacion: /^[a-zA-ZÀ-ÿ\s]{4,255}$/
}
const campos = {
    nroOficio: false,
    fecha_salida: false,
    asunto: false,
    fecha_llegada: false,
    rif_empresa: false,
    idEmpresa: false,

    rif_empresa_regis: false,
    nombre_emp: false,
    dedicacion: false
}
const validarFormulario = (e) => {
    switch(e.target.name) {
        case "nroOficio":
            validarCampo(expresiones.nroOficio, e.target, 'nroOficio');
        break;
        case "fecha_salida":
            validarCampo(expresiones.fecha_salida, e.target, 'fecha_salida');
        break;
        case "asunto":
            validarCampo(expresiones.asunto, e.target, 'asunto');            
        break;
        case "fecha_llegada":
            validarCampo(expresiones.fecha_llegada, e.target, 'fecha_llegada');
        break;
        case "rif_empresa":
            validarCampo(expresiones.rif_empresa, e.target, 'rif_empresa');  
        break;
        case "idEmpresa":
            validarCampo(expresiones.idEmpresa, e.target, 'idEmpresa');  
        break;
        case "rif_empresa_regis":
            validarCampo(expresiones.rif_empresa_regis, e.target, 'rif_empresa_regis');
        break;
        case "nombre_emp":
            validarCampo(expresiones.nombre_emp, e.target, 'nombre_emp');
        break;
        case "dedicacion":
            validarCampo(expresiones.dedicacion, e.target, 'dedicacion');            
        break;
    }
}
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        campos[campo] = true;
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
    } else {
        campos[campo] = false;
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');

        
    }
}
inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

// formCorrespondencia.addEventListener('submit', (e)=>{
submit1.addEventListener('click', (e)=>{
    e.preventDefault();

    if (campos.nroOficio && campos.fecha_salida && campos.asunto && campos.rif_empresa) {
        let empresa = document.getElementById('idEmpresa').value;
        let contador = empresa.length;
        if (contador > 0) {
            registroCorrespondencia();         
            
        }else{
            $('#RegistroCorres').modal('show');

            $('#RegistroCorresC').html('Error al ingresar los datos.<br>Error: No ingresó in RIF valido.');
        }
    }else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }
});
// formCorrespondencia.addEventListener('submit', (e)=>{
submit2.addEventListener('click', (e)=>{
    e.preventDefault();

    if(campos.nombre_emp && campos.rif_empresa_regis && campos.dedicacion){
        // alert("llego nombre de empresa good");
        registroEmp();
        
    }else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 2000);
    }
});

