<?php
session_start();
ob_start();

$identificador = $_POST["identificador"];
$soloLetras = '/^[a-zA-ZÀ-ý0-9\s]{0,100}$/';
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';

$archivoSubir = '/^[a-zA-ZÀ-ý0-9%_-$&\s]{5,255}$/';
$archivoTitulo = '/^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/';

$descripcionM = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/';
$descripcionObligatoria = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{20,20000}$/';

// REGISTRO DE NUEVO GRUPO
if ($identificador == "nuevoGrupo") {
    $direccion = $_POST["direccion"];
    $titulo = $_POST["titulo"];

    include ('../../php/abrir_conexion.php');

    if (preg_match($soloLetras, $titulo) && preg_match($soloNum, $direccion) && $direccion != 0) {
        $sql = "INSERT INTO $tabla_db16 (nombre_grupo_galeria, id_direccion_grupo) VALUES ('$titulo','$direccion')";
        mysqli_query($conexion, $sql);
        // AUDITORIA *****************************************************************
        $valorID = $_SESSION['id_usr'];
        $nombreUsr= $_SESSION['nombre'];
        $entidad = "Registro de Grupo de Galería, en Imágenes/Videos";
        $descripcion_Cambio = "Nuevo registro de Grupo, para la categorías de la Galería de la Página Web. Registro realizado por: " . $nombreUsr;

        $accionHecha = "18";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FINAL AUDITORIA ************************************************************
        include('../../php/cerrar_conexion.php');
        echo "Se realizó de manera exitosa el registro del nuevo grupo, para la sección de galería.";
    }else {
        http_response_code(500);
        include('../../php/cerrar_conexion.php');
    }
}
// REGISTRO DE IMAGEN VIDEO
if ($identificador== "nuevaImgVid") {
    $tituloArchivo = $_POST["tituloArchivo"];
    $descripcion = $_POST["descripcion"];

    $imagen = $_FILES["archivo_subir"]["name"];
    
    $direccion_archivo = $_POST["direccion_archivo"];
    $tipo_archivo = $_POST["tipo_archivo"];
    $grupos_select = $_POST["grupos_select"];

    $direccionImagenesDGSA = "../../assets/gallery/DGSA/2024/".$tipo_archivo."/".$grupos_select."/";
    $direccionImagenesDIS = "../../assets/gallery/DIS/2024/".$tipo_archivo."/".$grupos_select."/";
    $direccionImagenesDSR = "../../assets/gallery/DSR/2024/".$tipo_archivo."/".$grupos_select."/";
    $direccionImagenesDCVRFN = "../../assets/gallery/DCVRFN/2024/".$tipo_archivo."/".$grupos_select."/";
    $direccionImagenesDEA = "../../assets/gallery/DEA/2024/".$tipo_archivo."/".$grupos_select."/";

    $DIRidentify = "";

    if ($direccion_archivo == 1) {
        $direccionImagenes = $direccionImagenesDGSA;
        $DIRidentify = "Dir. General";

    }
    if ($direccion_archivo == 2) {
        $direccionImagenes = $direccionImagenesDIS;
        $DIRidentify = "Dir. Ing. Sanitaria";

    }
    if ($direccion_archivo == 3) {
        $direccionImagenes = $direccionImagenesDSR;
        $DIRidentify = "Dir. Salud Radiologica";

    }
    if ($direccion_archivo == 4) {
        $direccionImagenes = $direccionImagenesDCVRFN;
        $DIRidentify = "Dir. Control de Vectores";

    }
    if ($direccion_archivo == 5) {
        $direccionImagenes = $direccionImagenesDEA;
        $DIRidentify = "Dir. Epidemiología Ambiental";

    }
    function generarNumeroAleatorio() {
        $numeroAleatorio = rand(10000000000, 99999999999);
        return $numeroAleatorio;
    }
    
    $nombre_imagen = $direccionImagenes. generarNumeroAleatorio()."-". $imagen;
    // $nombre_imagen = $direccionImagenes.$imagen;

        $tipo = $_FILES["archivo_subir"]["type"];
        $temp = $_FILES["archivo_subir"]["tmp_name"];

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES["archivo_subir"]["type"];
            $temp = $_FILES["archivo_subir"]["tmp_name"];

            if (!((strpos($tipo, "mp4") || strpos($tipo, "jpeg") ||strpos($tipo, "png") ||strpos($tipo, "webp")||strpos($tipo, "pdf")))) {
                http_response_code(500);
            }else {
                if (preg_match($archivoTitulo,$tituloArchivo) && preg_match($descripcionM,$descripcion) && preg_match($soloNum,$direccion_archivo) && preg_match($soloNum,$tipo_archivo) && preg_match($soloNum,$grupos_select)) {
                    include ('../../php/abrir_conexion.php');

                    $query = "INSERT INTO $tabla_db14 (id_galeria,titulo_archivo, descripcion_archivo, nombre_archivo, id_galeria_direccion, id_galeria_tipo, id_galeria_grupo, tipo_archivo, visible, fecha_creacion) VALUES (NULL, '$tituloArchivo','$descripcion','$nombre_imagen','$direccion_archivo','$tipo_archivo','$grupos_select','$tipo','1', now())";
                    $resultado = mysqli_query($conexion, $query);

                    // AUDITORIA *****************************************************************
                    $valorID = $_SESSION['id_usr'];
                    $nombreUsr= $_SESSION['nombre'];
                    $Img_O_Vid = "";
                    if ($tipo_archivo == 1) {
                        $Img_O_Vid = "Imagen";
                        $accionHecha = "19";
                    }else if ($tipo_archivo == 2) {
                        $Img_O_Vid = "Video";
                        $accionHecha = "20";
                    }else {
                        $Img_O_Vid = "Documento";
                        $accionHecha = "21";
                    }
                    $entidad = "Registro de ".$Img_O_Vidnuevo." en la ".$DIRidentify.".";
                    $descripcion_Cambio = "Nuevo registro de ".$Img_O_Vid." en la Galería de la Página Web de la ".$DIRidentify.", ubicacion: ".$nombre_imagen."; realizado por: " . $nombreUsr;

                    
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FINAL AUDITORIA ************************************************************
                    if ($resultado) {
                        # Se guardará dependiendo del directorio, en una carpeta llamada respaldos
                        $carpeta = $direccionImagenes;
                        if (!file_exists($carpeta)) {
                            mkdir($carpeta, 0700, true);
                        }

                        move_uploaded_file($temp,$nombre_imagen);
                        echo "Se subió de manera adecuada el archivo, y se guardó dentro del sistema";
                        include('../../php/cerrar_conexion.php');

                    }else {
                        http_response_code(501);
                        include('../../php/cerrar_conexion.php');
                    }
                }else {
                    http_response_code(502);
                    include('../../php/cerrar_conexion.php');
                }
                

            }
    }
}
// MODIFICAR DATOS IMAGEN - VIDEO - DOCUEMENTO
if ($identificador == "ModificImgVid") {
    $idenImgVid = $_POST['id_imagen'];

    $descripcion_archivo = $_POST["descripcionR"];
    $DIRidentify =  $_POST["nombre_dire"];

    if ($_POST["tituloR"] == "") {
        $titulo_archivo = $_POST["titulo"];
    } else {
        $titulo_archivo = $_POST["tituloR"];
    }
    if (isset($_POST["nombre_grupoR"]) && $_POST["nombre_grupoR"] >= 1 ) {
        $id_galeria_grupo = $_POST["nombre_grupoR"];
    } else {
        $id_galeria_grupo = $_POST['id_galeria_grupo_anterior'];
    }

    if (isset($_POST["actInac"]) && $_POST["actInac"] >= 1 ) {
        $visible = $_POST["actInac"];
    } else {
        $visible = $_POST['visible_anterior'];
    }
    if (isset($_POST["nombre_direR"]) && $_POST["nombre_direR"] >= 1 ) {
        $direccion_archivo = $_POST["nombre_direR"];
    } else {
        $direccion_archivo = $_POST['id_direccionVieja'];
    }
    if (isset($_POST["tipo_archivoAct"]) && $_POST["tipo_archivoAct"] >= 1 ) {
        $id_galeria_tipo = $_POST["tipo_archivoAct"];
    } else {
        $id_galeria_tipo = $_POST['nombre_tipo'];
    }

    include ('../../php/abrir_conexion.php');

    //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
    $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$idenImgVid'");
    while ($consulta = mysqli_fetch_array($verificar)) {
        $activo = $consulta['visible'];
    }

    if ($activo!=3) {
        // VERIFICAR SI HIZO CAMBIO DE IMAGEN-VIDEO-DOCUMENTO
        $imagen = $_FILES["archivo_actualizar"]["name"];

        $nombre_archivoViejo = $_POST['nombre_ImagenV'];

        if (isset($imagen) && $imagen != "") {
            if (preg_match($soloNum,$id_galeria_tipo) &&preg_match($soloNum,$direccion_archivo) ) {

                $tipo = $_FILES["archivo_actualizar"]["type"];
                $temp = $_FILES["archivo_actualizar"]["tmp_name"];
        
                $direccionImagenesDGSA = "../../assets/gallery/DGSA/2024/".$id_galeria_tipo."/".$id_galeria_grupo."/";
                $direccionImagenesDIS = "../../assets/gallery/DIS/2024/".$id_galeria_tipo."/".$id_galeria_grupo."/";
                $direccionImagenesDSR = "../../assets/gallery/DSR/2024/".$id_galeria_tipo."/".$id_galeria_grupo."/";
                $direccionImagenesDCVRFN = "../../assets/gallery/DCVRFN/2024/".$id_galeria_tipo."/".$id_galeria_grupo."/";
                $direccionImagenesDEA = "../../assets/gallery/DEA/2024/".$id_galeria_tipo."/".$id_galeria_grupo."/";
            
                $DIRidentify = "";
            
                if ($direccion_archivo == 1) {
                    $direccionImagenes = $direccionImagenesDGSA;
                    $DIRidentify = "Dir. General";
            
                }
                if ($direccion_archivo == 2) {
                    $direccionImagenes = $direccionImagenesDIS;
                    $DIRidentify = "Dir. Ing. Sanitaria";
            
                }
                if ($direccion_archivo == 3) {
                    $direccionImagenes = $direccionImagenesDSR;
                    $DIRidentify = "Dir. Salud Radiologica";
            
                }
                if ($direccion_archivo == 4) {
                    $direccionImagenes = $direccionImagenesDCVRFN;
                    $DIRidentify = "Dir. Control de Vectores";
            
                }
                if ($direccion_archivo == 5) {
                    $direccionImagenes = $direccionImagenesDEA;
                    $DIRidentify = "Dir. Epidemiología Ambiental";
            
                }
                function generarNumeroAleatorio() {
                    $numeroAleatorio = rand(10000000000, 99999999999);
                    return $numeroAleatorio;
                }
                
                $nombre_archivo = $direccionImagenes. generarNumeroAleatorio()."-".$imagen;

                // CAMBIANDO IMAGEN - DOCUMENTO - VIDEO
                if (!((strpos($tipo, "mp4") || strpos($tipo, "jpg") || strpos($tipo, "jpeg") ||strpos($tipo, "png") ||strpos($tipo, "webp")||strpos($tipo, "pdf")))) {
                    http_response_code(506);
                }else {
                    $archivoABorrar = $nombre_archivoViejo;
                    
                    $carpeta = $direccionImagenes;
                    if (file_exists($archivoABorrar)) {
                        if (unlink($archivoABorrar)) {
                            if (!file_exists($carpeta)) {
                                mkdir($carpeta, 0700, true);
                                move_uploaded_file($temp,$nombre_archivo);
                                $nombre_archivoViejo = $nombre_archivo;  
                            }
                        }
                    }else {
                        if (!file_exists($carpeta))
                        mkdir($carpeta, 0700, true);
                        move_uploaded_file($temp,$nombre_archivo);
                        $nombre_archivoViejo = $nombre_archivo;
                    } 
                }
            }
        }
        // **************************************************
        $existe_Galeria = 0;

        // Si es 3 se elimina
        if ($visible!=3) {
            if (preg_match($soloNum,$id_galeria_grupo) && preg_match($archivoTitulo,$titulo_archivo) && preg_match($soloNum,$visible) && preg_match($descripcionM,$descripcion_archivo) && preg_match($soloNum,$idenImgVid) &&
                
            preg_match($soloNum,$id_galeria_tipo) && preg_match($soloNum,$direccion_archivo)) {
                include ('../../php/abrir_conexion.php');

                //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
                $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$idenImgVid'");
                while ($consulta = mysqli_fetch_array($verificar)) {
                    $existe_Galeria++;
                }
                if ($existe_Galeria <> 0) {
                    // AUDITORIA ***********************************************************************
                    $valorID = $_SESSION['id_usr'];
                    $columnas = array(
                        'titulo_archivo' => 'Titulo del Archivo',
                        'descripcion_archivo' => 'Descripcion',
                        'nombre_archivo' => 'Ubicación del Archivo',
                        'id_galeria_direccion' => 'Dirección de Línea',
                        'id_galeria_tipo' => 'Tipo de Archivo',
                        'id_galeria_grupo' => 'Grupo del archivo',
                        'visible' => 'Visibilidad',
                    );
                    // BUSCAR DATOS BD
                    $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$idenImgVid'");
                    $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
                    $cambios = array();
                    $huboCambios = false; // Variable para verificar si se realizaron cambios

                        // Consultar grupo del archivo
                    $grupoTabla = array();
                    $query = "SELECT * FROM $tabla_db16";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            $grupoTabla[$fila['id_grupo']] = $fila['nombre_grupo_galeria'];
                        }
                    }

                        // Consultar ACTIVO INACTIVO
                    $ActivoInactivo = array();
                    $query = "SELECT * FROM $tabla_db2_2";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            $ActivoInactivo[$fila['id_estado']] = $fila['nombre_status'];
                        }
                    }
                    $tipoTabla = array();
                    $query = "SELECT * FROM $tabla_db15";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            $grupoTabla[$fila['id_tipo']] = $fila['nombre_tipo'];
                        }
                    }
                    $direccion = array();
                    $query = "SELECT * FROM $tabla_db5";
                    $resultado = mysqli_query($conexion, $query);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            $ActivoInactivo[$fila['id_direcciones']] = $fila['nombre_dire'];
                        }
                    }
                    foreach ($columnas as $columna => $nombre) {
                        switch ($columna) {
                            case 'id_galeria_grupo':
                                $valor_antiguo = isset($grupoTabla[$datos_antiguos[$columna]]) ? $grupoTabla[$datos_antiguos[$columna]] : "";
                                $valor_nuevo = isset($grupoTabla[$$columna]) ? $grupoTabla[$$columna] : "";
                                break;
                            case 'visible':
                                $valor_antiguo = isset($tipoTabla[$datos_antiguos[$columna]]) ? $tipoTabla[$datos_antiguos[$columna]] : "";
                                $valor_nuevo = isset($tipoTabla[$$columna]) ? $tipoTabla[$$columna] : "";
                                break;        
                            case 'id_galeria_tipo':
                                $valor_antiguo = isset($ActivoInactivo[$datos_antiguos[$columna]]) ? $ActivoInactivo[$datos_antiguos[$columna]] : "";
                                $valor_nuevo = isset($ActivoInactivo[$$columna]) ? $ActivoInactivo[$$columna] : "";
                                break;        
                            case 'id_galeria_direccion':
                                $valor_antiguo = isset($direccion[$datos_antiguos[$columna]]) ? $direccion[$datos_antiguos[$columna]] : "";
                                $valor_nuevo = isset($direccion[$$columna]) ? $direccion[$$columna] : "";
                                break;        
                            default:
                                $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                                $valor_nuevo = isset($$columna) ? $$columna : "";
                                break;
                        }
                        if ($valor_antiguo != $valor_nuevo) {
                            array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
                        }
                    }
                    if (!empty($cambios)) {
                        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en los datos de una imagen/video de la galería, cambios realizados: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
                        $accionHecha = "22";
                        $entidadModificada = "Identificador de la Imagen, Video o Documento: ".$idenImgVid;
                        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidadModificada', now(), '$descripcion_Cambio')";
                        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
                    }

                    // FIN DE LA AUDITORIA *************************************************************

                    
                    // MODIFICAR DATOS
                    $ModifiImgVid = "UPDATE $tabla_db14 SET titulo_archivo='$titulo_archivo', descripcion_archivo='$descripcion_archivo', id_galeria_grupo='$id_galeria_grupo', visible='$visible', id_galeria_direccion='$direccion_archivo', id_galeria_tipo='$id_galeria_tipo', nombre_archivo='$nombre_archivoViejo' WHERE id_galeria='$idenImgVid'";
                    mysqli_query($conexion, $ModifiImgVid);

                    echo "<h6>Actualización de información del archivo realizado exitosamente.</h6>";
                    include ('../../php/cerrar_conexion.php');

                }else{
                    http_response_code(501);
                    include('../../php/cerrar_conexion.php'); 
                }
            }
            else{
                http_response_code(500);
                include('../../php/cerrar_conexion.php');  
            }
            // ELIMINANDO LA IMAGEN - VIDEO - DOCUMENTO
            }else if ($visible==3) {
                include ('../../php/abrir_conexion.php');
                //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
                $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$idenImgVid'");
                while ($consulta = mysqli_fetch_array($verificar)) {
                    $NoExiste = $consulta['visible'];
                    $existe_Galeria++;
                }

                if ($existe_Galeria<>0 && $NoExiste != 3) {
                    // CAMBIANDO IMAGEN - DOCUMENTO VIDEO
                    $archivoABorrar = $nombre_archivoViejo;
                    
                    $carpeta = $direccionImagenes;
                    if (file_exists($archivoABorrar)) {
                        unlink($archivoABorrar);                    
                    }
                    // MODIFICAR DATOS
                    $ModifiImgVid = "UPDATE $tabla_db14 SET  descripcion_archivo='',  visible='$visible', id_galeria_direccion='6' WHERE id_galeria='$idenImgVid'";
                    mysqli_query($conexion, $ModifiImgVid);

                    echo "<h6>Eliminación del archivo, realizado exitosamente.</h6>";

                    // AUDITORIA *****************************************************************
                    $valorID = $_SESSION['id_usr'];
                    $nombreUsr= $_SESSION['nombre'];
                    $accionHecha = "23";
                    
                    $entidad = "Eliminación de Archivo (imagen, video o documento) en la ".$DIRidentify.".";
                    $descripcion_Cambio = "Eliminación de Archivo (imagen, video o documento) en la Página Web de la ".$DIRidentify.", previa ubicacion del archivo: ".$nombre_archivoViejo."; realizado por: " . $nombreUsr;

                    
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FINAL AUDITORIA ************************************************************
                    include ('../../php/cerrar_conexion.php');
                }else {
                    http_response_code(503);
                    include ('../../php/cerrar_conexion.php');
                }
            
            }else {
                http_response_code(503);
            } 
    }else if ($activo==3) {
        http_response_code(501);
    } 
    
    
        
}
// REGISTRO DE BOLETIN INFORMATIVO
if ($identificador== "nuevoBoletin") {
    $tituloBoletin = $_POST["tituloBoletin"];
    $descripcion_boletin1 = $_POST["descripcion_boletin1"];
    $descripcion_boletin2 = $_POST["descripcion_boletin2"];
    $descripcion_boletin3 = $_POST["descripcion_boletin3"];

    $img1_subir = $_FILES["img1_subir"]["name"];
    $img2_subir = $_FILES["img2_subir"]["name"];
    $img3_subir = $_FILES["img3_subir"]["name"];
    
    $direccion_boletin = $_POST["direccion_boletin"];

    $direccionImagenesDGSA = "../../assets/gallery/DGSA/Boletin/".$tituloBoletin.$direccion_boletin."/";
    $direccionImagenesDIS = "../../assets/gallery/DIS/Boletin/".$tituloBoletin.$direccion_boletin."/";
    $direccionImagenesDSR = "../../assets/gallery/DSR/Boletin/".$tituloBoletin.$direccion_boletin."/";
    $direccionImagenesDCVRFN = "../../assets/gallery/DCVRFN/Boletin/".$tituloBoletin.$direccion_boletin."/";
    $direccionImagenesDEA = "../../assets/gallery/DEA/Boletin/".$tituloBoletin.$direccion_boletin."/";

    $DIRidentify = "";

    if ($direccion_boletin == 1) {
        $direccionImagenes = $direccionImagenesDGSA;
        $DIRidentify = "Dir. General";

    }
    if ($direccion_boletin == 2) {
        $direccionImagenes = $direccionImagenesDIS;
        $DIRidentify = "Dir. Ing. Sanitaria";

    }
    if ($direccion_boletin == 3) {
        $direccionImagenes = $direccionImagenesDSR;
        $DIRidentify = "Dir. Salud Radiologica";

    }
    if ($direccion_boletin == 4) {
        $direccionImagenes = $direccionImagenesDCVRFN;
        $DIRidentify = "Dir. Control de Vectores";

    }
    if ($direccion_boletin == 5) {
        $direccionImagenes = $direccionImagenesDEA;
        $DIRidentify = "Dir. Epidemiología Ambiental";
    }
    function generarNumeroAleatorio() {
        $numeroAleatorio = rand(10000000000, 99999999999);
        return $numeroAleatorio;
    }
    
    $nombre_imagen1 = $direccionImagenes.generarNumeroAleatorio()."-".$img1_subir;
    if($img2_subir == "" || $img2_subir == null){
        $nombre_imagen2 = "";
    }else {
        $nombre_imagen2 = $direccionImagenes.generarNumeroAleatorio()."-".$img2_subir;
    }
    if($img3_subir == "" || $img3_subir == null){
        $nombre_imagen3 = "";
    }else {
        $nombre_imagen3 = $direccionImagenes.generarNumeroAleatorio()."-".$img3_subir;
    }


        $tipo1 = $_FILES["img1_subir"]["type"];
        $temp1 = $_FILES["img1_subir"]["tmp_name"];

        $tipo2 = $_FILES["img2_subir"]["type"];
        $temp2 = $_FILES["img2_subir"]["tmp_name"];

        $tipo3 = $_FILES["img3_subir"]["type"];
        $temp3 = $_FILES["img3_subir"]["tmp_name"];

        if (isset($img1_subir) && $img1_subir != "") {
            $tipo1 = $_FILES["img1_subir"]["type"];
            $temp1 = $_FILES["img1_subir"]["tmp_name"];

            if (!((strpos($tipo1, "jpg") || strpos($tipo1, "jpeg") ||strpos($tipo1, "png") ||strpos($tipo1, "webp")))) {
                http_response_code(500);
            }
        }
        if (isset($img2_subir) && $img2_subir != "") {
            $tipo2 = $_FILES["img2_subir"]["type"];
            $temp2 = $_FILES["img2_subir"]["tmp_name"];

            if (!((strpos($tipo2, "jpg") || strpos($tipo2, "jpeg") ||strpos($tipo2, "png") ||strpos($tipo2, "webp")))) {
                http_response_code(500);
            }
        }
        if (isset($img3_subir) && $img3_subir != "") {
            $tipo3 = $_FILES["img3_subir"]["type"];
            $temp3 = $_FILES["img3_subir"]["tmp_name"];

            if (!((strpos($tipo3, "jpg") || strpos($tipo3, "jpeg") ||strpos($tipo3, "png") ||strpos($tipo3, "webp") ||strpos($tipo3, "mp4")))) 
            {
                http_response_code(500);
            }
        }

        // COMPROBAR OTROS DATOS
        if (preg_match($archivoTitulo,$tituloBoletin) && 
        preg_match($descripcionObligatoria,$descripcion_boletin1) &&
        preg_match($descripcionM,$descripcion_boletin2) &&
        preg_match($descripcionM,$descripcion_boletin3) &&
        preg_match($soloNum,$direccion_boletin)) {

            include ('../../php/abrir_conexion.php');
            $valorID = $_SESSION['id_usr'];

            $query = "INSERT INTO $tabla_db17 (id_boletin,id_usuario_boletin, id_boletin_direccion, titulo_boletin, img1_boletin, text1_boletin, img2_boletin, text2_boletin, imgvid3_boletin, text3_boletin, boletin_visible, fecha_creacion_bol,fecha_actualizacion_bol) VALUES (NULL,'$valorID','$direccion_boletin','$tituloBoletin','$nombre_imagen1','$descripcion_boletin1','$nombre_imagen2','$descripcion_boletin2','$nombre_imagen3','$descripcion_boletin3', '1', now(),now())";
            $resultado = mysqli_query($conexion, $query);

            // AUDITORIA *****************************************************************
            $nombreUsr= $_SESSION['nombre'];
            $accionHecha = "24";

            $entidad = "Nuevo Boletín Informativo en la ".$DIRidentify.".";
            $descripcion_Cambio = "Nuevo registro de Boletín Informativo en la ".$DIRidentify.", guardada con el nombre de: ".$tituloBoletin."; realizado por: " . $nombreUsr;

            
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
                echo "Se subió de manera adecuada el archivo, y se guardó dentro del sistema: ".$DIRidentify.", con el título de: ".$tituloBoletin;
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