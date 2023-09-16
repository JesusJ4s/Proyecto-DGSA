function ver(){
    nomb_equip = document.getElementById('nomb_equip').value;
    var parametros =
    {
        "nomb_equip" : nomb_equip,
        "consulta_extra": "1"
    };

    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_datos.php',
        type: 'POST',
        success: function(mensaje)
        {
            $('#nombre_veri').html(mensaje);
            // comprobacion_de_datos();

        }
    });
}

function VerificarIP(){
    ip_equip = document.getElementById('ip').value;

    var parametros =
    {
        "ip_equipo": ip_equip,
        "consulta_extra": "2"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_datos.php',
        type: 'POST',
        success: function(menss)
        {
            $('#IP_veri').html(menss);
        }
    });

}
function VerificaMAC(){
    mac_equip = document.getElementById('mac').value;

    var parametros =
    {
        "mac_equipo": mac_equip,
        "consulta_extra": "3"
    };
    $.ajax({
        data: parametros,
        url: '../php/consultar_equipos_datos.php',
        type: 'POST',
        success: function(menss)
        {
            $('#MAC_veri').html(menss);
        }
    });

}