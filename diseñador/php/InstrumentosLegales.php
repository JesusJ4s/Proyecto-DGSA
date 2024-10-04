<?php
session_start();
ob_start();

$identificador = $_POST["identificador"];
$soloLetras = '/^[a-zA-ZÀ-ý0-9\s]{0,100}$/';
$soloNum = '/^[0-9]{1,11}$/';

$archivoSubir = '/^[a-zA-ZÀ-ý0-9%_-$&\s]{5,255}$/';
$archivoTitulo = '/^[a-zA-ZÀ-ý0-9\s_,-.;()]{1,150}$/';

$descripcionM = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{0,20000}$/';
$descripcionObligatoria = '/^[a-zA-ZÀ-ý0-9\s_,-.()!@#$%^&*+=<>?\/\\|\[\]{}:;~£€¥]{20,20000}$/';

// NUEVO GRUPO DE INSTRUMENTOS LEGALES (SEPARADOR DENTRO DE LA PAGINA)
if ($identificador == "nuevoGrupoInstru") {
    $direccion = $_POST["direccion"];
    $titulo = $_POST["titulo"];

    include ('../../php/abrir_conexion.php');

    if (preg_match($archivoTitulo, $titulo) && preg_match($soloNum, $direccion) && $direccion != 0) {
        $sql = "INSERT INTO $tabla_db20 (nombre_grup_instrumento, id_grupo_instr_direc) VALUES ('$titulo','$direccion')";
        mysqli_query($conexion, $sql);
        // AUDITORIA *****************************************************************
        $valorID = $_SESSION['id_usr'];
        $nombreUsr= $_SESSION['nombre'];
        $entidad = "Registro de Grupo de Instrumentos Legales";
        $descripcion_Cambio = "Nuevo registro de Grupo, para la categoría de Instrumentos Legales. Registro realizado por: " . $nombreUsr;

        $accionHecha = "27";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FINAL AUDITORIA ************************************************************
        include('../../php/cerrar_conexion.php');
        echo "Se realizó de manera exitosa el registro del nuevo grupo, para los Instrumentos Legales.";
    }else {
        http_response_code(500);
        include('../../php/cerrar_conexion.php');
    }
}
// NUEVO TIPO DE INSTRUMENTO (SEPARADOR DE ARCHIVOS FUERA DE LA PAGINA WEB)
if ($identificador == "nuevotipoInstru") {

    $titulo = $_POST["titulo"];

    include ('../../php/abrir_conexion.php');

    if (preg_match($archivoTitulo, $titulo)) {
        $sql = "INSERT INTO $tabla_db19 (nombre_tipo_instrumento) VALUES ('$titulo')";
        mysqli_query($conexion, $sql);
        // AUDITORIA *****************************************************************
        $valorID = $_SESSION['id_usr'];
        $nombreUsr= $_SESSION['nombre'];
        $entidad = "Registro de nuevo Tipo de Instrumentos Legales";
        $descripcion_Cambio = "Nuevo registro de Tipo, para la categoría de Instrumentos Legales. Registro realizado por: " . $nombreUsr;

        $accionHecha = "28";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FINAL AUDITORIA ************************************************************
        include('../../php/cerrar_conexion.php');
        echo "Se realizó de manera exitosa el registro del nuevo tipo, para los Instrumentos Legales.";
    }else {
        http_response_code(500);
        include('../../php/cerrar_conexion.php');
    }
}
// NUEVO DOCUMENTO PARA LA PAGINA WEB (Documentos)
if ($identificador == "NuevoInstrumentoLegal") {

    $tituloInstrumento = $_POST["tituloInstrumentoLegal"];

    $Documento = $_FILES["intrumentoDoc"]["name"];
    
    $direccion_instrumentos_legales = $_POST["direccion_instrumentos_legales"];

    $TipoDocSelect = $_POST["TipoDocSelect"];

    $gruposInstrumentos_select = $_POST["gruposInstrumentos_select"];

    $direccionImagenesDIS = "assets/documents/DIS/2024/Instrumentos/".$TipoDocSelect."/".$gruposInstrumentos_select."/";

    $direccionImagenesDSR = "assets/documents/DSR/2024/Instrumentos/".$TipoDocSelect."/".$gruposInstrumentos_select."/";

    $direccionImagenesDCV = "assets/documents/DCV/2024/Instrumentos/".$TipoDocSelect."/".$gruposInstrumentos_select."/";

    $direccionImagenesDEA = "assets/documents/DEA/2024/Instrumentos/".$TipoDocSelect."/".$gruposInstrumentos_select."/";

    $DIRidentify = "";

    if ($direccion_instrumentos_legales == 2) {
        $direccionImagenes = $direccionImagenesDIS;
        $DIRidentify = "Dir. Ing. Sanitaria";

    }
    if ($direccion_instrumentos_legales == 3) {
        $direccionImagenes = $direccionImagenesDSR;
        $DIRidentify = "Dir. Salud Radiologica";

    }
    if ($direccion_instrumentos_legales == 4) {
        $direccionImagenes = $direccionImagenesDCV;
        $DIRidentify = "Dir. Control de Vectores";

    }
    if ($direccion_instrumentos_legales == 5) {
        $direccionImagenes = $direccionImagenesDEA;
        $DIRidentify = "Dir. Epidemiología Ambiental";
    }
    function generarNumeroAleatorio() {
        $numeroAleatorio = rand(1, 999);
        return $numeroAleatorio;
    }
    $nombre_InstrLeg = $direccionImagenes. generarNumeroAleatorio()."-".$Documento;

        $tipo = $_FILES["intrumentoDoc"]["type"];
        $temp = $_FILES["intrumentoDoc"]["tmp_name"];

        if (isset($Documento) && $Documento != "") {
            $tipo = $_FILES["intrumentoDoc"]["type"];
            $temp = $_FILES["intrumentoDoc"]["tmp_name"];

            if (!((strpos($tipo, "pdf")))) {
                http_response_code(500);
            }else {
                if (preg_match($archivoTitulo,$tituloInstrumento) &&
                preg_match($descripcionM,$direccion_instrumentos_legales) &&
                preg_match($soloNum,$TipoDocSelect) &&
                preg_match($soloNum,$gruposInstrumentos_select)) {
                    include ('../../php/abrir_conexion.php');

                    $query = "INSERT INTO $tabla_db18 (titulo_instrumento, nombre_instrumento, id_instrumento_direccion, id_instrumento_grupo, id_instrumento_tipo, instrumento_visible, fecha_creacion_instrumento, fecha_actualizacion_instrumento) VALUES ('$tituloInstrumento','$nombre_InstrLeg','$direccion_instrumentos_legales','$gruposInstrumentos_select','$TipoDocSelect','1',now(),now())";
                    $resultado = mysqli_query($conexion, $query);

                    // AUDITORIA *****************************************************************
                    $valorID = $_SESSION['id_usr'];
                    $nombreUsr= $_SESSION['nombre'];
                    $Img_O_Vid = "";
                    
                    $Img_O_Vid = "Documento Instrumento Legal";
                    $accionHecha = "29";

                    $entidad = "Registro de ".$Img_O_Vidnuevo.", en la ".$DIRidentify.".";
                    $descripcion_Cambio = "Nuevo registro de ".$Img_O_Vid.", en la sección de Instrumentos Legales de la Página Web de la ".$DIRidentify."; realizado por: " . $nombreUsr;

                    
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidad', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FINAL AUDITORIA ************************************************************
                    if ($resultado) {
                        # Se guardará dependiendo del directorio, en una carpeta llamada respaldos
                        $carpeta = "../../".$direccionImagenes;
                        if (!file_exists($carpeta)) {
                            mkdir($carpeta, 0700, true);
                        }

                        move_uploaded_file($temp,"../../".$nombre_InstrLeg);
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