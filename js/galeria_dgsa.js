$(document).ready(function(){
    GaleriaFotos();
    GaleriaVideos();
    GaleriaDocumentos();
})

function GaleriaFotos(){

    var identificador = 
    {
        "identificador": "fotos_dgsa"
    }
    $.ajax({
        type:"POST",
        url:"./php/galerias.php",
        data: identificador,
        success:function(mensaje){
            $('#galeria_imagenes').html(mensaje);

        }
    });
}
function GaleriaVideos(){

    var identificador = 
    {
        "identificador": "videos_dgsa"
    }
    $.ajax({
        type:"POST",
        url:"./php/galerias.php",
        data: identificador,
        success:function(mensaje){
            $('#galeria_videos').html(mensaje);

        }
    });
}
function GaleriaDocumentos(){

    var identificador = 
    {
        "identificador": "docs_dgsa"
    }
    $.ajax({
        type:"POST",
        url:"./php/galerias.php",
        data: identificador,
        success:function(mensaje){
            $('#galeria_documentos').html(mensaje);

        }
    });
}
