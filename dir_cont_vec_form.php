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

    <title>Control Vectores y Reserv. y Fauna Nociva</title>
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
<!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Control de vectores
        </p>
    </div>

    

    <!-- **************************************************************** -->
      <!-- Barra de navegación -->
      <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_cont_vec.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_historia"><b>Formato Historia Clínica para paciente con Enf. Chagas</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_envio"><b>Formato para Envio de muestras para Diagnóstico de Enfermedad de Chagas</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_material"><b>Formulario Material para reproducir Control de vectores</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_material2"><b>Formulario Material para reproducir Instrutivo</b></a>
        </button>
        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DCVFN_hylesia2"><b>Hylesia</b></a>
        </button>

    </div>  

<hr>
    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_historia" class="my-5 ms-5">Formato Historia Clínica para paciente con Enf. Chagas</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Instructivo de llenado de formato para historia clinica de paciente con diagnostico de Enfermedad de Chaga.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo para el llenado</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Instructivo de llenado de formato para historia clinica de paciente con diagnostico de Enfermedad de Chaga.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Formato para historia clinica de paciente con Diagnostico de Enfermedad de Chaga Dat Pacientes.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Historia Clínica</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Formato para historia clinica de paciente con Diagnostico de Enfermedad de Chaga Dat Pacientes.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Formato para historia clinica de paciente con Diagnostico de Enfermedad de Chaga RepLab.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Reporte de Laboratorio</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Formato Historia Clínica para paciente con Enf. Chagas/Formato para historia clinica de paciente con Diagnostico de Enfermedad de Chaga RepLab.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_envio" class="my-5 ms-5">Formato para Envio de muestras para Diagnóstico de Enfermedad de Chagas</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Formato para Envio de muestras para Diagnóstico de Enfermedad de Chagas/Formato para Serología Chagas definitivo PDF.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Envio de muestras Enfr. Chagas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Formato para Envio de muestras para Diagnóstico de Enfermedad de Chagas/Formato para Serología Chagas definitivo PDF.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<hr>
<section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_material" class="my-5 ms-5">Formulario Material para reproducir Control de vectores</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/INSTRUCTIVO 07-11.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 07-11</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/INSTRUCTIVO 07-11.pdf">Leer</a>
                    
                    </div>
                </div>
           
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 20-55.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 20-55</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 20-55.pdf">Leer</a>
                    </div>
                </div>
            
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 7.70.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 7-70</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 7.70.pdf">Leer</a>
                    </div>
                </div>
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 8-70.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 8-70</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo 8-70.pdf">Leer</a>
                    </div>
                </div>
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo F2-77.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo F2-77</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/Instructivos Control de Vectores/Instructivo F2-77.pdf">Leer</a>
                    </div>
                </div>
        
            </div>
        </div>
    </section>
 <hr>
<section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_material2" class="my-5 ms-5">Formulario Material para reproducir Instrutivo</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 06-08.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 06-08</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 06-08.pdf">Leer</a>
                    
                    </div>
                </div>
           
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 10-70.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 10-70</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 10-70.pdf">Leer</a>
                    </div>
                </div>
            
               
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 9-70.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 9-70</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo 9-70.pdf">Leer</a>
                    </div>
                </div>
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo modelo.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo  modelo.pdf">Leer</a>
                    </div>
                </div>
        
        
        
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual control murino.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo plan de trabajo anual control murino</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual control murino.pdf">Leer</a>
                    </div>
                </div>
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual nebulizacion.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo plan de trabajo anual nebulizacion</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual nebulizacion.pdf">Leer</a>
                    </div>
                </div>
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual tratamiento de criaderos.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo plan de trabajo anual tratamiento de criaderos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo anual tratamiento de criaderos.pdf">Leer</a>
                    </div>
                </div>
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo de nebulizacion.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo plan de trabajo de nebulizacion</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo plan de trabajo de nebulizacion.pdf">Leer</a>
                    </div>
                </div>
           
           
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo solictud de plaguicidas.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo solictud de plaguicida</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/formato Material para reproducir/INSTRUCTIVOS/Instructivo solictud de plaguicidas.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <hr>
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DCVFN_hylesia2" class="my-5 ms-5">Hylesia</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Hylesia formatos/Indicadores para la vigilancia y control de Hylesia metabus.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 07-11</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Hylesia formatos/Indicadores para la vigilancia y control de Hylesia metabus.pdf">Leer</a>
                    
                    </div>
                </div>
           
        
           
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DCVFN/Formatos/Hylesia formatos/Instructivo Programa de Vigilancia y Control de Hylesia metabus en los estados Sucre.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Instructivo 20-55</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DCVFN/Formatos/Hylesia formatos/Instructivo Programa de Vigilancia y Control de Hylesia metabus en los estados Sucre.pdf">Leer</a>
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