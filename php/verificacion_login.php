<?php
// Cerramos la sesión sin borrar las sesiones
session_write_close();
ini_set('session.cookie_lifetime', 300); //tiempo de la sesion en segundos
// Volvemos a abrir la sesión
session_start();
ob_start();

// USAR EN TODAS LAS PAGINAS PARA SACAR A LA PERSONA DEL SERVER 
function LoginSimple()
{

    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] == 100) {
        header('location: ../intranet/intranet.php');
    }
}
// SOLO PERMITE LA ENTRADA DE ADMINISTRADORES

function LoginAdmin()
{
    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] <> 1) {
        header('location: ../intranet/index_intranet.php');
    }
}
// SOLO JEFES Y ADMIN
function Login_Jef__Admin()
{
    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] == 2 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5) {
        header('location: ../intranet/index_intranet.php');
    }
}
// PARA REGISTRO DE CORRESPONDENCIA
function Login_JefCorrespondencia__Admin()
{
    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] == 2 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5 || $_SESSION['id_departamento'] != 80) {
        if ($_SESSION['nivel_usuario'] != 1) {
            header('location: ../intranet/index_intranet.php');
        }
    }
}
// NO PERMITE EL ACCESO A EL JEFE DE CORRESPONDENCIA
function Login_JefnoCorrespondencia__Admin()
{
    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] == 2 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5 || $_SESSION['id_departamento'] == 80) {
        header('location: ../intranet/index_intranet.php');
    }
}
// PERMITE LA ENTRADA DE ADMINISTRADORES E INGENIEROS
function Login_ING_Admin()
{
    if ($_SESSION['logged_in'] == false || $_SESSION['nivel_usuario'] == 3 || $_SESSION['nivel_usuario'] == 4 || $_SESSION['nivel_usuario'] == 5) {
        header('location: ../intranet/index_intranet.php');
    }
}
// PERMITE LA ENTRADA DE ADMINISTRADORES Y DISEÑADORES SOLAMENTE
function Login_Dise_Admin()
{
    if ($_SESSION['nivel_usuario'] == 1) {
    }else if ($_SESSION['nivel_usuario'] == 4 && $_SESSION['id_departamento'] == 81) {
    }else {
        header('location: ../intranet/index_intranet.php');
    }
}
