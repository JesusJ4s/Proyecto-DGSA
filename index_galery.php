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

    <title>Dirección General de Salud Ambiental</title>
</head>
<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class="min-width-index">
    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag">
        <?php
        include('php/logos.php')
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

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo index_nav();
    ?>

    <!-- ****************************************************** IMAGENES ************************************************ -->
    <section class="d-flex justify-content-center">
        
        <div class="mt-5 w-85">
            <!-- Galeria Normal -->

            <div class="mb-5">           
                <div class="row d-flex justify-content-center" id="galeria_imagenes">

                </div>
            </div>
        </div>
    </section>


    <!-- JS en Bootstrap -->
    <script src="js/galeria_dgsa.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
    <script src="js/verWeb.js"></script>
</body>
<?php
    include("php/subir_flecha.php");
?>
</html>