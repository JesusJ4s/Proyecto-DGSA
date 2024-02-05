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
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo index_nav();
   
    ?>


    <!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Leyes
        </p>
    </div>

    <hr>

    <!-- MUCHO TEXTO -->

    <section>
        <div class="container-fluid m-0 mb-5 p-3 row text-center gap-3">
            <h2 id="DGSA_Constitucion" class="bold text-center mb-4 col-12">Constitución de la República Bolivariana de Venezuela, 1999</h2>
    
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo V - Artículo 82.</h3>
                <p class="px-5 py-3 text-justify sangria">
                <u>Toda persona tiene derecho a una vivienda adecuada, segura, cómoda, higiénicas, con servicios básicos esenciales que incluyan un hábitat que humanice las relaciones familiares, vecinales y comunitarias</u>. La satisfacción progresiva de este derecho es obligación compartida entre los ciudadanos y ciudadanas y el Estado en todos sus ámbitos. 
                <br>El Estado dará prioridad a las familias y garantizará los medios para que éstas, y especialmente las de escasos recursos, puedan acceder a las políticas sociales y al crédito para la construcción, adquisición o ampliación de viviendas.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo V - Artículo 83.</h3>
                <p class="px-5 py-3 text-justify sangria">
                    <u>La salud es un derecho social fundamental</u>, obligación del Estado, que lo garantirzará como parte del derecho a la vida. El Estado promoverá y desarrollará políticas orientadas a elevar la calidad de vida, el bienestar colectivo y el acceso a los servicios. Todas las personas tienen derecho a la protección de la salud, así como el deber de participar activamente en su promoción y defensa, y el de cumplir con las <u>medidas sanitarias y de saneamiento</u> que establezca la ley, de conformidad con los tratados y convenios internacionales suscritos y ratificados por la República.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo VI - Artículo 107</h3>
                <p class="px-5 py-3 text-justify sangria">
                <u>La educación ambiental es obligatoria en los niveles y modalidades</u> del sistema educativo, así como también en la educación ciudadana no formal. Es de obligatorio cumplimiento en las instituciones públicas y privadas, hasta el ciclo diversificado, la enseñanza de la lengua castellana, la historia y la geografía de Venezuela, así como los principios del ideario bolivariano.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo VIII - Artículo 122</h3>
                <p class="px-5 py-3 text-justify sangria">
                    <u>Los pueblos indígenas tienen derecho a una salud integral</u> que considere sus prácticas y culturas. El Estado reconocerá su medicina tradicional y las terapias complementarias, con su sujeción a principios bioéticos.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo IX - Artículo 127.</h3>
                <p class="px-5 py-3 text-justify sangria">
                Es un derecho y un deber de cada generación proteger y mantener el ambiente en beneficio de sí misma y del mundo futuro. Toda persona tiene derecho individual y colectivamente a <u>disfrutar de una vida y de un ambiente seguro, sano y ecológicamente equilibrado</u>. El Estado protegerá el ambiente, la diversidad biológica, los recursos genéticos, los procesos ecológicos, los parques nacionales y monumentos naturales y demás áreas de especial importancia ecológica. El genoma de los seres vivos no podrá ser patentado, y la ley que se refiera a los principios bioéticos regulará la materia.
                <br>Es una obligación fundamental del <u>Estado, con la activa participación de la sociedad, garantizar que la población se desenvuelva en un ambiente libre de contaminación, en donde el aire, el agua, los suelos</u>, las costas, el clima, la capa de ozono, las especies vivas, sean especialmente protegidos, de conformidad con la ley.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo IX - Artículo 128</h3>
                <p class="px-5 py-3 text-justify sangria">
                El Estado desarrollará una política de ordenación del territorio atendiendo a las realidades ecológicas, geográficas, poblacionales, sociales, culturales, económicas, políticas, de acuerdo <u>con las premisas del desarrollo sustentable</u>, que incluya la información, consulta y participación ciudadana. Una ley orgánica desarrollará los principios y criterios para este ordenamiento.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo II - Artículo 156</h3>
                <p class="px-5 py-3 text-justify sangria">
                Es de la competencia del Poder Público Nacional:...<br>
                <br>
                23. Las políticas nacionales y la legislación en materia de <u>sanidad, vivienda,</u> seguridad alimentaria, <u>ambiente, aguas,</u> turismo, ordenación del territorio y naviera.<br>
                24.La políticas y los servicios nacionales de educación y <u>salud</u>.
                </p>
            </div>
            <div class="col-3 card card-body">
                <h3 id="DGSA_Constitucion" class="bold text-center mb-4">Capítulo IV - Artículo 178</h3>
                <p class="px-5 py-3 text-justify sangria">
                Son de la <u>competencia del Municipio</u> el gobierno y administración de sus intereses y la gestión de las materias que le asigne esta Constitución y las leyes nacionales, en cuanto concierne a la vida local, en especial la ordenación y promoción del desarrollo económico y social, la dotación y prestación de los servicios públicos domiciliarios, la aplicación de la política referente a la materia inquilinaria con criterios de equidad, justicia y contenido de interés social, de conformidad con la delegación prevista en la ley que rige la materia, la promoción de la participación, y <u>el mejoramiento, en general, de las condiciones de vida de la comunidad</u>, en las siguientes áreas:<br>
                .....<br>
                4.-<u>Protección del ambiente y cooperación con el saneamiento ambiental</u>; aseo urbano y domiciliario, comprendidos los servicios de limpieza, de recolección y tratamiento de residuos y protección civil.<br>

                5.-<u>Salubridad y atención primaria en salud</u>, servicios de protección a la primera y segunda infancia, a la adolescencia y a la tercera edad; educación preescolar, servicios de integración familiar de la persona con discapacidad al desarrollo comunitario, actividades e instalaciones culturales y deportivas; servicios de prevención y protección, vigilancia y control de los bienes y las actividades relativas a las materias de la competencia municipal.<br>
                .....
                </p>
            </div>
            
        </div>
    </section>

    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    
    <section class="mb-5">
        <div class="container-fluid ps-4 mt-5">
            <h1 class="my-5 ms-5 text-center">Constitución de la República Bolivariana de Venezuela</h2>
            <div class="text-center">
                <div class="card bg-light wh-doc mx-2 d-inline-block">
                    <div class="card-body border-css">
                        <embed src="assets/documentos/DGSA/leyes/Constitucion.pdf#toolbar=0" type="application/pdf" class="pdf_mini">
                        <h4 class="card-title">Constitución</h4>
                        <a target="_blank" id="lib_dgsa" class="btn btn-outline-primary" href="assets/documentos/DGSA/leyes/Constitucion.pdf">Leer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>
</body>

<?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bottom.js"></script>
</html>