
function instrumentosButton(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;

    var inputAnterior = input.previousElementSibling; // Obtener el segundo input anterior al botón
    var valorInputAnterior = inputAnterior.value; // Obtener el valor del   segundo input
    var parametros = 
    {
        'id_TipoInstrumento': valorInput,
        'id_direccion': valorInputAnterior,
        'identificador': 'verInstrumentos'
    }

    // alert(valorInput+' '+valorInputAnterior)
    $.ajax({
      data: parametros,
      url: './php/instrumentos_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        var pagina = mensaje;
        window.open('instrumentos'+pagina+'.php', '_blank');
        // alert(mensaje)
      },
      error: function(jqXHR, xhr, status, error)
         {
          // alert("ERROR");
          var nroERROR = jqXHR.status;
 
            if(nroERROR==500){
               $('#LoginModal').modal('show');

               $('#LoginModalC').html('Error al ingresar al sistema.<br>Error: Falla en el sistema.');
            }   
                                  
         }
    });
}
// ******************************
function Documentos(Valor){

    var identificador = 
    {
        "validador": Valor,
        "identificador": "cargarDocumentos"
    }
    $.ajax({
        type:"POST",
        url:"./php/instrumentos_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#documentos').html(mensaje);
            var identificador2 = 
            {
                "validador": Valor,
                "identificador": "cargarBarra"
            }
            $.ajax({
                type:"POST",
                url:"./php/instrumentos_divisiones.php",
                data: identificador2,
                success:function(mensaje){
                    $('#barraInstrumentos').html(mensaje);
                   
                },
                error: function(jqXHR, xhr, status, error){
                    var nroERROR = jqXHR.status;
                    $.alert({
                        title: 'Error',
                        content: "Error al cargar documentos.<br>Error: Falla en el sistema.",
                        type: "red",
                        buttons: {
                            cancel: {
                                text: 'Cerrar',
                                btnClass: 'btn-secondary',
                                action: function () {

                                }
                            }
                        }
                    });                       
                }
            });
        },
        error: function(jqXHR, xhr, status, error){
            var nroERROR = jqXHR.status;
            $.alert({
                title: 'Error',
                content: "Error al cargar documentos.<br>Error: Falla en el sistema.",
                type: "red",
                buttons: {
                    cancel: {
                        text: 'Cerrar',
                        btnClass: 'btn-secondary',
                        action: function () {

                        }
                    }
                }
            });                    
        }
    });
}