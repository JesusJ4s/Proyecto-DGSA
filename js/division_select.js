$(document).ready(function(){

    // CAMBIANDO DIVISION
    // Con esto se le puede agregar un valor = punto de inicio
    // $('#direccion_select').val(2);
    recargarLista();

    $('#direccion_select').change(function(){
        recargarLista();
        // alert("Selecciono una Dirección");
    });

})
// FUNCION PARA CARGAR LA LISTA DE DIVISIONES
function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../php/division_select.php",
        data:"direccion=" + $('#direccion_select').val(),

        success:function(r){
            $('#division_select').html(r);
            $.ajax({
                type:"POST",
                url:"../php/departamento_select.php",
                data:"division=" + $('#division_select').val(),
        
                success:function(r){
                    $('#departamento_select').html(r);
                }
            });
        }
    });
    
}
