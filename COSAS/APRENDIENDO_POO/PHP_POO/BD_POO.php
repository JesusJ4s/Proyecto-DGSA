<?php
// Clase Conexion
class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "practica_php_dgsa";
    private $conn;
  
    public function __construct() {
      try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Falló la conexión: " . $e->getMessage();
      }
    }
  
    public function consultar($numero) {
      $sql = "SELECT * FROM a1_usuarios WHERE cedula LIKE :patron";
      $patron = $numero . '%';
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(':patron', $patron);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if ($result) {
        echo "<table class='text-white'><tr><th>ID</th><th>Nombre</th><th>User</th></tr>";
        foreach($result as $row) {
          echo "<tr><td>" . $row["id_usuario"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["nombre_usuario"] . "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "<h5 class='text-white'>No se encontraron resultados</h5>";
      }
      $this->conn = null;
    }
  }
?>
