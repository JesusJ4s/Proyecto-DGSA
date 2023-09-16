function enviarNumero() {
    var numero = document.getElementById("numero").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tabla").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "PHP_POO/usuarios_consultas.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("numero=" + numero);
  }

  function consultar_ci()
{
    cedula_usr = document.getElementById('numero').value;
    var parametros =
    {
        "numero" : cedula_usr,
        "que_buscar": "1"
    };

    $.ajax({
        data: parametros,
        url: 'PHP_POO/usuarios_consultas.php',
        type: 'POST',

        beforeSend: function()
        {
            // $('#mostrar_mensaje_ci').removeClass('ocultar-div');

        },
        success: function(mensaje)
        {
            $('#mostrar_mensaje_ci').html(mensaje);
            // $('#tabla_usuarios').classList.add("ocultar-div");
            document.getElementById("tabla_usuarios").classList.add("ocultar-div"); 

        // $("#obligatorio").classList.add("ocultar-div");


        }
    });
}