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

    <title>Control de Vectores</title>
</head>
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


     <!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Control de Vectores
        </p>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_cont_vec.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_circulares"><b>Circulares</b></a>
        </button>

    </div>

    <hr>
   
    </div>
   
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_circulares" class="my-5 ms-5">Circulares</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/Circular 00018 TRIATOMINOS.pdf" class="pdf_mini">
                        <h6 class="card-title">Circular 00018 Triatominos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/Circular 00018 TRIATOMINOS.pdf" type="application/pdf">Leer</a>
                    
                    </div>
                </div>
           
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/CIRCULAR 00019 CONTROL Aedes 2012.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Circular 00019 Control Aedes</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/CIRCULAR 00019 CONTROL Aedes 2012.pdf" type="application/pdf" type="application/pdf">Leer</a>
                    
                    </div>
                </div>
           
        
            
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/Circular 00019 HOSPITALARIAS.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Circular 00019 Hospitalarias<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/Circular 00019 HOSPITALARIAS.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/CIRCULAR Achatina fulica.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Achatina fulica</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/CIRCULAR Achatina fulica.pdf">Leer</a>
                    </div>
                </div>

             <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/Circular Aplicacion de Plaguicidas Instituciones Públicas y Privadas.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Aplicacion de Plaguicidas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/Circular Aplicacion de Plaguicidas Instituciones Públicas y Privadas.pdf">Leer</a>
                    </div>
                </div>
                
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/CIRCULAR CHAGAS 2013.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Chagas 2013</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/CIRCULAR CHAGAS 2013.pdf">Leer</a>
                    </div>
                </div>
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/circulares/CIRCULAR DE MALARIA.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Malaria</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/circulares/CIRCULAR DE MALARIA.pdf">Leer</a>
                    </div>
                </div>
        
            </div>
        </div>
    </section>
 <hr>
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