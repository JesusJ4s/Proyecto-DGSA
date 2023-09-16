<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
    <div class="container-fluid mb-2 p-0 box-shadow-nav w-95">

        <div id="carousel-id" class="carousel slide mt-3" data-bs-ride="carousel">

        <!-- Botones para pasar imagenes (inferiores) -->
            <div class="carousel-indicators">
                <button data-bs-target="#carousel-id" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="1"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="2"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="3"></button>
            </div>

            <!-- Contenedor de las imágenes en carrousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/banner/DGSA/BANNER 1.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANNER 2.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANNER 3.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANER OFICIAL.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>
            </div>

        <!-- Botones para cambiar imágenes (altura normal) -->
            <button class="carousel-control-prev" data-bs-target="#carousel-id" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" data-bs-target="#carousel-id" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

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
    <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
                <ul class="list-group list-group-horizontal">
                    <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DCVFN_circulares">Circulares</a>
                    <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_cont_vec.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
                </ul>
            </div>
        </nav>


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