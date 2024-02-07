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

    <title>Coordinación...</title>
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

    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row m-0 p-0">

        <!-- Primera sección -->
        <section class=" mt-5 col-8 d-flex justify-content-center" id="informaciónCoordi">
            <!-- **************************************** -->
            <?php
                
                    echo $_SESSION['CoordinacionInformacionEntera'];

            ?>
           
        </section>


        <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <?php

            include("php/abrir_conexion.php");


                $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 3 AND boletin_visible = 1 ORDER BY RAND() LIMIT 10");
                while ($consulta = mysqli_fetch_array($Boletines)) {
                    // Imprimir el contenido de cada registro
                    $boletinesBD = '


                        <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15 text-center barra_Aside">
                            <p class="text-white fs-5 p-1 ps-3">'.$consulta['titulo_boletin'].'</p>
                        </div>
                        <div class="text-center">
                                <img src="'.$consulta['img1_boletin'].'" alt="" class="informacion_Aside border-radius-15">
                                <p class="mb-0">'.$consulta['fecha_creacion_bol'].'</p>
                        </div>
                        <div class="text-center">
                            <input type="hidden" id="consulta" name="consulta" value="'.$consulta['id_boletin'].'">
                            <button type="button" class="btn btn-outline-secondary" onclick="verBoletinDCV(this);">Leer</button>
                        </div>
                                        
                    ';
                    echo $boletinesBD;
                }


            ?>
        </aside>

</body>

<footer id="dk-footer" class="dk-footer">

      <script src="js/bootstrap.bundle.js"></script>
      <script src="js/bottom.js"></script>
      <script>
        $(document).ready(function(){
            $valor = "Dsr";
            Coordinacion($valor);
            })
      </script>
      <?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");
        $_SESSION['CoordinacionInformacionEntera'] = "";

    ?>
</footer>
</html>
