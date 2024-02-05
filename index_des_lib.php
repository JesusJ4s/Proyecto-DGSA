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

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-center bg-barra py-4" id="barraDescargas">
        <?php
            include("php/abrir_conexion.php");

            $BarraGaleria = mysqli_query($conexion, "SELECT * FROM $tabla_db14 gl INNER JOIN $tabla_db16 gg ON gl.id_galeria_grupo = gg.id_grupo WHERE visible = '1' AND id_galeria_direccion = '1' AND id_galeria_tipo = '3'");
            $grupo_actual = ""; // Variable para almacenar el grupo actual

            while ($consulta = mysqli_fetch_array($BarraGaleria)) {
            $id_barra_grupo = $consulta['id_galeria_grupo'];

            // Verificar si el grupo actual es diferente al nuevo grupo
            if ($id_barra_grupo != $grupo_actual) {
                $grupo_actual = $id_barra_grupo;
                echo "
                    <button class='btn bg-barra btn-outline-primary mx-2' type='button'>
                        <a class='list-group-item list-group-item-action' href='#".$consulta["id_galeria_grupo"]."'><b>".$consulta["nombre_grupo_galeria"]."</b></a>
                    </button>
                ";
            }
            // Imprimir el contenido de cada registro
            echo '
                    
                ';
            }
        ?>

    </div>
    

    <!-- **************************************************************************************************************** -->
    <!-- PDF -->
    <section class="d-flex justify-content-center">
        
        <div class="mt-5 w-85">
            <!-- Galeria Normal -->

            <div class="mb-5">           
                <div class="row d-flex justify-content-center" id="galeria_documentos">

                </div>
            </div>
        </div>
    </section>

</body>
<?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>

<!-- JS en Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bottom.js"></script>
<script src="js/galeria_dgsa.js"></script>


</html>