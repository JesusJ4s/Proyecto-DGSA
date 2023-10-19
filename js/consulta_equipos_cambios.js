// REPORTE INDIVIDUAL
function consulta_cambios_ind(){

        var name_consult = document.getElementById('name_search').value;
        var parametros=
        {
            "con_name":name_consult,
            "busqueda":"equipo_cambios"
        }
        $.ajax({
            data: parametros,
            url: '../php/consultar_equipos_individuales.php',
            type: 'POST',
            error: function(jqXHR)
            {
                alert("error")
            },   
            success: function(mensaje)
            {
                // Redireccionar a la página deseada
                window.open('../reportes/equipo_datos_edicion.php', "_blank");
            }
        });


}