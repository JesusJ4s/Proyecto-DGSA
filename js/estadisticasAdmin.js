$(document).ready(function () {
    estadisticaUsuarios();
    estadisticaUsando();
})
function estadisticaUsuarios() {
    const pieUsr = document.querySelector('#usuariosAc');
    var parametros =
    {
        "tipo": "usuarios"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasAdmin.php",
        success: function (response) {
            var datosJson = JSON.parse(response);

            console.log(datosJson);
            const activos = datosJson[1];
            const inactivos = datosJson[2];

            graficoPie(activos, inactivos);
        }
    });
    function graficoPie(dato1, dato2) {
        const data = {
            labels: [
                'Usuarios Activos',
                'Usuarios Inactivos'
            ],
            datasets: [{
                label: 'Usuarios',
                data: [dato1, dato2],
                backgroundColor: [
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };
        const options = {
            plugins: {
                title: {
                    display: true,
                    text: 'Porcentaje de usuarios del sistema',
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
                            label = label + ': ' + context.parsed + '%';
                            return label;
                        }
                    }
                }
            },
        };
        const config = {
            type: 'doughnut',
            data: data,
            options: options,
        };
        new Chart(pieUsr, config);
    };

}
function estadisticaUsando() {
    const usrAcceso = document.querySelector('#usrAc');
    var parametros =
    {
        "tipo": "usando"
    };
    $.ajax({
        data: parametros,
        type: "POST",
        url: "../php/estadisticasAdmin.php",
        success: function (response) {
            var datosJson = JSON.parse(response);
            console.log(datosJson);
            const usuarios = datosJson[0];
            const activosSis = datosJson[1];

            const labels = [''];

            const data = {
                labels: labels,
                datasets: [
                    {
                        label: "Usuarios registrados",
                        data: [usuarios],
                        backgroundColor: ['#004756']
                    },
                    {
                        label: "Usando el sistema actualmente",
                        data: [activosSis],
                        backgroundColor: ['#27AB40']
                    },
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    indexAxis: 'y',
                    scales: {
                        x: {
                            suggestedMin: 0,
                            // suggestedMax: 100,
                            ticks: {
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
                            text: 'Usuarios usando el sistema actualmente',
                            color: '#484848',
                            font: {
                                size: 16,
                                weight: 600,
                            }
                        },
                    },
                    onClick: function (event, elements) {
                        if (elements.length > 0) {
                            const datasetIndex = elements[0].datasetIndex;
                            const label = data.datasets[datasetIndex].label;
                            if (label === 'Usuarios registrados') {

                                // $.confirm({

                                // });
                            } else if (label === 'Usando el sistema actualmente') {
                                var parametros =
                                {
                                    "que_buscar": "usandoSIS"
                                };
                                // Realizar la solicitud AJAX para obtener los datos
                                $.ajax({
                                    data: parametros,
                                    url: '../php/consultar_cod.php',
                                    method: 'POST',
                                    success: function (response) {
                                        // Cargar los datos al modal
                                        var modalContent = response;
                                        $.confirm({
                                            title: 'Usuarios del sistema',
                                            content: modalContent,
                                            buttons: {
                                                confirm: {
                                                    text: 'Listo',
                                                    btnClass: 'btn-primary',
                                                    action: function () {
                                                        // Acción cuando se hace clic en el botón de confirmación
                                                        // console.log('Confirmación realizada');
                                                    }
                                                },
                                                cancel: {
                                                    text: 'Cerrar',
                                                    btnClass: 'btn-secondary',
                                                    action: function () {
                                                        // Acción cuando se hace clic en el botón de cancelación
                                                        // console.log('Datos cerrados');
                                                    }
                                                }
                                            }
                                        });
                                    },
                                    error: function (error) {
                                        // Manejar el error de la solicitud AJAX
                                        console.error(error);
                                    }
                                });
                                
                                
                            }
                        }
                    }
                },
            };
            new Chart(usrAcceso, config);
        }
    });

}