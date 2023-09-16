// VERIFICAR CÉDULA (QUE NO ESTÉ REGISTRADA)

function verificar_ci()
{
    buscar_ci = document.getElementById('cedula').value;
    var parametros =
    {
        "mi_busqueda_ci" : buscar_ci,
        "consulta_extra": "1"
    };

    $.ajax({
        data: parametros,
        url: '../php/ver_ci.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#mostrar_mensaje_ci').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#mostrar_mensaje_ci').html(mensaje);
            comprobacion_de_datos();

        }
    });

}
// VERIFICAR NOMBRE_USUARIO (DISPONIBILIDAD)
function verificar_name()
{
    buscar_name = document.getElementById('usuario').value;
    var parametros =
    {
        "mi_busqueda_name" : buscar_name
    };

    $.ajax({
        data: parametros,
        url: '../php/ver_usr.php',
        type: 'POST',

        beforeSend: function()
        {
            $('#mostrar_mensaje_name').html("<span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span><span class='spinner-grow spinner-grow-sm bg-primary'></span>");
        },

        success: function(mensaje)
        {
            $('#mostrar_mensaje_name').html(mensaje);
            comprobacion_de_datos();

            
        }
    });

}

function comprobacion_de_datos(){

    usuarioB = document.getElementById('usuario').value;
    cedulaB = document.getElementById('cedula').value;

    var parametros =
    {
        "usuarioB": usuarioB,
        "cedulaB": cedulaB,
        "ingreso": "1"
    };
    $.ajax({
        data: parametros,
        url: '../php/usuarios.php',
        type: 'POST',

        success: function(response)
        {
            if (response == 'correct') {
                $('#registrar').prop('disabled', false);
                // alert("No existe la cedula");    

            } 
            else {
                $('#registrar').prop('disabled', true);  
                // alert("Existe la cedula en el sistema");     
                   
            }
        }
    });
}