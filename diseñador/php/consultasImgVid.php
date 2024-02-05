<?php
session_start();
ob_start();

$comprobador = $_POST['consultarImgVid'];
$patron_numero = '/^[0-9]{1,11}$/';

// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO EN ESPERA -- INTERACTIVA)
if ($comprobador == "imagenes") {

    include ('../../php/abrir_conexion.php');


    echo
        '
    <table id="consultaImagenes" class="table table-striped table-hover">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th class="col-1">Identificador</th>
                <th class="col-1">Actualizacion</th>
                <th class="">Título Imagen</th>
                <th class="">Dirección perteneciente</th>
                <th class="">Tipo de Archivo</th>
                <th class="">Grupo de Archivo</th>
                <th class="col-1">Modificar</th>
                <th class="col-1">Visible</th>
            </tr>
        </thead>
        <tbody id="bodyImg">
    ';

    $existe = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga 
    INNER JOIN $tabla_db15 gt ON ga.id_galeria_tipo=gt.id_tipo
    INNER JOIN $tabla_db16 gg ON ga.id_galeria_grupo=gg.id_grupo
    INNER JOIN $tabla_db5 dr ON ga.id_galeria_direccion=dr.id_direcciones
    INNER JOIN $tabla_db2_2 es ON ga.visible=es.id_estado");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_galeria'] . '</td>
                <td class="text-end">' . $consulta['fecha_actualizacion'] . '</td>
                <td class="text-end">' . $consulta['titulo_archivo'] . '</td>
                <td>' . $consulta['nombre_dire'] . '</td>
                <td>' . $consulta['nombre_tipo'] . '</td>
                <td>' . $consulta['nombre_grupo_galeria'] . '</td>
                <td><button class="btn btn-secondary mb-1" id="modificarImg" name="modificarImg" onclick="ModfImg();">Modificar</button></td>
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
                    <th class="">Título Imagen</th>
                    <th class="">Dirección perteneciente</th>
                    <th class="">Tipo de Archivo</th>
                    <th class="">Grupo de Archivo</th>
                    <th class="col-1">Modificar</th>
                    <th class="col-1">Visible</th>
                </tr>
            </tfoot>
        </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No hay solicitudes de Soporte Técnico en el Sistema</p>";
        include('../../php/cerrar_conexion.php');

    }else {
        include ('../../php/cerrar_conexion.php');
    }

}

// IMPRIMIR DATOS EN MODAL DE LAS MODIFICACIONES
if ($comprobador == "ModifImgVid") {
    $identificadorImagen_Video = $_POST['ide'];
    $contador = 0;

    if (preg_match($patron_numero,$identificadorImagen_Video) && $identificadorImagen_Video != 0) {

        include ('../../php/abrir_conexion.php');

        $SQL_Modificacion = "SELECT * FROM $tabla_db14 ga 
        INNER JOIN $tabla_db15 gt ON ga.id_galeria_tipo=gt.id_tipo
        INNER JOIN $tabla_db16 gg ON ga.id_galeria_grupo=gg.id_grupo
        INNER JOIN $tabla_db5 dr ON ga.id_galeria_direccion=dr.id_direcciones
        INNER JOIN $tabla_db2_2 es ON ga.visible=es.id_estado
        WHERE id_galeria = '$identificadorImagen_Video'";
        $resultados = mysqli_query($conexion, $SQL_Modificacion);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $valores['titulo'] = $consulta['titulo_archivo'];
            $valores['descripcion'] = $consulta['descripcion_archivo'];
            $valores['nombre_dire'] = $consulta['nombre_dire'];
            $valores['id_direccionVieja'] = $consulta['id_galeria_direccion'];
            $valores['nombre_grupo'] = $consulta['nombre_grupo_galeria'];
            $valores['nombre_tipo'] = $consulta['id_galeria_tipo'];
            $valores['nombre_archivo'] = $consulta['nombre_archivo'];
            $valores['visible'] = $consulta['nombre_status'];

            $valores['id_imagen'] = $consulta['id_galeria'];
            $nombreArchivo = $consulta['nombre_archivo'];

            // DATOS ANTERIORES
            $valores['id_galeria_grupo_anterior'] = $consulta['id_galeria_grupo'];
            $valores['visible_anterior'] = $consulta['visible'];

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
if ($comprobador == "SubirImagen") {
    $identificadorImagen_Video = $_POST['ide'];
    
    
    include ('../../php/abrir_conexion.php');
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$identificadorImagen_Video'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $tipo = $consulta['id_galeria_tipo'];
        $nameArchivo = $consulta['nombre_archivo'];
        $tituloArchivo = $consulta['titulo_archivo'];
    }
    // ES IMAGEN
    if ($tipo == 1) {
        $resultFinal = '<img src="'.$nameArchivo.'" alt="" class="img-fluid box-shadow border-radius-15 w-75">';
    }else if ($tipo == 2) {
        $resultFinal =
        '
        <div class="embed-responsive embed-responsive-16by9">
        <video src="'.$nameArchivo.'" class="border-radius-15 w-75 box-shadow" controls></video>

        </div>
        ';
    } else{
        $resultFinal =
        '

            <embed src="'.$nameArchivo.'#toolbar=0" type="application/pdf" class="pdf_mini box-shadow">
            <br><br><br>
            <a class="mt-2 enlaces_limpios2 fs-6" href="'.$nameArchivo.'" target="_blank">'.$tituloArchivo.'</a>

        ';
    }
    echo $resultFinal;
    include('../../php/cerrar_conexion.php');

}