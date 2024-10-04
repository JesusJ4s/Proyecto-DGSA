<?php
session_start();
ob_start();

$comprobador = $_POST['consultarInstrumento'];
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';


// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO EN ESPERA -- INTERACTIVA)
if ($comprobador == "Instrumento") {

    include ('../../php/abrir_conexion.php');


    echo
        '
    <table id="consultaInst" class="table table-striped table-hover">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th class="col-1">Identificador</th>
                <th class="col-1">Actualizacion</th>
                <th class="">Titulo</th>
                <th class="">Dirección perteneciente</th>
                <th class="">Grupo</th>
                <th class="">Tipo</th>
                <th class="col-1">Modificar</th>
                <th class="col-1">Visible</th>
            </tr>
        </thead>
        <tbody id="bodyInstr">
    ';

    $existe = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db18 il 
    INNER JOIN $tabla_db5 dr ON il.id_instrumento_direccion=dr.id_direcciones
    INNER JOIN $tabla_db20 gr ON il.id_instrumento_grupo=gr.id_grup_instrumento
    INNER JOIN $tabla_db2_2 st ON il.instrumento_visible=st.id_estado
    INNER JOIN $tabla_db19 tp ON il.id_instrumento_tipo=tp.id_tipo_instrumento");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_instrumento_legal'] . '</td>
                <td class="text-end">' . $consulta['fecha_actualizacion_instrumento'] . '</td>
                
                <td class="text-end">'. $consulta['titulo_instrumento'].'</td>
                <td>' . $consulta['nombre_dire'] . '</td>
                <td>' . $consulta['nombre_grup_instrumento'] . '</td>
                <td>' . $consulta['nombre_tipo_instrumento'] . '</td>
                <td><button class="btn btn-secondary mb-1" id="modificarInstru" name="modificarInstru" onclick="ModfInstru();">Modificar</button></td>
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
                    <th class="">Titulo</th>
                    <th class="">Dirección perteneciente</th>
                    <th class="">Grupo</th>
                    <th class="">Tipo</th>
                    <th class="col-1">Modificar</th>
                    <th class="col-1">Visible</th>
                </tr>
            </tfoot>
        </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No hay Instrumentos registrados en el sistema.</p>";
        include('../../php/cerrar_conexion.php');

    }else {
        include ('../../php/cerrar_conexion.php');
    }

}

// IMPRIMIR DATOS EN MODAL DE LAS MODIFICACIONES
if ($comprobador == "InstruModificar") {
    $identificadorInstrumento = $_POST['ide'];
    $contador = 0;

    if (preg_match($soloNum,$identificadorInstrumento)) {

        include ('../../php/abrir_conexion.php');

        $SQL_Modificacion = "SELECT * FROM $tabla_db18 il 
        INNER JOIN $tabla_db5 dr ON il.id_instrumento_direccion=dr.id_direcciones
        INNER JOIN $tabla_db19 tp ON il.id_instrumento_tipo=tp.id_tipo_instrumento WHERE id_instrumento_legal = '$identificadorInstrumento'";
        $resultados = mysqli_query($conexion, $SQL_Modificacion);
        while ($consulta = mysqli_fetch_array($resultados)) {

            $valores['id_instruM'] = $consulta['id_instrumento_legal'];
            $valores['nombre_direInstruM'] = $consulta['nombre_dire'];
            $valores['tituloInstruM'] = $consulta['titulo_instrumento'];
            $valores['tipoInstruM'] = $consulta['nombre_tipo_instrumento'];
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
// MODIFICAR INSTRUMENTO (ELIMINAR, OCULTAR O MOSTRAR)
if ($comprobador=="ModificacionInstru") {

    $id_instrumentoModifi = $_POST['id_instruM'];
    $instrumento_visible = $_POST['modificarInstru'];
    // IMAGENES PARA BORRAR DE SER NECESARIO

    $inexiste_Instrumento = 0;

    if (preg_match($soloNum,$id_instrumentoModifi)) {
        include ('../../php/abrir_conexion.php');

        //VERIFICAR SI LA IMAGEN-VIDEO EXISTE EN EL SISTEMA
        $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db18 WHERE id_instrumento_legal = '$id_instrumentoModifi'");
        while ($consulta = mysqli_fetch_array($verificar)) {
            $activo = $consulta['instrumento_visible'];
            $ubi_instrumento = "../../".$consulta['nombre_instrumento'];

            $inexiste_Instrumento++;
        }
        if ($inexiste_Instrumento <> 0 && $activo != 3) {
            // AUDITORIA SOLO VERIFICAR SI SIGUE ACTIVO
            //********************************************************* **************
            $valorID = $_SESSION['id_usr'];
            $columnas = array(
                'instrumento_visible' => 'Estado del Instrumento',
            );
            // BUSCAR DATOS BD
            $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db18 WHERE id_instrumento_legal = '$id_instrumentoModifi'");
            $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
            $cambios = array();
            $huboCambios = false; // Variable para verificar si se realizaron cambios

            $estadoInstru = array();
            $query = "SELECT * FROM $tabla_db2_2";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $estadoInstru[$fila['id_estado']] = $fila['nombre_status'];
                }
            }
            foreach ($columnas as $columna => $nombre) {
                switch ($columna) { 
                    case 'instrumento_visible':
                        $valor_antiguo = isset($estadoInstru[$datos_antiguos[$columna]]) ? $estadoInstru[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($estadoInstru[$$columna]) ? $estadoInstru[$$columna] : "";
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
                $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en los datos de un Instrumento Legal, cambios realizados: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
                if ($instrumento_visible == 1 || $instrumento_visible == 2) {
                    $accionHecha = "30";
                }else if ($instrumento_visible == 3) {
                    $accionHecha = "31";
                }
                $entidadModificada = "Identificador del Instrumento: ".$id_instrumentoModifi;
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$entidadModificada', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
            }
            // FIN DE LA AUDITORIA *************************************************************
            if ($instrumento_visible == 1 || $instrumento_visible == 2) {
                // MODIFICAR DATOS
                $ModificarInstrumento = "UPDATE $tabla_db18 SET instrumento_visible='$instrumento_visible' WHERE id_instrumento_legal = '$id_instrumentoModifi'";
                mysqli_query($conexion, $ModificarInstrumento);

                echo "<h6>Instrumento modificado exitosamente.</h6>";
                include ('../../php/cerrar_conexion.php');
        
            }
            // ELIMINANDO BOLETIN DE LA BASE DE DATOS (IMAGEN DEL SISTEMA)
            else if ($instrumento_visible == 3){
                // IMAGEN1
                if (file_exists($ubi_instrumento) && $ubi_instrumento != "") {
                    unlink($ubi_instrumento);  
                }
                // ELIMINAR DATOS
                $ModificarInstrumento = "UPDATE $tabla_db18 SET id_instrumento_direccion='6', instrumento_visible='$instrumento_visible' WHERE id_instrumento_legal = '$id_instrumentoModifi'";
                mysqli_query($conexion, $ModificarInstrumento);

                echo "<h6>Instrumento eliminado exitosamente.</h6>";
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
