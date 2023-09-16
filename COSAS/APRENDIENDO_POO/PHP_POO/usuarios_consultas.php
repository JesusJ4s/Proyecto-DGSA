<?php
// Archivo consultar.php
require_once 'BD_POO.php';

if (isset($_POST['numero'])) {
  $numero = $_POST['numero'];
  $conexion = new Conexion();
  $conexion->consultar($numero);
}




?>