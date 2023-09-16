<?php
    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/abrir_sesion.php");


?>
<script src="../js/reenvio.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <script src="../jquery/jquery-3.6.4.min.js"></script>

    <title>Crear Usuarios</title>
</head>
<body class=" min-width-index fondo-intra">


    <!-- ************************************************* -->
    <!-- CREAR USUARIO -->
    <div class="container text-center w-50 text-white">   
        <h2 class="my-4">Crear Usuario</h2>  
        <form method="post" class="border p-5 mb-5" id="formulario">
            <div class="form-group text-start my-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group text-start my-2">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="form-group text-start my-2">
                <div class="form-group">
                    <label for="nacionalidad">Nacionalidad</label>
                    <select class="form-control" id="nacionalidad" name="nacionalidad" required>
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select>
                </div>
                <!-- ATRIBUTOS= maxlength="1" minlength="1" -->
                <!-- VERIFICAR CÉDULA EN BASE DE DATOS -->
            </div>
            <div class="form-group text-start my-2">
                <!-- ESTE DIV MOSTRARÁ EL RESULTADO -->
                <div id="mostrar_mensaje_ci"></div>
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" id="cedula" class="form-control" onblur="verificar_ci();" required>
            </div>
            <div class="form-group text-start my-2">
                <!-- ESTE DIV MOSTRARÁ EL RESULTADO -->
                <div id="mostrar_mensaje_name"></div>
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" onblur="verificar_name();" required>
            </div>
            <div class="form-group text-start my-2">
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contraseña" id="contraseña" class="form-control w-35 d-inline" required>
                <input type="button" class="form-control w-15 d-inline" value="mostrar" onclick="mostrar_contraseña()">
            </div>
            <div class="form-group text-start my-2">
                <label for="telefono">Teléfono</label>
                <input type="number" name="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="form-group text-start my-2">
                <label for="telefono2">Teléfono secundario</label>
                <input type="number" name="telefono2" id="telefono2" class="form-control">
            </div>
            <div class="form-group text-start my-2">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>


            <!-- ESTA ES LA PARTE DIFICIL, PERO LO LOGRARÉ  *LO LOGRÉ XD-->
            <!-- ***************************************************** -->
            <div class="form-group">
                <h3 class="text-start">Departamento</h3>
                <div class="text-start">
                    <input class="form-check-input" type="radio" name="departamento" id="departamento" value="2" required>
                    <label class="ms-1">Informática</label>
                    <br>
                    <!-- <input type="radio" name="departamento" id="departamento" value="2" required>
                    <label class="ms-1">Epidemiologia</label> -->
                </div>   
            </div>
            <div class="form-group">
                <h3 class="text-start">Cargo</h3>
                <div class="text-start">
                    
                    <input class="form-check-input" type="radio" name="cargo" id="cargo" value="1" required>
                    <label class="ms-1">Administrador</label>
                    <br>
                    
                    <input class="form-check-input" type="radio" name="cargo" id="cargo" value="2" required>
                    <label class="ms-1">Jefe de Departamento</label>
                    <br>

                    <input class="form-check-input" type="radio" name="cargo" id="cargo" value="4" required>
                    <label class="ms-1">Ingeniero Informática</label>
                    <br>
                    
                    <input class="form-check-input" type="radio" name="cargo" id="cargo" value="3" required>
                    <label class="ms-1">Comun</label>
                </div>
            </div>
            <div class=" text-end">
                <input type="submit" value="Enviar" class="btn btn-success" name="btn1" onclick="limpiar();">
                <input type="reset" value="Limpiar" class="btn btn-success" name="btn2">
                <div class="text-end d-inline ms-5">
                    <a href="index_intranet.php" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </form>
        <!-- CÓDIGO PARA CREAR USUARIO, PASAR A OTRO DOC PARA MÁS ORDEN -->
        <!-- <?php
            if(isset($_POST[""]))
            {
                if($_SESSION['sesion_exito']<>1)
                {
                    header('location: ../intranet.php');
                }
                else{
                    include("../php/abrir_conexion.php");

                    $nombre = $_POST['nombre'];
                    $apellido = $_POST["apellido"];
                    $nacionalidad = $_POST["nacionalidad"];
                    $cedula = $_POST["cedula"];
                    $nombre_usuario = $_POST["usuario"];

                    // Pasar nombre de usuario a mayúsculas
                    $nameUPPER = strtoupper($nombre_usuario);

                    $password_contra = $_POST["contraseña"];

                    $telefono = $_POST["telefono"];
                    $telefono2 = $_POST["telefono2"];

                    $email = $_POST["email"];

                    $departamento = $_POST["departamento"];
                    $cargo = $_POST["cargo"];
                    $existe = 0;

                    $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula' OR nombre_usuario = '$nameUPPER'");
                    while($consulta = mysqli_fetch_array($verificar))
                    {
                        $existe++;
                    }

                    if ($existe<>0) {
                        echo "<h3>La cédula o el nombre de usuario se encuentran registrados en el sistema, por favor verificar</h3>";
                    }

                    else {
                        // INSERTAR DATOS DEFINITVO
                        $crear_usr ="INSERT INTO $tabla_db1 (id_usuario, nombre, apellido, nacionalidad, cedula, nombre_usuario, telefono, telefono_secundario, email, usuario_departamento_id, usuario_rol_id, contraseña) values (NULL,'$nombre', '$apellido', '$nacionalidad', '$cedula', '$nameUPPER', '$telefono', '$telefono2', '$email', '$departamento', '$cargo', '$password_contra')";

                        $conexion->query($crear_usr);

                        include("../php/cerrar_conexion.php");
                        echo "<h3>Se insertaron correctamente los datos</h3>"."<br><br><br>";
                    }
                    
                }

            }

        ?> -->
    </div>
    <!-- VERIFICACIÓN DE LA CÉDULA Y EL NOMBRE DE USUARIO -->
    <script type="text/javascript" src="../js/verificacion_datos.js"></script>
    <script src="../js/editar_mostrar_datos.js"></script>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    
</body>


</html>