<!-- TODA LA INFORMACIÓN SE SOLICITA DESDE LA PAGINA DE INICIAR SESION EN LA INTRANET, SE SOLICITA, LLEGA Y SE VERIFICA EN LA BASE DE DATOS -->
<?php
include("../php/verificacion_login.php");
LoginSimple();
?>
<script src="../js/reenvio.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/style_soporte.css">
<script src="../jquery/jquery-3.6.4.min.js"></script>

<title>Solicitudes de Soporte</title>
</head>
<body class="min-width-index"> 

<!-- Modal DONDE MOSTRAR LA INFORMACIÓN SOLICITADA -->
<div class="modal fade" id="Info_Vistas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Notificación:</h5>
      </div>
      <div class="modal-body" id="Info_VistasC">
          <h3>TITULO DEL FORM</h3>
          <input class="form-control" id="mac_mostrar2" name="mac_mostrar2" readonly>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- ******************************************************* -->
<!-- Cabecera -->
<header id="inicio-pag" class="caja-superior mx-4">
<?php
include('../php/logos_intranet.php')
?>
</header>

<div class="container-fluid border my-2 px-0" id="centro-id">
        <div class="w-85 mx-auto px-2 my-3"> 
            <h3 class="text-center p-2 mb-3">Solucitudes enlistadas</h3>

            <!-- DEPENDIENDO DEL CARGO ESTO DEBE CAMBIAR, USAR VARIABLES GLOBALES Y PHP -->
            <div class="d-flex flex-row-reverse">
              <a href="soporte_tecnico.php" class="btn btn-danger me-1 botones-solicitud"><img src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
            </div>

            <!-- ESTO ES IGUAL PARA TODOS LOS CARGOS -->
            <div>
              <!-- <button class="btn btn-secondary" onclick="cambioPesta1();">Todos</button> -->
              <button class="btn btn-secondary" onclick="cambioPesta1();">En Espera o Proceso</button>
              <button class="btn btn-secondary" onclick="cambioPesta2();">Finalizados</button>
            </div>
            <hr class="my-3">
            <div id="parte1">
              <h3 class="text-center mt-4">Solicitudes de soporte técnico</h3>
              <div id="mostrar_soportes_basico" class="bg-blanco border border-radius-15">
              
              </div>
            </div>
            <div id="parte2" class="ocultar-div">
              <h3 class="text-center p-2 mb-3">Soportes Finalizados</h3>
              <div id="mostrar_soportes_Conocimiento" class="bg-blanco border border-radius-15">
                  
              </div>   
            </div>
            <div id="parte3" class="ocultar-div">
              <div id="casos_hardware"></div>
            </div>           
        </div>
</div>



<!-- JS en Bootstrap -->
<script src="../js/bootstrap.bundle.js"></script>

<script src="../js/editar_mostrar_datos.js"></script>

<script src="../js/consultar_soportes.js"></script>

<script>
  function verReporteSoli(){

  }
</script>



</body>
</html>