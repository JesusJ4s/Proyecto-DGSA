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

    <title>Ingeneria Sanitaria</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class=" min-width-index">
<div class="mb-5">
    

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
            Dirección Ingeneria Sanitaria
        </p>
    </div>
    
        <!-- **************************************************************** -->        
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4">
        <a href="dir_ing_sanit.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DIS_potable"><b>Formato Agua Potable</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DIS_residuales"><b>Formato Agua Residuales</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DIS_fichas"><b>Formato Fichas</b></a>
        </button>

        <button class="btn bg-barra btn-outline-primary mx-2" type="button">
            <a class="list-group-item list-group-item-action" href="#DIS_Piscina"><b>Formato Producto Piscina</b></a>
        </button>

    </div>
      
    <hr>

    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_potable" class="my-5 ms-5">Formato: Agua Potable</h1>
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
            <h1 id="DIS_residuales" class="my-5 ms-5">Formato: Aguas Residuales</h1>
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
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Aguas residuales/Prototipos Aguas Residuales.pdf">Leer</a>
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
    <hr>
    
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_fichas" class="my-5 ms-5">Formato: Fichas</h1>
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
    <hr>
        
    <section>
        <div class="container-fluid ps-4 mt-5">
            <h1 id="DIS_Piscina" class="my-5 ms-5">Formato: Productos de Piscina</h1>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DIS/formatos/Producto piscina/Productos Piscina.pdf" type="application/pdf" class="pdf_mini">
                        <h6 class="card-title">Formato Fichas Completas modificadas</h6>
                        <a target="_blank" id="lib_dcvfn" class="btn btn-outline-primary" href="assets/documentos/DIS/formatos/Producto piscina/Productos Piscina.pdf">Leer</a>
                    </div>
                </div>
            </div>     
        </div>
    </section>
  

    <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>

     <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
    </div>
</body>

<footer>
    <?php 
       
    ?>
</footer>
</html>