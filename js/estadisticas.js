$(document).ready(function () {

    sacarEstadistica();

});
function sacarEstadistica(){
    $.ajax({
        dataType: 'json',
        url: '../php/estadisticas.php',
        error: function () {
            alert("Fallo al buscar cantidad sopote técnico");
            $('.ocultar-class').hide();
        },
        success: function (response) {
            if (response != null) {
                var datos = JSON.parse(response);
                console.log(datos);
                const one = datos[0].join().split(",");
                const two = datos[1].join().split(",");

                const data = {
                    labels: ['Finalizados', 'Rechazados'],
                    datasets: [{
                        label: 'Soportes',
                        data: [one, two],
                        borderWidth: 1,
                        backgroundColor:[
                            '#f9c940',
                            '#3fe8f4'
                        ]
                    }],
                }
                const config = {
                    type: 'pie',
                    data: data,
                    responsive: true,
                    options: {
                        legend: {

                        }
                    }
                }
                // const ctx = document.getElementById('myChart');
                new Chart(myChart, config);
            }else{ 
                
            }
        }
    });
}