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

    <title>Salud Radiologica</title>
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
            Dirección Salud Radiologica
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_salud_rad.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DSR_legislacion"><b>Legislación en Protección radiológica</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DSR_covenin"><b>Normas Covenin</b></a>
        </button>
    </div>
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