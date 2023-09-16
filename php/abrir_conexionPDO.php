<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    
    public function __construct()
    {
        $this->host     = 'localhost';
        $this->db     = 'practica_php_dgsa';
        $this->user     = 'root';
        $this->password     = '';
        $this->charset     = 'utf8mb4';
    }

    public function connect()
    {
        try{
            $conexion = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($conexion, $this->user, $this->password, $options);
        }catch(PDOException $e){
            print_r("Error en la conexión: " . $e->getMessage());
        }
    }
}
    // Parametros a configurar para la conexion de la base de datos
    $host = "localhost";   // Será el valor de nuestra base de datos
    $basededatos = "practica_php_dgsa";
    $usuariodb = "root";
    $clavedb = "";

    //Lista de Tablas
    $tabla_db1 = "a1_usuarios";    // Tabla de usuarios
    $tabla_db2 = "a2_rol";    

    $tabla_db3 = "b3_departamentos";
    $tabla_db4 = "b2_divisiones";
    $tabla_db5 = "b1_direccion_general_de_salud_ambiental";

    $tabla_db6 = "c1_inventario_equipo";
    $tabla_db7 = "c2_inventario_cambios";
    $tabla_db8 = "c3_solicitudes_soportes";
    $tabla_db9 = "c4_base_conocimiento";

    $tabla_db100 = "z1_historial_camb_sis";
    $tabla_db101 = "z2_historial_usuario";


    // $tabla_db1 = "divisiones";    // Se pueden agregar distintas tablas

    
    error_reporting(1); // No me muestra errores

    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

    if ($conexion->connect_errno){
        echo "Nuestro sitio experimenta fallos...";
        exit();
    }

?>