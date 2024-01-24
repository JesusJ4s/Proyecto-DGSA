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

    <title>Ingeneria Sanitaria</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class=" min-width-index">

    

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
    <!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Ingeneria Sanitaria
        </p>
    </div>
    
        <!-- **************************************************************** -->
        <!-- Barra de navegación -->

        <div class="d-flex justify-content-center bg-barra py-4">
            <a href="dir_ing_sanit.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button">
                <a class="list-group-item list-group-item-action" href="#DIS_manual"><b>Manual de Riesgo Sanitario</b></a>
            </button>

        </div>
    
    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <hr>
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_manual" class="my-5 ms-5">Manual de Riesgo Sanitario</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/manual de riesgo sanitario/Manual de riesgo sanitario.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Manual de Riesgo Sanitario</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/manual de riesgo sanitario/Manual de riesgo 
                        sanitario.pdf">Leer</a>
                    
                    </div>
            </div>
        </div>
    </section>
    <hr>
</main>
  <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>

    <!-- JS en Bootstrap -->

<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>

<footer>
    <?php 
       
    ?>
</footer>
</html>