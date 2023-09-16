$(document).ready(function() {
    color=0;
    
    nac=0;
    fruta=0;

    $("#color_favorito").blur(function() {
      // check if the name is valid (only letters and spaces allowed)
      if (/^[A-Za-z\s]+$/.test($(this).val())) {
        $(this).css("border", "1px solid green");
        document.querySelector(`#grupo__color_favorito .formulario__input-error`).classList.remove('formulario__input-error-activo');
        color = 1;
        habilitando();

      } else {
        $(this).css("border", "1px solid red");
        document.querySelector(`#grupo__color_favorito .formulario__input-error`).classList.add('formulario__input-error-activo');
        color = 0;
        habilitando();
      }
    });
  
    $("#lugar_nacimiento").blur(function() {
      // check if the email is valid
      if (/^[a-zA-ZÀ-ý\s]{1,45}$/.test($(this).val())) {
        $(this).css("border", "1px solid green");
        document.querySelector(`#grupo__lugar_nacimiento .formulario__input-error`).classList.remove('formulario__input-error-activo');
        nac = 1;
        habilitando();
      } else {
        $(this).css("border", "1px solid red");
        document.querySelector(`#grupo__lugar_nacimiento .formulario__input-error`).classList.add('formulario__input-error-activo');
        nac = 0;
        habilitando();
      }
    });
  
    $("#fruta_favorita").blur(function() {
      // check if the age is a valid number
      if (/^[a-zA-ZÀ-ý\s]{1,45}$/.test($(this).val())) {
        $(this).css("border", "1px solid green");
        document.querySelector(`#grupo__fruta_favorita .formulario__input-error`).classList.remove('formulario__input-error-activo');
        fruta = 1;
        habilitando();
      } else {
        $(this).css("border", "1px solid red");
        document.querySelector(`#grupo__fruta_favorita .formulario__input-error`).classList.add('formulario__input-error-activo');
        fruta = 0;
        habilitando();
      }
    });
    $("#telefono").blur(function() {
    // check if the age is a valid number
    if (/^\d{10,14}$/.test($(this).val())) {
        $(this).css("border", "1px solid green");
        document.querySelector(`#grupo__telefono .formulario__input-error`).classList.remove('formulario__input-error-activo');

    } else {
        $(this).css("border", "1px solid red");
        document.querySelector(`#grupo__telefono .formulario__input-error`).classList.add('formulario__input-error-activo');

    }
    });
  });

  function habilitando(){
    total = color+nac+fruta;
    if (total==3) {
        $("#registrar_extras").prop("disabled", false);
        // $("#obligatorio").classList.add("ocultar-div");
        document.querySelector(`#texto_obligatorio .text-danger`).classList.add('ocultar-div');
    }else{
        $("#registrar_extras").prop("disabled", true);
        // $("#obligatorio").classList.remove("ocultar-div");
        document.querySelector(`#texto_obligatorio .text-danger`).classList.remove('ocultar-div');

    }
  }
  // FORMULARIO PARA REGISTRAR LOS DATOS EXTRAS
  function DatosExtras(){

    var formDatExtras = $('#formulario_preguntas').serialize();

    $.ajax({
        data: formDatExtras,
        url: '../php/usuarios.php',
        type: 'POST',
        
        success: function(response)
        {
            $('#RegistroExtra').modal('show');
            $('#RegistroExtra .modal-body').text(response);

            $('#registrar_extras').prop('disabled', true);

            formulario_preguntas.reset();

        },
        error: function(xhr, status, error)
        {
          $('#RegistroExtra').modal('show');
          $('#RegExtrC').html('Error al registrar datos.<br>Error: Datos ingresados no permitidos');
        },
        
    });
  }


  formulario_preguntas.addEventListener('submit', (e)=>{
    e.preventDefault();

    DatosExtras();
  });
  

  