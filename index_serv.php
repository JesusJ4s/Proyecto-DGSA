<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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

    <hr>

    <!-- IMAGEN SERVICIOS -->
    <!-- <section >
        <div class="container-fluid px-0 mx-0">
            <h2 id="DGSA_Servicios" class="bold text-center mb-4"><u>Servicios</u></h2>
            <div class="text-center my-4">
                <img src="assets/documentos/DGSA/servicios/Servicios.jpg" alt="Servicios" class="images-md">
            </div>
        </div>
    </section>
    <hr> -->
    <!-- TRAMITES ADMINISTRATIVOS TABLA -->
    <section class="my-3">
        <div class="container-fluid mb-5 p-0 w-95">
            <h2 id="DGSA_Tramites" class="bold text-center mb-4"><u>Trámites Administrativos</u></h2>
            <br>
            <div class="row">
                <ul class="list-group list-group-un col-6">
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Autorización Sanitaria para el Reúso de Aguas Residuales Tratadas.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de la Autorización Sanitaria para nuevos prototipos de sistemas de Tratamiento de Aguas Residuales.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud del Registro para el Funcionamiento de Salas Sanitarias Instaladas en Unidades de Transporte Terrestre.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de la Autorización y Renovación Sanitaria  para la Importación y Uso, de Productos para el Tratamiento de las aguas Residuales y Efluentes.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Aprobación de materiales utilizados para la construcción, reparación, reforma y mantenimiento de Edificaciones y Urbanismos.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de aprobación del diseño y uso de equipos, de  instalaciones y piezas sanitarias.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Conformidad Sanitaria para Importación y/o Uso de Productos y Equipos para el Tratamiento de las Aguas de Piscinas.    
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Autorización Sanitaria para la Venta de Productos de Aseo, Desinfección, Mantenimiento y Ambientadores de Uso Doméstico e Industrial
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de  Renovación de la Autorización Sanitaria para la Venta de Productos de Aseo, Desinfección, Mantenimiento y Ambientadores de Uso Doméstico e Industrial.   
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de ampliación y modificación de los datos del Registro Sanitario de Productos de Aseo, Desinfección, Mantenimiento y Ambientadores de Uso Doméstico e Industrial.   
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Permiso para Importar o Exportar formulaciones, ingredientes activos, muestras de productos sin fines comerciales, y/o Certificado de Libre Venta de productos de Aseo, Desinfección, Mantenimiento y Ambientadores de Uso Doméstico e Industrial.  
                    </li>
                </ul>
                <ul class="list-group col-6">
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Conformidad Sanitaria para la Importación de Materia Activa de Plaguicidas.  
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de conformidad sanitaria para la importación de estándares analíticos de plaguicidas.  
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de conformidad sanitaria para la importación de plaguicidas como Producto  Formulado (USO AGRICOLA, VETERINARIO, SALUD PUBLICA, INDUSTRIAL Y DOMESTICO).   
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Autorización  para la Ejecución de Procesos de Remoción de Asbestos y Materiales de Asbestos. 
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Permiso para Importación de Asbestos.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de permiso para la Importación de  Mercurio o Cianuro.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Conformidad Sanitaria para Importación y/o Uso de  Productos  para el Tratamiento de Aguas de Consumo Humano.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Conformidad Sanitaria de Equipos y sistemas para el Tratamiento de Aguas de Consumo Humano.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Conformidad Sanitaria de Laboratorios de Agua Potable en Sistemas de Abastecimiento.
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de Autorización de equipos y tecnologías para el manejo de los residuos y desechos sólidos.  
                    </li>
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de la Conformidad Sanitaria para equipos utilizados para el manejo de desechos generados en establecimientos de salud.
                    </li>
                </ul>
                <div class="col-3"></div> 
                <ul class="list-group col-6 mt-2">
                    <li class="list-group-item border-primary text-justify h-listas-serv">
                        -   Solicitud de la Conformidad Sanitaria para bolsas utilizadas para el manejo de desechos generados en establecimientos de salud. 
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>

</body>
<a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>

</html>