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

                <h2 class="display-5">Boletín</h2>
                    <div class="carousel-inner" id="boletines_principales">

                    <!-- BOLETINES DINAMICOS -->


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
            <?php

            include("php/abrir_conexion.php");
            $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 3 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol LIMIT 10");
            while ($consulta = mysqli_fetch_array($Boletines)) {
                // Imprimir el contenido de cada registro
                $boletinesBD = '

                <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15 text-center barra_Aside">
                    <p class="text-white fs-5 p-1 ps-3">'.$consulta['titulo_boletin'].'</p>
                </div>
                <div class="text-center">
                        <img src="'.$consulta['img1_boletin'].'" alt="" class="informacion_Aside w-50 border-radius-15">
                        <p class="mb-0">'.$consulta['fecha_creacion_bol'].'</p>
                </div>
                <div class="text-center">
                    <input type="hidden" id="consulta" name="consulta" value="'.$consulta['id_boletin'].'">
                    <button type="button" class="btn btn-outline-secondary" onclick="verBoletinDSR(this);">Leer</button>
                </div>
                    
                ';
                echo $boletinesBD;
            }
            ?>
        </aside>

    
    </main>
    
</footer>

</body>

<footer id="dk-footer" class="dk-footer">


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bottom.js"></script>
    <script>
        $(document).ready(function(){
            boletinesDSR();
        })
      </script>
    <?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
      </footer>
</html>