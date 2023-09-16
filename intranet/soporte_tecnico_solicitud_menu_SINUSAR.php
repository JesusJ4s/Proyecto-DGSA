<?php
            // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
            include("../php/verificacion_login.php");
            LoginSimple();

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
    <title>Solicitudes Menu</title>
</head>
<body class=" min-width-index">

    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
        ?>
    </header>
    <main class="">
    <a href="soporte_tecnico.php" class="mt-3 ms-5 btn btn-outline-secondary">Volver al Menú</a>

        <div class="container border  px-0" id="centro-id">

            <div class="container-fluid border mx-0 px-0 mb-5">
                <h5 class="fondo-readonly-all m-0 py-3 sangria">Centro de soporte</h5>
            </div>
            <div class="text-center">
                <img src="../assets/intranet/soporte/tecnología-médica.jpg" class="w-35 m-3 border-radius-15 box-shadow-intra">
                <h6 class="mt-3">Sistema de registro y seguimiento de solicitudes de soporte técnico</h6>
            </div>
            <div class="container-fluid border mx-0 px-0 mt-5 text-center">
                <button class="btn btn-danger dropdown-toggle w-95 m-2" data-bs-toggle='dropdown'>Acceder</button>
                <ul class='dropdown-menu'>
                    <li><a class='dropdown-item2' target='_blank' href='soporte_tecnico_base.php'>Visualizar Base de Conocimiento</a></li>
                    <li><a class='dropdown-item2' target='_blank' href='soporte_tecnico_solicitud.php'>Registrar Solicitud</a></li>
                </ul>
            </div>
        </div>

    </main>


    <!-- JS en Bootstrap -->
<script src="../js/bootstrap.bundle.min.js"></script>
    
</body>

</html>