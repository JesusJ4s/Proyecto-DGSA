$(document).ready(function(){

    $('#direccion_archivo').change(function(){
        recargarListaGrupos();
    });
    $('#nombre_direR').change(function(){
        recargarListaGrupos2();
    });

})
// FUNCION PARA CARGAR LA LISTA DE DIVISIONES
function recargarListaGrupos(){
    $.ajax({
        type:"POST",
        url:"./php/grupos_select.php",
        data:"direccion=" + $('#direccion_archivo').val(),
        success:function(r){
            $('#grupos_select').html(r);

        }
    });
    
}
function recargarListaGrupos2(){
    $.ajax({
        type:"POST",
        url:"./php/grupos_select2.php",
        data:"direccion=" + $('#nombre_direR').val(),
        success:function(r){
            $('#nombre_grupoR').html(r);

        }
    });
    
}
