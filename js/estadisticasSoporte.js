$(document).ready(function () {
    estadisticaSoporteB();
    estadisticaSoporteL();
})

function estadisticaSoporteB() {
    const promedio = document.querySelector('#solicitudesProm');
    var parametros =
    {
        "tipo": "barras"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasSoporte.php",
        success: function (response) {
            if (response != null) {
                console.log(response);
                var colon = JSON.parse(response);
                // ordenar datos de array 
                // alert("llego");
                const Fina = colon[0];
                const Rech = colon[1];
                const Resp = colon[2];
                const total = colon[3];
                const numF = colon[4];
                const numRech = colon[5];
                const numRep = colon[6];

                const labels = [''];

                $("#total").html("Total de solicitudes: " + total);
                $("#numF").html("Total Finalizadas: " + numF);
                $("#numRech").html("Total Rechazadas: " + numRech);
                $("#numRep").html("Total sin Repuesto: " + numRep);

                const data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Finalizadas",
                            data: [Fina],
                            backgroundColor: ['rgba(0, 145, 174, 0.2)'],
                            borderColor: ['rgb(0, 71, 86)'],
                            borderWidth: 1
                        },
                        {
                            label: "Rechazadas",
                            data: [Rech],
                            backgroundColor: ['rgba(209, 105, 2, 0.2)'],
                            borderColor: ['rgb(151, 77, 2)'],
                            borderWidth: 1
                        },
                        {
                            label: "Repuesto",
                            data: [Resp],
                            backgroundColor: ['rgba(85, 184, 150, 0.2)'],
                            borderColor: ['rgb(44, 96, 78)'],
                            borderWidth: 1
                        }
                    ]
                };

                const config = {
                    type: 'bar',
                    data: data,
                    options: {
                        indexAxis: 'x',
                        scales: {
                            x: {
                                suggestedMin: 0,
                                suggestedMax: 100,
                            }
                        },
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'left',
                            },
                            title: {
                                display: true,
                                text: 'Porcentaje de Solicitudes del Sistema',
                                color: '#484848',
                                font: {
                                    size: 16,
                                    weight: 600,
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': '+ context.parsed.y + '%';
                                        }
                                        return label;
                                    }
                                }
                            }
                        },
                    },
                };
                new Chart(promedio, config);
            } else {
                alert("NULL");
            }
        }
    });
}
function estadisticaSoporteL() {
    const lineas = document.querySelector('#lineal');
    var parametros =
    {
        "tipo": "fechas"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasSoporte.php",
        success: function (response) {
            var datosJson = JSON.parse(response);
            // console.log(datosJson);

            // crear grafico con variables de base de dato
            const fin = datosJson[0][0].join().split(",");
            const espe = datosJson[0][1].join().split(",");
            const rech = datosJson[0][2].join().split(",");
            // const dos = datosJson[0].join().split(",");

            const f = datosJson[1]["lunes"] + " - " + datosJson[1]["domingo"];

            nuevoGrafico(lineas, fin, espe, rech, f);
        }
    });
    function nuevoGrafico(canvas, array1, array2, array3, arrayFechas) {

        //datos del GRAFICO
        const labels = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Solicitudes Finalizadas',
                data: array1,
                borderColor: "#004756",
                backgroundColor: "#007991",
                tension: 0.4
            },
            {
                label: 'En espera de Repuestos',
                data: array2,
                borderColor: "#55B896",
                backgroundColor: "#54B895",
                tension: 0.4
            },
            {
                label: 'Rechazadas',
                data: array3,
                borderColor: "#974D02",
                backgroundColor: "#B45B02",
                tension: 0.4
            },
            ]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    y: {
                        suggestedMin: 0,
                        // suggestedMax: 10,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 1
                        }
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Solicitudes atendidas en las fechas ' + arrayFechas,
                        color: '#484848',
                        font: {
                            size: 16,
                            weight: 600,
                        }
                    },
                },
            },
        };

        new Chart(canvas, config);
    };

}

