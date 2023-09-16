<?php
session_start();
ob_start();
// ARRAY PARA DEVOLVER VALORES EN JSON
$valores = array();
$busqueda = $_POST['busqueda'];
$patron_mac = '/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/'; // Expresión regular para validar la dirección MAC
$patron_ip = '/^([01]?\d{1,2}|2[0-4]\d|25[0-5])(\.([01]?\d{1,2}|2[0-4]\d|25[0-5])){3}$/';
$mac_nulo = '/^([0]{2}[:-]){5}[0]{2}$/';
$ip_nula = '/^0{1,3}\.0{1,3}\.0{1,3}\.0{1,3}$/';

// VERIFICAR EXISTENCIA DE DATOS
if ($busqueda == "nombre_Verify") {
    $nombreEquipo = $_POST["nombre_equipo"];
    $existe_name = 0;
    $nameALTO = strtoupper($nombre_equipo);

    if ($nombre_equipo == "") {
        echo "";
    } else {
        include("abrir_conexion.php");
        // Buscar solo con el nombre: Where "Columna tabla" = "variable que usaré para buscar"
        $buscar_sql_name = "SELECT * FROM $tabla_db6 WHERE nombre_equipo = '$nombreEquipo'";
        $resultados = mysqli_query($conexion, $buscar_sql_name);
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo
                "El nombre de usuario existe";
            $existe_name++;

        }
        if ($existe_name == 0) {
            echo "";
        }
        include("cerrar_conexion.php");


    }
}
// REGISTRO DEL EQUIPO EN EL SISTEMA
if ($busqueda == "RegisCPU") {

    include("abrir_conexion.php");

    // Valor del Ing Encargado
    $ing_encar_inv_id = $_POST['ingeniero_selector'];
    // Valores de los select
    $dpto_inv_id = $_POST['departamento_select'];
    $division_inv_id = $_POST['division_select'];
    $direccion_inv_id = $_POST['direccion_select'];

    // Primera parte
    $responsable = $_POST['responsable'];
    $supervisor_dpto = $_POST['supervisor_dpto'];
    $nombre_equipo = strtoupper($_POST['nomb_equip']);
    $BN_equipo = $_POST['BN_equipo'];
    $serial_equipo = $_POST['serial'];
    $tipo_de_equipo = $_POST['tipo_equipo'];


    // Segunda parte
    $cpu_modelo = $_POST['cpu_mod'];
    $cpu_velocidad = $_POST['cpu_vel'];
    $mac = strtoupper($_POST['mac']);
    $ip = $_POST['ip'];
    $disco_duro_cap = $_POST['disco_duro'];
    $disco_duro_marca = $_POST['disco_duro_marca'];
    $disco_duro_serial = $_POST['disco_duro_serial'];

    //Tercera parte
    $ram = $_POST['ram_cant'];
    $ram_velocidad = $_POST['ramVel'];
    $windows_ver = $_POST['vr_win'];
    // AFECTADOS (Modificados de manera que no arrojen información)
    $conect_red = $_POST['conect_red'];
    $tipo_conexion_ = $_POST['tipo_conect'];
    $internet_ = $_POST['internet'];
    if ($conect_red == "No") {
        $tipo_conexion = '';
        $internet = '';
    } else {
        $tipo_conexion = $tipo_conexion_;
        $internet = $internet_;
    }

    //Cuarta parte
    // AFECTADOS (Modificados de manera que no arrojen información)
    $mouse = $_POST['mouse_selector'];
    $BN_serial_mouse_ = $_POST['mouse_datos'];
    $mouse_marca_ = $_POST['mouse_marca'];
    $mouse_conexion_ = $_POST['mouse_conexion'];
    if ($mouse == "No") {
        $mouse_marca = '';
        $mouse_conexion = '';
        $BN_serial_mouse = '';
    } else {
        $mouse_marca = $mouse_marca_;
        $mouse_conexion = $mouse_conexion_;
        $BN_serial_mouse = $BN_serial_mouse_;

    }

    $monitor = $_POST['monitor_selector'];
    $monitor_conexion_ = $_POST['monitor_conexion'];
    $BN_serial_monitor_ = $_POST['monitor_datos'];
    if ($monitor == "No") {
        $monitor_conexion = '';
        $BN_serial_monitor = '';
    } else {
        $monitor_conexion = $monitor_conexion_;
        $BN_serial_monitor = $BN_serial_monitor_;

    }

    $regulador = $_POST['regulador_selector'];
    $regulador_marca = $_POST['regulador_marca'];
    $BN_serial_regulador = $_POST['regulador_datos'];

    $teclado = $_POST['teclado_selector'];
    $teclado_marca = $_POST['teclado_marca'];
    $teclado_conexion_ = $_POST['teclado_conexion'];
    $BN_serial_teclado = $_POST['teclado_datos'];
    if ($teclado == "No") {
        $teclado_conexion = '';
    } else {
        $teclado_conexion = $teclado_conexion_;
    }


    $escaner = $_POST['escaner_selector'];
    $escaner_modelo = $_POST['escaner_modelo'];
    $escaner_conexion_ = $_POST['escaner_conexion'];
    $BN_serial_escaner = $_POST['escaner_datos'];
    if ($escaner == "No") {
        $escaner_conexion = '';
    } else {
        $escaner_conexion = $escaner_conexion_;
    }

    $comentario = $_POST['descripcion'];

    $encontrado = 0;
    $existeMAC = 0;
    $existeIP = 0;



    $SQL_verify = "SELECT * FROM $tabla_db6 WHERE nombre_equipo = '$nombre_equipo'";
    $resultados = mysqli_query($conexion, $SQL_verify);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $encontrado++;
    }
    $SQL_MAC_BD = "SELECT * FROM $tabla_db6 WHERE mac = '$mac'";
    $resultados = mysqli_query($conexion, $SQL_MAC_BD);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $macBD = $consulta['mac'];
        $existeMAC++;
    }
    $SQL_IP_BD = "SELECT * FROM $tabla_db6 WHERE ip = '$ip'";
    $resultados = mysqli_query($conexion, $SQL_IP_BD);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $ipBD = $consulta['ip'];
        $existeIP++;
    }

    if ($encontrado == 0) {
        if (preg_match($ip_nula, $ip) || preg_match($mac_nulo, $mac) && preg_match($ip_nula, $ipBD) && preg_match($mac_nulo, $macBD)) {
            $SQL_DATOS = "INSERT INTO $tabla_db6 
            (id_case, fecha_inventario, ing_encar_inv_id, dpto_inv_id, division_inv_id, direccion_inv_id, responsable, supervisor_dpto, nombre_equipo, BN_equipo, serial_equipo, tipo_de_equipo, cpu_modelo, cpu_velocidad, mac, ip, disco_duro_cap, disco_duro_marca, disco_duro_serial, ram, ram_velocidad, windows_ver, conect_red, tipo_conexion, internet, mouse, BN_serial_mouse, mouse_marca, mouse_conexion, monitor, monitor_conexion, BN_serial_monitor, regulador, regulador_marca, BN_serial_regulador, teclado, teclado_marca, teclado_conexion, BN_serial_teclado, escaner, escaner_modelo, escaner_conexion, BN_serial_escaner, comentario) 
            values 
            (NULL, now(), '$ing_encar_inv_id', '$dpto_inv_id', '$division_inv_id','$direccion_inv_id', '$responsable', '$supervisor_dpto', '$nombre_equipo','$BN_equipo', '$serial_equipo', '$tipo_de_equipo', '$cpu_modelo','$cpu_velocidad', '$mac', '$ip', '$disco_duro_cap', '$disco_duro_marca', '$disco_duro_serial','$ram', '$ram_velocidad', '$windows_ver', '$conect_red', '$tipo_conexion', '$internet', '$mouse', '$BN_serial_mouse', '$mouse_marca', '$mouse_conexion', '$monitor', '$monitor_conexion', '$BN_serial_monitor','$regulador', '$regulador_marca', '$BN_serial_regulador', '$teclado', '$teclado_marca', '$teclado_conexion','$BN_serial_teclado', '$escaner', '$escaner_modelo', '$escaner_conexion', '$BN_serial_escaner','$comentario')";
            mysqli_query($conexion, $SQL_DATOS);

            // AUDITORIA *****************************************************************
            $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db6 s WHERE nombre_equipo = '$nombre_equipo' AND dpto_inv_id = '$dpto_inv_id'");
            while ($consulta = mysqli_fetch_array($buscarID)) {
                $idEquipoBD = $consulta['id_case'];
                $nameEquipoBD = $consulta['nombre_equipo'];
            }

            $valorID = $_SESSION['id_usr'];
            $descripcion_Cambio = "Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: " . $nameEquipoBD . ". Nro de Registro: " . $idEquipoBD . ".";

            $accionModificacion = "1";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************

            include("cerrar_conexion.php");
            echo "<div class=' text-center'><h3>Se insertaron correctamente los datos</h3></div>";

        } else if (preg_match($patron_ip, $ip) || preg_match($patron_mac, $mac) && preg_match($ip_nula, $ipBD) && preg_match($mac_nulo, $macBD)) {
            $SQL_DATOS = "INSERT INTO $tabla_db6 
            (id_case, fecha_inventario, ing_encar_inv_id, dpto_inv_id, division_inv_id, direccion_inv_id, responsable, supervisor_dpto, nombre_equipo, BN_equipo, serial_equipo, tipo_de_equipo, cpu_modelo, cpu_velocidad, mac, ip, disco_duro_cap, disco_duro_marca, disco_duro_serial, ram, ram_velocidad, windows_ver, conect_red, tipo_conexion, internet, mouse, BN_serial_mouse, mouse_marca, mouse_conexion, monitor, monitor_conexion, BN_serial_monitor, regulador, regulador_marca, BN_serial_regulador, teclado, teclado_marca, teclado_conexion, BN_serial_teclado, escaner, escaner_modelo, escaner_conexion, BN_serial_escaner, comentario) 
            values 
            (NULL, now(), '$ing_encar_inv_id', '$dpto_inv_id', '$division_inv_id','$direccion_inv_id', '$responsable', '$supervisor_dpto', '$nombre_equipo','$BN_equipo', '$serial_equipo', '$tipo_de_equipo', '$cpu_modelo','$cpu_velocidad', '$mac', '$ip', '$disco_duro_cap', '$disco_duro_marca', '$disco_duro_serial','$ram', '$ram_velocidad', '$windows_ver', '$conect_red', '$tipo_conexion', '$internet', '$mouse', '$BN_serial_mouse', '$mouse_marca', '$mouse_conexion', '$monitor', '$monitor_conexion', '$BN_serial_monitor','$regulador', '$regulador_marca', '$BN_serial_regulador', '$teclado', '$teclado_marca', '$teclado_conexion','$BN_serial_teclado', '$escaner', '$escaner_modelo', '$escaner_conexion', '$BN_serial_escaner','$comentario')";
            mysqli_query($conexion, $SQL_DATOS);

            // AUDITORIA *****************************************************************
            $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db6 s WHERE nombre_equipo = '$nombre_equipo' AND dpto_inv_id = '$dpto_inv_id'");
            while ($consulta = mysqli_fetch_array($buscarID)) {
                $idEquipoBD = $consulta['id_case'];
                $nameEquipoBD = $consulta['nombre_equipo'];
            }

            $valorID = $_SESSION['id_usr'];
            $descripcion_Cambio = "Nuevo registro de equipo en el inventario tecnológico, nombre del equipo: " . $nameEquipoBD . ". Nro de Registro: " . $idEquipoBD . ".";

            $accionModificacion = "1";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // FINAL AUDITORIA ************************************************************
            include("cerrar_conexion.php");
            echo "<div class=' text-center'><h3>Se insertaron correctamente los datos</h3></div>";
        } else {
            http_response_code(502);
            include("cerrar_conexion.php");
        }
    } else {
        http_response_code(501);
        include("cerrar_conexion.php");
    }
}
// EDICION DEL EQUIPO EN EL SISTEMA (AUDITORIA LISTA)
if ($busqueda == "edicionCPU") {

    // info del equipo
    $mac = $_POST['mac_mostrar'];
    $tec_editor = $_SESSION['id_usr'];
    $id_equipo = $_POST['id_del_equipo'];
    $nombre_equipo = $_POST['nomb_equip_edit'];


    // SE DEBE VALIDAR SI HUBO CAMBIOS EN LA UBICACIÓN FÍSICA DEL EQUIPO
    if (isset($_POST['departamento_select'])) {
        $dpto_inv_id = $_POST['departamento_select'];
    } else {
        $dpto_inv_id = $_POST['id_dep'];
    }

    if (isset($_POST['division_select'])) {
        $division_inv_id = $_POST['division_select'];
    } else {
        $division_inv_id = $_POST['id_div'];
    }

    if (isset($_POST['direccion_select'])) {
        $direccion_inv_id = $_POST['direccion_select'];
    } else {
        $direccion_inv_id = $_POST['id_dir'];
    }

    // Primera parte
    $responsable = $_POST['responsable_edit'];
    $supervisor_dpto = $_POST['supervisor_dpto_edit'];

    $ip = $_POST['ip_edit'];
    $disco_duro_cap = $_POST['disco_duro_edit'];
    $disco_duro_marca = $_POST['disco_duro_marca_edit'];
    $disco_duro_serial = $_POST['disco_duro_serial_edit'];

    //Tercera parte
    $ram = $_POST['ram_cant_edit'];
    $ram_velocidad = $_POST['ram_vel_edit'];
    $windows_ver = $_POST['vr_win_edit'];
    // AFECTADOS (Modificados de manera que no arrojen información)
    $conect_red = $_POST['conect_red_edit'];
    if ($conect_red == "No") {
        $tipo_conexion = '';
        $internet = '';
    } else {
        $tipo_conexion = $_POST['tipo_conect_edit'];
        $internet = $_POST['internet_edit'];
    }

    //Cuarta parte
    // AFECTADOS (Modificados de manera que no arrojen información)
    $mouse = $_POST['mouse_selector'];

    if ($mouse == "No") {
        $BN_serial_mouse = '';
        $mouse_marca = '';
        $mouse_conexion = '';
    } else {
        $BN_serial_mouse = $_POST['mouse_datos_edit'];
        $mouse_marca = $_POST['mouse_marca'];
        $mouse_conexion = $_POST['mouse_conexion'];
    }

    $monitor = $_POST['monitor_selector'];
    if ($monitor == "No") {
        $monitor_conexion = '';
        $BN_serial_monitor = '';
    } else {
        $monitor_conexion = $_POST['monitor_conexion'];
        $BN_serial_monitor = $_POST['monitor_datos_edit'];
    }

    $regulador = $_POST['regulador_selector'];
    if ($regulador == "No") {
        $regulador_marca = '';
        $BN_serial_regulador = '';
    } else {
        $regulador_marca = $_POST['regulador_marca_edit'];
        $BN_serial_regulador = $_POST['regulador_datos_edit'];
    }

    $teclado = $_POST['teclado_selector'];
    if ($teclado == "No") {
        $teclado_marca = '';
        $teclado_conexion = '';
        $BN_serial_teclado = '';
    } else {
        $teclado_marca = $_POST['teclado_marca_edit'];
        $teclado_conexion = $_POST['teclado_conexion'];
        $BN_serial_teclado = $_POST['teclado_datos_edit'];
    }


    $escaner = $_POST['escaner_selector'];
    if ($escaner == "No") {
        $escaner_modelo = '';
        $escaner_conexion = '';
        $BN_serial_escaner = '';
    } else {
        $escaner_modelo = $_POST['escaner_modelo_edit'];
        $escaner_conexion = $_POST['escaner_conexion'];
        $BN_serial_escaner = $_POST['escaner_datos_edit'];
    }
    include("abrir_conexion.php");


    $comentario = $_POST['descripcion'];
    $longitud = strlen($comentario);

    // INTENTANDO GUARDAR LOS CAMBIOS HECHOS EN EL HISTORIAL
    $encontrado = 0;
    $SQL_verify = "SELECT * FROM $tabla_db6 WHERE nombre_equipo = '$nombre_equipo'";
    $resultados = mysqli_query($conexion, $SQL_verify);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $encontrado++;

    }

    if ($encontrado <> 0) {
        if ($longitud >= 20) {

            // TODO: CAMBIOS REGISTRO GUARDAR
            $valorID = $_SESSION['id_usr'];
            $cedula_registro = $_SESSION['cedula_var_global'];
            $columnas = array(
                'responsable' => 'responsable',
                'supervisor_dpto' => 'Supervisor Dpto',
                'dpto_inv_id' => 'Departamento',
                'division_inv_id' => 'División',
                'direccion_inv_id' => 'Dirección',
                'ip' => 'IP',
                'mac' => 'MAC',
                'disco_duro_cap' => 'Capacidad Disco',
                'disco_duro_marca' => 'Marca Disco',
                'disco_duro_serial' => 'Serial Disco',
                'ram' => 'Cantidad Memorias',
                'ram_velocidad' => 'Velocidad RAM',
                'windows_ver' => 'Versión Windows',
                'conect_red' => 'Conectado a la Red',
                'tipo_conexion' => 'Tipo Conexión',
                'internet' => 'Internet',
                'mouse' => 'Mouse',
                'BN_serial_mouse' => 'Mouse BN',
                'mouse_marca' => 'Mouse Marca',
                'mouse_conexion' => 'Mouse Conexión',
                'monitor' => 'Monitor',
                'monitor_conexion' => 'Monitor Conexión',
                'BN_serial_monitor' => 'Monitor BN',
                'regulador' => 'Regulador',
                'regulador_marca' => 'Regulador Marca',
                'BN_serial_regulador' => 'Regulador BN',
                'teclado' => 'Teclado',
                'teclado_marca' => 'Teclado Marca',
                'teclado_conexion' => 'Teclado Conexión',
                'BN_serial_teclado' => 'Teclado BN',
                'escaner' => 'Escaner',
                'escaner_modelo' => 'Escaner Modelo',
                'escaner_conexion' => 'Escaner Conexión',
                'BN_serial_escaner' => 'Escaner BN',
                'comentario' => 'Comentario Anterior'
                // Agrega aquí las otras columnas que necesitas comparar
            );
            $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db6 WHERE nombre_equipo='$nombre_equipo'");
            $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
            // CAMBIOS SEGÚN CIEL-SAMA
            $cambios = array();

            // Consultar los nombres de los departamentos permitidos
            $departamentos = array();
            $query = "SELECT * FROM $tabla_db3";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $departamentos[$fila['id_departamento']] = $fila['nombre_dpto'];
                }
            }

            // Consultar los nombres de las coordinaciones permitidas
            $divisiones = array();
            $query = "SELECT id_divisiones, nombre_div FROM $tabla_db4";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $divisiones[$fila['id_divisiones']] = $fila['nombre_div'];
                }
            }

            // Consultar los nombres de las direcciones permitidas
            $direcciones = array();
            $query = "SELECT * FROM $tabla_db5";
            $resultado = mysqli_query($conexion, $query);
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    $direcciones[$fila['id_direcciones']] = $fila['nombre_dire'];
                }
            }
            foreach ($columnas as $columna => $nombre) {
                switch ($columna) {
                    case 'dpto_inv_id':
                        $valor_antiguo = isset($departamentos[$datos_antiguos[$columna]]) ? $departamentos[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($departamentos[$$columna]) ? $departamentos[$$columna] : "";
                        break;
                    case 'division_inv_id':
                        $valor_antiguo = isset($divisiones[$datos_antiguos[$columna]]) ? $divisiones[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($divisiones[$$columna]) ? $divisiones[$$columna] : "";
                        break;
                    case 'direccion_inv_id':
                        $valor_antiguo = isset($direcciones[$datos_antiguos[$columna]]) ? $direcciones[$datos_antiguos[$columna]] : "";
                        $valor_nuevo = isset($direcciones[$$columna]) ? $direcciones[$$columna] : "";
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

            $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en un equipo del inventario: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");

            $accionModificacion = "2";
            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

            // ********************************************************

            // EDITAR EQUIPO
            $_UPDATE_SQL = "UPDATE $tabla_db6 SET responsable='$responsable', supervisor_dpto='$supervisor_dpto', dpto_inv_id='$dpto_inv_id', division_inv_id='$division_inv_id', direccion_inv_id='$direccion_inv_id', nombre_equipo='$nombre_equipo', mac='$mac', ip='$ip', disco_duro_cap='$disco_duro_cap', disco_duro_marca='$disco_duro_marca', disco_duro_serial='$disco_duro_serial', ram='$ram', ram_velocidad='$ram_velocidad', windows_ver='$windows_ver', conect_red='$conect_red', tipo_conexion='$tipo_conexion', internet='$internet', mouse='$mouse', BN_serial_mouse='$BN_serial_mouse', mouse_marca='$mouse_marca', mouse_conexion='$mouse_conexion', monitor='$monitor', monitor_conexion='$monitor_conexion', BN_serial_monitor='$BN_serial_monitor', regulador='$regulador', regulador_marca='$regulador_marca', BN_serial_regulador='$BN_serial_regulador', teclado='$teclado', teclado_marca='$teclado_marca', teclado_conexion='$teclado_conexion', BN_serial_teclado='$BN_serial_teclado', escaner='$escaner', escaner_modelo='$escaner_modelo', escaner_conexion='$escaner_conexion', BN_serial_escaner='$BN_serial_escaner', comentario='$comentario' WHERE nombre_equipo ='$nombre_equipo'";

            mysqli_query($conexion, $_UPDATE_SQL);


            // ****************************************

            echo "<div class=' text-center'>Se insertaron correctamente los datos</div>";
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

//********************************************************************************************************************************************// 
// CONSULTA EQUIPOS POR DIRECCION
if ($busqueda == 1) {
    include("abrir_conexion.php");

    echo
        '
        <table class="table table-striped table-hover" id="table-dir">
            <thead  class="bg-grey text-light">
                <tr>
                    <th>Fecha Registro</th>
                    <th>Division</th>
                    <th>Nombre del Equipo</th>
                    <th>Responsable</th>
                    <th>IP</th>
                    <th>MAC</th>
                    <th>Tipo de Equipo</th>
                </tr>
            </thead>
            <tbody>
        ';

    $direccion = $_POST['varDireccion'];

    $limit = "";
    $sLimit = "";

    // BUSCAR EQUIPOS POR DIRECCION
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db4 d ON i.division_inv_id = d.id_divisiones WHERE direccion_inv_id = '$direccion'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                <tr>
                    <td>' . $consulta['fecha_inventario'] . '</td>
                    <td>' . $consulta['nombre_div'] . '</td>
                    <td>' . $consulta['nombre_equipo'] . '</td>
                    <td>' . $consulta['responsable'] . '</td>
                    <td>' . $consulta['ip'] . '</td>
                    <td>' . $consulta['mac'] . '</td>
                    <td>' . $consulta['tipo_de_equipo'] . '</td>
                </tr>
            ';
    }
    echo '</tbody>
                <tfoot>
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Division</th>
                        <th>Nombre del Equipo</th>
                        <th>Responsable</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>Tipo de Equipo</th>
                    </tr>
                </tfoot>
            </table>';
    include("cerrar_conexion.php");
    // Obtener el número total de registros

}
// BUSCAR POR DIVISION
if ($busqueda == 2) {
    include("abrir_conexion.php");

    echo
        '
        <table class="table table-striped table-hover" id="table-divi">
            <thead class="bg-grey text-light">
                <tr>
                    <th>Fecha Registro</th>
                    <th>Departamento</th>
                    <th>Nombre del Equipo</th>
                    <th>Responsable</th>
                    <th>IP</th>
                    <th>MAC</th>
                    <th>Tipo de Equipo</th>
                </tr>
            </thead>
        <tbody>
        ';

    $division = $_POST['varDivision'];
    // BUSCAR EQUIPOS POR DIRECCION
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db3 d ON i.dpto_inv_id = d.id_departamento WHERE division_inv_id = '$division'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                    <tr>
                    <td>' . $consulta["fecha_inventario"] . '</td>
                    <td>' . $consulta["nombre_dpto"] . '</td>
                    <td>' . $consulta["nombre_equipo"] . '</td>
                    <td>' . $consulta["responsable"] . '</td>
                    <td>' . $consulta["ip"] . '</td>
                    <td>' . $consulta["mac"] . '</td>
                    <td>' . $consulta["tipo_de_equipo"] . '</td>
                </tr>
            ';
    }
    echo '</tbody>
                <tfoot>
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Departamento</th>
                        <th>Nombre del Equipo</th>
                        <th>Responsable</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>Tipo de Equipo</th>
                    </tr>
                </tfoot>
        </table>';
    include("cerrar_conexion.php");
}
// BUSCAR POR DEPARTAMENTO
if ($busqueda == 3) {
    include("abrir_conexion.php");

    echo
        '
        <table class="table table-striped table-hover" id="table-depa">
            <thead class="bg-grey text-light">
                <tr>
                    <th>Fecha Registro</th>
                    <th>Técnico Encargado</th>
                    <th>Nombre del Equipo</th>
                    <th>Responsable</th>
                    <th>IP</th>
                    <th>MAC</th>
                    <th>Tipo de Equipo</th>
                </tr>
            </thead>
            <tbody>
        ';

    $dpto = $_POST['varDpto'];
    // BUSCAR EQUIPOS POR DEPARTAMENTO
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario WHERE dpto_inv_id = '$dpto'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
                    <tr>
                    <td>' . $consulta['fecha_inventario'] . '</td>
                    <td>' . $consulta['nombre'] . '</td>
                    <td>' . $consulta['nombre_equipo'] . '</td>
                    <td>' . $consulta['responsable'] . '</td>
                    <td>' . $consulta['ip'] . '</td>
                    <td>' . $consulta['mac'] . '</td>
                    <td>' . $consulta['tipo_de_equipo'] . '</td>
                </tr>
            ';
        $contador1++;
    }
    echo "</tbody>
                <tfoot>
                    <tr>
                        <th>Fecha Registro</th>
                        <th>Técnico Encargado</th>
                        <th>Nombre del Equipo</th>
                        <th>Responsable</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>Tipo de Equipo</th>
                    </tr>
                </tfoot>
            </table>";
    include("cerrar_conexion.php");
}

// BUSCAR POR FECHA
if ($busqueda == 4) {

    include("abrir_conexion.php");
    echo
        '
    <table id="dataTable_fecha" class="table table-striped table-hover">
        <thead  class="bg-grey text-light">
            <tr>
                <th>Fecha Registro</th>
                <th>Nombre del Equipo</th>
                <th>Responsable</th>
                <th>IP</th>
                <th>MAC</th>
                <th>Tipo de Equipo</th>
            </tr>
        </thead>
    ';

    $varFecha1 = $_POST['fecha1'];
    $varFecha2 = $_POST['fecha2'];
    $contador1 = 0;
    if ($varFecha1 == '' || $varFecha2 == '') {
        echo "<h6 class='my-5'>Ingrese una fecha.</h6>";
        include("php/cerrar_conexion.php");

    } else {

        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6 WHERE fecha_inventario BETWEEN '$varFecha1' AND '$varFecha2'");
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo
                "
                <tr>
                    <td class=\"\">" . $consulta['fecha_inventario'] . "</td>
                    <td class=\"\">" . $consulta['nombre_equipo'] . "</td>
                    <td class=\"\">" . $consulta['responsable'] . "</td>
                    <td class=\"\">" . $consulta['ip'] . "</td>
                    <td class=\"\">" . $consulta['mac'] . "</td>
                    <td class=\"\">" . $consulta['tipo_de_equipo'] . "</td>
                </tr>
                
            ";
            $contador1++;
        }
        echo "</table>Numero de registros: " . $contador1 . "</div>";
        include("php/cerrar_conexion.php");
    }

}
// CONSULTA POR NOMBRE DEL EQUIPO
if ($busqueda == 5) {

    include("abrir_conexion.php");

    $nameEquipo = $_POST['nameEquipo'];

    $contador1 = 0;
    if ($nameEquipo == '') {
        echo "<h6 class='my-5'>Ingrese el Nombre del equipo.</h6>";
        include("php/cerrar_conexion.php");

    } else {
        echo
            '
            <div>
            <table  class="table table-striped table-hover">
                <thead  class="bg-grey text-light">

                    <tr>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>Responsable</th>
                        <th>Departamento</th>
                        <th>Division</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
        ';
        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db4 s ON i.division_inv_id = s.id_divisiones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE nombre_equipo = '$nameEquipo'");
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo
                "
                <tr>
                    <td class=\"\">" . $consulta['ip'] . "</td>
                    <td class=\"\">" . $consulta['mac'] . "</td>
                    <td class=\"\">" . $consulta['responsable'] . "</td>
                    <td class=\"\">" . $consulta['nombre_dpto'] . "</td>
                    <td class=\"\">" . $consulta['nombre_div'] . "</td>
                    <td class=\"\">" . $consulta['nombre_dire'] . "</td>
                </tr>
                
            ";
            echo "</table>";
            $contador1++;
        }
        // echo "Equipo: ".$contador1."</div>";
        include("php/cerrar_conexion.php");
    }

}
// CONSULTAR TODOS
if ($busqueda == 6) {
    include("abrir_conexion.php");

    $contador_total = 0;
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db6");
    while ($consulta = mysqli_fetch_row($resultados)) {
        $contador_total++;
    }
    echo "Total: " . $contador_total;
    include("php/cerrar_conexion.php");
}
// LLENAR INPUTS PARA EDITAR EQUIPOS
if ($busqueda == 7) {
    include("abrir_conexion.php");

    $name_search = $_POST['name_sea'];

    $cont_consul = 0;
    // BUSCAR DATOS DEL EQUIPO Y TRAER
    $buscar_sql_cpu = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db3 a ON i.dpto_inv_id = a.id_departamento INNER JOIN $tabla_db4 b ON i.division_inv_id = b.id_divisiones INNER JOIN $tabla_db5 c ON i.direccion_inv_id = c.id_direcciones WHERE nombre_equipo = '$name_search'";
    $resultados = mysqli_query($conexion, $buscar_sql_cpu);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['id_case'] = $consulta['id_case'];

        $valores['fecha_inventario'] = $consulta['fecha_inventario'];
        $valores['nombre'] = $consulta['nombre'];
        $valores['nombre_dpto'] = $consulta['nombre_dpto'];
        $valores['dpto_inv_id'] = $consulta['dpto_inv_id'];

        $valores['nombre_div'] = $consulta['nombre_div'];
        $valores['division_inv_id'] = $consulta['division_inv_id'];

        $valores['nombre_dire'] = $consulta['nombre_dire'];
        $valores['direccion_inv_id'] = $consulta['direccion_inv_id'];


        $valores['responsable'] = $consulta['responsable'];
        $valores['supervisor_dpto'] = $consulta['supervisor_dpto'];
        $valores['nombre_equipo'] = $consulta['nombre_equipo'];

        $valores['BN_equipo'] = $consulta['BN_equipo'];
        $valores['serial_equipo'] = $consulta['serial_equipo'];
        $valores['tipo_de_equipo'] = $consulta['tipo_de_equipo'];
        $valores['cpu_modelo'] = $consulta['cpu_modelo'];
        $valores['cpu_velocidad'] = $consulta['cpu_velocidad'];
        $valores['mac'] = $consulta['mac'];
        $valores['ip'] = $consulta['ip'];
        $valores['disco_duro_cap'] = $consulta['disco_duro_cap'];
        $valores['disco_duro_marca'] = $consulta['disco_duro_marca'];
        $valores['disco_duro_serial'] = $consulta['disco_duro_serial'];
        $valores['ram'] = $consulta['ram'];
        $valores['ram_velocidad'] = $consulta['ram_velocidad'];
        $valores['windows_ver'] = $consulta['windows_ver'];
        $valores['conect_red'] = $consulta['conect_red'];
        $valores['tipo_conexion'] = $consulta['tipo_conexion'];
        $valores['internet'] = $consulta['internet'];

        $valores['mouse'] = $consulta['mouse'];
        $valores['BN_serial_mouse'] = $consulta['BN_serial_mouse'];
        $valores['mouse_marca'] = $consulta['mouse_marca'];
        $valores['mouse_conexion'] = $consulta['mouse_conexion'];

        $valores['monitor'] = $consulta['monitor'];
        $valores['monitor_conexion'] = $consulta['monitor_conexion'];
        $valores['BN_serial_monitor'] = $consulta['BN_serial_monitor'];

        $valores['regulador'] = $consulta['regulador'];
        $valores['regulador_marca'] = $consulta['regulador_marca'];
        $valores['BN_serial_regulador'] = $consulta['BN_serial_regulador'];

        $valores['teclado'] = $consulta['teclado'];
        $valores['teclado_marca'] = $consulta['teclado_marca'];
        $valores['teclado_conexion'] = $consulta['teclado_conexion'];
        $valores['BN_serial_teclado'] = $consulta['BN_serial_teclado'];

        $valores['escaner'] = $consulta['escaner'];
        $valores['escaner_modelo'] = $consulta['escaner_modelo'];
        $valores['escaner_conexion'] = $consulta['escaner_conexion'];
        $valores['BN_serial_escaner'] = $consulta['BN_serial_escaner'];
        $valores['comentario'] = $consulta['comentario'];

        $cont_consul++;
    }
    if ($cont_consul !== 0) {

        // REALENTIZANDO EL ENVÍO DEL FORMULARIO
        sleep(1);
        // Convirtiendo el array en algo leíble por JS
        $valores = json_encode($valores);
        echo $valores;
        include("cerrar_conexion.php");
    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }

}