<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
                Dirección Ingeneria Sanitaria
            </p>
        </div>
    
        <!-- **************************************************************** -->
        <!-- Barra de navegación -->
        <nav class="ms-4 me-4">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
        <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_potable">Formato Agua Potable</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_residuales">Forrmato Agua Residuales</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_fichas">Formato Fichas</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Piscina">Formato Producto Piscina</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_ing_sanit.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
            </div>
        </nav>
        
       
      
    <hr>

    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_potable" class="my-5 ms-5">Formato Agua Potable</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Agua potables/Equipos de Agua Potable.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Equipos de Agua Potable</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Agua potables/Equipos de Agua Potable.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Agua potables/Laboratorio Agua Potable.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Laboratorio</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Agua potables/Laboratorio Agua Potable.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Agua potables/Producto Agua Potable.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Producto</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Agua potables/Producto Agua Potable.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_residuales" class="my-5 ms-5">Forrmato Agua Residuales</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Aguas residuales/Importacion de aguas residuales.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Importancia</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Aguas residuales/Importacion de aguas residuales.pdf">Leer</a>
                    </div>
                </div>
            
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Aguas residuales/Prototipos Aguas Residuales.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Prototipos</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Aguas residuales/Prototipos Aguas Residuales.pdf Agua Potable.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Aguas residuales/Sala Sanitaria Aguas Residuales.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Sala Sanitaria </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Aguas residuales/Sala Sanitaria Aguas Residuales.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Aguas residuales/Reuso Aguas Residuales.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Reuso</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Aguas residuales/Reuso Aguas Residuales.pdf">Leer</a>
                    </div>
                </div>
            </div>

        </div>
     </section>
    
     <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_fichas" class="my-5 ms-5">Formato Fichas</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/fichas/fichas completas adecuadas para PWEB_ModifEnpt.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Fichas modificadas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/fichas/fichas completas adecuadas para PWEB_ModifEnpt.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/fichas/fichas completas adecuadas para PWEB.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Fichas Completa </h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/fichas/fichas completas adecuadas para PWEB.pdf">Leer</a>
                    </div>
                </div>
            </div>     
        </div>
        </section>
        
        <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 class="my-5 ms-5">Formato Producto Piscina</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Product piscina/Productos Piscina.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Fichas Completas modificadas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/fichas/fichas completas adecuadas para PWEB_ModifEnpt.pdf">Leer</a>
                    </div>
                </div>
            </div>     
        </div>
        </section>
        <section>
            <div class="container-fluid ps-4 mt-5">
                <h1 id="DIS_Piscina" class="my-5 ms-5">Formato Producto Piscina</h1>
                <div class="text-center">
                    <div class="card bg-light wh-doc mx-2 d-inline-block">
                        <div class="card-body border-css">
                            <embed src="assets/documentos/DIS/formatos/tramites/tramites.pdf" type="application/pdf" class="pdf_mini">
                            <h6 class="card-title">Formato Fichas Completas modificadas</h6>
                            <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/tramites/tramites.pdf">Leer</a>
                        </div>
                    </div>
                </div>     
            </div>
            </section>
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