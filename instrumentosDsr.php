<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <?php
        include("php/estilosCss.php");
        stile1();
    ?>
    <script src="jquery/jquery-3.6.4.min.js"></script>

    <title>Instrumentos Legales</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class=" min-width-index">



    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag">
        <?php
            include("php/logos.php")
        ?>
    </header>


    <!-- ******************************************************* -->
    <!-- Carrusel -->
    <?php
        include("php/index_carrousel.php");
    ?>

    <!-- *********************************************** -->
    <!-- Marquesina -->
    <?php
        include("php/marquesina.php")
    ?>
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-6 bold-title">
            Dirección de Salud Radiológica
        </p>
    </div>
    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo dir_salud_radi_nav2();

    ?>
    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4" id="barraInstrumentos">
        

    </div>
    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <!-- PDF -->
    <section class="d-flex justify-content-center">
        
        <div class="mt-5 w-85">
            <!-- Galeria Normal -->

            <div class="mb-5">           
                <div class="row d-flex justify-content-center" id="documentos">

                </div>
            </div>
        </div>
    </section>

</body>

<footer id="dk-footer" class="dk-footer">

      <script src="js/bootstrap.bundle.js"></script>
      <script src="js/bottom.js"></script>
      <script>
        $(document).ready(function(){
            $valor = "DSR";
            Documentos($valor);
        })
      </script>

      <?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
</footer>
</html>
