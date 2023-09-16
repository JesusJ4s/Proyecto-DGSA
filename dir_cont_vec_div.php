<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Control Vectores y Reserv. y Fauna Nociva</title>
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
            Dirección Control de vectores
        </p>
    </div>

    <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
                <ul class="list-group list-group-horizontal">
                    <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DCVFN_circulares">Division</a>
                    <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_cont_vec.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
                </ul>
            </div>
        </nav>

   
<!-- ******************************************************************************* -->
<!-- CONTENIDO -->
    <section>
        <!-- <div class="container-lg mb-5 p-0 w-95 text-center">
            <h2 id="DCVFN_Estructura" class="bold text-center mb-5"><u>Estructura Organizativa</u></h2>
            <img src="assets/documentos/DCVFN/organigrama/Divisiones.png" alt="Estructura Organizativa" class="images">
        </div> -->
    </section>
    <section>
        <div class="container-lg mb-5 p-0 w-95 text-center">
            <h2 id="DCVFN_Divisiones" class="bold text-start mb-5"><u>Estructura Administrativa</u></h2>
            <img src="assets/documentos/DCVFN/organigrama/Estrctura Administrativa.jpg" alt="Estructura Adiministrativa" class="images-lg">
        </div>
    </section>


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