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

    <title>Dirección de Salud Radiológica</title>
</head>
<body class=" min-width-index">

    <header id="inicio-pag">
        <?php
            include("php/logos.php")
        ?>
    </header>

<!-- ******************************************************* -->
    <!-- Carrusel -->
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
        dir_salud_radi_nav();
    ?>

    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row px-0 mx-0">

        <!-- Primera sección -->
        <section class="col-8">
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0 w-75">

                <div id="carousel-info" class="carousel slide mt-3" data-bs-ride="carousel">

          <!-- Contenedor de las imágenes en carrousel -->
            <h2 class="display-5">Boletín</h2>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/gallery/DSR/proteccion.png" alt="protección" class="d-block width-carousel-info">
                    <p class="display-6">
                    Proctección Radiológica
                    </p>
                    <p class="sangria text-justify">
                        Laprotección radiológica es el conjunto de medidas establecidas por los organismos competentes para la utilización segura de las radiaciones ionizantes y garantizar la protección de los indivi­duos, de sus descendientes, de la población en su conjunto, así como del medio ambiente, frente a los posibles riesgos que se deriven de la exposición a las radiaciones ionizantes.     
                        <br>                 
                        <a target="_blank" href="en_const.html" class="leer-mas">Leer más...</a>
                    </p>
                </div>

                <div class="carousel-item">
                    <img src="assets/gallery/DSR/ionizante.png" alt="dosimetria radiologica" class="d-block width-carousel-info">
                    <p class="display-6">
                        Radiación Ionizante
                    </p>
                    <p class="sangria text-justify">
                        La radiación ionizante es un tipo de energía liberada por los átomos en forma de ondas electromagnéticas (rayos gamma o rayos X) o partículas (partículas alfa y beta o neutrones). La desintegración espontánea de los átomos se denomina radiactividad, y la energía excedente emitida es una forma de radiación ionizante. Los elementos inestables que se desintegran y emiten radiación ionizante se denominan radionúclidos.  
                    <br>
                    <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>                
                    </p>
                </div>

                <div class="carousel-item">
                    <img src="assets/gallery/DSR/dosimetria.jpg" alt="Malaria" class="d-block width-carousel-info">
                    <p class="display-6">
                        Dosimetria
                    </p>
                    <p class="sangria text-justify">   
                        Es la técnica que se emplea para medir la exposición a la radiación ionizante. Se encarga de medir la absorción que realizan los tejidos corporales de esta radiación.                       
                    <br>
                    <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                    </p>
                </div>
                
                <div class="carousel-item">
                    <img src="assets/gallery/DSR/radiacion.png" alt="radiación gamma" class="d-block width-carousel-info">
                    <p class="display-6">
                        Radiacion Ambiental
                    </p>
                    <p class="sangria text-justify">
                        Es la radiactividad natural, es decir, la presencia de varios elementos radiactivos que se encuentran en el aire, en los suelos, en las plantas o en el agua. Representa el 60% de la radiactividad a la que estamos expuestos normalmente.  
                    <br>                
                    <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                    </p>
                </div>
            
            </div>

      <!-- Botones para cambiar imágenes (altura normal) -->
          <button class="carousel-control-prev" data-bs-target="#carousel-info" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </button>

          <button class="carousel-control-next" data-bs-target="#carousel-info" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
          </button>
      </div>
     </div>
     </section>

      <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <div class="bg-azul-claro-cromatico2 mt-3 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Equipos de Radiologia</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DSR/equipo.jpg" alt="rayos x " class="w-50">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-3 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Mamografia</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DSR/mamografia.png" alt="Reservorios" class="w-50">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-3 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Radiacion gamma ambiental</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DSR/radiacion.png" alt="Fauna Nociva" class="w-50">
                </a>
            </div>
            <!-- <div class="text-center mt-4">
                <form action="">
                    <input id="Buscar" class="btn btn-outline-primary " type="text" placeholder="Buscar..." required>
                    <br>
                    <input class="btn bg-azul-claro-cromatico5 mt-2" type="submit" placeholder="Buscar">
                </form>
            </div> -->
        </aside>

    
    </main>
    
</footer>

</body>

<footer id="dk-footer" class="dk-footer">
<?php
    include("php/index_foot.php");
    include("php/subir_flecha.php");

?>
</footer>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bottom.js"></script>
</html>