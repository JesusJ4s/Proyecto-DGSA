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
    </div>

    <!-- **************************************************************** -->
    <div class="mb-5">
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_cont_vec.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_cuadrilla"><b>Actividades Cuadrilla</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_hylesia"><b>Hylesia</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_manual"><b>Manual Operacional</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_foco"><b>Foco zoonotico</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_vectores"><b>Manual Vectores</b></a>
        </button>

    </div>   

    <hr>

    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_cuadrilla" class="my-5 ms-5">Actividades Cuadrilla</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/manual de actividades cuadrillas/manual actividades cuadrillas.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Manual actividades cuadrillas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/manual de actividades cuadrillas/manual actividades cuadrillas.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_hylesia" class="my-5 ms-5">Hylesia</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/Manual Hylesia/Manual Hylesia metabus nuevo 26-04-12.pdf" class="pdf_mini">
                        <h6 class="card-title">Manual Hylesia metabus nuevo</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/Manual Hylesia/Manual Hylesia metabus nuevo 26-04-12.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_manual" class="my-5 ms-5">Manual Operacional
            </h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/manual operacional/MANUAL DE CALCULOS DE MEZCLA DE INSECTICIDAS.pdf" class="pdf_mini">
                        <h6 class="card-title">Manual de calculos de mezcla de Insecticidas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/manual operacional/MANUAL DE CALCULOS DE MEZCLA DE INSECTICIDAS.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/manual operacional/MANUAL DE PROCEDIMIENTO PARA LA UTILIZACION DE EQUIPOS.pdf" class="pdf_mini">
                        <h6 class="card-title">Manual de Procedimiento para la utilizacion de equipos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/manual operacional/MANUAL DE PROCEDIMIENTO PARA LA UTILIZACION DE EQUIPOS.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>
   
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_foco" class="my-5 ms-5">Foco zoonotico</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Division Focos Zoonoticos.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Division Focos Zoonoticos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Division Focos Zoonoticos.pdf" type="application/pdf">Leer</a>
                    
                    </div>
                </div>
           
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Fiebre Hemorragica Venezolana-1(2).pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Fiebre Hemorragica Venezolana</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Fiebre Hemorragica Venezolana-1(2).pdf" type="application/pdf">Leer</a>
                    
                    </div>
                </div>
           
        
            
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Guia Encefalitis Equina.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Guia Encefalitis Equina<h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Guia Encefalitis Equina.pdf">Leer</a>
                    </div>
                </div>
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual de Fiebre Amarilla Actualizado.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title"> Fiebre Amarilla</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual de Fiebre Amarilla Actualizado.pdf">Leer</a>
                    </div>
                </div>
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual de Pautas y Procedimientos Peste.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Pautas y Procedimientos Peste</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual de Pautas y Procedimientos Peste.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual para Desastres.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Manual para Desastres</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/MANUALES PARA PAG FOCO ZOONOTICO/Manual para Desastres.pdf">Leer</a>
                    </div>
                </div>
        

            </div>
        </div>
    </section>

    <hr>

    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_vectores" class="my-5 ms-5">Manual Vectores
            </h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/manuales vectores/Manual de Aedes aegyptil ultima version 24042017.pdf" class="pdf_mini">
                        <h6 class="card-title">Manual de Aedes aegyptil</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/manuales vectores/Manual de Aedes aegyptil ultima version 24042017.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Manuales/manuales vectores/Manual de larvitrampa instructivo.pdf" class="pdf_mini">
                        <h6 class="card-title">Manual de larvitrampa instructivo</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Manuales/manuales vectores/Manual de larvitrampa instructivo.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
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