$(document).ready(function () {
    estadisticaEquipoUbi();
})
function estadisticaEquipoUbi() {
    const equipUbi = document.querySelector('#equipUbi');
    var parametros =
    {
        "tipo": "barrasEquip"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasEquipos.php",
        success: function (response) {
            if (response != null) {
                var colon = JSON.parse(response);

                console.log(colon);
                const EquiposDg = colon[0];
                const EquiposIngSan = colon[1];
                const EquiposSalRad = colon[2];
                const EquiposContVec = colon[3];
                const EquiposEpidAmb = colon[4];

                const labels = [''];
                const data = {
                    labels: labels,
                    datasets: [
                        {
                            label: "Dirección General",
                            data: [EquiposDg],
                            backgroundColor: ['rgba(7, 51, 228, 0.2)'],
                            borderColor: ['rgb(4, 31, 141)'],
                            borderWidth: 1
                        },
                        {
                            label: "Ingeniería Sanitaria",
                            data: [EquiposIngSan],
                            backgroundColor: ['rgba(7, 121, 228, 0.2)'],
                            borderColor: ['rgb(4, 74, 140)'],
                            borderWidth: 1
                        },
                        {
                            label: "Salud Radiológica",
                            data: [EquiposSalRad],
                            backgroundColor: ['rgba(33, 7, 228, 0.2)'],
                            borderColor: ['rgb(20, 4, 140)'],
                            borderWidth: 1
                        },
                        {
                            label: "Control de Vectores",
                            data: [EquiposContVec],
                            backgroundColor: ['rgba(7, 191, 228, 0.2)'],
                            borderColor: ['rgb(4, 117, 140)'],
                            borderWidth: 1
                        },
                        {
                            label: "Epidemiología Ambiental",
                            data: [EquiposEpidAmb],
                            backgroundColor: ['rgba(106, 7, 228, 0.2)'],
                            borderColor: ['rgb(65, 4, 140)'],
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
                                text: 'Cantidad de equipos del Inventario Tecnológico por Dirección',
                                color: '#484848',
                                font: {
                                    size: 16,
                                    weight: 600,
                                }
                            },
                        },
                    },
                };
                new Chart(equipUbi, config);
            } else {
                alert("NULL");
            }
        }
    });
}

