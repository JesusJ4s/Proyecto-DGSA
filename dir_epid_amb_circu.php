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
    
    <title>Epidemiología Ambiental</title>
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
            Dirección Epidemiología Ambiental
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_epid_amb.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DEA_notificaciones"><b>Notificaciones</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DEA_Medicamentos"><b>Medicamentos</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DEA_format"><b>Nuevo Formato</b></a>
        </button>

    </div>

    <hr>

 <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <form action="../../form-result.php" method="post" target="_blank">


   <section>
   <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_notificaciones" class="my-5 ms-5">Notificaciones</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos//DEA/circulares/Circular 1139-2016 Formato Notificación Malaria.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Notificaciones de casos semanales de Malaria</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/circulares/Circular 1139-2016 Formato Notificación Malaria.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <hr>
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_Medicamentos" class="my-5 ms-5"> Medicamentos</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/circulares/circular de medicamento 2015.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Medicamentos 2015</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/circulares/circular de medicamento 2015.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/circulares/Circular de Gestión de Medicamentos 2016.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Gestion de Medicamentos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/circulares/Circular de Gestión de Medicamentos 2016.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
            </div>
     </div>
    </section>
    <hr>
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_format" class="my-5 ms-5"> Nuevo formato</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/circulares/Circular Reporte Promoción DGSA 2016.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Nuevo formato reporte de actividades</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/circulares/Circular Reporte Promoción DGSA 2016.pdf" type="application/pdf">Leer</a>
                    </div>
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