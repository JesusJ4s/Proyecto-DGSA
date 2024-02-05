<?php
// CONSULTAR CONOCIMIENTO - BOTONES SUPERIORES
function volver_crear(){
    if ($_SESSION['nivel_usuario']==3 || $_SESSION['nivel_usuario']==4 || $_SESSION['nivel_usuario']==5) {
        echo 
        '
            <a href="soporte_tecnico.php" class="btn btn-secondary me-1 botones-solicitud"><img src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
        ';
    }else{
        echo 
        '
            <button class="btn btn-secondary mx-0" onclick="cambioPesta4();" id="botonCambiar1" name="botonCambiar1"><img src="../assets/icon/multi/cruz_white.png" class="wh-icon-solicitud mb-1 me-2">
            Ingresar Nuevo Caso
            </button>  
            <a href="soporte_tecnico.php" class="btn btn-secondary me-1 botones-solicitud"><img src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
        ';
    }
}
