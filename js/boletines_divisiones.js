function boletinesDEA(){
    var identificador = 
    {
        "identificador": "boletinesPrinDEA"
    }
    $.ajax({
        type:"POST",
        url:"./php/boletines_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#boletines_principales').html(mensaje);

        }
    });
}
function verBoletinDEA(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    var parametros = 
    {
        'idBoletin': valorInput,
        'identificador': 'verBoletin'
    }
    $.ajax({
      data: parametros,
      url: './php/boletines_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        window.open('boletinWebDea.php', '_blank');
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
function boletinesDCVFN(){
    var identificador = 
    {
        "identificador": "boletinesPrinDCV"
    }
    $.ajax({
        type:"POST",
        url:"./php/boletines_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#boletines_principales').html(mensaje);

        }
    });
}
function verBoletinDCV(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    var parametros = 
    {
        'idBoletin': valorInput,
        'identificador': 'verBoletin'
    }
    $.ajax({
      data: parametros,
      url: './php/boletines_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        window.open('boletinWebDcv.php', '_blank');
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
function boletinesDIS(){
    var identificador = 
    {
        "identificador": "boletinesPrinDIS"
    }
    $.ajax({
        type:"POST",
        url:"./php/boletines_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#boletines_principales').html(mensaje);

        }
    });
}
function verBoletinDIS(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    var parametros = 
    {
        'idBoletin': valorInput,
        'identificador': 'verBoletin'
    }
    $.ajax({
      data: parametros,
      url: './php/boletines_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        window.open('boletinWebDis.php', '_blank');
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
function boletinesDSR(){
    var identificador = 
    {
        "identificador": "boletinesPrinDSR"
    }
    $.ajax({
        type:"POST",
        url:"./php/boletines_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#boletines_principales').html(mensaje);

        }
    });
}
function verBoletinDSR(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    var parametros = 
    {
        'idBoletin': valorInput,
        'identificador': 'verBoletin'
    }
    $.ajax({
      data: parametros,
      url: './php/boletines_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        window.open('boletinWebDsr.php', '_blank');
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
function boletinesDGSA(){
    var identificador = 
    {
        "identificador": "boletinesPrinDGSA"
    }
    $.ajax({
        type:"POST",
        url:"./php/boletines_divisiones.php",
        data: identificador,
        success:function(mensaje){
            $('#boletines_principales').html(mensaje);

        }
    });
}
function verBoletinDGSA(button){
    var input = button.previousElementSibling;
    var valorInput = input.value;
    var parametros = 
    {
        'idBoletin': valorInput,
        'identificador': 'verBoletin'
    }
    $.ajax({
      data: parametros,
      url: './php/boletines_divisiones.php',
      type: 'POST',      
      // Mensaje cuando ya cargó
      success: function(mensaje)
      {
        window.open('boletinWebDg.php', '_blank');
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
