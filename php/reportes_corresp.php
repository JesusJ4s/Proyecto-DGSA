<?php
session_start();
ob_start();
$busqueda = $_POST['buscar'];
include("abrir_conexion.php");
$patron_numero = '/^[0-9]{1,11}$/';
$fechaExp = '/^(\d{2,4})[-\/](\d{2,4})[-\/](\d{2,4})$/';
$fechaExp2 = '/^(\d{2,4})[-\/](\d{2,4})[-\/](\d{2,4})$/';

// IMPRIMIR EQUIPO POR FECHA
if ($busqueda == "reporte") {
    $fechaIni = $_POST['fecha1'];
    $fechaFin = $_POST['fecha2'];

    if ($fechaIni == '') {
        if (preg_match($fechaExp2,$fechaFin)) {
            $_SESSION['fechCorr1'] = "";
            $_SESSION['fechCorr2'] = $fechaFin;
        }else {
            http_response_code(500);

        }
    }else if (preg_match($fechaExp,$fechaIni) && preg_match($fechaExp2,$fechaFin) && $fechaIni < $fechaFin) {
        $_SESSION['fechCorr1'] = $fechaIni;
        $_SESSION['fechCorr2'] = $fechaFin;
    }else {
        http_response_code(500);

    }
    

}