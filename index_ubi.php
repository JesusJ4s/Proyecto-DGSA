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
      
    <hr>


    <!-- MAPAS DE GOOGLE -->
    <section class="container-fluid w-85">
        <div class="container-fluid mb-5 p-0">
            <h2 id="DGSA_Ubicación" class="bold text-center mb-4"><u>Localización Geográfica</u></h2>
            <div class="container-fluid px-5">
                <p class="text-justify sangria">
                    La Dirección General de Salud Ambiental o DGSA se encuentra ubicada al noroeste de la ciudad de Maracay, específicamente en la calle Pérez Bonalde, Urbanización Andrés Bello, Edificio de Salud Ambiental, parroquia Las Delicias. Limita al noreste con la Universidad Politécnica Experimental Libertador, al sureste con la comunidad La Cooperativa, sector Los Naranjos, al sur con la Urb. Andrés Bello y al noroeste con el Círculo Militar de las FAB.
                </p>
                <p class="text-justify">
                    <b>Norte:</b> Universidad Politécnica Experimental Libertador. El Círculo Militar de las FAB.
                    <br>
                    <b>Sur:</b> La Comunidad: “La Cooperativa”, sector Los Naranjos. Urb. Andrés Bello.
                    <br>
                    <b>Este:</b> Universidad Politécnica Experimental Libertador. La Comunidad: “La Cooperativa”, sector Los Naranjos.
                    <br>
                    <b>Oeste:</b> El Círculo Militar de las FAB. Corporación de Salud del Estado Aragua; Corposalud.
                </p>
            </div>
        </div>
    </section>

    <hr>

    <section >
        <div class="container-fluid px-0 mx-0">
            <!-- <h2 id="DGSA_Servicios" class="bold text-center mb-4"><u>Mapa</u></h2>
            <div class="text-center my-4">
                <img src="assets/documentos/DGSA/mapa/Mapa.png" alt="DGSA-MAPA" class="images-md">
            </div> -->
            <h2 id="DGSA_Servicios" class="bold text-center mb-4 mt-3"><u>Mapa</u></h2>
            <div class="text-center my-4">
                <img src="assets/informacion/DGSA informa/mapa/Mapa2.jpg" alt="DGSA-MAPA-2" class="w-50 border-radius-15">
            </div>
            <div class="text-center my-4">
                <a target="_blank" class="text-white enlaces_limpios2 btn btn-primary" href="https://www.google.com/maps/place/Direcci%C3%B3n+General+de+Salud+Ambiental/@10.2702093,-67.5821607,951m/data=!3m1!1e3!4m6!3m5!1s0x8e803b48b9649d07:0x972a3fd31a2d4b22!8m2!3d10.2699631!4d-67.5818731!16s%2Fg%2F11b70f6f34!5m1!1e4">Encuentranos en Google Maps: Dirección General de Salud Ambiental</a>

        </div>
    </section>
    

    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>
<a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>
<?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
</html>