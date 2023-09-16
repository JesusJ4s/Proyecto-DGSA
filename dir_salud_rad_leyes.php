<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Salud Radiologica </title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class="min-width-index">

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
            Dirección Salud Radiologica
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
            <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_legislacion">Legislación en Protección radiológica</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_covenin">Normas Covenin</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_salud_rad.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a> 
            </div>
        </nav>
    
<hr>
    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <form action="../../form-result.php" method="post" target="_blank">


   <section>
   <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_legislacion" class="my-5 ms-5">Legislación en Protección radiológica</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/D-2210-Manejo Material Radiactivo.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Manejo Material Radiactivo</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/D-2210-Manejo Material Radiactivo.pdf"type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Resolucion 401.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Resolucion 401</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Resolucion 401.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
        </div>
    </section>
    <hr>
    <section>
   <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_covenin" class="my-5 ms-5">Normas Covenin</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2026-1999.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Simbolo basico para Radiaciones Ionizantes</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2026-1999.pdf"type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-1-2000.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Protección radiológica. PARTE 1:</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-1-2000.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-2-2002.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Protección radiológica. PARTE 2</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-2-2002.pdf"type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-3_2003.pdf.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Protección radiológica. PARTE 3:</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/218-3_2003.pdf.pdf" type="application/pdf">Leer</a>
                    </div>
                </di>
                
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2238-2000.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Norma Venezolana radiaciones no Ionizantes,Limites de exposicion,Medidas de proteccion y control</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2238-2000.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
           
          
             <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2226_90_Guia_para_la_elaboraci_n_de_planes_para_el_control_de_Emergencias[1]..pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Guia para la elaboracin de planes para el_control de Emergencias:</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2226_90_Guia_para_la_elaboraci_n_de_planes_para_el_control_de_Emergencias[1]..pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
          
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2258-1995.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Vigilancia Radiologica.Requisitos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2258-1995.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2257-1995.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Norma Venezolana radiaciones Ionizantes,Clasificacion,Señalizacion y Demarcacion de las zonas de trabajo<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2257-1995.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
    
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2259-1995.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Radiaciones Ionizantes.Limites anuales de Dosis<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2259-1995.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2259-1995.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Radiaciones Ionizantes.Limites anuales de Dosis<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2259-1995.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2274-1997.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">servicio de salud ocupacional en centros de trabajo<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2274-1997.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2497-88.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Laboratio para Dosimetria personal<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/2497-88.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3190-1995.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Blindajes para contenedores  de fuentes radioactivas<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3190-1995.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3299-1997.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Progama de proteccion Radiologica<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3299-1997.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3496-1999.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Medidas de seguridad para la proteccion contra las radiaciones Ionizantes y las fuentes de radiacion(provisional)<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3496-1999.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3605-2000-PR-ASPECTOS FISICOS DE LA GARANTIA DE LA CALIDAD EN.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Medidas de seguridad para la proteccion contra las radiaciones Ionizantes y las fuentes de radiacion <h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/leyes/Legislación en Protección radiológica/Normas Covenin/3605-2000-PR-ASPECTOS FISICOS DE LA GARANTIA DE LA CALIDAD EN.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
        
        
        <hr>
        
        
        
            </div>
    </section>
    </main>
         <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>

            <!-- JS en Bootstrap -->
           <script src="js/bootstrap.bundle.min.js"></script>
           <script src="js/bottom.js"></script>
    </body>
       

    </html>