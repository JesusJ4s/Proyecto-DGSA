$(document).ready(function(){

    $('#direccion_instrumentos_legales').change(function(){
        recargarListaGruposInstru();
    });
    recargarListaTiposInstru();
})
// FUNCION PARA CARGAR LA LISTA DE DIVISIONES
function recargarListaGruposInstru(){
    $.ajax({
        type:"POST",
        url:"./php/grupos_selectInstru.php",
        data:"direccion=" + $('#direccion_instrumentos_legales').val(),
        success:function(r){
            $('#gruposInstrumentos_select').html(r);

        }
    });
    
}
function recargarListaTiposInstru(){
    var dato = "comprobador";
    $.ajax({
        type:"POST",
        url:"./php/tipo_selectInstru.php",
        data: dato,
        success:function(r){
            $('#TipoDocSelect').html(r);

        }
    });
    
}
