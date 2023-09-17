<?php
include("../php/verificacion_login.php");
LoginAdmin();
include("../php/date_time.php");
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
    <link rel="stylesheet" href="../css/style_soporte.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg2.css">

    <?php
    include('../php/javascript.php');
    ?>

    <title>Gestión de Usuarios</title>
</head>

<body class="min-width-index">

    <!-- MODAL PARA MOSTRAR AYUDA -->
    <div class="modal fade" id="mi-modal-ayuda" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Ayuda:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>Asignación de Rol:</b> En éste módulo puede asignar un rol dentro del sistema a los usuarios,
                        verificar los que tienen acceso al mismo y su nivel de acceso. Además de la ubicación de trabajo
                        a la que fueron designados o si están activos; pudiendo modificar cualquier parámetro.
                        <br>
                        <b>Recuperación de Usuario:</b> Utilizando su PIN, puede cambiar la contraseña de los usuarios,
                        permitiendoles volver a tener acceso al sistema, en caso de que no posean las respuestas a las
                        preguntas de seguridad.
                        <br>
                        <b>Auditoría:</b> Podrá verificar los accesos, y modificaciones echas por los usuarios dentro
                        del sistema, desde registro hasta modificaciones.
                    </p>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>



    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>
    <!-- fondo-intra -->
    <main class="contenedor-grid-index-horizontal">


        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">

            <!-- PARTE SUPERIOR, INICIO -->
            <section class=" border mx-4 my-3 px-3 bg-secondary ">
                <div class="row px-5 py-3 alinear-centro">
                    <div class="col-1"></div>
                    <!-- DIV PARA LA IMAGEN Y LA HORA -->
                    <div class="col-3">
                        <img src="../assets/icon/multi/home-automation.png" class="wh-inconos-intra pb-2-5"><a
                            class="mx-2 enlaces_limpios d-inline" href="index_intranet.php">Inicio</a>
                    </div>
                    <div class="col-4"></div>
                    <!-- DIV PARA LAS REDES -->
                    <div class="col-4 text-end">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#mi-modal-ayuda">
                            Ayuda
                        </button>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN PRINCIPAL -->
            <section class="border my-3 mx-4">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las
                    aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"
                </h6>


                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid-3">
                    <!-- INGRESO DE NUEVO EQUIPO -->
                    <div class="border mx-3 altura-app mb-5">
                        <h3 class="border text-center p-2 mb-3">Asignación de Rol del Sistema</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/gestion_usuarios/puesto-de-trabajo.png"
                                class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Desde aquí podrá asignar un cargo a los empleados para que puedan
                                ingresar a la Aplicación.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="gestion_usuario_rol.php">Acceder</a>
                        </div>

                    </div>
                    <!-- REVISION Y MODIFICACION -->
                    <div class="border mx-3 altura-app mb-5">
                        <h3 class="border text-center p-2 mb-3">Recuperación de Usuario</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/gestion_usuarios/restablecer-la-contrasena.png"
                                class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Si un empleado olvidó sus datos de ingreso y no puede realizar la
                                recuperación, desde este apartado podrá recuperarlo.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="gestion_usuario_recup.php">Acceder</a>
                        </div>
                    </div>
                    <!-- CONSULTA E IMPRESION -->
                    <div class="border mx-3 altura-app mb-5">

                        <h3 class="border text-center p-2 mb-3">Auditoría</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/gestion_usuarios/tarjeta.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Ingrese para visualizar los usuarios registrados en el sistema y
                                todos los cambios echos en el mismo.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="gestion_usuario_auditoria.php">Acceder</a>
                        </div>
                    </div>
                </section>

            </section>
        </div>
    </main>


    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral.php');
    barra_lateral_principal();
    ?>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>

</body>

</html>