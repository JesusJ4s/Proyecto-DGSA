<?php
class Cargo {
    private $nombre;
    private $cedula;
    private $nombre_rol;
    private $nombre_dpto;
    private $nombre_div;
    private $nombre_dire;


    public function __construct($cedula)
    {
        $this->cedula = $cedula;
        $this->cargar();
    }

    public function cargar(){
        include("abrir_conexion.php");
        $cedula=$this->cedula;

        if (isset($cedula)) {
            $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 u 
            INNER JOIN $tabla_db2 c ON u.usuario_rol_id = c.id_rol 
            INNER JOIN $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento 
            INNER JOIN $tabla_db4 a ON d.departamento_division_id = a.id_divisiones 
            INNER JOIN $tabla_db5 b ON a.division_direccion_id = b.id_direcciones 
            WHERE u.cedula = '$cedula'");

            $count_results = mysqli_num_rows($resultados);

            if ($count_results > 0) {
                $consulta = mysqli_fetch_array($resultados);

                $this->nombre = $consulta['nombre'].' '.$consulta['apellido'];
                $this->cedula = $consulta['cedula'];
                $this->nombre_rol = $consulta['nombre_rol'];
                $this->nombre_dpto = $consulta['nombre_dpto'];
                $this->nombre_div = $consulta['nombre_div'];
                $this->nombre_dire = $consulta['nombre_dire'];
            }else {
                $this->nombre = "Sin Datos";
                $this->cedula = "Sin Datos";
                $this->nombre_rol = "Sin Datos";
                $this->nombre_dpto = "Sin Datos";
                $this->nombre_div = "Sin Datos";
                $this->nombre_dire = "Sin Datos";
            }
            include("cerrar_conexion.php");
        }
    }    
    public function getNombre(){
        return $this->nombre;
    }
    public function getcedula(){
        return $this->cedula;
    }
    public function getCargo(){
        return $this->nombre_rol;
    }
    public function getDpto(){
        return $this->nombre_dpto;
    }
    public function getDivisiones(){
        return $this->nombre_div;
    }
    public function getDireccion(){
        return $this->nombre_dire;
    }
}

if (isset($_GET['dato'])) {
    $Buscar = new Cargo($_GET['dato']);

    $bNombre= $Buscar->getNombre();
    $bCedula= $Buscar->getcedula();
    $bNombre_carg= $Buscar->getCargo();
    $Dpto= $Buscar->getDpto();
    $Div= $Buscar->getDivisiones();
    $Direcc= $Buscar->getDireccion();

    echo "Datos: ".$bNombre."<br>Cedula: ".$bCedula."<br>Nombre Cargo: ".$bNombre_carg;
}else{
    echo "Sin datos";
}
    






?>