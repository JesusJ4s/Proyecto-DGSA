const formularioIngreso = document.getElementById('formularioIngreso');
const inputs = document.querySelectorAll('#formularioIngreso input');
const submitButton = document.querySelector('#ingresar');
var prueba = 0;

function login(){
  var formLog = $('#formularioIngreso').serialize();
    $.ajax({
      data: formLog,
      url: '../php/abrir_sesion.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function()
      {
          location.href = 'index_intranet.php';
      },
      error: function(jqXHR, xhr, status, error)
         {
          // alert("ERROR");
          var nroERROR = jqXHR.status;
 
            if(nroERROR==500){
               $('#LoginModal').modal('show');

               $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Falla en el sistema.');
            }   
            if(nroERROR==501){
              $('#LoginModal').modal('show');

              $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Datos incorrectos. O ya ha iniciado sesión');
            }  
            if(nroERROR==502){
              $('#LoginModal').modal('show');

              $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Debe solicitarle al administrador que le asigne un rol dentro del sistema.');
            }               
            if(nroERROR==503){
              $('#LoginModal').modal('show');

              $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Ya existe una sesión iniciada en el sistema. Debe esperar 5min a que cierre.');
            }                        
            if(nroERROR==504){
              $('#LoginModal').modal('show');

              $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Contraseña errada.');
            }                        
         }
    });

}
const expresiones = {
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, //Letras, números, guion y guion_bajo
  password: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/, // 8 a 15 dígitos
  
}

const campos = {
  usuario: false,
  password: false,
}

const validarFormulario = (e) => {
  switch(e.target.name) {
      case "usuario":
          validarCampo(expresiones.usuario, e.target, 'usuario');
      break;
      case "contraseña":
          validarCampo(expresiones.password, e.target, 'password');
      break;
  }
}

const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    campos[campo] = true;
      document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
      document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
      document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
    } else {
    campos[campo] = false;     
      document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
      document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
      document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
  }
}
inputs.forEach((input)=>{
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});

formularioIngreso.addEventListener('submit', (e)=>{
    e.preventDefault();

    if (campos.usuario && campos.password) {
      login();
      
    }else{
      $('#LoginModal').modal('show');

      $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Datos incorrectos.');
    }
  });


  

