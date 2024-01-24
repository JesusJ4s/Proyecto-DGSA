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

    <title>Ingenieria Sanitaria</title>
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
        dir_ing_sanit_nav();
    
    ?>
    

    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row m-0 p-0">

        <!-- Primera sección -->
        <section class="col-8">
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0 w-75">

                <div id="carousel-info" class="carousel slide mt-3" data-bs-ride="carousel">

                    <!-- Contenedor de las imágenes en carrousel -->

                    <h2 class="display-5">Boletín</h2>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/informacion/DIS informa/Ingenieria-Sanitaria.jpg" alt="Ingenieria Sanitaria" class="d-block width-carousel-info">
                            <p class="display-5">
                              ¿Que es la <i>Ingeneria Sanitaria?</i>
                            </p>
                            <p class="px-3 text-justify sangria">
                                La ingeniería sanitaria es la rama de la ingeniería dedicada básicamente al saneamiento de los ámbitos en que se desarrolla la actividad humana. Se vale para ello de los conocimientos que se imparten en disciplinas como la hidráulica, la ingeniería química, la biología (particularmente la microbiología), la física, la matemática, la mecánica, electromagnetismo, la electromecánica, la Termodinámica, entre otras. Su campo se complementa y se comparte en los últimos años con las tareas que afronta la ingeniería ambiental, que extiende su actividad a los ambientes aéreos y edáficos.                                <a target="_blank" href="en_const.html" class="leer-mas">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DIS informa/importancia.jpg" alt="importancia" class="d-block width-carousel-info">
                            <p class="display-5">
                             importancia<i>de la Ingeneria Sanitaria</i>
                            </p>
                            <p class="px-3 text-justify sangria">
                                La ingeniería sanitaria, por su importancia, es considerada en muchos países como una carrera separada, en otros países es considerada una especialización de la ingeniería hidráulica. Se ocupa de diseñar, construir y operar:

                                Sistemas de abastecimiento de agua potable, en todos sus componentes, destinados a la captación, del agua desde ríos o lagos, relacionándose aquí con la ingeniería fluvial, hasta la distribución del agua potabilizada a los usuarios.
                                Sistemas de alcantarillado sanitario y plantas de tratamiento de aguas servidas, incluyendo las estructuras destinadas a la devolución del agua ya tratada adecuadamente al ambiente.
                                Sistemas de gestión integral de residuos sólidos.                                <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DIS informa/agua potable.jpg" alt="Agua potable" class="d-block width-carousel-info">
                            <p class="display-5">
                                El agua potable y <i> las enfermedades</i>
                            </p>
                            <p class="p-3 text-justify sangria">
                                El acceso al agua potable con garantías para la salud es un avance social de gran relevancia y es, posiblemente, el ejemplo más característico de la importancia de la ingeniería sanitaria. El agua como recurso, su abastecimiento a toda la población y la garantía de calidad permite que la población en su conjunto no padezca una serie de enfermedades, conocidas como enfermedades de origen hídrico (disentería o fiebres tifoideas).                                 <br>
                                <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                            </p>
                        </div>
                    </div>

                <!-- Botones para cambiar imágenes (altura normal) -->
                    <button class="carousel-control-prev" data-bs-target="#carousel-info" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" data-bs-target="#carousel-info" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </section>


        <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Agua potable</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/informacion/DIS informa/agua potable2.png" alt="Programa Chagas" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">enfermedades</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/informacion/DIS informa/enfermedades21.webp" alt="Programa Esquistosomosis" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Agua residuales</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/informacion/DIS informa/agua residuales.jpg" alt="Programa Malaria" class="w-50 border-radius-15">
                </a>
            </div>
            <!-- AQUÍ DEBO USAR PHP-->
            <!-- <div class="text-center mt-4">
                <form action="">
                    <input id="Buscar" class="btn btn-outline-primary " type="text" placeholder="Buscar..." required>
                    <br>
                    <input class="btn bg-azul-claro-cromatico5 mt-2" type="submit" placeholder="Buscar">
                </form>
            </div> -->
        </aside>

    </main>   

</body>


<?php
    include("php/index_foot.php");
    include("php/subir_flecha.php");
?>

</footer>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bottom.js"></script>
</html>