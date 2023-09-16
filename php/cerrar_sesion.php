<?php
session_start();
ob_start();

include("abrir_conexion.php");
$valorID = $_SESSION['id_usr'];
$nombre = $_SESSION['nombre'];

// $descripcion = "Salida del Usuario: " . $nombre . " del Sistema";

// $SQL_DATOS_INGRESO = "INSERT INTO $tabla_db101 (id_historial_usuario, id_usuario_ingr_salida,  fecha_creacion_registro, descripcion_usuario) values (NULL, '$valorID', now(), '$descripcion')";
// mysqli_query($conexion, $SQL_DATOS_INGRESO);

// AUDITORIA *****************************************************************
$descripcion_Cambio = "Salida del sistema del Usuario: " . $nombre . ".";
$accionCambio = "6";
$SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionCambio', now(), '$descripcion_Cambio')";
mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
// FINAL AUDITORIA ************************************************************






$updateSesion = "UPDATE $tabla_db1 SET sesion='0' WHERE id_usuario = '$valorID'";
mysqli_query($conexion, $updateSesion);
// CONSULTA FINALIZADA, CERRAR SESION

$evento = $_SESSION['event'];
$delevent = "DROP EVENT IF EXISTS $evento";
// $sql = $conn->query($delevent);
mysqli_query($conexion, $delevent);
include("cerrar_conexion.php");
//Cerrar sesion es tan simple como igualar a 0 la variable... en este caso
//La iguale a 4 para saber exactamente cuando cierran sesion y asi mostrar
//en el index un mensaje de despedida (mirar linea 49 del index)
$_SESSION['sesion_exito'] = 0; //error 4 cerro sesion exitosamente
//Toma la cédula del usuario que ingresa
$_SESSION['cedula_var_global'] = 0;
// NOMBRE DEL USUARIO
$_SESSION['nombre'] = 0;
// ID
$_SESSION['id_usr'] = 0;
// NIVEL DE USUARIO
$_SESSION['nivel_usuario'] = 0;
session_unset();
session_destroy();

header('Location: ../intranet/intranet.php');

?>