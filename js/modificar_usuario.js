    // OCULTAR CARGANDO
    $(document).ready(function(){
        $('.ocultar-spinner').hide();
        verificar_bd();
        preguntas_seguridad();
        });

    // LLENAR INPUTS DEL FORMULARIO
    function verificar_bd()
    {
        var parametros =
        {
            "consulta_extra" : "2"
        };
        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/ver_ci.php',
            type: 'POST',

            beforeSend: function()
            {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function()
            {
                alert("Sin datos para buscar");
                $('.ocultar-class').hide();
            },
            complete: function()
            {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);                   
            },

            success: function(valores)
            {
                $("#usuario").val(valores.usuario);
                $("#nombre").val(valores.nombre);
                $("#pinSeguridad").val(valores.pin);
                $("#telefono").val(valores.telefono);
                $("#telefono2").val(valores.telefono_secundario);
                $("#correo").val(valores.email);

            }
        });

    }
    // LLENAR PREGUNTAS DE SEGURIDAD
    function preguntas_seguridad()
    {
        var parametros =
        {
            "consulta_extra" : "2"
        };

        $.ajax({
            data: parametros,
            dataType: 'json',
            url: '../php/ver_ci.php',
            type: 'POST',

            beforeSend: function()
            {
                $('.ocultar-spinner').show(2);
                $('.ocultar-class').hide();
            },
            error: function()
            {
                alert("Sin datos para buscar");
                $('.ocultar-class').hide();
            },
            complete: function()
            {
                $('.ocultar-spinner').hide(2);
                $('.ocultar-class').show(2);                   
            },

            success: function(valores)
            {

                $("#colorFavorito").val(valores.pregunta1);
                $("#lugarNacimiento").val(valores.pregunta2);
                $("#frutaFavorita").val(valores.pregunta3);


            }
        });

    }


    
