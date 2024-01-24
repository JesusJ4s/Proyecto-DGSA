<?php

function manuales(){

    if ($_SESSION['nivel_usuario'] == 1) {
        echo "<li><a class='dropdown-item' href='../assets/intranet/manuales/ManualdeUsuarioAdministrador.pdf' target='_blank'>Manual de Usuario</a></li>";
    }else if ($_SESSION['nivel_usuario'] == 2) {
        // echo "<li><a class='dropdown-item' href='../assets/intranet/manuales/ManualdeUsuarioAdministrador.pdf' target='_blank'>Manual de Usuario</a></li>";
    }else if ($_SESSION['nivel_usuario'] == 3) {
        // echo "<li><a class='dropdown-item' href='../assets/intranet/manuales/ManualdeUsuarioAdministrador.pdf' target='_blank'>Manual de Usuario</a></li>";
    }else if ($_SESSION['nivel_usuario'] == 4) {
        // echo "<li><a class='dropdown-item' href='../assets/intranet/manuales/ManualdeUsuarioAdministrador.pdf' target='_blank'>Manual de Usuario</a></li>";
    } 

}