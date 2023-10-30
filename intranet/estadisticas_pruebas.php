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
    <?php
    include('../php/javascript.php');
    ?>
    <script src="../chart/dist/chart.js" type="module"></script>
    <script src="../chart/dist/chart.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    </body>
    <style>
        .tamaño {
            width: 100% !important;
            height: 500px !important;
        }
    </style>
</head>

<body class="my-5">

    <!-- ESTADISTICA SOLICITUDES BARRAS -->
    <div class="container d-flex justify-content-center">
        <canvas class="" id="solicitudesProm"></canvas>
        <div class="">
            <p id="total" class="bold"></p>
            <p id="numF" class="bold"></p>
            <p id="numRech" class="bold"></p>
            <p id="numRep" class="bold"></p>

        </div>
    </div>
    <!-- ESTADISTICAS SOLICITUDES POR FECHA -->
    <div class="container d-flex justify-content-center">
        <canvas class="" id="lineal"></canvas>
    </div>
    <hr>
    <!-- ESTADISTICAS MOVIMIENTOS DENTRO DEL SISTEMA POR FECHA (SOLO ADMIN) -->
    <div class="container d-flex justify-content-center">
        <canvas class="" id="movimientos"></canvas>
    </div>
    <!-- ESTADISTICAS USUARIOS DEL SISTEMA VS USUARIOS ACTIVOS -->
    <div class="container-fluid d-flex justify-content-center row">
        <div class="col-4">
            <canvas class="" id="usuariosAc"></canvas>
            
        </div>
        <div class="col-2">
            <p id="ususu" class="bold"></p>
            <p id="actiSis" class="bold"></p>
        </div>
    </div>
    <!-- <canvas class="" id="myAreaChart"></canvas> -->

    <?php
    // include("../php/estadisticas.php");
// $dat = rangoFechas();
    
    // // Llamada a la función userStats() con una fecha específica
// $resultado = userStats("2023-10-26");
// echo "Resultado: " . json_encode($resultado) . "<br>";
    
    // // Llamada a la función userStats() con un rango de fechas
// $resultadoRango = userStats($dat['lunes'], $dat['domingo']);
// echo "Resultado Rango: " . json_encode($resultadoRango) . "<br>";
    ?>
    <script src="../chart/dist/chart-area-demo.js"type="module"></script>

    <script src="../js/estadisticasSoporte.js" type="module"></script>
    <script src="../js/estadisticasAdmin.js" type="module"></script>

</body>