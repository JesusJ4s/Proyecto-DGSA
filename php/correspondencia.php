<?php
// INICIANDO LAS VARIABLE GLOBAL
session_start();
ob_start();
date_default_timezone_set("America/Caracas");

function darFormatoOriginal($string)
{
    $string = str_replace(
        array('à', 'ä', 'â', 'À', 'Ä', 'Â'),
        array('a', 'a', 'a', 'A', 'A', 'A'),
        $string
    );
    $string = str_replace(
        array('ë', 'ê', 'è', 'Ë', 'Ê', 'È'),
        array('e', 'e', 'e', 'E', 'E', 'E'),
        $string
    );
    $string = str_replace(
        array('ï', 'î', 'ì', 'Ï', 'Î', 'Ì'),
        array('i', 'i', 'i', 'I', 'I', 'I'),
        $string
    );
    $string = str_replace(
        array('ö', 'ô', 'ò', 'Ö', 'Ô', 'Ò'),
        array('o', 'o', 'o', 'O', 'O', 'O'),
        $string
    );
    $string = str_replace(
        array('ü', 'û', 'ù', 'Ü', 'Û', 'Ù'),
        array('u', 'u', 'u', 'U', 'U', 'U'),
        $string
    );
    $string = str_replace(
        array('ç', 'Ç'),
        array('c', 'C'),
        $string
    );
    $string = str_replace(
        array('[', '|', '°', '¬', '!', '^', '`', '~', '#', '$', '%', '&', '/', '(', ')', '=', '?', '¿', '{', '}', '+', '<', '>', '¡', '¨', '*', ':', ';', ']', "'", '"'),
        '*',
        $string
    );

    return $string;
}
$findme = "*";
$expresion_date = "/^(\d{2})\/(\d{2})\/(\d{4})$/";
$texto255 = '/^[a-zA-ZÀ-ý,\s]{0,255}$/';
$nros = "/^[0-9]{1,11}$/";


$correspondencia = $_POST['correspondencia'];
$valores = array();

// GENERANDO EL NRO DE IDENTIFICADOR
if ($correspondencia == "contador") {
    $cuenta = 0;

    include("abrir_conexion.php");

    $tabla_Buscar = "SELECT * FROM $tabla_db10";
    $resultados = mysqli_query($conexion, $tabla_Buscar);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $cuenta++;
    }
    $total = $cuenta + 1;
    $valores['contador'] = $total;
    $valores = json_encode($valores);
    echo $valores;
    include("cerrar_conexion.php");

}
// GENERANDO TABLA CON TODOS LOS REGISTROS
if ($correspondencia == "tabla") {
    $cuenta = 0;

    include("abrir_conexion.php");

    echo
        '
    <table id="dataTable_corres" class="table table-striped table-hover">
        <thead class="bg-grey text-light">
            <tr class="align-middle text-center">
                <th>Nro de oficio</th>
                <th>Fecha</th>
                <th>Procedencia</th>
                <th>Asunto</th>
                <th>Nro de adminsión</th>
                <th>Fecha llegada</th>
                <th>Dirección</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody id="body-body" class="align-middle">
    ';

    $tabla_Buscar = mysqli_query($conexion, "SELECT * FROM $tabla_db10 c INNER JOIN $tabla_db11 e ON c.procedencia = e.id_empresas INNER JOIN $tabla_db12 nt ON c.id_nro_admision = nt.id_corresp INNER JOIN $tabla_db5 di ON c.oficina_destino = di.id_direcciones INNER JOIN $tabla_db4 dv ON c.coordi_destino = dv.id_divisiones INNER JOIN $tabla_db13 ns ON nt.estatus_Corres = ns.id_estatus_notifi ORDER BY id_nro_admision DESC");
    // $resultados = mysqli_query($conexion,$tabla_Buscar);
    while ($consulta = mysqli_fetch_array($tabla_Buscar)) {
        echo
            '
            <tr>
                <td>' . $consulta['nro_oficio'] . '</td>
                <td>' . $consulta['fecha_sal_empresa'] . '</td>
                <td>' . $consulta['nombre_empresa'] . '</td>
                <td>' . $consulta['asunto'] . '</td>
                <td class="col-1">' . $consulta['id_nro_admision'] . '</td>
                <td>' . $consulta['fecha_llegada'] . '</td>
                <td><b>' . $consulta['nombre_dire'] . '</b><br>
                ' . $consulta['nombre_div'] . '</td>
                <td class="text-center">' . $consulta['nombre_estatus_notifi'] . '</td>
            </tr>
        
        ';
        $cuenta++;
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle text-center">
                    <th>Nro de oficio</th>
                    <th>Fecha</th>
                    <th>Procedencia</th>
                    <th>Asunto</th>
                    <th>Nro de adminsión</th>
                    <th>Fecha llegada</th>
                    <th>Dirección</th>
                    <th>Estatus</th>
                </tr>
            </tfoot>
        </table>';
    if ($cuenta == 0) {
        echo "";
    }
    include("cerrar_conexion.php");

}
// GENERANDO TABLA CON TODOS LOS REGISTROS INDIVIDUALES
if ($correspondencia == "tabla_indiv") {
    $cuenta = 0;
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];

    include("abrir_conexion.php");
    $idUsr = $_SESSION['id_usr'];
    echo
        '
    <table id="dataTable_corres_ind" class="table table-striped table-hover">
        <thead class="bg-grey text-light">
            <tr class="align-middle text-center">
                <th>Nro de oficio</th>
                <th>Fecha</th>
                <th>Procedencia</th>
                <th>Asunto</th>
                <th>Nro de adminsión</th>
                <th>Fecha llegada</th>
                <th>Dirección</th>
                <th>Aceptar</th>
            </tr>
        </thead>
        <tbody id="bodyCorresInd" class="align-middle">
    ';

    $tabla_Buscar = mysqli_query($conexion, "SELECT * FROM $tabla_db12 nt INNER JOIN $tabla_db11 em ON nt.id_empresa_corresp = id_empresas INNER JOIN $tabla_db10 co ON nt.id_corresp = id_nro_admision INNER JOIN $tabla_db4 dv ON nt.id_corres_divi = id_divisiones INNER JOIN $tabla_db5 dr ON nt.id_corres_dire = dr.id_direcciones WHERE Jefe_Corres = '$idUsr' AND id_corres_divi='$usuario_coordinacion' AND estatus_Corres = 1");
    // $resultados = mysqli_query($conexion,$tabla_Buscar);
    while ($consulta = mysqli_fetch_array($tabla_Buscar)) {
        $idCorres = $consulta['id_notificacion'];
        echo
            '
            <tr>
                <td>' . $consulta['nro_oficio'] . '</td>
                <td>' . $consulta['fecha_sal_empresa'] . '</td>
                <td>' . $consulta['nombre_empresa'] . '</td>
                <td>' . $consulta['asunto'] . '</td>
                <td>' . $consulta['id_nro_admision'] . '</td>
                <td>' . $consulta['fecha_llegada_corresp'] . '</td>
                <td><b>Dirección</b>: ' . $consulta['nombre_dire'] . '<br>
                <b>Coordinación</b>: ' . $consulta['nombre_div'] . '
                </td>
                <td><button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#confirmar" onclick="datosTabla();">Confirmar</button></td>
            </tr>
        ';
        $cuenta++;
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle text-center">
                    <th>Nro de oficio</th>
                    <th>Fecha</th>
                    <th>Procedencia</th>
                    <th>Asunto</th>
                    <th>Nro de adminsión</th>
                    <th>Fecha llegada</th>
                    <th>Dirección</th>
                    <th>Estatus</th>
                </tr>
            </tfoot>
        </table>
        ';
    if ($cuenta == 0) {
        echo "";
    }
    include("cerrar_conexion.php");

}
// LLENANDO LOS DATOS EN CASO DE QUE EXISTA LA EMPRESA
if ($correspondencia == "empresas") {
    $cuenta = 0;
    $rif = $_POST['rif'];
    $identificador = $_POST['identificador'];

    include("abrir_conexion.php");

    $tabla_Buscar = "SELECT * FROM $tabla_db11 WHERE rif = '$rif' AND identificador_rif = '$identificador'";
    $resultados = mysqli_query($conexion, $tabla_Buscar);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['idEmpresa'] = $consulta['id_empresas'];
        $valores['nombre_emp'] = $consulta['nombre_empresa'];
        $cuenta++;
    }
    if ($cuenta <> 0) {
        $valores = json_encode($valores);
        echo $valores;
        include("cerrar_conexion.php");
    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }


}
// REGISTRO DE LA EMPRESA (AUDITORIA LISTA)
if ($correspondencia == "registroEmp") {
    $rif = $_POST['rif'];
    $identificador = $_POST['identi'];
    $nombre_empresa = $_POST['nombre'];
    $dedicacion = $_POST['dediEmp'];

    $pos = strpos($rif, $findme);
    $pos1 = strpos($identificador, $findme);
    $pos2 = strpos($nombre_empresa, $findme);
    $pos3 = strpos($dedicacion, $findme);

    if ($_SESSION['id_departamento'] == 80) {
        if ($pos === false && $pos1 === false && $pos2 === false && $pos3 === false) {
            if ($rif != '' && $identificador != '' && $nombre_empresa != '' && $dedicacion != '') {
                include("abrir_conexion.php");
                $rifExiste = 0;
                $buscar_rif = "SELECT * FROM $tabla_db11 WHERE rif = '$rif' AND identificador_rif = '$identificador'";
                $resultados = mysqli_query($conexion, $buscar_rif);
                while ($consulta = mysqli_fetch_array($resultados)) {
                    $rifExiste++;
                }
                if ($rifExiste == 0) {
                    $registrar_empresa = "INSERT INTO $tabla_db11 (id_empresas, identificador_rif, rif, nombre_empresa, dedicacion) values (NULL,'$identificador', '$rif', '$nombre_empresa', '$dedicacion')";

                    $conexion->query($registrar_empresa);

                    // AUDITORIA *****************************************************************
                    $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db11 en WHERE rif = '$rif' AND identificador_rif = '$identificador'");
                    while ($consulta = mysqli_fetch_array($buscarID)) {
                        $nombreEmpresa = $consulta['nombre_empresa'];
                        $identi = $consulta['identificador_rif'] . "-" . $consulta['rif'];
                    }

                    $valorID = $_SESSION['id_usr'];
                    $nombreAd = $_SESSION['nombre'];
                    $descripcion_Cambio = "Se registra una nueva empresa en el sistema, bajo el nombre. " . $nombreEmpresa . ", y cuyo RIF es: " . $identi . ". Registro hecho por: " . $nombreAd . ".";

                    $accionHecha = "15";
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEmpresa', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FINAL AUDITORIA ************************************************************


                    echo "<h5>Se registró la empresa exitosamente, puede terminar de completar los campos faltantes y hacer el registro</h5>";

                    include("cerrar_conexion.php");

                } else {
                    http_response_code(502);
                    include("cerrar_conexion.php");
                }
            } else {
                http_response_code(501);
                include("cerrar_conexion.php");
            }
        } else {
            http_response_code(500);
            include("cerrar_conexion.php");
        }
    }else {
        http_response_code(503);
            include("cerrar_conexion.php");
    }
}
// REGISTRO NUEVA CORRESPONDENCIA (AUDITORIA LISTA)
if ($correspondencia == "registroCorres") {
    $nroOficio = $_POST['nroOficio'];
    $fecha_salida = $_POST['fecha_salida'];
    $procedencia = $_POST['idEmpresa'];
    $asunto = $_POST['asunto'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $rif_empresa = $_POST['rif_empresa'];

    $direccion_select = $_POST['direccion_select'];
    $division_select = $_POST['division_select'];

    $pos = strpos($nroOficio, $findme);
    $pos1 = strpos($procedencia, $findme);
    $pos2 = strpos($asunto, $findme);
    $pos3 = strpos($rif_empresa, $findme);
    $pos4 = strpos($direccion_select, $findme);

    if ($_SESSION['id_departamento'] == 80) {
        if ($pos === false && $pos1 === false && $pos2 === false && $pos3 === false && $pos4 === false) {
            if ($nroOficio != '' && $fecha_salida != '' && $procedencia != '' && $asunto != '' && $fecha_llegada != '' && $rif_empresa != '' && $direccion_select != '') {
                // $nroOficio!=''&&$fecha_salida!=''&&$procedencia!=''&&$asunto!=''&&  $fecha_llegada!=''&&$rif_empresa!=''&&$departamento_select!=''
                include("abrir_conexion.php");
                $rifExiste = 0;
                $buscar_rif = "SELECT * FROM $tabla_db11 WHERE rif = '$rif_empresa' AND id_empresas = '$procedencia'";
                $resultados = mysqli_query($conexion, $buscar_rif);
                while ($consulta = mysqli_fetch_array($resultados)) {
                    $rifExiste++;
                }
                if ($rifExiste <> 0) {
                    // REGISTRANDO CORRESPONDENCIA
                    $registrar_correspo = "INSERT INTO $tabla_db10 (id_nro_admision, nro_oficio, fecha_sal_empresa, procedencia, rif_corresp_emp, asunto, fecha_llegada, oficina_destino, coordi_destino) values (NULL,'$nroOficio', '$fecha_salida', '$procedencia', '$rif_empresa', '$asunto', '$fecha_llegada','$direccion_select', '$division_select')";
                    $conexion->query($registrar_correspo);
    
                    // REGISTRANDO NOTIFICACIÓN PARA EL JEFE DE DIVISIÓN **************************************
                    // CONSULTAS A LA BASE DE DATOS
                    $buscarRegistro = "SELECT * FROM $tabla_db10 WHERE rif_corresp_emp = '$rif_empresa' AND nro_oficio = '$nroOficio' AND fecha_llegada = '$fecha_llegada' AND coordi_destino = '$division_select'";
                    $resultados = mysqli_query($conexion, $buscarRegistro);
                    while ($consulta = mysqli_fetch_array($resultados)) {
                        $nroAdm = $consulta['id_nro_admision'];
                    }
                    // BUSCAR AL JEFE DE LA DIRECCION (SOLO PUEDE HABER UNO)
                    $buscarJefe = "SELECT * FROM $tabla_db1 WHERE usuario_division_id = '$division_select' AND (usuario_rol_id = '3' OR usuario_rol_id = '1')";
                    $resultados = mysqli_query($conexion, $buscarJefe);
                    while ($consulta = mysqli_fetch_array($resultados)) {
                        $idJefe = $consulta['id_usuario'];
                        $cedulaJefe = $consulta['cedula'];
                    }
                    // FECHA LIMITE
                    $fecha_actual = date('Y-m-d h:i:s');
    
                    $registrarNotificacion = "INSERT INTO $tabla_db12 (id_notificacion, id_corresp, id_empresa_corresp, id_corres_divi, id_corres_dire, Jefe_Corres, Jefe_Ced_Corres, fecha_llegada_corresp, descripcion_corresp, estatus_Corres) values (NULL,'$nroAdm', '$procedencia','$division_select', '$direccion_select', '$idJefe', '$cedulaJefe', now(), '$asunto', '1')";
                    $conexion->query($registrarNotificacion);
                    // ********************************************************
    
                    // AUDITORIA *****************************************************************
                    $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db10 WHERE rif_corresp_emp = '$rif_empresa' AND nro_oficio = '$nroOficio'");
                    while ($consulta = mysqli_fetch_array($buscarID)) {
                        $nroEmprBD = $consulta['procedencia'];
                    }
                    $buscarID2 = mysqli_query($conexion, "SELECT * FROM $tabla_db11 WHERE id_empresas = '$nroEmprBD'");
                    while ($consulta = mysqli_fetch_array($buscarID2)) {
    
                        $nameEmprBD = $consulta['nombre_empresa'];
                        $rifEmprBD = $consulta['identificador_rif'] . "-" . $consulta['rif'];
                    }
    
                    $valorID = $_SESSION['id_usr'];
                    $nombreAd = $_SESSION['nombre'];

                    $descripcion_Cambio = "Se registra una nueva correspondencia, nro de oficio: " . $nroOficio . ", bajo el nombre de la empresa: " . $nameEmprBD . ", cuyo rif es: " . $rifEmprBD . ". Usuario encargado del registro: " . $nombreAd;
                    $valorCedula = $_SESSION['cedula_var_global'];
    
                    $accionHecha = "13";
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$valorCedula', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
    
                    // FINAL AUDITORIA ************************************************************
    
    
                    echo "<h5>Se registró la información de la correspondencia de manera exitosa.</h5>";
    
                    include("cerrar_conexion.php");
    
                } else {
                    http_response_code(502);
                    include("cerrar_conexion.php");
                }
            } else {
                http_response_code(501);
                include("cerrar_conexion.php");
            }
        } else {
            http_response_code(500);
            include("cerrar_conexion.php");
        }
    }else {
        http_response_code(503);
            include("cerrar_conexion.php");
    }
}

// CONFIRMANDO CORRESPONDENCIA (AUDITORIA LISTA)
if ($correspondencia == "confirmarCo") {
    $nroAdmision = $_POST['nroAdmin'];
    $nota_final_corresp = $_POST['nota_final'];
    $fecha_actual = date('Y-m-d h:i:s');
    $estatus_Corres='2';
    if ($nroAdmision != '' && preg_match($nros, $nroAdmision) && preg_match($texto255,$nota_final_corresp)) {
        include("abrir_conexion.php");

        // AUDITORIA *****************************************************************
        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'estatus_Corres' => 'Estatus de la Correspondencia',
            'nota_final_corresp' => 'Nota de confirmación',
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db12 WHERE id_corresp='$nroAdmision'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        // Consultar los nombres de los estatusC permitidos
        $estatusC = array();
        $query = "SELECT * FROM $tabla_db13";
        $resultado = mysqli_query($conexion, $query);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $estatusC[$fila['id_estatus_notifi']] = $fila['nombre_estatus_notifi'];
            }
        }
        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                case 'estatus_Corres':
                    $valor_antiguo = isset($estatusC[$datos_antiguos[$columna]]) ? $estatusC[$datos_antiguos[$columna]] : "";
                    $valor_nuevo = isset($estatusC[$$columna]) ? $estatusC[$$columna] : "";
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

        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " aceptó correspondencia, con el nro de admisión " . $nroAdmision . ". " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $valorCedula = $_SESSION['cedula_var_global'];

        $accionHecha = "14";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$valorCedula', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FIN DE LA AUDITORIA ************************************************************
        
        $ConfirmarSQL = "UPDATE $tabla_db12 SET
        fecha_confirmacion_corres=now(), 
        estatus_Corres='$estatus_Corres', nota_final_corresp='$nota_final_corresp' 
        WHERE id_corresp = '$nroAdmision'";
        mysqli_query($conexion, $ConfirmarSQL);

        echo "Se ha confirmado la recepción de la correspondencia de manera exitosa.";
        include("cerrar_conexion.php");
    } else {
        http_response_code(500);
    }
}
// GENERANDO TABLA CON TODOS LOS REGISTROS INDIVIDUALES FINAL (ACEPTADOS)
if ($correspondencia == "tabla_indiv_FIN") {
    $cuenta = 0;
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];
    $rolUniversal = $_SESSION['nombre_rol'];
    include("abrir_conexion.php");
    $idUsr = $_SESSION['id_usr'];
    echo
        '
    <table id="dataTable_corres_ind_FIN" class="table table-striped table-hover">
        <thead class="bg-grey text-light">
            <tr class="align-middle text-center">
                <th>Nro de oficio</th>
                <th>Fecha</th>
                <th>Procedencia</th>
                <th>Asunto</th>
                <th>Nro de adminsión</th>
                <th>Fecha llegada</th>
                <th>Fecha Confirmación</th>
                <th>Aceptar</th>
            </tr>
        </thead>
        <tbody id="bodyCorresInd" class="align-middle">
    ';

    $tabla_Buscar = mysqli_query($conexion, "SELECT * FROM $tabla_db12 nt 
    INNER JOIN $tabla_db11 em ON nt.id_empresa_corresp = id_empresas 
    INNER JOIN $tabla_db10 co ON nt.id_corresp = id_nro_admision 
    INNER JOIN $tabla_db4 dv ON nt.id_corres_divi = id_divisiones 
    INNER JOIN $tabla_db5 dr ON nt.id_corres_dire = dr.id_direcciones 
    INNER JOIN $tabla_db13 ns ON nt.estatus_Corres = ns.id_estatus_notifi 
    WHERE Jefe_Corres = '$idUsr' AND id_corres_divi='$usuario_coordinacion' AND estatus_Corres = '2'");
    // $resultados = mysqli_query($conexion,$tabla_Buscar);
    while ($consulta = mysqli_fetch_array($tabla_Buscar)) {
        $idCorres = $consulta['id_notificacion'];
        echo
            '
            <tr>
                <td>' . $consulta['nro_oficio'] . '</td>
                <td>' . $consulta['fecha_sal_empresa'] . '</td>
                <td>' . $consulta['nombre_empresa'] . '</td>
                <td>' . $consulta['asunto'] . '</td>
                <td>' . $consulta['id_nro_admision'] . '</td>
                <td>' . $consulta['fecha_llegada_corresp'] . '</td>
                <td>' . $consulta['fecha_confirmacion_corres'] . '</td>
                <td class="text-center">' . $consulta['nombre_estatus_notifi'] . '</td>
            </tr>
        ';
        $cuenta++;
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle text-center">
                    <th>Nro de oficio</th>
                    <th>Fecha</th>
                    <th>Procedencia</th>
                    <th>Asunto</th>
                    <th>Nro de adminsión</th>
                    <th>Fecha llegada</th>
                    <th>Fecha Confirmación</th>
                    <th>Aceptar</th>
                </tr>
            </tfoot>
        </table>
        ';
    if ($cuenta == 0) {
        echo "";
    }
    include("cerrar_conexion.php");

}
// GENERANDO TABLA CON TODOS LOS REGISTRO ACEPTADOS (ADMIN)
if ($correspondencia == "tabla_indiv_FIN_ADMIN") {
    $cuenta = 0;
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];
    $rolUniversal = $_SESSION['nombre_rol'];
    include("abrir_conexion.php");
    $idUsr = $_SESSION['id_usr'];
    echo
        '
    <table id="dataTable_corres_ind_FIN_AD" class="table table-striped table-hover">
        <thead class="bg-grey text-light">
            <tr class="align-middle text-center">
                <th>Nro de oficio</th>
                <th>Fecha</th>
                <th>Procedencia</th>
                <th>Asunto</th>
                <th>Nombre Coordinación</th>
                <th>Fecha llegada</th>
                <th>Fecha Confirmación</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody id="bodyCorresInd" class="align-middle">
    ';

    $tabla_Buscar = mysqli_query($conexion, "SELECT * FROM $tabla_db12 nt 
    INNER JOIN $tabla_db11 em ON nt.id_empresa_corresp = id_empresas 
    INNER JOIN $tabla_db10 co ON nt.id_corresp = id_nro_admision 
    INNER JOIN $tabla_db4 dv ON nt.id_corres_divi = id_divisiones 
    INNER JOIN $tabla_db5 dr ON nt.id_corres_dire = dr.id_direcciones 
    INNER JOIN $tabla_db13 ns ON nt.estatus_Corres = ns.id_estatus_notifi");
    // $resultados = mysqli_query($conexion,$tabla_Buscar);
    while ($consulta = mysqli_fetch_array($tabla_Buscar)) {
        $idCorres = $consulta['id_notificacion'];
        echo
            '
            <tr>
                <td>' . $consulta['nro_oficio'] . '</td>
                <td>' . $consulta['fecha_sal_empresa'] . '</td>
                <td>' . $consulta['nombre_empresa'] . '</td>
                <td>' . $consulta['asunto'] . '</td>
                <td>' . $consulta['nombre_div'] . '</td>
                <td>' . $consulta['fecha_llegada_corresp'] . '</td>
                <td>' . $consulta['fecha_confirmacion_corres'] . '</td>
                <td class="text-center">' . $consulta['nombre_estatus_notifi'] . '</td>
            </tr>
        ';
        $cuenta++;
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle text-center">
                    <th>Nro de oficio</th>
                    <th>Fecha</th>
                    <th>Procedencia</th>
                    <th>Asunto</th>
                    <th>Nombre Coordinación</th>
                    <th>Fecha llegada</th>
                    <th>Fecha Confirmación</th>
                    <th>Estatus</th>
                </tr>
            </tfoot>
        </table>
        ';
    if ($cuenta == 0) {
        echo "";
    }
    include("cerrar_conexion.php");

}
?>