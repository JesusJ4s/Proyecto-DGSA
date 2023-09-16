<script src="../js/reenvio.js"></script>


<html lang="en" class=" fondito">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/styleOrigen.css">

    <link rel="stylesheet" href="../../css/bootstrap.css">

    <script src="../../jquery/jquery-3.6.4.min.js"></script>
    
    <script src="../../chart/dist/chart.js"></script>
    <script src="../../chart/dist/chart.umd.js"></script>
    <style>
        .pollo {
            width: 700px;
            height: 400px;
        }
    </style>

    <title>PRUEBAS</title>
</head>

<body class="min-width-index p-a">
    <div class="pollo bg-blanco p-3">
        <h1 class="">titulo</h1>
        <canvas id="myChart" ></canvas>
    </div>
    
</body>

<script src="MODIFICACIONES.js"></script>
<!-- JS en Bootstrap -->
<script src="../../js/bootstrap.bundle.js"></script>

<script src="../../js/editar_mostrar_datos.js"></script>

<script src="JS_POO/POO.js"></script>

<script>

        var ola = "pollo";
        var 1 = "4";
        var 2 = "2";
        var 3 = "20";

        var ctx= document.getElementById("myChart").getContext("2d");
        var myChart= new Chart(ctx,{
            type:"bar",
            data:{
                labels:['col1','col2','col3'],
                datasets:[{
                        label:ola,
                        data:[1,9,15],
                        backgroundColor:[
                            'rgb(66, 134, 244,0.5)',
                            'rgb(74, 135, 72,0.5)',
                            'rgb(229, 89, 50,0.5)'
                        ]
                }]
            },
            options:{
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                    }]
                }
            }
        });
        alert(ola)
    </script>
</html>