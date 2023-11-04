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

    <style>
        .tamaño {
            width: 100% !important;
            height: 500px !important;
        }
    </style>
</head>

<body class="my-5" id="body_pruebas">
<div class="d-flex justify-content-center">
    <button class="btn btn-primary mb-2" type="button">Hola</button>
    <button class="btn btn-primary mb-2" type="button">Hola</button>
    <br>
    <input class="form-control w-50">
</div>
    <!-- ESTADISTICA SOLICITUDES BARRAS -->
    <div class="container d-flex justify-content-center row">
        <div class="col-9">
            <canvas class="" id="solicitudesProm"></canvas>

        </div>
        <div class="col-auto">
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
        <div class="col-4">
            <canvas class="" id="usrAc"></canvas>

        </div>
    </div>
    <hr>
    <!-- ESTADISTICAS INVENTARIO TECNOLOGICO -->
    <div class="container-fluid d-flex justify-content-center row">
        <div class="col-8">
            <canvas class="" id="equipUbi"></canvas>

        </div>
    </div>
    <hr>
    <!-- ESTADISTICAS CORRESPONDENCIA -->
    <div class="container-fluid d-flex justify-content-center row">
        <div class="col-8">
            <canvas class="" id="estaCorresp"></canvas>

        </div>
    </div>



</body>

<footer>
    <!-- COPIADO -->
    <script src="../js/estadisticasSoporte.js" type="module"></script>
    <!-- COPIADO -->
    <script src="../js/estadisticasAdmin.js" type="module"></script>
    <!-- COPIADO -->
    <script src="../js/estadisticasEquipos.js" type="module"></script>
    <!-- COPIADO -->
    <script src="../js/estadisticasCorresp.js" type="module"></script>


    <script src="../chart/dist/chart.umd.js"></script>
    <!-- <script src="../chart/dist/chart.js"></script> -->
    <script>
        const inputs = document.querySelectorAll('body input');
        const botones = document.querySelectorAll('body button');

        function ejecutarFuncion() {
            // Aquí puedes escribir el código de la función que deseas ejecutar
            console.log('Función ejecutada');
        }

        // document.body.addEventListener('focusin', ejecutarFuncion);
        // document.body.addEventListener('click', ejecutarFuncion);

        inputs.forEach((input)=>{
            input.addEventListener('click', ejecutarFuncion);
        });
        botones.forEach((boton) => {
            boton.addEventListener('click', ejecutarFuncion);
        });
    </script>
</footer>