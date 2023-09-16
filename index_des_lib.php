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
    <title>Dirección General de Salud Ambiental</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class=" min-width-index">
    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag">
        <?php
        include('php/logos.php')
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
            Biblioteca
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <nav class="ms-5 me-5">
        <?php
            include("php/index_nav.php");
            echo index_nav();
        ?>
    </nav>

    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    
    <section class="my-5">
        <div class="container-fluid ps-4 mt-5">
            <h1 class="my-5 ms-5">Libros</h2>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DGSA/plan de la patria/Plan de la Patria 2019-2025 GOE-6.446.pdf" type="application/pdf" class="pdf_mini">
                        <h4 class="card-title">Plan de la Patria 2019-2025</h4>
                        <a target="_blank" id="lib_dgsa" class="btn btn-outline-primary" href="assets/documentos/DGSA/plan de la patria/Plan de la Patria 2019-2025 GOE-6.446.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DGSA/libros/Libros en general/bajo-las-alas-del-condor.pdf" type="application/pdf" class="pdf_mini">
                        <h4 class="card-title">Bajo las Alas del Cóndor</h4>
                        <a target="_blank" id="lib_dgsa" class="btn btn-outline-primary" href="assets/documentos/DGSA/libros/Libros en general/bajo-las-alas-del-condor.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DGSA/libros/libros del esequibo/Nuestro-Esequibo.pdf" type="application/pdf" class="pdf_mini">
                        <h4 class="card-title">Venezuela - Nuestro Esequibo</h4>
                        <a target="_blank" id="lib_dgsa" class="btn btn-outline-primary" href="assets/documentos/DGSA/libros/libros del esequibo/Nuestro-Esequibo.pdf">Leer</a>
                    </div>
                </div>
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DGSA/libros/libros del esequibo/La_Verdad_del_Esequibo.pdf" type="application/pdf" class="pdf_mini">
                        <h4 class="card-title">La verdad del Ezequibo</h4>
                        <a target="_blank" id="lib_dgsa" class="btn btn-outline-primary" href="assets/documentos/DGSA/libros/libros del esequibo/La_Verdad_del_Esequibo.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>
</body>
    <?php
        include("php/subir_flecha.php");
    ?>

<!-- JS en Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bottom.js"></script>
</html>