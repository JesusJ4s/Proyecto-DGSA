$(document).ready(function(){

    $('#pregunta1').change(function(){
        recargarPregunta();
        // alert("Selecciono una Dirección");
    });

})


// LLENANDO SELECTS
function ListPreg(){
    var cedulaPreg = document.getElementById('cedula').value;
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
            document.getElementById('cedula').setAttribute('readonly', true);  
            // $('#cedula').addClass('border-good '); 
            $('#cedula').css("background", "#c4c4c4");
            $('#cedula').css("border", "3px solid green", "bg-grey");
            $('#pregunta1').html(mensaje);
            // $('#pregunta2').html(mensaje);

            // alert("logrado");
        }
    })
}

// FUNCION PARA CARGAR LA LISTA DE PREGUNTAS
function recargarPregunta(){
    var pregunta1 = document.getElementById('pregunta1').value;
    // var pregunta2 = document.getElementById('pregunta2').value;
    var cedulaPreg = document.getElementById('cedula').value;

    var parametros =
    {
        "pregunta1": pregunta1,
        // "pregunta2": pregunta2,
        "cedul":cedulaPreg,
        "preguntas": "preguntas"
    }
    $.ajax({
        type:"POST",
        url:"../php/preguntas_seguridad.php",
        data:parametros,

        success:function(r){
            $('#pregunta2').html(r);
        }
    });
    
}