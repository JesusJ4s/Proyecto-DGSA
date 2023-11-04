<?php
include("estadisticas.php");
date_default_timezone_set("America/Caracas");
$tipo = $_POST["tipo"];

if ($tipo == "barrasEquip") {
    include("abrir_conexion.php");

    // SACAR DATOS DE SOLICITUDES
    $colis = "SELECT * FROM $tabla_db6 WHERE direccion_inv_id = 1";
    $resultados = mysqli_query($conexion, $colis);
    $EquiposDg = mysqli_num_rows($resultados);


    $colis1 = "SELECT * FROM $tabla_db6 WHERE direccion_inv_id = 2";
    $resultados1 = mysqli_query($conexion, $colis1);
    $EquiposIngSan = mysqli_num_rows($resultados1);


    $colis2 = "SELECT * FROM $tabla_db6 WHERE direccion_inv_id = 3";
    $resultados2 = mysqli_query($conexion, $colis2);
    $EquiposSalRad = mysqli_num_rows($resultados2);

    $colis3 = "SELECT * FROM $tabla_db6 WHERE direccion_inv_id = 4";
    $resultados3 = mysqli_query($conexion, $colis3);
    $EquiposContVec = mysqli_num_rows($resultados3);

    $colis4 = "SELECT * FROM $tabla_db6 WHERE direccion_inv_id = 5";
    $resultados4 = mysqli_query($conexion, $colis4);
    $EquiposEpidAmb = mysqli_num_rows($resultados4);

    // enviamos los datos como caden json
    echo json_encode([$EquiposDg, $EquiposIngSan, $EquiposSalRad, $EquiposContVec, $EquiposEpidAmb]);
}

