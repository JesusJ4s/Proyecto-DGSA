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
            <a class="list-group-item list-group-item-action" href="#DCVFN_Divisiones"><b>Division</b></a>
        </button>

    </div>
    <!-- ******************************************************************************* -->
    <!-- CONTENIDO -->
    <section>
        <div class="container-lg mb-5 p-0 w-95 text-center">
            <h2 id="DCVFN_Divisiones" class="bold text-start mb-5"><u>Estructura Administrativa</u></h2>
            <img src="assets/documentos/DCVFN/organigrama/Estrctura Administrativa.jpg" alt="Estructura Adiministrativa" class="images-lg">
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