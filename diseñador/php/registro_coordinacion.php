<?php
session_start();
ob_start();

$identificador = $_POST["coordinacionesWeb"];
$soloLetras = '/^[a-zA-ZÀ-ý0-9\s]{0,100}$/';
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';

$archivoSubir = '/^[a-zA-ZÀ-ý0-9%_-$&\s]{5,255}$/';
$archivoTitulo = '/^[a-zA-ZÀ-ý0-9\s_,-.;()]{3,255}$/';
$archivoTitulo2 = '/^[a-zA-ZÀ-ý0-9\s_,-.;()]{0,255}$/';

$descripcionM = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/';
$descripcionObligatoria = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{20,20000}$/';
// REGISTRO DE COORDINACION
if ($identificador== "nuevaCoord") {
    $direccion_coordinacion = $_POST["coord_direccion"];

    // titulos
    $titulo_txt1 = $_POST["titulo_txt1"];
    $titulo_txt2 = $_POST["titulo_txt2"];
    $titulo_txt3 = $_POST["titulo_txt3"];

    $descripcion_txt1 = $_POST["descripcion_txt1"];
    $descripcion_txt2 = $_POST["descripcion_txt2"];
    $descripcion_txt3 = $_POST["descripcion_txt3"];
// **************************************************
    $titulo_lista1 = $_POST["titulo_lista1"];
    $titulo_lista2 = $_POST["titulo_lista2"];

    // CREANDO ARRAY
    // $datos = $_POST['Lista1_coord']; // Suponiendo que 'input_nombre' es el nombre del input donde se ingresan los datos
    // $Lista1_coord = implode('*', $datos);
    $Lista1_coord = $_POST["Lista1_coord"];

    // $datos2 = $_POST['Lista1_coord']; // Suponiendo que 'input_nombre' es el nombre del input donde se ingresan los datos
    // $Lista2_coord = implode('*', $datos2);
    $Lista2_coord = $_POST["Lista2_coord"];

// **************************************************

    $imagen_coord1 = $_FILES["imagen_coord1"]["name"];
    $imagen_coord2 = $_FILES["imagen_coord2"]["name"];
    $imagen_coord3 = $_FILES["imagen_coord3"]["name"];
    
    $direccionImagenesDIS = "../../assets/gallery/DIS/coordinacion/".$titulo_txt1."/";
    $direccionImagenesDSR = "../../assets/gallery/DSR/coordinacion/".$titulo_txt1."/";
    $direccionImagenesDCVRFN = "../../assets/gallery/DCVRFN/coordinacion/".$titulo_txt1."/";
    $direccionImagenesDEA = "../../assets/gallery/DEA/coordinacion/".$titulo_txt1."/";

    $DIRidentify = "";

    if ($direccion_coordinacion == 2) {
        $direccionImagenes = $direccionImagenesDIS;
        $DIRidentify = "Dir. Ing. Sanitaria";

    }
    if ($direccion_coordinacion == 3) {
        $direccionImagenes = $direccionImagenesDSR;
        $DIRidentify = "Dir. Salud Radiologica";

    }
    if ($direccion_coordinacion == 4) {
        $direccionImagenes = $direccionImagenesDCVRFN;
        $DIRidentify = "Dir. Control de Vectores";

    }
    if ($direccion_coordinacion == 5) {
        $direccionImagenes = $direccionImagenesDEA;
        $DIRidentify = "Dir. Epidemiología Ambiental";
    }
    function generarNumeroAleatorio() {
        $numeroAleatorio = rand(10000000000, 99999999999);
        return $numeroAleatorio;
    }
    
    $nombre_imagen1 = $direccionImagenes. generarNumeroAleatorio()."-".$imagen_coord1;
    if($imagen_coord2 == "" || $imagen_coord2 == null){
        $nombre_imagen2 = "";
    }else {
        $nombre_imagen2 = $direccionImagenes. generarNumeroAleatorio()."-".$imagen_coord2;
    }
    if($imagen_coord3 == "" || $imagen_coord3 == null){
        $nombre_imagen3 = "";
    }else {
        $nombre_imagen3 = $direccionImagenes. generarNumeroAleatorio()."-".$imagen_coord3;
    }


        $tipo1 = $_FILES["imagen_coord1"]["type"];
        $temp1 = $_FILES["imagen_coord1"]["tmp_name"];

        $tipo2 = $_FILES["imagen_coord2"]["type"];
        $temp2 = $_FILES["imagen_coord2"]["tmp_name"];

        $tipo3 = $_FILES["imagen_coord3"]["type"];
        $temp3 = $_FILES["imagen_coord3"]["tmp_name"];

        if (isset($imagen_coord1) && $imagen_coord1 != "") {
            $tipo1 = $_FILES["imagen_coord1"]["type"];
            $temp1 = $_FILES["imagen_coord1"]["tmp_name"];

            if (!((strpos($tipo1, "jpg") || strpos($tipo1, "jpeg") ||strpos($tipo1, "png") ||strpos($tipo1, "webp")))) {
                http_response_code(500);
            }
        }
        if (isset($imagen_coord2) && $imagen_coord2 != "") {
            $tipo2 = $_FILES["imagen_coord2"]["type"];
            $temp2 = $_FILES["imagen_coord2"]["tmp_name"];

            if (!((strpos($tipo2, "jpg") || strpos($tipo2, "jpeg") ||strpos($tipo2, "png") ||strpos($tipo2, "webp")))) {
                http_response_code(500);
            }
        }
        if (isset($imagen_coord3) && $imagen_coord3 != "") {
            $tipo3 = $_FILES["imagen_coord3"]["type"];
            $temp3 = $_FILES["imagen_coord3"]["tmp_name"];

            if (!((strpos($tipo3, "jpg") || strpos($tipo3, "jpeg") ||strpos($tipo3, "png") ||strpos($tipo3, "webp") ||strpos($tipo3, "mp4")))) 
            {
                http_response_code(500);
            }
        }

        // COMPROBAR OTROS DATOS
        if (preg_match($archivoTitulo,$titulo_txt1) && preg_match($archivoTitulo2,$titulo_txt2) && preg_match($archivoTitulo2,$titulo_txt3) &&
        preg_match($descripcionObligatoria,$descripcion_txt1) && preg_match($descripcionM,$descripcion_txt2) &&preg_match($descripcionM,$descripcion_txt3) &&
        preg_match($archivoTitulo2,$titulo_lista1) &&preg_match($archivoTitulo2,$titulo_lista1) &&
        preg_match($descripcionM,$Lista1_coord) && preg_match($descripcionM,$Lista2_coord) &&
        preg_match($soloNum,$direccion_coordinacion)) {

            include ('../../php/abrir_conexion.php');
            $valorID = $_SESSION['id_usr'];

            $query = "INSERT INTO $tabla_db21 (imagen_coord1, titulo_text1, descripcion_text1, imagen_coord2, titulo_text2, descripcion_text2, imagen_coord3, titulo_text3, descripcion_text3, titulo_lista1, lista1_coord, titulo_lista2, lista2_coord, id_coord_direccion, id_coord_usuario, id_coord_visible, fecha_creacion_coord, fecha_actualizacion_coord) VALUES ('$nombre_imagen1','$titulo_txt1','$descripcion_txt1','$nombre_imagen2','$titulo_txt2','$descripcion_txt2','$nombre_imagen3','$titulo_txt3','$descripcion_txt3','$titulo_lista1','$Lista1_coord','$titulo_lista2','$Lista2_coord','$direccion_coordinacion','$valorID','1',now(),now())";
            $resultado = mysqli_query($conexion, $query);

            // AUDITORIA *****************************************************************
            $nombreUsr= $_SESSION['nombre'];
            $accionHecha = "24";

            $entidad = "Nueva Coordinación Registrada, nombre: ".$titulo_txt1.".";
            $descripcion_Cambio = "Nueva Coordinación Registrada en la ".$DIRidentify.", guardada con el nombre de: ".$titulo_txt1."; realizado por: " . $nombreUsr;

            
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************
            if ($resultado) {
                # Se guardará dependiendo del directorio, en una carpeta llamada respaldos
                $carpeta = $direccionImagenes;
                if (!file_exists($carpeta)) {
                    mkdir($carpeta, 0700, true);
                }

                move_uploaded_file($temp1,$nombre_imagen1);
                move_uploaded_file($temp2,$nombre_imagen2);
                move_uploaded_file($temp3,$nombre_imagen3);
                echo "Se subió de manera adecuada el archivo, y se guardó dentro del sistema: ".$DIRidentify.", con el título de: ".$titulo_txt1;
                include('../../php/cerrar_conexion.php');

            }
            else {
                http_response_code(501);
                include('../../php/cerrar_conexion.php');
            }
        }else {
            http_response_code(502);
            include('../../php/cerrar_conexion.php');
        }
                
}