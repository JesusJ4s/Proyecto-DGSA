$(document).ready(function(){

    // CAMBIANDO DIVISION
    // Con esto se le puede agregar un valor = punto de inicio
    // $('#direccion_select').val(2);
    recargarLista2();

    $('#div_divisiones_select').change(function(){
        recargarLista2();
        // alert("Selecciono una Division");
    });

})
// FUNCION PARA CARGAR LA LISTA DE DIVISIONES
function recargarLista2(){
    $.ajax({
        type:"POST",
        url:"../php/departamento_select.php",
        data:"division=" + $('#division_select').val(),

        success:function(r){
            $('#departamento_select').html(r);
        }
    });
    
}
