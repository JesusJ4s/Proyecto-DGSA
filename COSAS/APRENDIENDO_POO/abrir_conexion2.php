<?php
    $host = "localhost";   // Será el valor de nuestra base de datos
    $basededatos = "practica_php_dgsa";
    $usuariodb = "root";
    $clavedb = "";
    
    //Lista de Tablas
    $tabla_db1 = "a1_usuarios";    // Tabla de usuarios
    $tabla_db2 = "a2_rol";    
    $tabla_db2_1 = "a3_preguntas";    
    $tabla_db2_2 = "a4_estado";    

    $tabla_db3 = "b3_departamentos";
    $tabla_db4 = "b2_divisiones";
    $tabla_db5 = "b1_direcciones";

    $tabla_db6 = "c1_inventario_equipo";
    $tabla_db7 = "c2_inventario_cambios"; //PROXIMA A BORRAR
    $tabla_db8 = "c3_solicitudes_soportes";
    $tabla_db9 = "c4_base_conocimiento";

    $tabla_db10 = "d1_correspondencia";
    $tabla_db11 = "d2_empresas_corresp";
    $tabla_db12 = "d3_notificaciones_div";
    $tabla_db13 = "d4_notificaciones_estatus";

    $tabla_evento = "aa_eventos_sesion";

    $tabla_db100 = "z1_historial_camb_sis";
    $tabla_db101 = "z2_historial_usuario";
    
    error_reporting(1); // No me muestra errores

    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

    if ($conexion->connect_error){
        die('Nuestro sitio experimenta fallos. Error de Conexión: ' . $conexion->connect_error);
    }

    // class Conexion
    // {
    //     private $tabla_db1 = "a1_usuarios";    // Tabla de usuarios
    //     private $tabla_db2 = "a2_rol";    
    //     private $tabla_db2_1 = "a3_preguntas";    
    //     private $tabla_db2_2 = "a4_estado";    
    
    //     private $tabla_db3 = "b3_departamentos";
    //     private $tabla_db4 = "b2_divisiones";
    //     private $tabla_db5 = "b1_direcciones";
    
    //     private $tabla_db6 = "c1_inventario_equipo";
    //     private $tabla_db7 = "c2_inventario_cambios"; //PROXIMA A BORRAR
    //     private $tabla_db8 = "c3_solicitudes_soportes";
    //     private $tabla_db9 = "c4_base_conocimiento";
    
    //     private $tabla_db10 = "d1_correspondencia";
    //     private $tabla_db11 = "d2_empresas_corresp";
    //     private $tabla_db12 = "d3_notificaciones_div";
    
    //     private $tabla_db100 = "z1_historial_camb_sis";
    //     private $tabla_db101 = "z2_historial_usuario";

    //     protected $connec;
    
    //     public function __construct()
    //     {
    //         $this->connec = new mysqli($host, $usuariodb, $clavedb, $basededatos);
    //     }
    
    //     public function query($query)
    //     {
    //         $a = $this->connec->query($query);
    //         return $a;
    //     }
    
    // }

?>