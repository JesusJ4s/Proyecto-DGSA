formulario_solicitud_sopor.addEventListener('submit', (e)=>{
    e.preventDefault();

        subirSolicitud()
  });
  function subirSolicitud(){

    var formSolicSoport = $('#formulario_solicitud_sopor').serialize();
    // var olis = document.getElementById('name_edit');
    $.ajax({
        data: formSolicSoport,
        url: '../php/consultar_soportes.php',
        type: 'POST',
        error: function(jqXHR, xhr, status, error)
        {
            document.getElementById('name_edit').removeAttribute('readonly');
            var nroERROR = jqXHR.status;

            if(nroERROR==500){
                $('#InfoGeneral').modal('show');

                $('#InfoGeneralC').html('Error al registrar solicitud.<br>Error: Casillas están vacías.');
            }
            if(nroERROR==501){
                $('#InfoGeneral').modal('show');

                $('#InfoGeneralC').html('Error al registrar solicitud.<br>Error: En los datos ingresados hay dígitos inválidos.');
            }
            if(nroERROR==502){
                $('#InfoGeneral').modal('show');

                $('#InfoGeneralC').html('Error al registrar solicitud.<br>Error: Nombre de equipo errado o el equipo no se encuentra registrado en el equipo.');
            }
            if(nroERROR==503){
                $('#InfoGeneral').modal('show');

                $('#InfoGeneralC').html('Error al registrar solicitud.<br>Error: Ya está en espera o en proceso una solicitud hecha a dicho ordenador. Verifique el nombre del Ordenador.');
            }         
        },
        success: function(mensaje)
        {
            document.getElementById('parte1').classList.add('ocultar-div');
            document.getElementById('parte2').classList.remove('ocultar-div');
            document.getElementById('name_edit').removeAttribute('readonly');


            $('#InfoGeneral').modal('show');
            $('#InfoGeneral .modal-body').html(mensaje);

            formulario_solicitud_sopor.reset(); 
            mostrarSoportes1_2();
            mostrar_soportes_Conocimiento();
            cambio2();  
        },

    });
  }