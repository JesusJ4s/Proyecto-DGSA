<?php
session_start();
ob_start();

$identificador = $_POST['identificador'];
$patron_numero = '/^[0-9]{1,11}$/';

function acortar_texto($texto, $cantidad)
{
    if (strlen($texto) > $cantidad) {
        $texto_corto = substr($texto, 0, $cantidad);
        $texto_corto .= "...";
    } else {
        $texto_corto = $texto;
    }

    return $texto_corto;
}

if ($identificador == "boletinesPrinDEA") {
    include("abrir_conexion.php");

    echo 
    '
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="assets/logos/DEA/Epidemiologia2.png" alt="Chagas" class="d-block width-carousel-info border-radius-15 w-50">

            </div>
            <p class="display-5">
                Dir. Epidemiología Ambiental
            </p>
            <p class="px-3 text-justify sangria">
                Ejercer funciones de vigilancia de las enfermedades endemo-epidémicas y de los riesgos sanitario ambientales, en concordancia con las políticas nacionales, para mejorar el estado de salud de la población.
            </p>
        </div>    
    ';

    $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 5 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol DESC LIMIT 4");
    while ($consulta = mysqli_fetch_array($Boletines)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="carousel-item">
                <img src="'.$consulta['img1_boletin'].'" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                <p class="display-5">
                    '.$consulta['titulo_boletin'].'
                </p>
                <p class="px-3 text-justify sangria">
                    '.acortar_texto($consulta['text1_boletin'],250).'
                    <br>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" name="boletinId" id="boletinId">
                    <button type="button" class="btn btn-outline-primary" onclick="verBoletinDEA(this);">Leer más</button>
                </p>
            </div>
        ';
    }
}
if ($identificador == "boletinesPrinDCV") {
    include("abrir_conexion.php");

    echo 
    '
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="assets/logos/DCVFN/control de vectores.png" alt="Chagas" class="d-block width-carousel-info border-radius-15 w-40">

            </div>
            <p class="display-5">
                Dir. Control de Vectores Reservorios y Fauna Nociva
            </p>
            <p class="px-3 text-justify sangria">
                Fortalecer el manejo integrado de los vectores, reservorios y fauna nociva, mediante la formación y capacitación del personal profesional y técnico, metodologías de investigación, abastecimiento de plaguicidas, equipos de aplicación de insecticidas y de protección personal al servicio de las Direcciones Estadales de Salud Ambiental, desarrollando un Subsistema de Información de Vigilancia y control Entomológico y Reservorios.
            </p>
        </div>    
    ';

    $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 4 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol DESC LIMIT 4");
    while ($consulta = mysqli_fetch_array($Boletines)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="carousel-item">
                <img src="'.$consulta['img1_boletin'].'" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                <p class="display-5">
                    '.$consulta['titulo_boletin'].'
                </p>
                <p class="px-3 text-justify sangria">
                    '.acortar_texto($consulta['text1_boletin'],250).'
                    <br>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" name="boletinId" id="boletinId">
                    <button type="button" class="btn btn-outline-primary" onclick="verBoletinDCV(this);">Leer más</button>
                </p>
            </div>
        ';
    }
}
if ($identificador == "boletinesPrinDIS") {
    include("abrir_conexion.php");

    echo 
    '
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="assets/logos/DIS/Riegos sanitario.png" alt="Chagas" class="d-block width-carousel-info border-radius-15 w-40">

            </div>
            <p class="display-5">
                Dir. Ingeniería Sanitaria
            </p>
            <p class="px-3 text-justify sangria">
                Proveer los instrumentos legales, técnicos y administrativos a los sistemas regionales de salud, para el desarrollo de los planes y programas que permitan el control de los factores de riesgos sanitario ambientales que puedan alterar la salud de la población venezolana, procurándole una mejor calidad de vida.
            </p>
        </div>    
    ';

    $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 2 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol DESC LIMIT 4");
    while ($consulta = mysqli_fetch_array($Boletines)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="carousel-item">
                <img src="'.$consulta['img1_boletin'].'" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                <p class="display-5">
                    '.$consulta['titulo_boletin'].'
                </p>
                <p class="px-3 text-justify sangria">
                    '.acortar_texto($consulta['text1_boletin'],250).'
                    <br>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" name="boletinId" id="boletinId">
                    <button type="button" class="btn btn-outline-primary" onclick="verBoletinDIS(this);">Leer más</button>
                </p>
            </div>
        ';
    }
}
if ($identificador == "boletinesPrinDSR") {
    include("abrir_conexion.php");

    echo 
    '
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="assets/logos/DSR/salud radiologica.png" alt="Chagas" class="d-block width-carousel-info border-radius-15 w-40">

            </div>
            <p class="display-5">
                Dir. Salud Radiológica
            </p>
            <p class="px-3 text-justify sangria">
                Proveer los instrumentos legales, técnicos y administrativos para el desarrollo de los planes y programas que permitan el control del uso de radiaciones y su manejo adecuado por los usuarios del sector salud y las comunidades; que garanticen que las dosis colectivas nacionales inherentes a su uso estén por debajo de los limites de dosis nacionales para los trabajadores y público, y se utilicen los niveles orientativos en pacientes; logrando disminuir los efectos biológicos que puedan afectar la salud de la población venezolana, procurando una mejor calidad de vida.
            </p>
        </div>    
    ';

    $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 3 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol DESC LIMIT 4");
    while ($consulta = mysqli_fetch_array($Boletines)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="carousel-item">
                <img src="'.$consulta['img1_boletin'].'" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                <p class="display-5">
                    '.$consulta['titulo_boletin'].'
                </p>
                <p class="px-3 text-justify sangria">
                    '.acortar_texto($consulta['text1_boletin'],250).'
                    <br>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" name="boletinId" id="boletinId">
                    <button type="button" class="btn btn-outline-primary" onclick="verBoletinDSR(this);">Leer más</button>
                </p>
            </div>
        ';
    }
}
if ($identificador == "boletinesPrinDGSA") {
    include("abrir_conexion.php");

    echo 
    '
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <img src="assets/gallery/DGSA/20221129_134914.jpg" alt="Chagas" class="d-block width-carousel-info border-radius-15">

            </div>
            <p class="display-5">
                Dir. General de Salud Ambiental
            </p>
            <p class="px-3 text-justify sangria">
                Ejercer el ejercicio de la función Rectora del Ministerio de Poder Popular para la Salud (MPPS); en materia Sanitario Ambiental, mediante la normalización, la supervisión, la investigación operativa, la capacitación, la asesoría y asistencia técnica, para lograr el desarrollo de planes y programas de control y prevención de enfermedades asociadas a factores físicos, químicos y biológicos presentes en el entorno humano.
            </p>
        </div>    
    ';

    $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 1 AND boletin_visible = 1 ORDER BY fecha_actualizacion_bol DESC LIMIT 4");
    while ($consulta = mysqli_fetch_array($Boletines)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="carousel-item">
                <img src="'.$consulta['img1_boletin'].'" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                <p class="display-5">
                    '.$consulta['titulo_boletin'].'
                </p>
                <p class="px-3 text-justify sangria">
                    '.acortar_texto($consulta['text1_boletin'],250).'
                    <br>
                    <input type="hidden" value="'.$consulta['id_boletin'].'" name="boletinId" id="boletinId">
                    <button type="button" class="btn btn-outline-primary" onclick="verBoletinDGSA(this);">Leer más</button>
                </p>
            </div>
        ';
    }
}

if ($identificador == "verBoletin") {

    $id_boletin = $_POST['idBoletin'];

    if (preg_match($patron_numero,$id_boletin) && $id_boletin != 0) {

    include("abrir_conexion.php");

        $Boletin = mysqli_query($conexion, "SELECT * FROM $tabla_db17 bl INNER JOIN $tabla_db1 us ON bl.id_usuario_boletin = us.id_usuario WHERE id_boletin = '$id_boletin'");
        while ($consulta = mysqli_fetch_array($Boletin)) {
            // Imprimir el contenido de cada registro
            $datos = '
    
            <div class="w-85 mb-5 text-center">
            <h1 class="text-start"><b>'.$consulta['titulo_boletin'].'</b></h1>
            <h6 class="mb-5 text-start">Autor: '.$consulta['nombre']." ".$consulta['apellido'].'. Fecha: '.$consulta['fecha_creacion_bol'].'</h6>
    
                <img src="'.$consulta['img1_boletin'].'" alt="" class="informacion_web box-shadow border-radius-15">
    
                <hr class="my-5">
    
                <div class="text-justify">
                    <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['text1_boletin'].'</textarea> 
                </div>
    
                <hr class="my-5">
    
                ';
            if ($consulta['img2_boletin']!= "") {
                $datos .= '
                    <img src="'.$consulta['img2_boletin'].'" alt="" class="informacion_web box-shadow border-radius-15">
    
                    <hr class="my-5">          
                ';
            }    
            if ($consulta['text2_boletin']!= "") {
                $datos .= '
                    <div class="text-justify">
                        <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['text2_boletin'].'</textarea> 
                    </div>
                    <hr class="my-5">
                
                ';
            }    
            if ($consulta['imgvid3_boletin']!="") {
                $extension = pathinfo($consulta['imgvid3_boletin'], PATHINFO_EXTENSION);
                if (in_array($extension, ['mp4'])) {
                    $datos .= '
                        <video src="'.$consulta['imgvid3_boletin'].'" class="informacion_web box-shadow border-radius-15" controls></video>
                        <hr class="my-5">
                    ';
                } else {
                    $datos .= '
                        <img src="'.$consulta['imgvid3_boletin'].'" alt="" class="informacion_web box-shadow border-radius-15">
                        <hr class="my-5">
                    ';
                }
            }
            if ($consulta['text3_boletin']!="") {
                $datos .= '
                    <div class="text-justify">
                        <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['text3_boletin'].'</textarea> 
                    </div>
    
                ';
            }
            $datos .='
    
                </div>
                
            ';
        }
        $_SESSION['informacionEntera']= $datos;
        include("cerrar_conexion.php");
    }else {
        http_response_code(500);

    }
    

}