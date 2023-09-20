<?php

// Establecer la duración de la sesión
ini_set('session.cookie_lifetime', 300); // un minuto para pruebas 
include("abrir_conexion.php");
include("date_time.php");

@session_start();
// $conn = new Conexion();

// REESTABLECER EVENTO EN BDs
if (isset($_SESSION['event'])) {

    $na = $_SESSION['id_usr'];
    $nueva_hora = hora10();
    $evento = $_SESSION['event'];

    // $sn = initSesion($na); //variable de inicio de sesion en BD
    $updateSesion = "UPDATE $tabla_db1 SET sesion='1' WHERE id_usuario = '$na'";
    mysqli_query($conexion,$updateSesion);  

    $delevent = "DROP EVENT IF EXISTS $evento";
    // $sql = $conn->query($delevent);
    mysqli_query($conexion,$delevent);

    // $event = "CREATE EVENT $evento ON SCHEDULE AT '$nueva_hora' DO UPDATE $tabla_db1 SET sesion = '0' WHERE id_usuario = '$na'";
    $accionCambio = "6";
    $descripcion_Cambio = "Salida automática del sistema, del Usuario: " . $nombre . ".";
    $event = "CREATE EVENT $evento ON SCHEDULE AT '$nueva_hora' DO BEGIN
                UPDATE $tabla_db1 SET sesion = '0' WHERE id_usuario = '$na';
                INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$na', '$accionCambio', now(), '$descripcion_Cambio');
            END";
    // $sql = $conn->query($event);
    mysqli_query($conexion,$event);
}

// Actualizar la última actividad de la sesión
$_SESSION['LAST_ACTIVITY'] = time();