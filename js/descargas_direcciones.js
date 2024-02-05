function descargas(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;

    var inputAnterior = input.previousElementSibling; // Obtener el segundo input anterior al botón
    var valorInputAnterior = inputAnterior.value; // Obtener el valor del   segundo input
    var parametros = 
    {
        'galGrupo': valorInput,
        'galDireccion': valorInputAnterior,
        'identificador': 'verDescargas'
    }
    // alert(valorInput+' '+valorInputAnterior)
    $.ajax({
      data: parametros,
      url: './php/descargas_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        var pagina = mensaje;
        window.open('descargas_'+pagina+'.php', '_blank');
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
// ****************************
function CargarDescargas(Valor){

    var identificador = 
    {
        "validador": Valor,
        "identificador": "cargarDescargas"
    }
    $.ajax({
        type:"POST",
        url:"./php/descargas_divisiones.php",
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
                url:"./php/descargas_divisiones.php",
                data: identificador2,
                success:function(mensaje){
                    $('#barraDescargas').html(mensaje);
                   
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