// $(document).ready(function(){

//     $('#pregunta1').change(function(){
//         recargarPregunta();
//         // alert("Selecciono una Dirección");
//     });

// })


// LLENANDO SELECTS
function ListPreg(){
    cedulaPreg = document.getElementById('cedula').value;
    var parametros =
    
    {
        "cedulaPreg": cedulaPreg,
        "preguntas":"recuperacion"
    }
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/preguntas_seguridad.php",
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;
            if(nroERROR==500){
                $('#CambCont').modal('show');
                $('#CambioC').html('Error al registrar los datos.<br>Error: La cédula no existe');
                $('#pregunta1').html('<option value="0">-- opciones --</option>');
                $('#pregunta2').html('<option value="0">-- opciones --</option>');   
                // $('#pregunta2').addClass('bg-secondary');   
            }
            if(nroERROR==501){
                $('#CambCont').modal('show');

                $('#CambioC').html('Error al registrar los datos.<br>Error: ');
            }
        },
        success: function(mensaje)
        {
            $('#pregunta1').html(mensaje);
            $('#pregunta2').html(mensaje);
            document.getElementById('cedula').setAttribute('readonly', true);  
            // $('#cedula').addClass('border-good '); 
            $('#cedula').css("border", "1px solid green", "bg-grey");

            // alert("logrado");
        }
    })
}

// FUNCION PARA CARGAR LA LISTA DE DIVISIONES
// function recargarPregunta(){
//     var pregunta1 = document.getElementById('pregunta1').value;
//     var cedulaPreg = document.getElementById('cedula').value;

//     var parametros =
//     {
//         "pregunta1": pregunta1,
//         "cedul":cedulaPreg,
//         "preguntas": "preguntas"
//     }
//     $.ajax({
//         type:"POST",
//         url:"../php/preguntas_seguridad.php",
//         data:parametros,

//         success:function(r){
//             $('#pregunta2').html(r);
//         }
//     });
    
// }