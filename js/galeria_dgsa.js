$(document).ready(function(){
    GaleriaFotos();
    GaleriaVideos();
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