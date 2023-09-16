<?php
            session_start();
            ob_start();

            // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
            if($_SESSION['sesion_exito']<>1)
            {
                header('location: ../intranet.php');
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Consultar Usuarios</title>
</head>
<body class=" min-width-index fondo-intra">
    <!-- ************************************************ -->
    <!-- MARQUESINA -->
    <div class="container-fluid bg-primary marquesina text-white">
        <marquee>
            <h3 class="">
                Intranet      ---------      Direccion General de Salud Ambiental      ---------      
                <?php include("../php/date_time.php"); echo hora_larga();?>
                        ---------      Direccion General de Salud Ambiental      ---------      Intranet      ---------      Direccion General de Salud Ambiental      ---------      
                <?php echo fecha_larga();?>            ---------
            </h3>
        </marquee>
    </div>
    </div>
    <!-- ******************************************************************** -->
    <!-- ******************************************************************** -->
    <!-- ******************************************************************** -->
    <!-- ******************************************************************** -->

    <div class="container-fluid text-center text-white">   
        <h2 class="my-4">Consultar Usuario</h2>  
        <div class="container mx-auto py-5 border row">

            <form method="post" action="consultar_usuario.php" class="pt-4 mb-5 col-5">
                <div class="form-group text-start my-2">
                    <label for="cedula">Cédula</label>
                    <input type="number" name="cedula_usr" id="cedula_usr" class="form-control w-50" required>
                </div>
                <!-- Consultar por cédula -->
                <input type="submit" value="Consultar" class="btn btn-success mb-5" name="btn2">
            </form>
            <form method="post" action="consultar_usuario.php" class="p-5 mb-5 col-5">
                <div class="form-group text-start my-2">
                    <!-- Consultar todos -->
                    <input type="submit" value="Consultar Todos" class="btn btn-success mb-5" name="btn3">
                </div>
            </form>
            <?php
                if(isset($_POST["btn2"]))
                {
                    if($_SESSION['sesion_exito']<>1)
                    {
                        header('location: ../intranet.php');
                    }
                    else {
                    
                        include("../php/abrir_conexion.php");

                        $cedula = $_POST["cedula_usr"];
                        $existe = 0;
                        
                        // Buscar solo con la cedula: Where "Columna tabla" = "variable que usaré para buscar"
                        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = $cedula");
                        while($consulta = mysqli_fetch_array($resultados))

                        // Buscar todos los usuarios:
                        // $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1");
                        // while($consulta = mysqli_fetch_array($resultados))
                        {
                            echo 
                            "
                            <div class=\"container-fluid row text-center\">
                                <div class=\"col-2 border px-2 bold\">Nombre</div>
                                <div class=\"col-2 border px-2 bold\">Apellido</div>
                                <div class=\"w-10 border px-2 bold\">Cedula</div>
                                <div class=\"w-15 border px-2 bold\">Usuario</div>
                                <div class=\"col-2 border px-2 bold\">Teléfono</div>
                                <div class=\"col-3 border px-2 bold\">Email</div>

                                <div class=\"col-2 border px-2\">".$consulta['nombre']."</div>
                                <div class=\"col-2 border px-2\">".$consulta['apellido']."</div>
                                <div class=\"w-10 border px-2\">".$consulta['nacionalidad']."&#45;".$consulta['cedula']."</div>
                                <div class=\"w-15 border px-2\">".$consulta['nombre_usuario']."</div>
                                <div class=\"col-2 border px-2\">".$consulta['telefono']."</div>
                                <div class=\"col-3 border\">".$consulta['email']."</div>
                            </div>
                            ";
                            $existe++;
                            // echo "<br>" . $consulta['nombre'];
                            // echo $consulta['apellido'];

                            // echo "<br>";
                        }
                        if($existe==0){
                            echo "<h3>El documento no existe</h3>";
                        }

                        include("../php/cerrar_conexion.php");
                    }
                }

                if (isset($_POST["btn3"])) {

                    if($_SESSION['sesion_exito']<>1)
                    {
                        header('location: ../intranet.php');
                    }

                    else {

                        include("../php/abrir_conexion.php");

                        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1");
                        
                        echo

                        "
                        <div class=\"container-fluid row text-center\">
                            <div class=\"col-2 border px-2 bold\">Nombre</div>
                            <div class=\"col-2 border px-2 bold\">Apellido</div>
                            <div class=\"w-10 border px-2 bold\">Cedula</div>
                            <div class=\"w-15 border px-2 bold\">Usuario</div>
                            <div class=\"col-2 border px-2 bold\">Teléfono</div>
                            <div class=\"col-3 border px-2 bold\">Email</div>
                        </div>
                        ";

                        while($consulta = mysqli_fetch_array($resultados))

                        echo 
                        "
                        <div class=\"container-fluid row text-center\">
                            <div class=\"col-2 border px-2\">".$consulta['nombre']."</div>
                            <div class=\"col-2 border px-2\">".$consulta['apellido']."</div>
                            <div class=\"w-10 border px-2\">".$consulta['nacionalidad']."&#45;".$consulta['cedula']."</div>
                            <div class=\"w-15 border px-2\">".$consulta['nombre_usuario']."</div>
                            <div class=\"col-2 border px-2\">".$consulta['telefono']."</div>
                            <div class=\"col-3 border\">".$consulta['email']."</div>
                        </div>
                        ";

                        include("../php/cerrar_conexion.php");
                    }
                }
            ?>

            
        </div>
    </div>
    <div class="text-end m-5">
        <a href="index_intranet.php" class="btn btn-outline-danger">Volver</a>
    </div>
</body>



        <!-- JS en Bootstrap -->
        <script src="../js/bootstrap.bundle.min.js"></script>
</html>