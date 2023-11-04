$(document).ready(function () {
    estadisticaCorrespondencia();

})
function estadisticaCorrespondencia() {
    const estaCorresp = document.querySelector('#estaCorresp');
    var parametros =
    {
        "tipo": "correspFechas"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasCorresp.php",
        success: function (response) {
            var datosJson = JSON.parse(response);
            console.log(datosJson);

            // crear grafico con variables de base de dato
            const total = datosJson[0][0].join().split(",");
            const espe = datosJson[0][1].join().split(",");
            const listo = datosJson[0][2].join().split(",");
            // const dos = datosJson[0].join().split(",");

            const f = datosJson[1]["lunes"] + " - " + datosJson[1]["domingo"];

            nuevoGrafico(estaCorresp, total, espe, listo, f);
        }
    });
    function nuevoGrafico(canvas, array1, array2, array3, arrayFechas) {

        //datos del GRAFICO
        const labels = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Total Correspondencia del Día',
                data: array1,
                backgroundColor: ['rgba(0, 114, 235, 0.2)'],
                borderColor: ['rgb(0, 71, 147)'],
                borderWidth: 1
            },
            {
                label: 'Correspondencia en Espera',
                data: array2,
                backgroundColor: ['rgba(180, 120, 0, 0.2)'],
                borderColor: ['rgb(94, 62, 0)'],
                borderWidth: 1
            },
            {
                label: 'Correspondencia Aceptada',
                data: array3,
                backgroundColor: ['rgba(0, 176, 156, 0.2)'],
                borderColor: ['rgb(0, 89, 78)'],
                borderWidth: 1
            },
            ]
        };

        const config = {
            type: 'bar',
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
                        text: 'Correspondencia llegada en fechas: ' + arrayFechas,
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

