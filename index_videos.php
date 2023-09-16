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
<body class="min-width-index">
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
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo index_nav();
    ?>

    <!-- ****************************************************** IMAGENES ************************************************ -->
    <section class="mb-5">
        <h2 id="DGSA_Constitucion" class="bold text-center my-4 col-12">Videos</h2>
        <div class="container-fluid m-0 mb-5 p-3 row gap-3 d-flex justify-content-center">
    
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold text-center mb-4"><i>Aedes Aegipty</i></h3>
                    <video src="assets/videos/Aedes Aegipty.mp4" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Aedes Aegipty</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        Esta especie es más tolerante de las bajas temperaturas y mantiene una amplia variedad de criaderos, tanto en recipientes artificiales como naturales inclusive e n ambientes silvestres.
                        <br><br>
                        El adulto se caracteriza por presentar un diseño de escamas plateadas, en cabeza y en dorso de tórax en forma de franja longitudinal.
                    </p>
                </div>
            </div>
            <div class="col-5 border p-4 d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold"><i>Plan: Picale adelante al Dengue</i></h3>
                    <p class="px-5 py-3 text-justify sangria">
                        - La inspección se iniciará por el patio en sentido contrario a las agujas del reloj; entrando y saliendo en todos los anexos y divisiones que se encuentren como: jardines, gallineros, etc., hasta regresar al punto de partida.
                        <br><br>
                        - Inspeccionar todos los depósitos que tengan o puedan contener agua.
                    </p>
                </div>
            </div>
            <div class="col-6 border p-4 d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold text-center mb-4"><i>Picale adelante al Dengue</i></h3>
                    <video src="assets/videos/Dengue.mp4" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>

            <div class="col-4 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Saneamiento Básico Ambiental</h3>
                    <video class="border-radius-15 w-100 box-shadow" muted autoplay loop>
                        <source src="assets/videos/SaneamientoBasico.mp4" >
                    </video>
                </div>
            </div>
            <!-- <div class="col-3  d-flex justify-content-center">
                <h3 id="DGSA_Constitucion" class="bold mb-4"><i>Plan: Picale adelante al Dengue</i></h3>
                <p class="px-5 py-3 text-justify sangria">
                    - La inspección se iniciará por el patio en sentido contrario a las agujas del reloj; entrando y saliendo en todos los anexos y divisiones que se encuentren como: jardines, gallineros, etc., hasta regresar al punto de partida.
                    <br><br>
                    - Inspeccionar todos los depósitos que tengan o puedan contener agua.
                </p>
            </div> -->
            
            
        </div>
    </section>


    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>
<?php
    include("php/subir_flecha.php");
?>
</html>