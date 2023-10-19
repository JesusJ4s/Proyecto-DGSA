<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg2.css">

    <script src="../chart/dist/chart.js"></script>
    <script src="../chart/dist/chart.umd.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    </body>
    <style>
        .tamaño{
            width: 500px !important;
            height: 500px !important;
        }
    </style>
</head>
<body>
<div>
    <canvas class="tamaño" id="myChart"></canvas>
</div>
<?php

include("estadisticas.php");
// $dat = rangoFechas();

// // Llamada a la función userStats() con una fecha específica
// $resultado = userStats("2023-10-13");
// echo "Resultado: " . json_encode($resultado) . "<br>";

// // Llamada a la función userStats() con un rango de fechas
// $resultadoRango = userStats($dat['lunes'], $dat['domingo']);
// echo "Resultado Rango: " . json_encode($resultadoRango) . "<br>";
?>
<script src="estadisticas.js"></script>


</body>