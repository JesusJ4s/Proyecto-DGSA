<?php
session_start();
ob_start();

$identificador = $_POST["identificador"];
$soloLetras = '/^[a-zA-ZÀ-ý0-9\s]{0,100}$/';
$soloNum = '/^[0-9]{1,11}$/';

$archivoSubir = '/^[a-zA-ZÀ-ý0-9%_-$&\s]{5,255}$/';
$archivoTitulo = '/^[a-zA-ZÀ-ý0-9\s_,-.;]{0,100}$/';

$descripcionM = '/^[a-zA-ZÀ-ý0-9\s_,-.;]{0,1000}$/';

// REGISTRO DE NUEVO GRUPO
if ($identificador == "nuevoGrupo") {
    $direccion = $_POST["direccion"];
    $titulo = $_POST["titulo"];

    include ('../../php/abrir_conexion.php');

    if (preg_match($soloLetras, $titulo) && preg_match($soloNum, $direccion)) {
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
    $nombre_imagen = $direccionImagenes.$imagen;

        $tipo = $_FILES["archivo_subir"]["type"];
        $temp = $_FILES["archivo_subir"]["tmp_name"];

        if (isset($imagen) && $imagen != "") {
            $tipo = $_FILES["archivo_subir"]["type"];
            $temp = $_FILES["archivo_subir"]["tmp_name"];

            if (!((strpos($tipo, "gif") || strpos($tipo, "mp4") || strpos($tipo, "jpeg") ||strpos($tipo, "png") ||strpos($tipo, "webp")))) {
                http_response_code(500);
            }else {
                if (preg_match($archivoTitulo,$tituloArchivo) && preg_match($descripcionM,$descripcion) && preg_match($soloNum,$direccion_archivo) && preg_match($soloNum,$tipo_archivo) && preg_match($soloNum,$grupos_select)) {
                    include ('../../php/abrir_conexion.php');

                    $query = "INSERT INTO $tabla_db14 (id_galeria,titulo_archivo, descripcion_archivo, nombre_archivo, id_galeria_direccion, id_galeria_tipo, id_galeria_grupo, visible) VALUES (NULL, '$tituloArchivo','$descripcion','$nombre_imagen','$direccion_archivo','$tipo_archivo','$grupos_select','1')";
                    $resultado = mysqli_query($conexion, $query);

                    // AUDITORIA *****************************************************************
                    $valorID = $_SESSION['id_usr'];
                    $nombreUsr= $_SESSION['nombre'];
                    $Img_O_Vid = "";
                    if ($tipo_archivo == 1) {
                        $Img_O_Vid = "Imagen";
                        $accionHecha = "19";
                    }else {
                        $Img_O_Vid = "Video";
                        $accionHecha = "20";
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

                        move_uploaded_file($temp,$direccionImagenes.$imagen);
                        echo "Se subió de manera adecuada la imagen al sistema, y se guardó dentro del sistema";
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
// MODIFICAR DATOS
if ($identificador == "ModificImgVid") {
    // $direccion_archivo = $_POST["nombre_direR"];
    // $grupos_select_VIEJO = $_POST['id_galeria_grupo_anterior'];
    $idenImgVid = $_POST['id_imagen'];

    // $titulo_archivoMod = $_POST["tituloR"];
    // $activo_inactivo_VIEJO = $_POST['visible_anterior'];

    $descripcion_archivo = $_POST["descripcionR"];

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

    $existe_Galeria = 0;

    // echo $titulo_archivo." ".$id_galeria_grupo." ".$visible;
    if (preg_match($soloNum,$id_galeria_grupo) && preg_match($archivoTitulo,$titulo_archivo) && preg_match($soloNum,$visible) && preg_match($descripcionM,$descripcion_archivo) && preg_match($soloNum,$idenImgVid)) {
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
            foreach ($columnas as $columna => $nombre) {
                switch ($columna) {
                    case 'id_galeria_grupo':
                        $valor_antiguo = isset($grupoTabla[$datos_antiguos[$columna]]) ? $grupoTabla[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($grupoTabla[$$columna]) ? $grupoTabla[$$columna] : "";
                        break;
                    case 'visible':
                        $valor_antiguo = isset($ActivoInactivo[$datos_antiguos[$columna]]) ? $ActivoInactivo[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($ActivoInactivo[$$columna]) ? $ActivoInactivo[$$columna] : "";
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
                $accionHecha = "21";
                $entidadModificada = "Identificador de la Imagen/Video: ".$idenImgVid;
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidadModificada', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
            }

            // FIN DE LA AUDITORIA *************************************************************

            // MODIFICAR DATOS
            $ModifiImgVid = "UPDATE $tabla_db14 SET titulo_archivo='$titulo_archivo', descripcion_archivo='$descripcion_archivo', id_galeria_grupo='$id_galeria_grupo', visible='$visible' WHERE id_galeria='$idenImgVid'";
            mysqli_query($conexion, $ModifiImgVid);

            echo "<h6>Actualización de información del archivo realizado exitosamente.</h6>";
            include ('../../php/cerrar_conexion.php');

          }else{
            http_response_code(501);
            include('../../php/cerrar_conexion.php'); 
          }
    }else{
        http_response_code(500);
        include('../../php/cerrar_conexion.php');  
    }
        
}