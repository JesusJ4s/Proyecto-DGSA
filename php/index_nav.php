<?php
function index_nav(){
    echo 
    '
    <nav class="container-fluid p-0 w-95">
        <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="index.php"><img src="assets/icon/botones/inicio2.png" class="w-50x50"></a>
            
            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Inicio</b></button>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" target="" href="about.php">Quienes Somos</a></li>
                <li><a class="dropdown-item" target="" href="index_instru_legales.php">Instrumentos Legales</a></li>
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Direcciones de Línea</b>
            </button>
            <ul class="dropdown-menu ps-1 pe-0">

                <li class="nav-item ms-3 my-2">
                    <a target="_blank" class="nav-link" href="dir_epid_amb.php" aria-expanded="false">
                    Dirección Epidemiología Ambiental</a>
                </li>
                
                <li class="nav-item ms-3 my-2">
                    <a target="_blank" class="nav-link" href="dir_cont_vec.php" >
                    Dirección Control de Vectores, Reserv. y Fauna Nociva</a>
                </li>

                <li class="nav-item ms-3 my-2">
                    <a target="_blank" class="nav-link" href="dir_ing_sanit.php">
                    Dirección Ingeniería Sanitaria</a>
                </li>

                <li class="nav-item ms-3 my-2">
                    <a target="_blank" class="nav-link" href="dir_salud_rad.php" >
                    Dirección Salud Radiológica</a>
                </li>
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="index_galery.php">Imagenes</a></li>
                <li><a class="dropdown-item" target="" href="index_videos.php">Videos</a></li>
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/descargar.png" class="iconos_nav">
            <b>Descargas</b></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="index_des_lib.php">Libros</a></li>
            </ul>

            <a class="fs-6  btn bg-info px-4" href="index_ubi.php">
            <img src="assets/icon/botones/ubicacion.png" class="iconos_nav">
            <b>Ubicación</b></a>
            
        </div>
    </nav>
        ';
}
function dir_epid_amb_nav(){
    echo
    '
        <nav class="container-fluid p-0 w-95">
            <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="index.php"><img src="assets/icon/botones/inicio2.png" class="w-50x50"></a>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Inicio</b>
            </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Quienes somos</a></li>
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Vision</a></li>
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Mision</a></li>
                </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_div.php">Divisiones</a></li>
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                    include("php/abrir_conexion.php");

                    $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 5 AND instrumento_visible = 1 ORDER BY id_instrumento_tipo");
                    $tipo_actual = ""; // Variable para almacenar el tipo actual

                    while ($consulta = mysqli_fetch_array($TiposInstr)) {
                        $id_instru_tipo = $consulta['id_instrumento_tipo'];

                        // Verificar si el tipo actual es diferente al nuevo tipo
                        if ($id_instru_tipo != $tipo_actual) {
                            $tipo_actual = $id_instru_tipo;
                            // Imprimir el contenido de cada registro
                            $tiposBD = '

                            <li>
                                <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                            </li>
                                
                            ';
                            echo $tiposBD;
                        }

                    }

                echo '  
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                    include("php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 5  AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDEA(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo '    
                    
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/descargar.png" class="iconos_nav">
            <b>Descargas</b></button>
            <ul class="dropdown-menu">
                    ';
                    include("php/abrir_conexion.php");

                    $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 5 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                    $tipo_actual = ""; // Variable para almacenar el tipo actual

                    while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                        $id_grupoGaleria = $consulta['id_galeria_grupo'];

                        // Verificar si el tipo actual es diferente al nuevo tipo
                        if ($id_grupoGaleria != $tipo_actual) {
                            $tipo_actual = $id_grupoGaleria;
                            // Imprimir el contenido de cada registro
                            $tiposBD = '

                            <li>
                                <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">

                                <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">

                                <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                            </li>
                                
                            ';
                            echo $tiposBD;
                        }

                    }

                echo '  
            </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_galery.php">Fotos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_videos.php">Videos</a></li>

                </ul>                
                </div>
        </nav>
    ';
}
function dir_epid_amb_nav2(){
    echo
    '
        <nav class="container-fluid p-0 w-95">
            <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="dir_epid_amb.php"><img src="assets/icon/botones/inicio2.png" class="w-50x50"></a>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Inicio</b>
            </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Quienes somos</a></li>
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Vision</a></li>
                  <li><a class="dropdown-item" target="" href="dir_epid_amb_about.php">Mision</a></li>
                </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_div.php">Divisiones</a></li>
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">
                        ';
                        include("php/abrir_conexion.php");

                        $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 5 AND instrumento_visible = 1 ORDER BY id_instrumento_tipo");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual

                        while ($consulta = mysqli_fetch_array($TiposInstr)) {
                            $id_instru_tipo = $consulta['id_instrumento_tipo'];

                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_instru_tipo != $tipo_actual) {
                                $tipo_actual = $id_instru_tipo;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '

                                <li>
                                    <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                    <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                    <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }

                        }

                    echo ' 
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                    include("php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 5 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDEA(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo '    
                    
                </ul>
                <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
                <img src="assets/icon/botones/descargar.png" class="iconos_nav">
                <b>Descargas</b></button>
                <ul class="dropdown-menu">
                        ';
                        include("php/abrir_conexion.php");
    
                        $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 5 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual
    
                        while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                            $id_grupoGaleria = $consulta['id_galeria_grupo'];
    
                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_grupoGaleria != $tipo_actual) {
                                $tipo_actual = $id_grupoGaleria;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '
    
                                <li>
                                    <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">
    
                                    <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">
    
                                    <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }
    
                        }
    
                    echo '  
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_galery.php">Fotos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_epid_amb_videos.php">Videos</a></li>

                </ul>                
                </div>
        </nav>
    ';
}
function dir_cont_vec_nav(){
    echo
    '
    <nav class="ms-5 me-5">
        <div class="container-fluid p-3 mb-4  bg-info box-shadow-nav text-center border-radius-15">

        <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>
            
        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown"><b>Inicio</b></button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Quienes Somos</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Mision</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Visión</a></li>
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/division.png" class="iconos_nav">
        <b>Coordinaciones</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_div.php">Divisiones</a></li>
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
        <b>Instrumentos Legales</b>
        </button>
        <ul class="dropdown-menu">
                ';
                    include("php/abrir_conexion.php");

                    $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 4 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                    $tipo_actual = ""; // Variable para almacenar el tipo actual

                    while ($consulta = mysqli_fetch_array($TiposInstr)) {
                        $id_instru_tipo = $consulta['id_instrumento_tipo'];

                        // Verificar si el tipo actual es diferente al nuevo tipo
                        if ($id_instru_tipo != $tipo_actual) {
                            $tipo_actual = $id_instru_tipo;
                            // Imprimir el contenido de cada registro
                            $tiposBD = '

                            <li>
                                <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                            </li>
                                
                            ';
                            echo $tiposBD;
                        }

                    }

                echo '
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/periodico.png" class="iconos_nav">
        <b>Temas de Interés</b>
        </button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 4 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                while ($consulta = mysqli_fetch_array($Boletines)) {
                    // Imprimir el contenido de cada registro
                    $boletinesBD = '

                    <li>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                    <button type="button" class="dropdown-item"onclick="verBoletinDCV(this);">'.$consulta['titulo_boletin'].'</button>
                    </li>
                        
                    ';
                    echo $boletinesBD;
                }

            echo ' 
        </ul>
        <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/descargar.png" class="iconos_nav">
        <b>Descargas</b></button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 4 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                $tipo_actual = ""; // Variable para almacenar el tipo actual

                while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                    $id_grupoGaleria = $consulta['id_galeria_grupo'];

                    // Verificar si el tipo actual es diferente al nuevo tipo
                    if ($id_grupoGaleria != $tipo_actual) {
                        $tipo_actual = $id_grupoGaleria;
                        // Imprimir el contenido de cada registro
                        $tiposBD = '

                        <li>
                            <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">

                            <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">

                            <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                        </li>
                            
                        ';
                        echo $tiposBD;
                    }

                }

            echo '  
        </ul>
        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/galeria.png" class="iconos_nav">
        <b>Galería</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_galery.php">Fotos</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_videos.php">Videos</a></li>
        </ul>

    </div>
    </nav>
    
    ';
}
function dir_cont_vec_nav2(){
    echo
    '
    <nav class="ms-5 me-5">
        <div class="container-fluid p-3 mb-4  bg-info box-shadow-nav text-center border-radius-15">

        <a href="dir_cont_vec.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>
            
        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown"><b>Inicio</b></button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Quienes Somos</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Mision</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_about.php">Visión</a></li>
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/division.png" class="iconos_nav">
        <b>Coordinaciones</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_div.php">Divisiones</a></li>
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
        <b>Instrumentos Legales</b>
        </button>
        <ul class="dropdown-menu">
                ';
                    include("php/abrir_conexion.php");

                    $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 4 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                    $tipo_actual = ""; // Variable para almacenar el tipo actual

                    while ($consulta = mysqli_fetch_array($TiposInstr)) {
                        $id_instru_tipo = $consulta['id_instrumento_tipo'];

                        // Verificar si el tipo actual es diferente al nuevo tipo
                        if ($id_instru_tipo != $tipo_actual) {
                            $tipo_actual = $id_instru_tipo;
                            // Imprimir el contenido de cada registro
                            $tiposBD = '

                            <li>
                                <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                            </li>
                                
                            ';
                            echo $tiposBD;
                        }

                    }

                echo '
        </ul>

        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/periodico.png" class="iconos_nav">
        <b>Temas de Interés</b>
        </button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 4 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                while ($consulta = mysqli_fetch_array($Boletines)) {
                    // Imprimir el contenido de cada registro
                    $boletinesBD = '

                    <li>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                    <button type="button" class="dropdown-item"onclick="verBoletinDCV(this);">'.$consulta['titulo_boletin'].'</button>
                    </li>
                        
                    ';
                    echo $boletinesBD;
                }

            echo ' 
        </ul>
        <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/descargar.png" class="iconos_nav">
        <b>Descargas</b></button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 4 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                $tipo_actual = ""; // Variable para almacenar el tipo actual

                while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                    $id_grupoGaleria = $consulta['id_galeria_grupo'];

                    // Verificar si el tipo actual es diferente al nuevo tipo
                    if ($id_grupoGaleria != $tipo_actual) {
                        $tipo_actual = $id_grupoGaleria;
                        // Imprimir el contenido de cada registro
                        $tiposBD = '

                        <li>
                            <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">

                            <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">

                            <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                        </li>
                            
                        ';
                        echo $tiposBD;
                    }

                }

            echo '  
        </ul>
        <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/galeria.png" class="iconos_nav">
        <b>Galería</b>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="" href="dir_cont_vec_galery.php">Fotos</a></li>
            <li><a class="dropdown-item" target="" href="dir_cont_vec_videos.php">Videos</a></li>
        </ul>

    </div>
    </nav>
    
    ';
}
function dir_ing_sanit_nav(){
    echo
    '
    <nav class="container-fluid p-0 w-95">
        <div class="container-fluid p-3 my-4 box-shadow-nav text-center  bg-info border-radius-15">

            <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>

            <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown"><alt="DGSA">
            <b>Inicio</b>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Quienes Somos</a>
                </li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Mision</a>
                </li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Vision</a>
                </li>
            </ul>

            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_ing_sanit_div.php">Divisiones</a></li>
                </ul>

            <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                        include("php/abrir_conexion.php");

                        $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 2 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual

                        while ($consulta = mysqli_fetch_array($TiposInstr)) {
                            $id_instru_tipo = $consulta['id_instrumento_tipo'];

                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_instru_tipo != $tipo_actual) {
                                $tipo_actual = $id_instru_tipo;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '

                                <li>
                                    <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                    <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                    <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }

                        }

                    echo '
                </ul>

            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
            <ul class="dropdown-menu">
                    ';
                    include("./php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 2 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDIS(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo ' 
            </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/descargar.png" class="iconos_nav">
        <b>Descargas</b></button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 2 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                $tipo_actual = ""; // Variable para almacenar el tipo actual

                while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                    $id_grupoGaleria = $consulta['id_galeria_grupo'];

                    // Verificar si el tipo actual es diferente al nuevo tipo
                    if ($id_grupoGaleria != $tipo_actual) {
                        $tipo_actual = $id_grupoGaleria;
                        // Imprimir el contenido de cada registro
                        $tiposBD = '

                        <li>
                            <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">

                            <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">

                            <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                        </li>
                            
                        ';
                        echo $tiposBD;
                    }

                }

            echo ' 
            </ul>

            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_galery.php">Fotos</a></li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_videos.php">Videos</a></li>
                </ul>
            
        </div>
    </nav>
    ';
}
function dir_ing_sanit_nav2(){
    echo
    '
    <nav class="container-fluid p-0 w-95">
        <div class="container-fluid p-3 my-4 box-shadow-nav text-center  bg-info border-radius-15">

            <a href="dir_ing_sanit.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>

            <button class="btn fs-6 bg-info dropdown-toggle px-4" data-bs-toggle="dropdown"><alt="DGSA">
            <b>Inicio</b>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Quienes Somos</a>
                </li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Mision</a>
                </li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_about.php">Vision</a>
                </li>
            </ul>

            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_ing_sanit_div.php">Divisiones</a></li>
                </ul>

            <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                        include("php/abrir_conexion.php");

                        $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 2 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual

                        while ($consulta = mysqli_fetch_array($TiposInstr)) {
                            $id_instru_tipo = $consulta['id_instrumento_tipo'];

                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_instru_tipo != $tipo_actual) {
                                $tipo_actual = $id_instru_tipo;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '

                                <li>
                                    <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                    <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                    <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }

                        }

                    echo '
                </ul>

            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
            <ul class="dropdown-menu">
                    ';
                    include("./php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 2 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDIS(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo ' 
            </ul>
        <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
        <img src="assets/icon/botones/descargar.png" class="iconos_nav">
        <b>Descargas</b></button>
        <ul class="dropdown-menu">
                ';
                include("php/abrir_conexion.php");

                $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 2 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                $tipo_actual = ""; // Variable para almacenar el tipo actual

                while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                    $id_grupoGaleria = $consulta['id_galeria_grupo'];

                    // Verificar si el tipo actual es diferente al nuevo tipo
                    if ($id_grupoGaleria != $tipo_actual) {
                        $tipo_actual = $id_grupoGaleria;
                        // Imprimir el contenido de cada registro
                        $tiposBD = '

                        <li>
                            <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">

                            <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">

                            <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                        </li>
                            
                        ';
                        echo $tiposBD;
                    }

                }

            echo '  
            </ul>
            <button class="btn fs-6 bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_galery.php">Fotos</a></li>
                <li><a class="dropdown-item" target="" href="dir_ing_sanit_videos.php">Videos</a></li>
                </ul>
            
        </div>
    </nav>
    ';
}
function dir_salud_radi_nav(){
    echo
    '
        <nav class="container-fluid p-0 w-95">
            <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Inicio</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Quienes somos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Mision</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Vision</a></li>
                </ul>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_div.php">Divisiones</a></li>
                </ul>

            <button class="fs-6 btn bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">                 
                    ';
                        include("php/abrir_conexion.php");

                        $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 3 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual

                        while ($consulta = mysqli_fetch_array($TiposInstr)) {
                            $id_instru_tipo = $consulta['id_instrumento_tipo'];

                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_instru_tipo != $tipo_actual) {
                                $tipo_actual = $id_instru_tipo;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '

                                <li>
                                    <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                    <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                    <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }

                        }

                    echo '
                </ul>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                    include("./php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 3 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDSR(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo ' 
            </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/descargar.png" class="iconos_nav">
            <b>Descargas</b></button>
            <ul class="dropdown-menu">
                        ';
                        include("php/abrir_conexion.php");
        
                        $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 3 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual
        
                        while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                            $id_grupoGaleria = $consulta['id_galeria_grupo'];
        
                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_grupoGaleria != $tipo_actual) {
                                $tipo_actual = $id_grupoGaleria;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '
        
                                <li>
                                    <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">
        
                                    <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">
        
                                    <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }
        
                        }
        
                    echo '  
            </ul>
            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_galery.php.">Fotos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_videos.php.">Videos</a></li>
                </ul>
        </div>
    </nav>
    ';
}
function dir_salud_radi_nav2(){
    echo
    '
        <nav class="container-fluid p-0 w-95">
            <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="dir_salud_rad.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Inicio</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Quienes somos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Mision</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_about.php">Vision</a></li>
                </ul>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_div.php">Divisiones</a></li>
                </ul>

            <button class="fs-6 btn bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/aprobar.png" class="iconos_nav">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">                 
                    ';
                        include("php/abrir_conexion.php");

                        $TiposInstr = mysqli_query($conexion, "SELECT * FROM e5_instrumentos_legales il INNER JOIN e6_tipos_instrumentos ti ON il.id_instrumento_tipo = ti.id_tipo_instrumento WHERE id_instrumento_direccion = 3 AND instrumento_visible = 1  ORDER BY id_instrumento_tipo");
                        $tipo_actual = ""; // Variable para almacenar el tipo actual

                        while ($consulta = mysqli_fetch_array($TiposInstr)) {
                            $id_instru_tipo = $consulta['id_instrumento_tipo'];

                            // Verificar si el tipo actual es diferente al nuevo tipo
                            if ($id_instru_tipo != $tipo_actual) {
                                $tipo_actual = $id_instru_tipo;
                                // Imprimir el contenido de cada registro
                                $tiposBD = '

                                <li>
                                    <input type="hidden" value="'.$consulta['id_instrumento_direccion'].'" id="direcInput" name="direcInput">

                                    <input type="hidden" value="'.$consulta['id_instrumento_tipo'].'" id="listaTiposInst" name="listaTiposInst">

                                    <button type="button" class="dropdown-item"onclick="instrumentosButton(this);">'.$consulta['nombre_tipo_instrumento'].'</button>
                                </li>
                                    
                                ';
                                echo $tiposBD;
                            }

                        }

                    echo '
                </ul>

            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/periodico.png" class="iconos_nav">
            <b>Temas de Interés</b>
            </button>
                <ul class="dropdown-menu">
                    ';
                    include("./php/abrir_conexion.php");

                    $Boletines = mysqli_query($conexion, "SELECT * FROM e4_boletines WHERE id_boletin_direccion = 3 AND boletin_visible = 1  ORDER BY fecha_actualizacion_bol ASC LIMIT 5");
                    while ($consulta = mysqli_fetch_array($Boletines)) {
                        // Imprimir el contenido de cada registro
                        $boletinesBD = '

                        <li>
                        <input type="hidden" value="'.$consulta['id_boletin'].'" id="listaBoletin" name="listaBoletin">
                        <button type="button" class="dropdown-item"onclick="verBoletinDSR(this);">'.$consulta['titulo_boletin'].'</button>
                        </li>
                            
                        ';
                        echo $boletinesBD;
                    }

                echo ' 
            </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/descargar.png" class="iconos_nav">
            <b>Descargas</b></button>
            <ul class="dropdown-menu">
                    ';
                    include("php/abrir_conexion.php");
    
                    $GaleriaDescargas = mysqli_query($conexion, "SELECT * FROM e1_galerias gl INNER JOIN e3_galerias_grupos gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_direccion = 3 AND visible = 1 AND id_galeria_tipo = 3 ORDER BY fecha_actualizacion");
                    $tipo_actual = ""; // Variable para almacenar el tipo actual
    
                    while ($consulta = mysqli_fetch_array($GaleriaDescargas)) {
                        $id_grupoGaleria = $consulta['id_galeria_grupo'];
    
                        // Verificar si el tipo actual es diferente al nuevo tipo
                        if ($id_grupoGaleria != $tipo_actual) {
                            $tipo_actual = $id_grupoGaleria;
                            // Imprimir el contenido de cada registro
                            $tiposBD = '
    
                            <li>
                                <input type="hidden" value="'.$consulta['id_galeria_direccion'].'" id="galDireccion" name="galDireccion">
    
                                <input type="hidden" value="'.$consulta['id_galeria_grupo'].'" id="galGrupo" name="galGrupo">
    
                                <button type="button" class="dropdown-item"onclick="descargas(this);">'.$consulta['nombre_grupo_galeria'].'</button>
                            </li>
                                
                            ';
                            echo $tiposBD;
                        }
    
                    }
    
                echo '  
            </ul>
            <button class="fs-6 btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/galeria.png" class="iconos_nav">
            <b>Galería</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_galery.php.">Fotos</a></li>
                    <li><a class="dropdown-item" target="" href="dir_salud_rad_videos.php.">Videos</a></li>
                </ul>
        </div>
    </nav>
    ';
}



