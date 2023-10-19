<?php
session_start();
ob_start();

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
$comprobacion = $_POST['buscar_soporte'];
// ARRAY PARA DEVOLVER VALORES EN JSON
$valores = array();

// AL CAMBIAR MAC POR NOMBRE ESTO SE DEJARÁ DE USAR TAN SEGUIDO
$patron_mac = '/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/'; // Expresión regular para validar la dirección MAC
$patron_nombre = '/^[a-zA-Z0-9]{1,16}$/';
$findme = "*";
$patron_numero = '/^[0-9]{1,11}$/';
$soloLetras = '/^[a-zA-ZÀ-ý\s]{20,255}$/';

// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO EN ESPERA -- INTERACTIVA)
if ($comprobacion == "tab_esp_inter") {

    include("abrir_conexion.php");

    echo
        '
    <table id="dataTable_espera" class="table table-striped table-hover">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th class="">Nro Caso</th>
                <th class="">Uso</th>
                <th class="">Nombre</th>
                <th class="">Nivel del Soporte</th>
                <th class="">Fecha Solicitud</th>
                <th class="">Descripción</th>
                <th class="">Aceptar</th>  
                <th class="">Estado</th>
            </tr>
        </thead>
        <tbody id="body-body">
    ';

    $existe = 0;
    // $contador = 0;

    $espera = "1";

    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE

    // <td class=""><input readonly id="macs" class="border-limpiar" value="'.$consulta['mac_equipo_soporte'].'"></td>

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 so INNER JOIN $tabla_db8_2 es ON so.estado=es.id_estado_sop WHERE estado = '$espera'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_soporte'] . '</td>
                <td>' . $consulta['uso_equipo'] . '</td>
                <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                <td>' . $consulta['nivel_soporte'] . '</td>
                <td>' . $consulta['fecha_soporte_solicitud'] . '</td>
                <td>' . $consulta['soporte_descripcion'] . '</td>
                <td><button class="btn btn-secondary mb-1" id="alerta" name="alerta" onclick="AtenderSoli();">Mostrar</button></td>
                <td>' . $consulta['nombre_estado'] . '</td>
            </tr>
        
        ';
        $existe++;
        // $contador++;

    }
    echo '</tbody>
            <tfoot>
                <tr  class="align-middle text-center">
                    <th class="">Nro Caso</th>
                    <th class="">Uso</th>
                    <th class="">Nombre</th>
                    <th class="">Nivel del Soporte</th>
                    <th class="">Fecha Solicitud</th>
                    <th class="">Descripción</th>
                    <th class="">Aceptar</th>  
                    <th class="">Estado</th>
                </tr>
            </tfoot>
        </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No hay solicitudes de Soporte Técnico en el Sistema</p>";
    }


    include("cerrar_conexion.php");
}
// CONSULTAR SOPORTES Y MOSTRAR TABLA (EN ESPERA, PROCESO -- VISTA)
if ($comprobacion == "tab_esp_vista") {

    include("abrir_conexion.php");

    echo
        '
        <table id="dataTable_consul" class="table table-striped table-hover">
            <thead  class="bg-grey text-light">
                <tr  class="align-middle text-center">
                    <th>Nro Caso</th>
                    <th>Uso</th>
                    <th>Nombre</th>
                    <th>Responsable</th>
                    <th>Nivel del Soporte</th>
                    <th>Fecha Solicitud</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody id="body-body">
        ';

    $existe = 0;
    $contador = 0;

    $espera = "1";
    $proceso = "2";

    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE        
    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db6 i ON s.id_equipo_soporte = i.id_case INNER JOIN $tabla_db8_2 es ON s.estado=es.id_estado_sop WHERE estado = '$espera' OR estado = '$proceso'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td>' . $consulta['id_soporte'] . '</td>
                    <td>' . $consulta['uso_equipo'] . '</td>
                    <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                    <td>' . $consulta['responsable'] . '</td>
                    <td>' . $consulta['nivel_soporte'] . '</td>
                    <td>' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td>' . $consulta['soporte_descripcion'] . '</td>
                    <td>' . $consulta['nombre_estado'] . '</td>
                </tr>
            
            ';
        $existe++;
        $contador++;

    }
    echo '</tbody>
                <tfoot>
                    <tr  class="align-middle text-center">
                        <th>Nro Caso</th>
                        <th>Uso</th>
                        <th>Nombre</th>
                        <th>Responsable</th>
                        <th>Nivel del Soporte</th>
                        <th>Fecha Solicitud</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                    </tr>
                </tfoot>
            </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No hay solicitudes de Soporte Técnico en el Sistema</p>";
    }
}
// CONSULTAR SOPORTES Y MOSTRAR TABLA (SOLO PROCESO -- INTERACTIVA)
if ($comprobacion == "tab_procs_inter") {

    include("abrir_conexion.php");

    echo
        '
        <table class="table table-hover" id="dataTable_proc">
            <thead  class="bg-grey text-light">
                <tr  class="align-middle text-center">
                    <th class="">Nro Caso</th>
                    <th class="">Uso</th>
                    <th class="">Nombre</th>
                    <th class="">Nivel del Soporte</th>
                    <th class="">Fecha Solicitud</th>
                    <th class="">Técnico Encargado</th>
                    <th class="">Fecha Aceptación</th>
                    <th class="">Finalizar</th>  
                    <th class="">Estado</th>
                </tr>
            </thead>
            <tbody id="body-final">
        ';

    $existe = 0;
    $contador = 0;

    $proceso = "2";

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 u ON s.tecnico_soporte_id=u.id_usuario INNER JOIN $tabla_db8_2 es ON s.estado=es.id_estado_sop WHERE estado = '$proceso'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td class="text-end">' . $consulta['id_soporte'] . '</td>
                    <td>' . $consulta['uso_equipo'] . '</td>
                    <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                    <td>' . $consulta['nivel_soporte'] . '</td>
                    <td>' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td>' . $consulta['nombre'] . '</td>
                    <td>' . $consulta['fecha_soporte_aceptacion'] . '</td>
                    <td><button class="btn btn-secondary mb-1" id="alerta" name="alerta"onclick="FinalizarSoli();">Mostrar</button></td>
                    <td>' . $consulta['nombre_estado'] . '</td>
                </tr>
            ';
        $existe++;
        $contador++;
    }
    echo '</tbody>
                <tfoot>
                    <tr  class="align-middle text-center">
                        <th>Nro Caso</th>
                        <th>Uso</th>
                        <th>Nombre</th>
                        <th>Nivel del Soporte</th>
                        <th>Fecha Solicitud</th>
                        <th>Técnico Encargado</th>
                        <th>Fecha Aceptación</th>
                        <th>Finalizar</th>  
                        <th>Estado</th>
                    </tr>
                </tfoot>
            </table>';

    if ($existe == 0) {
        echo "";
    }


    include("cerrar_conexion.php");

}
// CONSULTAR SOPORTES Y MOSTRAR TABLA (FALTAN COMPONENTES -- INTERACTIVA)
if ($comprobacion == "tab_espera_comp") {

    include("abrir_conexion.php");

    echo
        '
        <table class="table table-hover" id="dataTable_componentes">
            <thead  class="bg-grey text-light">
                <tr  class="align-middle text-center">
                    <th class="">Nro Caso</th>
                    <th class="">Nivel del Soporte</th>
                    <th class="">Nombre</th>

                    <th class="">Fecha Solicitud</th>
                    <th class="">Finalizar</th>  
                    <th class="">Información</th>
                    <th class="">Ver más</th>
                </tr>
            </thead>
            <tbody id="body-componentes">
        ';

    $existe = 0;
    $contador = 0;

    $repuesto = "6";

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 u ON s.tecnico_soporte_id=u.id_usuario INNER JOIN $tabla_db8_2 es ON s.estado=es.id_estado_sop WHERE estado = '$repuesto'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td class="text-end">' . $consulta['id_soporte'] . '</td>
                    <td>' . $consulta['nivel_soporte'] . '</td>
                    <td>' . $consulta['nomb_equipo_soporte'] . '</td>

                    <td>' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td><button class="btn btn-secondary mb-1" id="alerta2" name="alerta2" onclick="FinalizarSoli2();">Mostrar</button></td>
                    <td>' . acortar_texto($consulta['historial_soporte'], 20) . '</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#Modal_Notifi">Ver información</button></td>
                </tr>
            ';
        $historial = $consulta['historial_soporte'];

        $existe++;
        $contador++;

    }
    $_SESSION['historial_soporte']=$historial;

    echo '</tbody>
                <tfoot>
                    <tr  class="align-middle text-center">
                        <th>Nro Caso</th>
                        <th>Nivel del Soporte</th>
                        <th>Nombre</th>
                        <th>Fecha Solicitud</th>
                        <th>Finalizar</th>  
                        <th>Información</th>
                        <th>Ver más</th>
                    </tr>
                </tfoot>
            </table>';

    if ($existe == 0) {
        echo "";
    }


    include("cerrar_conexion.php");

}
// TODO:
// CREADO PARA IMPRIMIR REPORTES, FALTA FINALIZAR - AUN EN PROCESO
if ($comprobacion == "tab_final_ING") {

    include("abrir_conexion.php");

    echo
        '
        <table class="table table-hover" id="dataTable_ING">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th class="">Nro Caso</th>
                <th class="">Nivel del Soporte</th>
                <th class="">Fecha Solicitud</th>
                <th class="">Fecha Aceptación</th>
                <th class="">Fecha Finalización</th>
                <th class="txt-td">Reporte</th>
                <th class="">Estado</th>
            </tr>
        </thead>
        <tbody id="body-soport-ING">
        ';

    $existe = 0;
    $contador = 0;

    $finalizado = "3";

    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 u ON s.tecnico_soporte_id=u.id_usuario INNER JOIN $tabla_db8_2 es ON s.estado=es.id_estado_sop  WHERE estado = '$finalizado'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td class="text-end">' . $consulta['id_soporte'] . '</td>
                    <td class="">' . $consulta['nivel_soporte'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_aceptacion'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_final'] . '</td>
                    <td class="txt-td"><button type="button" class="btn-img-td" onclick="verReporteSoli();"  data-bs-toggle="modal" data-bs-target="#Info_Vistas"><img class="img-td" src="../assets/intranet/soporte/iconos/pdf.png"></button></td>
                    <td class="txt-td">' . $consulta['nombre_estado'] . '</td>
                </tr>
            ';
        $existe++;
        $contador++;

    }
    echo '</tbody>
            <tfoot>
                <tr  class="align-middle text-center">
                    <th class="">Nro Caso</th>
                    <th class="">Nivel del Soporte</th>
                    <th class="">Fecha Solicitud</th>
                    <th class="">Fecha Aceptación</th>
                    <th class="">Fecha Finalización</th>
                    <th class="txt-td">Reporte</th>
                    <th class="">Estado</th>
                </tr>
            </tfoot>
    </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No se ha finalizado ninguna solicitud</p>";
    }

    include("cerrar_conexion.php");

}
// CONSULTAR SOPORTES Y MOSTRAR TABLA (FINALIZADO -- INTERACTIVA EMPLEADOS)
if ($comprobacion == "tab_final_inter") {

    include("abrir_conexion.php");

    echo
        '
        <table class="table table-hover" id="dataTable_fin">
            <thead  class="bg-grey text-light">
                <tr  class="align-middle text-center">
                    <th class="">Nro Caso</th>
                    <th class="">Nivel del Soporte</th>
                    <th class="">Nombre</th>
                    <th class="">Fecha Solicitud</th>
                    <th class="">Técnico Encargado</th>
                    <th class="">Fecha Aceptación</th>
                    <th class="">Fecha Finalización</th>
                    <!--<th class="txt-td">Reporte</th>-->
                    <th class="">Estado</th>

                </tr>
            </thead>
            <tbody id="body-final">

        ';

    $existe = 0;
    $contador = 0;

    $finalizado = "3";

    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 u ON s.tecnico_soporte_id=u.id_usuario INNER JOIN $tabla_db8_2 es ON s.estado=es.id_estado_sop WHERE estado = '$finalizado'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td class="text-end">' . $consulta['id_soporte'] . '</td>
                    <td class="">' . $consulta['nivel_soporte'] . '</td>
                    <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td class="">' . $consulta['nombre'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_aceptacion'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_final'] . '</td>
                    <!--<td class="txt-td"><button type="button" class="btn-img-td" onclick="FinalizarSoli();"  data-bs-toggle="modal" data-bs-target="#Info_Vistas"><img class="img-td" src="../assets/intranet/soporte/iconos/computadora2.png"></button></td>-->
                    <td class="txt-td">' . $consulta['nombre_estado'] . '</td>
                </tr>
            ';
        $existe++;
        $contador++;

    }
    echo '</tbody>
                <tfoot>
                    <tr  class="align-middle text-center">
                        <th class="">Nro Caso</th>
                        <th class="">Nivel del Soporte</th>
                        <th class="">Nombre</th>
                        <th class="">Fecha Solicitud</th>
                        <th class="">Técnico Encargado</th>
                        <th class="">Fecha Aceptación</th>
                        <th class="">Fecha Finalización</th>
                        <!--<th class="txt-td">Reporte</th>-->
                        <th class="">Estado</th>

                    </tr>
                </tfoot>
        </table>';

    if ($existe == 0) {
        echo "<p class='text-center'>No se ha finalizado ninguna solicitud</p>";
    }


    include("cerrar_conexion.php");

}

// CONSULTAR SOPORTES Y MOSTRAR TABLA DE RECHAZADOS (TABLA INTERACTIVA)
if ($comprobacion == "rechazado") {

    include("abrir_conexion.php");

    echo
        '
        <table class="table table-hover" id="dataTable_rec">
            <thead  class="bg-grey text-light">
                <tr  class="align-middle text-center">
                    <th>Nro Caso</th>
                    <th>Uso</th>
                    <th>Nombre</th>
                    <th>Nivel del Soporte</th>
                    <th>Fecha Solicitud</th>
                    <th>Fecha de Rechazo</th>
                    <th>Descripción</th>
                    <th>Continuar</th>  
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody id="body-rechazo">
        ';

    $existe = 0;
    $contador = 0;

    $rechazado = "4";

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db8_2 so ON s.estado=so.id_estado_sop WHERE estado = '$rechazado'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr  class="align-middle">
                    <td class="text-end">' . $consulta['id_soporte'] . '</td>
                    <td class="">' . $consulta['uso_equipo'] . '</td>
                    <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                    <td class="">' . $consulta['nivel_soporte'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_solicitud'] . '</td>
                    <td class="">' . $consulta['fecha_soporte_aceptacion'] . '</td>
                    <td class="">' . $consulta['soporte_descripcion'] . '</td>
                    <td class=""><button class="btn btn-danger mb-1" id="rechazo" name="rechazo" onclick="RechazarSolicitud();">Rechazar</button></td>
                    <td class="">' . $consulta['nombre_estado'] . '</td>
                </tr>
            
            ';
        $existe++;
        $contador++;

    }
    echo '</tbody>
                <tfoot>
                    <tr  class="align-middle text-center">
                        <th>Nro Caso</th>
                        <th>Uso</th>
                        <th>Nombre</th>
                        <th>Nivel del Soporte</th>
                        <th>Fecha Solicitud</th>
                        <th>Fecha de Rechazo</th>
                        <th>Descripción</th>
                        <th>Continuar</th>  
                        <th>Estado</th>
                    </tr>
                </tfoot>
            </table>';

    if ($existe == 0) {
        echo "";
    }


    include("cerrar_conexion.php");

}
// CREADO PARA IMPRIMIR REPORTES, FALTA FINALIZAR
// CONSULTAR SOPORTES Y MOSTRAR TABLA DE RECHAZADOS (TABLA VISTA)
if ($comprobacion == "rechazado_vista") {

    include("abrir_conexion.php");

    echo
        '
    <table class="table table-hover" id="dataTable_rec_vista">
        <thead  class="bg-grey text-light">
            <tr  class="align-middle text-center">
                <th>Nro Caso</th>
                <th>Uso</th>
                <th>Nombre</th>
                <th>Nivel del Soporte</th>
                <th>Fecha Solicitud</th>
                <th>Fecha de Rechazo</th>
                <th>Comentario</th> 
                <!--<th class="txt-td">Reporte</th>-->
                <th>Estado</th>
            </tr>
        </thead>
        <tbody id="">
    ';

    $existe = 0;
    $contador = 0;

    $rechazado = "5";

    // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db8_2 so ON s.estado=so.id_estado_sop WHERE estado = '$rechazado'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr  class="align-middle">
                <td class="text-end">' . $consulta['id_soporte'] . '</td>
                <td class="">' . $consulta['uso_equipo'] . '</td>
                <td>' . $consulta['nomb_equipo_soporte'] . '</td>
                <td class="">' . $consulta['nivel_soporte'] . '</td>
                <td class="">' . $consulta['fecha_soporte_solicitud'] . '</td>
                <td class="">' . $consulta['fecha_soporte_aceptacion'] . '</td>
                <td class="">' . $consulta['comentario'] . '</td>
                <!--<td class="txt-td"><button type="button" class="btn-img-td" onclick="verReporteSoli();"><img class="img-td" src="../assets/intranet/soporte/iconos/pdf.png"></button></td>-->
                <td class="">' . $consulta['nombre_estado'] . '</td>
            </tr>
        
        ';
        $existe++;
        $contador++;

    }
    echo '</tbody>
            <tfoot>
                <tr  class="align-middle text-center">
                    <th>Nro Caso</th>
                    <th>Uso</th>
                    <th>Nombre</th>
                    <th>Nivel del Soporte</th>
                    <th>Fecha Solicitud</th>
                    <th>Fecha de Rechazo</th>
                    <th>Comentario</th> 
                    <!--<th>Reporte</th>-->
                    <th>Estado</th>
                </tr>
            </tfoot>
        </table>';

    if ($existe == 0) {
        echo "";
    }


    include("cerrar_conexion.php");
}

// CONSULTAR SOPORTES Y MOSTRAR CANTIDAD EN EL MENÚ
if ($comprobacion == "cantidad_Registros") {
    include("abrir_conexion.php");

    $contador = 0;
    $contador2 = 0;
    $contador3 = 0;

    $espera = "1";
    $proceso = "2";
    $rechazado = "4";
    $repuesto = "6";


    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE
    // CUENTA LA CANTIDAD QUE ESTÁ EN ESPERA
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 WHERE estado = '$espera'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $contador++;
    }
    $valores['contador1'] = $contador;
    // CUENTA LA CANTIDAD QUE ESTÁ EN ESPERA DE REPUESTOS
    $resultados4 = mysqli_query($conexion, "SELECT * FROM $tabla_db8 WHERE estado = '$repuesto'");
    while ($consulta = mysqli_fetch_array($resultados4)) {
        $contador4++;
    }
    $valores['contador4'] = $contador4 + $contador;
    $valores['respuesto'] = $contador4;
    // CUENTA LA CANTIDAD QUE ESTÁ EN PROCESO
    $resultados2 = mysqli_query($conexion, "SELECT * FROM $tabla_db8 WHERE estado = '$proceso'");
    while ($consulta = mysqli_fetch_array($resultados2)) {
        $contador2++;
    }
    $valores['contador2'] = $contador2 + $contador4;
    $valores['campana'] = $contador2 + $contador4+$contador;
    // CUENTA LA CANTIDAD QUE ESTÁ RECHAZADO
    $resultados3 = mysqli_query($conexion, "SELECT * FROM $tabla_db8 WHERE estado = '$rechazado'");
    while ($consulta = mysqli_fetch_array($resultados3)) {
        $contador3++;
    }
    $valores['contador3'] = $contador3;


    $valores = json_encode($valores);
    echo $valores;

    include("cerrar_conexion.php");

}

// *************************************************************************

// CONSULTAR SOPORTES PARA EMPEZAR (LLENA LOS INPUTS PARA INICIAR EL PROCESO)

if ($comprobacion == "llenarInputs_espera") {
    include("abrir_conexion.php");

    $nomb_equipo = $_POST['nomb_equipo'];

    $id = $_POST['id'];

    $EnEspera = 1;
    $contador = 0;

    if (preg_match($patron_nombre, $nomb_equipo) && preg_match($patron_numero, $id)) {
        $SQL_info_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nomb_equipo' AND id_soporte = '$id'";

        $resultados = mysqli_query($conexion, $SQL_info_sopor);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $estado_comprobar = $consulta['estado'];
            $contador++;
        }
        if ($estado_comprobar == $EnEspera) {
            // BUSCAR DATOS DEL EQUIPO Y TRAER
            $buscar_sql_cpu = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db3 a ON i.dpto_inv_id = a.id_departamento INNER JOIN $tabla_db4 b ON i.division_inv_id = b.id_divisiones INNER JOIN $tabla_db5 c ON i.direccion_inv_id = c.id_direcciones WHERE nombre_equipo = '$nomb_equipo'";
            $resultados = mysqli_query($conexion, $buscar_sql_cpu);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['nombre_dpto'] = $consulta['nombre_dpto'];
                $valores['nombre_div'] = $consulta['nombre_div'];
                $valores['nombre_dire'] = $consulta['nombre_dire'];

                $valores['responsable'] = $consulta['responsable'];
                $valores['supervisor_dpto'] = $consulta['supervisor_dpto'];

                $valores['nombre_equipo'] = $consulta['nombre_equipo'];
                $valores['ip'] = $consulta['ip'];
                $valores['windows_ver'] = $consulta['windows_ver'];
            }

            // CONSULTA LOS SOPORTES

            $SQL_info_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nomb_equipo' AND id_soporte = '$id'";

            $resultados = mysqli_query($conexion, $SQL_info_sopor);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['id_soporte'] = $consulta['id_soporte'];
                $valores['uso_equipo'] = $consulta['uso_equipo'];
                $valores['nivel_soporte'] = $consulta['nivel_soporte'];
                $valores['soporte_descripcion'] = $consulta['soporte_descripcion'];
                $valores['fecha_soporte_solicitud'] = $consulta['fecha_soporte_solicitud'];
                $valores['estado'] = $consulta['estado'];
            }
            // REALENTIZANDO EL ENVÍO DEL FORMULARIO
            sleep(1);
            // Convirtiendo el array en algo leíble por JS
            $valores = json_encode($valores);
            echo $valores;

            include("cerrar_conexion.php");
        } else {
            http_response_code(501);
            include("php/cerrar_conexion.php");
        }
    } else {
        http_response_code(500);
        include("php/cerrar_conexion.php");
    }


}

// LLENAR INPUTS PARA FINALIZAR PROCESO

if ($comprobacion == "llenarInputs_proceso") {
    include("abrir_conexion.php");

    $nombre_equipo = $_POST['nombre_equipo'];
    $NroCasoFinal = $_POST['NroCasoFinal'];
    
    if (preg_match($patron_numero, $NroCasoFinal) && preg_match($patron_nombre, $nombre_equipo)) {
        $SQL_info_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nombre_equipo' AND id_soporte = '$NroCasoFinal'";

        $resultados = mysqli_query($conexion, $SQL_info_sopor);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $estado_comprobar = $consulta['estado'];
        }
        $_SESSION['sinComponentes']=$estado_comprobar;
        if ($estado_comprobar == "2" || $estado_comprobar == "6") {
            // BUSCAR DATOS DEL EQUIPO Y TRAER
            $buscar_sql_cpu = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db3 a ON i.dpto_inv_id = a.id_departamento INNER JOIN $tabla_db4 b ON i.division_inv_id = b.id_divisiones INNER JOIN $tabla_db5 c ON i.direccion_inv_id = c.id_direcciones WHERE nombre_equipo = '$nombre_equipo'";
            $resultados = mysqli_query($conexion, $buscar_sql_cpu);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['nombre_dpto'] = $consulta['nombre_dpto'];
                $valores['nombre_div'] = $consulta['nombre_div'];
                $valores['nombre_dire'] = $consulta['nombre_dire'];
                $valores['responsable'] = $consulta['responsable'];

                $valores['nombre_equipo'] = $consulta['nombre_equipo'];
                $valores['ip'] = $consulta['ip'];
                
            }

            // CONSULTA LOS SOPORTES
            $SQL_info_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nombre_equipo' AND id_soporte = '$NroCasoFinal'";

            $resultados = mysqli_query($conexion, $SQL_info_sopor);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['id_soporte'] = $consulta['id_soporte'];
                $valores['nivel_soporte'] = $consulta['nivel_soporte'];
                $valores['fecha_soporte_solicitud'] = $consulta['fecha_soporte_solicitud'];
                $valores['estado'] = $consulta['estado'];
                $valores['fecha_soporte_aceptacion'] = $consulta['fecha_soporte_aceptacion'];
            }

            // REALENTIZANDO EL ENVÍO DEL FORMULARIO
            sleep(1);
            // Convirtiendo el array en algo leíble por JS
            $valores = json_encode($valores);
            echo $valores;
            include("cerrar_conexion.php");

        } else {
            http_response_code(501);
            include("cerrar_conexion.php");
        }
    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }


}


// LLENAR INPUTS PARA RECHAZAR DE MANERA DEFINITIVA

if ($comprobacion == "llenarInputs_rechazar") {
    include("abrir_conexion.php");
    // LA COMPROBAREMOS
    $nombre_equipo = $_POST['nombre_equipo'];
    $idRech = $_POST['idRech'];

    $contador = 0;

    if (preg_match($patron_numero, $idRech) && preg_match($patron_nombre, $nombre_equipo)) {
        $SQL_rech_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nombre_equipo' AND id_soporte = '$idRech'";
        $resultados = mysqli_query($conexion, $SQL_rech_sopor);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $estado_comprobar = $consulta['estado'];
        }
        if ($estado_comprobar == 4) {
            // BUSCAR DATOS DEL EQUIPO Y TRAER
            $buscar_sql_rec = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db3 a ON i.dpto_inv_id = a.id_departamento INNER JOIN $tabla_db4 b ON i.division_inv_id = b.id_divisiones INNER JOIN $tabla_db5 c ON i.direccion_inv_id = c.id_direcciones WHERE nombre_equipo = '$nombre_equipo'";
            $resultados = mysqli_query($conexion, $buscar_sql_rec);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['nombre_dpto'] = $consulta['nombre_dpto'];
                $valores['nombre_div'] = $consulta['nombre_div'];
                $valores['nombre_dire'] = $consulta['nombre_dire'];
                $valores['responsable'] = $consulta['responsable'];

                $valores['nombre_equipo'] = $consulta['nombre_equipo'];
                $valores['ip'] = $consulta['ip'];
            }
            // CONSULTA EN LA BD LA MAC CON EL ESTADO EN RECHAZADO
            $SQL_info_sopor = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nombre_equipo' AND id_soporte = '$idRech'";

            $resultados = mysqli_query($conexion, $SQL_info_sopor);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $valores['id_soporte'] = $consulta['id_soporte'];
                $valores['nivel_soporte'] = $consulta['nivel_soporte'];

                $valores['fecha_soporte_solicitud'] = $consulta['fecha_soporte_solicitud'];
                $valores['fecha_soporte_aceptacion'] = $consulta['fecha_soporte_aceptacion'];

                $valores['estado'] = $consulta['estado'];
            }
            // REALENTIZANDO EL ENVÍO DEL FORMULARIO
            sleep(1);
            // Convirtiendo el array en algo leíble por JS
            $valores = json_encode($valores);
            echo $valores;

            include("cerrar_conexion.php");
        } else {
            http_response_code(501);
            include("cerrar_conexion.php");
        }
    } else {
        http_response_code(500);
        include("php/cerrar_conexion.php");
    }

}

// *********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************
// REGISTRAR SOLICITUD (AUDITORIA LISTA)

if ($comprobacion == "RegisSoli") {

    $tipo_uso = '';
    $nivel_soporte = '';
    $patron_nivel = '/^[a-zA-Z\s]{1,30}$/';

    if (isset($_POST['equipo_propiedad'])) {
        $tipo_uso_ = $_POST['equipo_propiedad'];
        if ($tipo_uso_ == 1) {
            $tipo_uso = "Uso Oficial";
        } else {
            $tipo_uso = "Uso Personal";
        }
    } else {
        $tipo_uso = '';
    }
    if (isset($_POST['nivel_soporte'])) {
        $nivel_soporte_ = $_POST['nivel_soporte'];
        if ($nivel_soporte_ == 1) {
            $nivel_soporte = "Nivel Software";
        } else {
            $nivel_soporte = "Nivel Hardware";
        }
    } else {
        $nivel_soporte = '';
    }


    $name_edit = $_POST['name_edit'];
    $descripcion = $_POST['descripcion'];
    $id_equipo_soporte = $_POST['id_del_equipo'];
    $en_espera = "1";

    // COMPROBANDO QUE NO EXISTA LA SOLITUD YA HECHA
    $valor_permitido = "3"; //FINALIZADO
    $valor_permitido2 = "5"; //RECHAZADO COMPLETO

    $existe_soporte = 0;
    $existe_equipo = 0;


    include("abrir_conexion.php");
    $NomExis = mysqli_query($conexion, "SELECT * FROM $tabla_db6 WHERE nombre_equipo = '$name_edit' AND id_case = '$id_equipo_soporte'");
    while ($consulta = mysqli_fetch_array($NomExis)) {
        $existe_equipo++;
    }
    if ($tipo_uso != '' && $nivel_soporte != '' && $name_edit != '' && $descripcion != '' && $id_equipo_soporte != '') {
        if (preg_match($patron_nivel, $nivel_soporte) &&  preg_match($patron_nivel, $tipo_uso) && preg_match($patron_numero, $id_equipo_soporte) && preg_match($soloLetras, $descripcion)) {
            // VERIFICANDO NOMBRE DE USUARIO
            if ($name_edit != '' && $existe_equipo <> 0) {
                // Buscar en la tabla de SOPORTE TÉCNICO los equipos registrados y no dejar pasar los ya registrados


                $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$name_edit'");
                while ($consulta = mysqli_fetch_array($resultados)) {
                    $estado_actual = $consulta['estado'];
                    $existe_soporte++;
                }
                // EXISTE EL SOPORTE DENTRO DEL SISTEMA, SE VERIFICA SI SU ESTADO ES FINALIZADO O RECHAZADO
                if ($existe_soporte <> 0) {
                    if ($estado_actual == $valor_permitido || $estado_actual == $valor_permitido2) {

                        $SQL_DATOS_SOPORTE = "INSERT INTO $tabla_db8 (id_soporte, uso_equipo, id_equipo_soporte, nomb_equipo_soporte, nivel_soporte, soporte_descripcion, fecha_soporte_solicitud, estado) values (NULL, '$tipo_uso', '$id_equipo_soporte', '$name_edit', '$nivel_soporte', '$descripcion', now(), '$en_espera')";

                        mysqli_query($conexion, $SQL_DATOS_SOPORTE);

                        // AUDITORIA *****************************************************************
                        $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s WHERE nomb_equipo_soporte = '$name_edit' AND estado = '$en_espera'");
                        while ($consulta = mysqli_fetch_array($buscarID)) {
                            $id_Equipo = $consulta['id_soporte'];
                            $nombreEquipo = $consulta['nomb_equipo_soporte'];
                        }

                        $valorID = $_SESSION['id_usr'];
                        $descripcion_Cambio = "Nueva solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ", Nro de Solicitud: " . $id_Equipo . ".";

                        $accionHecha = "8";
                        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipo', now(), '$descripcion_Cambio')";
                        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                        // FINAL AUDITORIA ************************************************************


                        echo "<p>Se creó la solicitud exítosamente, puede consultarla en la pestaña <i>'Seguimiento'</i></p>";

                        include("php/cerrar_conexion.php");

                    } else {
                        http_response_code(503);
                        include("php/cerrar_conexion.php");

                    }
                } else {
                    // AL NO EXISTIR EL SOPORTE SE REGISTRA DE UNA VEZ

                    $SQL_DATOS_SOPORTE = "INSERT INTO $tabla_db8 (id_soporte, uso_equipo, id_equipo_soporte, nomb_equipo_soporte, nivel_soporte, soporte_descripcion, fecha_soporte_solicitud, estado) values (NULL, '$tipo_uso', '$id_equipo_soporte', '$name_edit', '$nivel_soporte', '$descripcion', now(), '$en_espera')";
                    mysqli_query($conexion, $SQL_DATOS_SOPORTE);

                    // AUDITORIA *****************************************************************
                    $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s WHERE nomb_equipo_soporte = '$name_edit' AND estado = '$en_espera'");
                    while ($consulta = mysqli_fetch_array($buscarID)) {
                        $nombreEquipo = $consulta['nomb_equipo_soporte'];
                    }

                    $valorID = $_SESSION['id_usr'];
                    $descripcion_Cambio = "Nueva solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ".";

                    $accionHecha = "8";
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FINAL AUDITORIA ************************************************************



                    echo "<p>Se creó la solicitud exítosamente, puede consultarla en la pestaña <i>'Seguimiento'</i></p>";


                    include("cerrar_conexion.php");
                }
            } else {
                http_response_code(502);
                include("php/cerrar_conexion.php");
            }
        } else {
            http_response_code(501);
            include("php/cerrar_conexion.php");
        }
    } else {
        http_response_code(500);
        include("php/cerrar_conexion.php");
    }

}

// ACTUALIZACIÓN DE LA SOLICITUD A --EN PROCESO-- (AUDITORIA LISTA)

if ($comprobacion == "espera_proceso") {
    include("abrir_conexion.php");

    $ingeniero_encargado = '';
    // SI ES ADMIN ELIJE, SINO, ES EL QUE PRESIONE
    if ($_SESSION['nivel_usuario'] == 1) {
        $ingeniero_encargado = $_POST['ingeniero_selector'];
    } else {
        $ingeniero_encargado = $_SESSION['id_usr'];
    }
    $id_soporte = $_POST['nroCaso'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $proceso = "2";

    $pos2 = strpos($id_soporte, $findme);

    $contador = 0;

    if (preg_match($patron_numero, $id_soporte) && preg_match($patron_nombre, $nombre_equipo) && preg_match($patron_numero, $ingeniero_encargado)) {
        $VerificarNroCaso = "SELECT * FROM $tabla_db8 WHERE id_soporte = '$id_soporte'";
        $resultados = mysqli_query($conexion, $VerificarNroCaso);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $estado = $consulta['estado'];
            $contador++;

        }

        if ($estado == "1") {
            // AHORA HACEMOS LA CONSULTA QUE REGISTRARÁ LOS NUEVOS DATOS EN EL SISTEMA
            $SQL_aceptar_soli = "UPDATE $tabla_db8 SET estado='$proceso', fecha_soporte_aceptacion=now(), tecnico_soporte_id='$ingeniero_encargado' WHERE id_soporte = '$id_soporte'";

            mysqli_query($conexion, $SQL_aceptar_soli);

            // AUDITORIA *****************************************************************
            $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 us ON s.tecnico_soporte_id=us.id_usuario WHERE id_soporte = '$id_soporte' AND estado = '$proceso'");
            while ($consulta = mysqli_fetch_array($buscarID)) {
                $nombreEquipo = $consulta['nomb_equipo_soporte'];
                $nombreEncargado = $consulta['nombre'] . " " . $consulta['apellido'];
            }

            $valorID = $_SESSION['id_usr'];
            $nombreAdm = $_SESSION['nombre'];
            $descripcion_Cambio = "Actualización de solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ", Nro de Solicitud: " . $id_soporte . ". Actualizada a -En Proceso-, por " . $nombreAdm . ", técnico designado: " . $nombreEncargado . ".";

            $accionHecha = "9";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipo', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************


            $mensaje = "Se acepto la solicitud de manera exítosa.";
            echo $mensaje;
            include("cerrar_conexion.php");
        } else {
            http_response_code(501);
            include("cerrar_conexion.php");
        }

    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }




}
// SOLICITUD PUESTA EN ESPERA POR FALTA DE COMPONENTES
if ($comprobacion == "espera_componentes") {
    include("abrir_conexion.php");
    $ingeniero_encargado = $_SESSION['id_usr'];
    $id_soporte = $_POST['soporte'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $descripcion = $_POST['texto'];
    $repuesto = "6";

    $contador = 0;
    $VerificarNroCaso = "SELECT * FROM $tabla_db8 WHERE id_soporte = '$id_soporte' AND nomb_equipo_soporte = '$nombre_equipo'";
    $resultados = mysqli_query($conexion, $VerificarNroCaso);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $contador++;
    }
    if ($contador == 1) {
        if (preg_match($soloLetras, $descripcion) && preg_match($patron_numero, $id_soporte) && preg_match($patron_nombre, $nombre_equipo)) {
            $SQL_verify = "SELECT * FROM $tabla_db8 WHERE nomb_equipo_soporte = '$nombre_equipo'";
            $resultados = mysqli_query($conexion, $SQL_verify);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $notas = $consulta['historial_soporte'];
            }

            if ($notas == '') {
                $nota_final = $descripcion;
            } else {
                $nota_final = $notas . "<br><br>" . $descripcion;
            }

            // AHORA HACEMOS LA CONSULTA QUE REGISTRARÁ LOS NUEVOS DATOS EN EL SISTEMA
            $SQL_aceptar_soli = "UPDATE $tabla_db8 SET estado='$repuesto', fecha_soporte_aceptacion=now(), tecnico_soporte_id='$ingeniero_encargado', historial_soporte='$nota_final' WHERE id_soporte = '$id_soporte'";

            mysqli_query($conexion, $SQL_aceptar_soli);

            // AUDITORIA *****************************************************************
            $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 us ON s.tecnico_soporte_id=us.id_usuario WHERE id_soporte = '$id_soporte' AND estado = '$repuesto'");
            while ($consulta = mysqli_fetch_array($buscarID)) {
                $nombreEquipoBD = $consulta['nomb_equipo_soporte'];
            }

            $valorID = $_SESSION['id_usr'];
            $nombreAdm = $_SESSION['nombre'];
            $descripcion_Cambio = "Se movio la solicitud a En espera de componentes, nombre del equipo: " . $nombreEquipoBD . ", Nro de Solicitud: " . $id_soporte . ". Actualizada, por " . $nombreAdm . ", descripción: " . $descripcion . ".";

            $accionHecha = "10";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipoBD', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************


            $mensaje = "Se movió la solicitud de manera exítosa.";
            echo $mensaje;
            include("cerrar_conexion.php");

        } else {
            http_response_code(501);
            include("cerrar_conexion.php");
        }

    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }
}
// FINALIZAR PROCESO (AUDITORIA LISTA)
if ($comprobacion == "finalizar_proceso") {
    include("abrir_conexion.php");

    $comentario = $_POST['comentario'];
    $id_soporte = $_POST['nroCaso'];
    $nombre_equipo = $_POST['nombre_equipo'];
    $finalizado = "3";

    $pos = strpos($comentario, $findme);
    $pos2 = strpos($id_soporte, $findme);

    if (preg_match($patron_numero, $id_soporte) && preg_match($soloLetras, $comentario) && preg_match($patron_nombre, $nombre_equipo)) {
        if (strlen($comentario) > 20) {
            $VerificarNroCaso = "SELECT * FROM $tabla_db8 WHERE id_soporte = '$id_soporte'";
            $resultados = mysqli_query($conexion, $VerificarNroCaso);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $estado = $consulta['estado'];
            }
            if ($estado == "2" || $estado == "6") {
                // AHORA HACEMOS LA CONSULTA QUE REGISTRARÁ LOS ÚLTIMOS DATOS
                $SQL_finalizar_soli = "UPDATE $tabla_db8 SET estado='$finalizado', fecha_soporte_final=now(), comentario='$comentario' WHERE id_soporte = '$id_soporte'";

                mysqli_query($conexion, $SQL_finalizar_soli);

                // AUDITORIA *****************************************************************
                $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 us ON s.tecnico_soporte_id=us.id_usuario WHERE id_soporte = '$id_soporte' AND estado = '$finalizado'");
                while ($consulta = mysqli_fetch_array($buscarID)) {
                    $nombreEquipo = $consulta['nomb_equipo_soporte'];
                    $nombreEncargado = $consulta['nombre'] . " " . $consulta['apellido'];
                }

                $valorID = $_SESSION['id_usr'];
                $nombreAdm = $_SESSION['nombre'];
                $descripcion_Cambio = "Culminación de la solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ", Nro de Solicitud: " . $id_soporte . ". Actualizada a -Finalizada-, por " . $nombreAdm . ", técnico designado de realizar el soporte: " . $nombreEncargado . ".";

                $accionHecha = "11";
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipo', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                // FINAL AUDITORIA ************************************************************

                $mensaje = "Se finalizó de manera correcta la solicitud.";
                echo $mensaje;
                include("cerrar_conexion.php");
            } else {
                http_response_code(502);
                include("php/cerrar_conexion.php");
            }
        } else {
            http_response_code(501);
            include("php/cerrar_conexion.php");
        }
    } else {
        http_response_code(500);
        include("php/cerrar_conexion.php");
    }
}
// ENVIAR EL RECHAZO DESDE EL MODAL (AUDITORIA LISTA)
if ($comprobacion == "iniciarRechazo") {
    include("abrir_conexion.php");

    $idRechazo = $_POST['idRech'];
    $tecRechazo = $_SESSION['id_usr'];
    $Rechazado = 4;

    if ($idRechazo != "" && $tecRechazo != "") {
        $VerificarNroCaso = "SELECT * FROM $tabla_db8 WHERE id_soporte = '$idRechazo'";
        $resultados = mysqli_query($conexion, $VerificarNroCaso);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $estado = $consulta['estado'];
            $contador++;
        }
        if ($estado == "1") {
            // AHORA HACEMOS LA CONSULTA QUE REGISTRARÁ LOS DATOS DE RECHAZADO, AÚN FALTA CULMINARLA
            $SQL_rechazar_soli = "UPDATE $tabla_db8 SET estado='$Rechazado', fecha_soporte_aceptacion=now(), tecnico_soporte_id='$tecRechazo' WHERE id_soporte = '$idRechazo'";

            mysqli_query($conexion, $SQL_rechazar_soli);

            // AUDITORIA *****************************************************************
            $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 us ON s.tecnico_soporte_id=us.id_usuario WHERE id_soporte = '$idRechazo' AND estado = '$Rechazado'");
            while ($consulta = mysqli_fetch_array($buscarID)) {
                $nombreEquipo = $consulta['nomb_equipo_soporte'];
            }

            $valorID = $_SESSION['id_usr'];
            $nombreAdm = $_SESSION['nombre'];
            $descripcion_Cambio = "Rechazo de la solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ", Nro de Solicitud: " . $idRechazo . ". Se rechazó la solicitud por parte de " . $nombreAdm . "; en espera de confirmación de rechazo.";

            $accionHecha = "12";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipo', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************

            $mensaje = "Se realizó el rechazo de la solicitud, ir a la pestaña de <i>rechazados</i> para culminar.";
            echo $mensaje;
            include("cerrar_conexion.php");
        } else {
            http_response_code(501);
            include("php/cerrar_conexion.php");

        }
    } else {
        http_response_code(500);
        include("php/cerrar_conexion.php");
    }
}
// RECHAZAR DE MANERA DEFINITIVA (AUDITORIA LISTA)
if ($comprobacion == "Rechazar_Final") {
    include("abrir_conexion.php");

    $comentarioRech = $_POST['comentarioRech'];
    $nroCasoRech = $_POST['nroCasoRech'];
    $nombre_equipo = $_POST['nombre_equipo'];

    $pos = strpos($comentarioRech, $findme);
    $pos2 = strpos($nroCasoRech, $findme);

    $finalRechazo = "5";

    if (preg_match($patron_numero, $nroCasoRech) && preg_match($soloLetras, $comentarioRech) && preg_match($patron_nombre, $nombre_equipo)) {
        if (strlen($comentarioRech) > 20) {
            $VerificarNroCaso = "SELECT * FROM $tabla_db8 WHERE id_soporte = '$nroCasoRech'";
            $resultados = mysqli_query($conexion, $VerificarNroCaso);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $estado = $consulta['estado'];
            }
            if ($estado == "4") {
                // AHORA HACEMOS LA CONSULTA QUE REGISTRARÁ LOS ÚLTIMOS DATOS
                $SQL_finalizar_soli = "UPDATE $tabla_db8 SET fecha_soporte_final=now(), estado='$finalRechazo', comentario='$comentarioRech' WHERE id_soporte = '$nroCasoRech'";

                mysqli_query($conexion, $SQL_finalizar_soli);

                // AUDITORIA *****************************************************************
                $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db8 s INNER JOIN $tabla_db1 us ON s.tecnico_soporte_id=us.id_usuario WHERE id_soporte = '$nroCasoRech' AND estado = '$finalRechazo'");
                while ($consulta = mysqli_fetch_array($buscarID)) {
                    $nombreEquipo = $consulta['nomb_equipo_soporte'];
                }

                $valorID = $_SESSION['id_usr'];
                $nombreAdm = $_SESSION['nombre'];
                $descripcion_Cambio = "Rechazo de la solicitud de Soporte técnico, nombre del equipo: " . $nombreEquipo . ", Nro de Solicitud: " . $nroCasoRech . ". Se rechazó la solicitud de manera definitiva por parte de " . $nombreAdm . ".";

                $accionHecha = "12";
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$nombreEquipo', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                // FINAL AUDITORIA ************************************************************

                $mensaje = "Se rechazó completamente la solicitud.";
                echo $mensaje;
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

}

?>