<?php
// Cerramos la sesión sin borrar las sesiones
session_write_close();
ini_set('session.cookie_lifetime', 300); //tiempo de la sesion en segundos
// Volvemos a abrir la sesión
session_start();

ob_start();

// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
function LoginSimple()
{

    if ($_SESSION['sesion_exito'] <> 1 || $_SESSION['nivel_usuario'] == 100) {
        header('location: ../intranet/intranet.php');
    }
}
// SOLO PERMITE LA ENTRADA DE ADMINISTRADORES

function LoginAdmin()
{
    if ($_SESSION['sesion_exito'] <> 1 || $_SESSION['nivel_usuario'] <> 1) {
        header('location: ../intranet/index_intranet.php');
    }
}
// NO PERMITE LA ENTRADA DE EMPLEADOS
function Login_Jef_ING_Admin()
{
    if ($_SESSION['sesion_exito'] <> 1 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5) {
        header('location: ../intranet/index_intranet.php');
    }
}
// PERMITE LA ENTRADA DE ADMINISTRADORES E INGENIEROS
function Login_ING_Admin()
{
    if ($_SESSION['sesion_exito'] <> 1 || $_SESSION['nivel_usuario'] == 3 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5) {
        header('location: ../intranet/index_intranet.php');
    }
}
// PERMITE LA ENTRADA DE TODOS
// function Login_Emp(){
//     if($_SESSION['sesion_exito']<>1 || $_SESSION['nivel_usuario']<>1 || $_SESSION['nivel_usuario']<>3 || $_SESSION['nivel_usuario']<>2 || $_SESSION['nivel_usuario']<>4)
//     {
//         header('location: ../intranet/index_intranet.php');
//     }
// } 

?>