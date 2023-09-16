$(document).ready(function(){

    mostrar_base_todos();
    mostrar_base_software();
    mostrar_base_hardware();
})

function mostrar_base_todos(){

    var parametros =
    {
        "conocimiento": "Todo"
    };
    $.ajax({
        data: parametros,
        type:"POST",
        url:"../php/consultar_conocimiento.php",
        
        beforeSend: function()
        {
            $('#casos_conocimiento').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#casos_conocimiento').html(mensaje);
            new DataTable('#dataTable_ConoTodo', {
                language: Traduccion,
            });

        }
    });
}
function mostrar_base_software(){

    var parametros =
    {
        "conocimiento": "soft"
    };
    $.ajax({
        data: parametros,
        type:"POST",
        url:"../php/consultar_conocimiento.php",
        
        beforeSend: function()
        {
            $('#casos_software').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#casos_software').html(mensaje);
            new DataTable('#dataTable_ConoSoft', {
                language: Traduccion,
            });

        }
    });
}
function mostrar_base_hardware(){

    var parametros =
    {
        "conocimiento": "hard"
    };
    $.ajax({
        data: parametros,
        type:"POST",
        url:"../php/consultar_conocimiento.php",
        
        beforeSend: function()
        {
            $('#casos_hardware').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#casos_hardware').html(mensaje);
            new DataTable('#dataTable_ConoHard', {
                language: Traduccion,
            });

        }
    });
}
// SUBIR NUEVOS DATOS A LA BASE DE CONOCIMIENTO
function HacerEnvio(){

    var NuevoConoc = $('#form_Conocimiento').serialize();

    $.ajax({
        data: NuevoConoc,
        url: '../php/consultar_conocimiento.php',
        type: 'POST',
      
        success: function(mensaje)
        {
            $('#Info_Cono').modal('show');
            $('#Info_Cono .modal-body').html(mensaje);

            mostrar_base_todos();
            mostrar_base_software();
            mostrar_base_hardware();
            form_Conocimiento.reset();

        },
        error: function(jqXHR, xhr, status, error)
        {
            var nroERROR = jqXHR.status;

            if(nroERROR==501){
                $('#Info_Cono').modal('show');

                $('#Info_ConoC').html('Error al ingresar los datos al sistema.<br>Error: Debe seleccionar el tipo de caso.');

            } 
            if(nroERROR==502){
                $('#Info_Cono').modal('show');

                $('#Info_ConoC').html('Error al ingresar los datos al sistema.<br>Error: Faltan datos.');

            } 
            if(nroERROR==503){
                $('#Info_Cono').modal('show');

                $('#Info_ConoC').html('Error al ingresar los datos al sistema.<br>Error: El formulario debe poseer al menos 20 caracteres.');

            } 
            if(nroERROR==504){
                $('#Info_Cono').modal('show');

                $('#Info_ConoC').html('Error al ingresar los datos al sistema.<br>Error: Datos inválidos ingresados.');

             }  
              

             
        }
    });
}
const submitButton = document.querySelector('#reg_Conoci');
const form_Conocimiento = document.getElementById('form_Conocimiento');

submitButton.addEventListener('click', (e) => {
    e.preventDefault(); //solo para evitar enviar el formulario
    HacerEnvio();    

});
