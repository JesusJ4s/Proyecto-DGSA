<?php
session_start();
ob_start();
$busqueda = $_POST['busqueda'];
include("abrir_conexion.php");

// IMPRIMIR INFORMACIÓN DEL EQUIPO POR NOMBRE
if ($busqueda == "dato_solo") {
    $nombreEquipo = strtoupper($_POST['con_name']);

    $_SESSION['nombreSQL'] =  "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE nombre_equipo = '$nombreEquipo'";
    include("cerrar_conexion.php");

}
// IMPRIMIR EQUIPO POR FECHA
if ($busqueda == "dato_fecha") {
    $fecha = $_POST['fecha'];
    $fecha2 = $_POST['fecha2'];

    $_SESSION['nombreSQL'] =  "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE fecha_inventario BETWEEN '$fecha' AND '$fecha2'";
    include("cerrar_conexion.php");

}
// IMPRIMIR TODOS LOS EQUIPOS
if ($busqueda == "dato_todos") {

    $_SESSION['nombreSQL'] = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento";
    include("cerrar_conexion.php");

}
// IMPRIMIR TODOS LOS EQUIPOS POR DIRECCION
if ($busqueda == "dato_dire") {

    $Direccion = $_POST['direccion'];

    $_SESSION['nombreSQL'] = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE direccion_inv_id = '$Direccion'";
    include("cerrar_conexion.php");

}
// IMPRIMIR TODOS LOS EQUIPOS POR DIVISION
if ($busqueda == "dato_divi") {

    $Division = $_POST['division'];

    $_SESSION['nombreSQL'] = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE division_inv_id = '$Division'";
    include("cerrar_conexion.php");

}
// IMPRIMIR TODOS LOS EQUIPOS POR DEPARTAMETNO
if ($busqueda == "dato_depa") {

    $Departamento = $_POST['departamento'];

    $_SESSION['nombreSQL'] = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE dpto_inv_id = '$Departamento'";
    include("cerrar_conexion.php");

}
// IMPRIMIR CAMBIOS HECHOS EN EL EQUIPO
if ($busqueda == "equipo_cambios") {
    $_SESSION['nombreEQ'] = strtoupper($_POST['con_name']);

}
