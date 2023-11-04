
$(document).ready(function () {
    estadisticaMovimientos();
})
function estadisticaMovimientos() {
    const movimovi = document.querySelector('#movimientos');
    var parametros =
    {
        "tipo": "movimientos"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasAdmin.php",
        success: function (response) {
            var datosJson = JSON.parse(response);
            console.log(datosJson);

            // crear grafico con variables de base de dato
            const ingr = datosJson[0][0].join().split(",");
            const regEq = datosJson[0][1].join().split(",");
            const soliSop = datosJson[0][2].join().split(",");
            const regCorr = datosJson[0][3].join().split(",");
            const Audi = datosJson[0][4].join().split(",");
            const movi = datosJson[0][5].join().split(",");
            // const dos = datosJson[0].join().split(",");

            const f = datosJson[1]["lunes"] + " - " + datosJson[1]["domingo"];

            nuevoGrafico(movimovi, ingr, regEq, soliSop, regCorr, Audi, movi, f);
        }
    });
    function nuevoGrafico(canvas, array1, array2, array3, array4, array5, array6, arrayFechas) {

        //datos del GRAFICO
        const labels = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Ingresos al Sistema',
                data: array1,
                borderColor: "#1B4C6A",
                backgroundColor: "#2976A5",
                tension: 0.3
            },
            {
                label: 'Equipos Registrados',
                data: array2,
                borderColor: "#2A674E",
                backgroundColor: "#42A079",
                tension: 0.3
            },
            {
                label: 'Solicitudes de Soporte',
                data: array3,
                borderColor: "#6B8530",
                backgroundColor: "#83A23A",
                tension: 0.3
            },
            {
                label: 'Correspondencia',
                data: array4,
                borderColor: "#6F7819",
                backgroundColor: "#A5B326",
                tension: 0.3
            },
            {
                label: 'Respaldos',
                data: array5,
                borderColor: "#297464",
                backgroundColor: "#3DAD95",
                tension: 0.3
            },
            {
                label: 'Movimientos',
                data: array6,
                borderColor: "#A85E1D",
                backgroundColor: "#A85E1D",
                tension: 0.3
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
                        // suggestedMax: 100,
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
                        text: 'Movimientos del Sistema ' + arrayFechas,
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
