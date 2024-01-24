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
            <a class="list-group-item list-group-item-action" href="#DEA_Medicamentos"><b>Medicamentos</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DEA_chagas"><b>Chagas-Epidemiologia</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DEA_chagas2"><b>Chagas-Control de Vectores</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#Parasitosis"><b>Parasitosis</b></a>
        </button>
    </div>
    <hr>

 <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <form action="../../form-result.php" method="post" target="_blank">
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_Medicamentos" class="my-5 ms-5"> Medicamentos</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/formato medicamentos/Instructivo balance mensual.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo balance mensual</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/formato medicamentos/Instructivo balance mensual.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/formato medicamentos/Instructivo de Colagenosis.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo de Colagenosis</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/formato medicamentos/Instructivo de Colagenosis.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/formato medicamentos/Instrutivo hoja de pedidos.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Hojas de pedidos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/formato medicamentos/Instrutivo hoja de pedidos.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
        </div>
    </section>
<hr>
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_chagas" class="my-5 ms-5"> Chagas-Epidemiologia</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Instructivo   para llenado de Formato para envu00EDo de   muestras al Laboratorio Central.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo  de muestras al Laboratorio Central</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Instructivo   para llenado de Formato para envu00EDo de   muestras al Laboratorio Central.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Instructivo Reporte Semanal de Triatominos.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Reporte Semanal de Triatominos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Instructivo Reporte Semanal de Triatominos.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Rendición Medicamentos/INSTRUCTIVO.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Gasto mensual de medicamentos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="asassets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Rendición Medicamentos/INSTRUCTIVO.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Rendición Medicamentos/Instructivo_Formato_Medicamento.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo formato medicamentos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos Chagas/Epidemiología/Rendición Medicamentos/Instructivo_Formato_Medicamento.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
            </div>    
    </div>
    </section>
 <hr>
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="DEA_chagas2" class="my-5 ms-5"> Chagas-Control de Vectores</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos Chagas/Control de Vectores/Instructivo Reporte Semanal de Triatominos (1).pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Reporte Semanal de Triatomino</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos Chagas/Control de Vectores/Instructivo Reporte Semanal de Triatominos (1).pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
            </div>    
    </div>
</section>
   <hr>
    <section>
    <div class="container-fluid ps-4 mt-5">
            <h1 id="Parasitosis" class="my-5 ms-5"> Parasitosis</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos parasitosis/Carta mensual/Instructivo Carta Mensual PIYE.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Carta Mensual</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos parasitosis/Carta mensual/Instructivo Carta Mensual PIYE.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                 <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos parasitosis/Reporte de Actividades/Instructivo Reporte de Actividades Ejecutadas PIYE.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Reporte de actividades</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos parasitosis/Reporte de Actividades/Instructivo Reporte de Actividades Ejecutadas PIYE.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                 <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos parasitosis/Encuesta Socio Sanitaria/Instructivo Encuesta Socio Sanitaria PIYE.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Encuesta Socio Sanitaria </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos parasitosis/Encuesta Socio Sanitaria/Instructivo Encuesta Socio Sanitaria PIYE.pdf" type="application/pdf">Leer</a>
                    </div>
                </div>
                 <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DEA/formatos/Formatos parasitosis/Reporte Diario/Instructivo_Reporte_Diario_Laborat_PIYE (1).pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo Reporte diario</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DEA/formatos/Formatos parasitosis/Reporte Diario/Instructivo_Reporte_Diario_Laborat_PIYE (1).pdf" type="application/pdf">Leer</a>
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