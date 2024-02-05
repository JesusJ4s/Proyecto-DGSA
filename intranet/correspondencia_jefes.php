<?php
    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    Login_JefnoCorrespondencia__Admin();
    $TitlePag = "Consultar correspondencia";

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
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <link rel="stylesheet" href="../css/style_usr.css">   

    <?php
        include('../php/javascript.php');
        // include("../php/DataTableCarpeta.php");
    ?>

    <title><?php echo $TitlePag ?></title>
</head>
<body class=" min-width-index color-fondo">
            <!-- MODAL PARA CONFIRMAR CORRESPONDENCIA -->
    <div class="modal fade" id="confirmar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="confirmarC">
                <p>
                    Confirme que le ha llegado el documento en físico desde Correspondencia. 
                    <!-- Si desea <span class="text-danger">rechazar</span> agregue la razón. -->
                </p>
                <label>Coloque una nota si lo desea sobre la correspondencia:</label>
                <textarea class="w-100 descripcion"id="descripcion" name="descripcion" maxlength="200"></textarea>
                <input type="hidden" id="cosasJS">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="confirmarBTN" data-bs-dismiss="modal" onclick="confirmarCorres()">Confirmar</button>
                <!-- <button type="button" class="btn btn-danger" id="confirmarBTN" data-bs-dismiss="modal">Rechazar</button> -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL CON INFORMACIÓN DE COMO VISUALIZAR LOS REPORTES -->
    <div class="modal fade" id="mi-modal-ayuda2" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Aquí visualizará todas las correspondencias llegadas a su División, confirme toda correspondencia que le haya llegado para que se guarde el registro digital.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- MODAL CON INFORMACIÓN DE COMO VISUALIZAR LOS REPORTES -->
    <div class="modal fade" id="infoCorres" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <header id="inicio-pag" class="caja-superior  mx-4">
        <?php
        include('../php/logos_intranet.php')
        ?>
    </header>

<main class="contenedor-grid-index-horizontal">

    <!-- DIV QUE CONTIENE TODO -->
    <div id="contenedor-total-total">

        <div class="container-fluid text-center px-5 mx-0 mb-0">
            
            <div class="accordion" id="accordionSoportesJefe">
                <div class="border-radius-15">
                    <div class="container-fluid text-center mb-5 p-3 bg-blanco box-shadow-plano border-radius-15">
                        <div class="row">
                            <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal" data-bs-target="#mi-modal-ayuda2"><img src="../assets/intranet/pregunta.png" class="img_toast"></button>
                            <div class="pt-3 col-auto">
                                <h2 class="my-0">Correspondencia</h2>
                            </div>


                            
                            <hr class="my-3">
                            <div class="my-3 text-start">
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSinAcep" aria-expanded="true" aria-controls="collapseSinAcep">
                                    <b>Solicitudes sin Aceptar</b>
                                </button>
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinalizadas" aria-expanded="true" aria-controls="collapseFinalizadas">
                                    <b>Solicitudes aceptadas</b>
                                </button>
                            </div>
                            <hr class="my-3">
                            <div class="accordion-collapse collapse show" id="collapseSinAcep" aria-labelledby="headingOne" data-bs-parent="#accordionSoportesJefe">
                                <div class="accordion-body"  aria-expanded="true">
                                    <h3>Solicitudes sin Aceptar</h3>

                                    <div id="tabla_correspondencia_indivi">

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-collapse collapse" id="collapseFinalizadas" aria-labelledby="headingOne" data-bs-parent="#accordionSoportesJefe">
                                <div class="accordion-body"  aria-expanded="true">
                                    <h3>Solicitudes aceptadas</h3>
                                    <?php
                                    if ($_SESSION['nivel_usuario'] != 1) {
                                        echo
                                        '
                                        <div id="tabla_correspondencia_indivi_FIN">

                                        </div>
                                        ';
                                    }else{
                                        echo
                                        '
                                        <div id="tabla_correspondencia_indivi_FIN_admin">

                                        </div>
                                        ';
                                    }


                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>

</main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');
        barra_lateral_individual($TitlePag);
    ?>
</body>
<footer>
    <!-- // CONFIRMAR LLEGADA DE CORRESPONDENCIA -->
    <!-- <script>
        var ConfirmarSoport = document.getElementById("confirmarBTN");
        ConfirmarSoport.addEventListener('click', confirmarCorres);
    </script> -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/correspondencia.js"></script>
    <!-- // USADO PARA EL TEXTAREA -->
    <script src="../js/editar_mostrar_datos.js"></script>
    <script src="../js/descripcionDosc.js"></script>
    <?php
    include('../php/javascript_Footer.php');
    ?>
</footer>

</html>