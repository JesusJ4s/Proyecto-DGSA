<?php
session_start();
ob_start();

$comprobador = $_POST['consultarCoordinaciones'];
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';


// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO EN ESPERA -- INTERACTIVA)
if ($comprobador == "Coordinaciones") {

    include ('../../php/abrir_conexion.php');


    echo
        '
    <table id="consultaCoor" class="table table-striped table-hover">
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
        <tbody id="bodyCoor">
    ';

    $existe = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db21 bl 
    INNER JOIN $tabla_db1 us ON bl.id_coord_usuario=us.id_usuario
    INNER JOIN $tabla_db5 dr ON bl.id_coord_direccion=dr.id_direcciones
    INNER JOIN $tabla_db2_2 es ON bl.id_coord_visible=es.id_estado");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_coordinacion_web'] . '</td>
                <td class="text-end">' . $consulta['fecha_actualizacion_coord'] . '</td>
                
                <td class="text-end">'. $consulta['nombre'].' '.$consulta['apellido'] .'</td>
                <td>' . $consulta['nombre_dire'] . '</td>
                <td>' . $consulta['titulo_text1'] . '</td>
                <td>' . $consulta['fecha_creacion_coord'] . '</td>
                <td><button class="btn btn-secondary mb-1" id="modifyCoord" name="modifyCoord" onclick="ModCoord();">Modificar</button></td>
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
if ($comprobador == "CoordinacionesModificar") {
    $identificadorCoord = $_POST['ide'];
    $contador = 0;

    if (preg_match($soloNum,$identificadorCoord)) {

        include ('../../php/abrir_conexion.php');

        $SQL_Modificacion = "SELECT * FROM $tabla_db21 bl 
        INNER JOIN $tabla_db1 us ON bl.id_coord_usuario=us.id_usuario
        INNER JOIN $tabla_db5 dr ON bl.id_coord_direccion=dr.id_direcciones
        INNER JOIN $tabla_db2_2 es ON bl.id_coord_visible=es.id_estado WHERE id_coordinacion_web = '$identificadorCoord'";
        $resultados = mysqli_query($conexion, $SQL_Modificacion);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $valores['id_coordinacion_web'] = $consulta['id_coordinacion_web'];
            $valores['nombre_dire'] = $consulta['nombre_dire'];
            $valores['titulo_text1'] = $consulta['titulo_text1'];
            $valores['fecha_creacion_coord'] = $consulta['fecha_creacion_coord'];
            $valores['id_coord_visible'] = $consulta['id_coord_visible'];
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
    $identificador = $_POST['identificador'];
    $visible_anterior = $_POST['actInac'];
    // IMAGENES PARA BORRAR DE SER NECESARIO
    $existeCoordi = 0;

    if (preg_match($soloNum,$identificador)) {
        include ('../../php/abrir_conexion.php');

        //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
        $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db21 WHERE id_coordinacion_web = '$identificador'");
        while ($consulta = mysqli_fetch_array($verificar)) {
            $activo = $consulta['visible_anterior'];
            $ubiImagen1 = $consulta['imagen_coord1'];
            $ubiImagen2 = $consulta['imagen_coord2'];
            $ubiImagen3 = $consulta['imagen_coord3'];
            $existeCoordi++;
        }
        if ($existeCoordi <> 0 && $activo != 3) {
            // AUDITORIA SOLO VERIFICAR SI SIGUE ACTIVO
            //********************************************************* **************
            $valorID = $_SESSION['id_usr'];
            $columnas = array(
                'visible_anterior' => 'Estado de la Coordinación',
            );
            // BUSCAR DATOS BD
            $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db21 WHERE id_coordinacion_web = '$identificador'");
            $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
            $cambios = array();
            $huboCambios = false; // Variable para verificar si se realizaron cambios

            $estadoCoordi = array();
            $query = "SELECT * FROM $tabla_db2_2";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $estadoCoordi[$fila['id_estado']] = $fila['nombre_status'];
                }
            }
            foreach ($columnas as $columna => $nombre) {
                switch ($columna) { 
                    case 'visible_anterior':
                        $valor_antiguo = isset($estadoCoordi[$datos_antiguos[$columna]]) ? $estadoCoordi[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($estadoCoordi[$$columna]) ? $estadoCoordi[$$columna] : "";
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
                $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en los datos de una Página web de Coordinación, cambios realizados: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
                if ($visible_anterior == 1 || $visible_anterior == 2) {
                    $accionHecha = "33";
                }else if ($visible_anterior == 3) {
                    $accionHecha = "34";
                }
                $entidadModificada = "Identificador de la Página de Coordinación: ".$identificador;
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidadModificada', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
            }
            // FIN DE LA AUDITORIA *************************************************************
            if ($visible_anterior == 1 || $visible_anterior == 2) {
                // MODIFICAR DATOS
                $ModificarCoordinacion = "UPDATE $tabla_db21 SET id_coord_visible='$visible_anterior' WHERE id_coordinacion_web = '$identificador'";
                mysqli_query($conexion, $ModificarCoordinacion);

                echo "<h6>Coordinación cambiado exitosamente.</h6>";
                include ('../../php/cerrar_conexion.php');
        
            }
            // ELIMINANDO BOLETIN DE LA BASE DE DATOS (IMAGEN DEL SISTEMA)
            else if ($visible_anterior == 3){
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
                $ModificarCoordinación = "UPDATE $tabla_db21 SET id_coord_direccion='6', descripcion_text1='',descripcion_text2='',descripcion_text3='',lista1_coord='',lista2_coord='', id_coord_visible='$visible_anterior' WHERE id_coordinacion_web = '$identificador'";
                mysqli_query($conexion, $ModificarCoordinación);

                echo "<h6>Coordinación eliminada exitosamente.</h6>";
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

// if ($comprobador=="coordiEntera") {
//     $identificadorCoord = $_POST['id'];
//     $contador = 0;

//     if (preg_match($soloNum,$identificadorCoord)) {

//         include ('../../php/abrir_conexion.php');
//         $SQL_Modificacion = "SELECT * FROM $tabla_db21 WHERE id_coordinacion_web = '$identificadorCoord'";
//         $resultados = mysqli_query($conexion, $SQL_Modificacion);
//         while ($consulta = mysqli_fetch_array($resultados)) {
//             $contador++;
//         }

//         if ($contador<>0) {
//             $SQL_Modificacion = "SELECT * FROM $tabla_db21 bl 
//         INNER JOIN $tabla_db1 us ON bl.id_coord_usuario=us.id_usuario
//         INNER JOIN $tabla_db5 dr ON bl.id_coord_direccion=dr.id_direcciones
//         INNER JOIN $tabla_db2_2 es ON bl.id_coord_visible=es.id_estado WHERE id_coordinacion_web = '$identificadorCoord'";
//         $resultados = mysqli_query($conexion, $SQL_Modificacion);
//         while ($consulta = mysqli_fetch_array($resultados)) {
//             $valores['Vcoord_direccion'] = $consulta['nombre_dire'];
//             $valores['Vtitulo_txt1'] = $consulta['titulo_txt1'];
//             $valores['descripcion_txt1PART2'] = $consulta['descripcion_txt1'];

//             $valores['Vtitulo_txt2'] = $consulta['titulo_txt2'];
//             $valores['descripcion_txt2PART2'] = $consulta['descripcion_txt2'];

//             $valores['Vtitulo_txt3'] = $consulta['titulo_txt3'];
//             $valores['descripcion_txt3PART2'] = $consulta['descripcion_txt3'];

//             $valores['Vtitulo_lista1'] = $consulta['titulo_lista1'];
//             $valores['Vtitulo_lista2'] = $consulta['titulo_lista2'];

//             $valores['Lista1_coordPART2'] = $consulta['Lista1_coord'];
//             $valores['Lista2_coordPART2'] = $consulta['Lista2_coord'];
//             $contador++;
//         }
//         // Convirtiendo el array en algo leíble por JS
//         $valores = json_encode($valores);
//         echo $valores;
//         include ('../../php/cerrar_conexion.php');
//         }else {
//             http_response_code(500);
//         }

        
//     }else {
//         http_response_code(500);
//     }
// }


