<?php
session_start();
ob_start();

$comprobador = $_POST['consultarBoletines'];
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';


// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO EN ESPERA -- INTERACTIVA)
if ($comprobador == "Boletines") {

    include ('../../php/abrir_conexion.php');


    echo
        '
    <table id="consultaBol" class="table table-striped table-hover">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th class="col-1">Identificador</th>
                <th class="col-1">Actualizacion</th>
                <th class="">Autor</th>
                <th class="">Dirección perteneciente</th>
                <th class="">Titulo</th>
                <th class="">Fecha de Creación</th>
                <th class="col-1">Modificar</th>
                <th class="col-1">Visible</th>
            </tr>
        </thead>
        <tbody id="bodyBol">
    ';

    $existe = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db17 bl 
    INNER JOIN $tabla_db1 us ON bl.id_usuario_boletin=us.id_usuario
    INNER JOIN $tabla_db5 dr ON bl.id_boletin_direccion=dr.id_direcciones
    INNER JOIN $tabla_db2_2 es ON bl.boletin_visible=es.id_estado");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_boletin'] . '</td>
                <td class="text-end">' . $consulta['fecha_actualizacion_bol'] . '</td>
                
                <td class="text-end">'. $consulta['nombre'].' '.$consulta['apellido'] .'</td>
                <td>' . $consulta['nombre_dire'] . '</td>
                <td>' . $consulta['titulo_boletin'] . '</td>
                <td>' . $consulta['fecha_creacion_bol'] . '</td>
                <td><button class="btn btn-secondary mb-1" id="modificarBole" name="modificarBole" onclick="ModfBol();">Modificar</button></td>
                <td>' . $consulta['nombre_status'] . '</td>
            </tr>
        
        ';
        $existe++;
        // $contador++;

    }
    echo '</tbody>
            <tfoot>
                <tr  class="align-middle text-center">
                    <th class="col-1">Identificador</th>
                    <th class="col-1">Actualizacion</th>
                    <th class="">Autor</th>
                    <th class="">Dirección perteneciente</th>
                    <th class="">Titulo</th>
                    <th class="">Fecha de Creación</th>
                    <th class="col-1">Modificar</th>
                    <th class="col-1">Visible</th>
                </tr>
            </tfoot>
        </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No hay Boletines registrados en el sistema.</p>";
        include('../../php/cerrar_conexion.php');

    }else {
        include ('../../php/cerrar_conexion.php');
    }

}

// IMPRIMIR DATOS EN MODAL DE LAS MODIFICACIONES
if ($comprobador == "BoletinesModificar") {
    $identificadorBol = $_POST['ide'];
    $contador = 0;

    if (preg_match($soloNum,$identificadorBol)) {

        include ('../../php/abrir_conexion.php');

        $SQL_Modificacion = "SELECT * FROM $tabla_db17 bl 
        INNER JOIN $tabla_db1 us ON bl.id_usuario_boletin=us.id_usuario
        INNER JOIN $tabla_db5 dr ON bl.id_boletin_direccion=dr.id_direcciones
        INNER JOIN $tabla_db2_2 es ON bl.boletin_visible=es.id_estado WHERE id_boletin = '$identificadorBol'";
        $resultados = mysqli_query($conexion, $SQL_Modificacion);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $valores['id_boletin'] = $consulta['id_boletin'];
            $valores['nombre_dire'] = $consulta['nombre_dire'];
            $valores['titulo_boletin'] = $consulta['titulo_boletin'];
            $valores['fecha_creacion'] = $consulta['fecha_creacion_bol'];
            $contador++;
        }
        // Convirtiendo el array en algo leíble por JS
        $valores = json_encode($valores);
        echo $valores;
        include ('../../php/cerrar_conexion.php');
    }else {
        http_response_code(500);
    }
    

}
// MODIFICAR BOLETIN (ELIMINAR, OCULTAR O MOSTRAR)
if ($comprobador=="Modificacion") {
    $id_boletin = $_POST['id_boletinBol'];
    $boletin_visible = $_POST['modificarBol'];
    // IMAGENES PARA BORRAR DE SER NECESARIO

    $existe_Boletin = 0;

    if (preg_match($soloNum,$id_boletin)) {
        include ('../../php/abrir_conexion.php');

        //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
        $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin = '$id_boletin'");
        while ($consulta = mysqli_fetch_array($verificar)) {
            $activo = $consulta['boletin_visible'];
            $ubiImagen1 = "../../".$consulta['img1_boletin'];
            $ubiImagen2 = "../../".$consulta['img2_boletin'];
            $ubiImagen3 = "../../".$consulta['imgvid3_boletin'];
            $existe_Boletin++;
        }
        if ($existe_Boletin <> 0 && $activo != 3) {
            // AUDITORIA SOLO VERIFICAR SI SIGUE ACTIVO
            //********************************************************* **************
            $valorID = $_SESSION['id_usr'];
            $columnas = array(
                'boletin_visible' => 'Estado del Boletín',
            );
            // BUSCAR DATOS BD
            $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin = '$id_boletin'");
            $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
            $cambios = array();
            $huboCambios = false; // Variable para verificar si se realizaron cambios

            $estadoBol = array();
            $query = "SELECT * FROM $tabla_db2_2";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $estadoBol[$fila['id_estado']] = $fila['nombre_status'];
                }
            }
            foreach ($columnas as $columna => $nombre) {
                switch ($columna) { 
                    case 'boletin_visible':
                        $valor_antiguo = isset($estadoBol[$datos_antiguos[$columna]]) ? $estadoBol[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($estadoBol[$$columna]) ? $estadoBol[$$columna] : "";
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
                $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en los datos de un Boletín Informativo, cambios realizados: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
                if ($boletin_visible == 1 || $boletin_visible == 2) {
                    $accionHecha = "25";
                }else if ($boletin_visible == 3) {
                    $accionHecha = "26";
                }
                $entidadModificada = "Identificador del Boletín: ".$id_boletin;
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidadModificada', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
            }
            // FIN DE LA AUDITORIA *************************************************************
            if ($boletin_visible == 1 || $boletin_visible == 2) {
                // MODIFICAR DATOS
                $ModificarBoletin = "UPDATE $tabla_db17 SET boletin_visible='$boletin_visible' WHERE id_boletin = '$id_boletin'";
                mysqli_query($conexion, $ModificarBoletin);

                echo "<h6>Boletin cambiado exitosamente.</h6>";
                include ('../../php/cerrar_conexion.php');
        
            }
            // ELIMINANDO BOLETIN DE LA BASE DE DATOS (IMAGEN DEL SISTEMA)
            else if ($boletin_visible == 3){
                // IMAGEN1
                if (file_exists($ubiImagen1) && $ubiImagen1 != "") {
                    unlink($ubiImagen1);  
                }
                if (file_exists($ubiImagen2) && $ubiImagen2 != "") {
                    unlink($ubiImagen2);  
                }
                if (file_exists($ubiImagen3) && $ubiImagen3 != "") {
                    unlink($ubiImagen3);  
                }
                // ELIMINAR DATOS
                $ModificarBoletin = "UPDATE $tabla_db17 SET id_boletin_direccion='6', text1_boletin='',text2_boletin='',text3_boletin='', boletin_visible='$boletin_visible' WHERE id_boletin = '$id_boletin'";
                mysqli_query($conexion, $ModificarBoletin);

                echo "<h6>Boletin eliminado exitosamente.</h6>";
                include ('../../php/cerrar_conexion.php');

            }else {
                http_response_code(501);
                include('../../php/cerrar_conexion.php'); 
            }


        }else {
            http_response_code(501);     
        }
    }else {
        http_response_code(501);     
    }
}
