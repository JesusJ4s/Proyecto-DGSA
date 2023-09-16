<?php
            // <a class=" btn bg-info px-4" href="index_serv.php">Trámites</a>

function index_nav(){
    echo 
    '
    <nav class="container-fluid p-0 w-95">
        <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center border-radius-15">

            <a href="index.php"><img src="assets/icon/botones/inicio2.png" class="w-50x50"></a>
            
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            
            <b>Inicio</b></button>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" target="" href="about.php">Quienes Somos</a></li>
                <li><a class="dropdown-item" target="" href="index_instru_legales.php">Instrumentos Legales</a></li>
            </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Direcciones de Línea</b></button>
            <ul class="dropdown-menu ps-1 pe-0">

                <li class="nav-item ms-3 my-2">
                    <a class="nav-link" href="dir_epid_amb.php" aria-expanded="false">
                    Dirección Epidemiología Ambiental</a>
                </li>
                
                <li class="nav-item ms-3 my-2">
                    <a class="nav-link href="dir_cont_vec.php" >
                    Dirección Control de Vectores, Reserv. y Fauna Nociva</a>
                </li>

                <li class="nav-item ms-3 my-2">
                    <a class="nav-link" href="dir_ing_sanit.php">
                    Dirección Ingeniería Sanitaria</a>
                </li>

                <li class="nav-item ms-3 my-2">
                    <a class="nav-link" href="dir_salud_rad.php" >
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
                  <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_about.php">Quienes somos</a></li>
                  <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_about.php">Vision</a></li>
                  <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_about.php">Mision</a></li>
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <img src="assets/icon/botones/division.png" class="iconos_nav">
            <b>Coordinaciones</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_div.php">Divisiones</a></li>
                </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Instrumentos Legales</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_circu.php">Circulares</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_prot.php">Protocolo laboratorio</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_formt.php">Formatos</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_sala.php">Sala Situacional</a></li>
                    </ul>
            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Temas de Interés</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia de Gestión Integrada*</a></li>
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia Técnica Mundial Contra la Malaria*</a></li>
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Métodos de Captura*</a></li>
                </ul>

            <button class="fs-6  btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">
            <b>Galería</b>
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="dir_epid_amb_galery.php">Fotos y Videos</a></li>
                </ul>
                
                </div>
        </nav>
    ';
}


function dir_salud_radi_nav(){
    echo
    '
        <nav class="container-fluid p-0 w-95">
            <div class="container-fluid p-3 mb-4 bg-info box-shadow-nav text-center">

            <button class="btn bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">Inicio</button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_about.php">Quienes somos</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_about.php">Mision</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_about.php">Vision</a></li>
                </ul>
                <button class="btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Coordinaciones</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_div.php">Divisiones</a></li>
                </ul>
                <button class="btn bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">Instrumentos Legales</button>
                <ul class="dropdown-menu">                 
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_form.php">Formatos</a></li>
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_leyes.php">Leyes</a></li>
                    </ul>
                <button class="btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Temas de Interés</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia de Gestión Integrada*</a></li>
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia Técnica Mundial Contra la Malaria*</a></li>
                    <li><a class="dropdown-item" target="_blank" href="en_const.html">*Métodos de Captura*</a></li>
                </ul>
                <button class="btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Galería</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" target="_blank" href="dir_salud_rad_galery.php.">Fotos y Videos</a></li>
                    </ul>
                    <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>
                    </div>
        </nav>
    ';
}


function dir_ing_sanit_nav(){
    echo
    '
    <nav class="ms-5 me-5">
    <div class="container-fluid p-3 my-4 box-shadow-nav text-center  bg-info ">

        

        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown"><alt="DGSA">Inicio</button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_about.php">Quienes Somos</a></li>
        <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_about.php">Mision</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_about.php">Vision</a></li>
        </ul>
        <button class="btn  bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">Coordinaciones</button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_div.php">Divisiones</a></li>
        </ul>
        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Instrumentos Legales</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_ma.php">Manuales de Procedimiento</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_ing_sanit_form.php">Formatos</a></li>
        </ul>
        <button class="btn  bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">Temas de Interés</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="en_const.html">Estrategia de Gestión Integrada</a></li>
            <li><a class="dropdown-item" target="_blank" href="en_const.html">Estrategia Técnica Mundial Contra la Malaria</a></li>
            <li><a class="dropdown-item" target="_blank" href="en_const.html">Métodos de Captura</a></li>
        </ul>
        <button class="btn  bg-info  dropdown-toggle px-4" data-bs-toggle="dropdown">Galería</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="en_const.html">Fotos</a></li>
            <li><a class="dropdown-item" target="_blank" href="en_const.html">Videos</a></li>
            </ul>
            <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>
            </div>
</nav>
    ';
}

function dir_cont_vec_nav(){
    echo
    '
<nav class="ms-5 me-5">
        <div class="container-fluid p-3 my-4  bg-info box-shadow-nav text-center">
            
        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Inicio</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_about.php">Quienes Somos</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_about.php">Mision</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_about.php">Vicion</a></li>
        </ul>
        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Coordinaciones</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_div.php">Divisiones</a></li>
        </ul>
        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Instrumentos Legales</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_circ.php">Circulares</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_man.php">Manuales de Procedimiento</a></li>
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_form.php">Formatos</a></li>
        </ul>
        <button class="btn  bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Temas de Interés</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia de Gestión Integrada*</a></li>
            <li><a class="dropdown-item" target="_blank" href="en_const.html">*Estrategia Técnica Mundial Contra la Malaria*</a></li>
            <li><a class="dropdown-item" target="_blank" href="en_const.html">*Métodos de Captura*</a></li>
        </ul>
        <button class="btn bg-info dropdown-toggle px-4" data-bs-toggle="dropdown">Galería</button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" target="_blank" href="dir_cont_vec_galery.php">Fotos y Videos</a></li>
        </ul>

        <a href="index.php"><img src="assets/icon/botones/inicio2.png" id="" class="w-50x50"></a>
    </div>
    </nav>
    
    ';
}