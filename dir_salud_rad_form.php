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
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_usuario">Procedimiento usuario de Certificacion e Importancia,  ambiente y permiso</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_recaudos">Recaudos y procedimiento de autorizaciones</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_requisitos">Requisitos Dosimetria</a>
            
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_requisitos2">Requisitos Protección radiológica</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_salud_rad.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a> 
        </div>
        </nav>
   
<hr>
    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <form action="../../form-result.php" method="post" target="_blank">


   <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_usuario" class="my-5 ms-5">Procedimiento usuario de Certificacion e Importancia,  ambiente y permiso  </h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimiento Solicitud Certificaciones.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimiento Solicitud Certificaciones</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimiento Solicitud Certificaciones.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimiento Solicitud Conformidad de Importacion.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimiento Solicitud Conformidad de Importaciono</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimiento Solicitud Conformidad de Importacion.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimientos De Los Usuarios Para Otorgamiento De Licencias.PDF" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimientos De Los Usuarios Para Otorgamiento De Licencias</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Procedimientos usuarios de certficacion e importacion,  ambiente y permiso/PDF/Procedimientos De Los Usuarios Para Otorgamiento De Licencias.PDF">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_recaudos" class="my-5 ms-5">Recaudos y procedimiento de autorizaciones</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento certificación de equipos.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimiento certificación de equipos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento certificación de equipos.pdf">Leer</a>
                    </div>
                </div>
            
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento para licencia de Empresas de servicio al sector salud.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimiento para licencia de Empresas de servicio al sector salud</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento para licencia de Empresas de servicio al sector salud.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento Solicitud Conformidad de Importacion.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimiento Solicitud Conformidad de Importacion </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimiento Solicitud Conformidad de Importacion.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimientos De Los Usuarios Para Otorgamiento De Licencias.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Procedimientos De Los Usuarios Para Otorgamiento De Licencias</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Procedimientos De Los Usuarios Para Otorgamiento De Licencias.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Recaudos servicio de mantenimiento.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Recaudos servicio de mantenimiento</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Recaudos y procedimiento de autorizaciones/PDF/Recaudos servicio de mantenimiento.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
     </section>
    
     <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_requisitos" class="my-5 ms-5">Requisitos Dosimetria</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Dosimetria/planillas de Inicializacion y Actualizacion/PDF/planilla actualizacion.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Planilla actualizacion</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Dosimetria/planillas de Inicializacion y Actualizacion/PDF/planilla actualizacion.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Dosimetria/planillas de Inicializacion y Actualizacion/PDF/Planilla Inicialización.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Planilla Inicialización </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Dosimetria/planillas de Inicializacion y Actualizacion/PDF/Planilla Inicialización.pdf">Leer</a>
                    </div>
                </div>
            </div>     
        </div>
        </section>
        
        <section>
      <div class="container-fluid ps-4 mt-5">
            <h1 id="DSR_requisitos2" class="my-5 ms-5">Requisitos Protección radiológica</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Conformidad de Ambientes.pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Conformidad de Ambientes</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Conformidad de Ambientes.pdf">Leer</a>
                    </div>
                </div>
                
        
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Conformidad de Importación.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Conformidad de Importación </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Conformidad de Ambientes.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Equipos Rayos X.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Requisitos Equipos Rayos X </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Equipos Rayos X.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Permiso Medicina Nuclear.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Requisitos Permiso Medicina Nuclear.</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Permiso Medicina Nuclear.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Permiso Radioterapia.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Requisitos Permiso Radioterapia</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/Requisitos Permiso Radioterapia.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/RIMFRI 2013.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Registro de Inst. Medicas que utilizan fuentes de Rad.Ionizantes</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/RIMFRI 2013.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/RIMFRI ACTUALIZADO.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Registro de Instituciones Medicas que utilizan fuentes de Radiaciones Ionizantes Actualizada </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DSR/formatos/Requisitos Protección radiológica/PDF/RIMFRI ACTUALIZADO.pdf">Leer</a>
                    </div>
                </div>
            </div>
       </div>
        </section>
            
            </main>
             <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>
</footer>

            <!-- JS en Bootstrap -->
           <script src="js/bootstrap.bundle.min.js"></script>
           <script src="js/bottom.js"></script>
    <hr>
        </body>
       
<footer>
    <?php 
       
    ?>
</footer>
    </html>