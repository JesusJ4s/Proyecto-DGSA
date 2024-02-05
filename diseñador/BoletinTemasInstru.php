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
    <link rel="stylesheet" href="../css/style_usr.css">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_soporte.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <link rel="stylesheet" href="../css/gg2.css">
    

    <?php
        include('../php/javascript.php');
    ?>

    <title>Boletines y Temas</title>
</head>

<body class=" min-width-index color-fondo">

    <!-- MODAL PARA MOSTRAR SOLUCITUD EXITOSA-->
    <div class="modal fade" id="InfoGeneral" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="InfoGeneralC">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL PARA MOSTRAR MODIFICAIONES BOLETINES --> 
    <div class="modal fade" id="ModifiBoletines" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información del Archivo:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ModifiBoletinesC">
                    <form id="form_ModificacionesBol" method="POST">
                        <div class="container-fluid row">
                            <div class="col-6 mb-3">
                                <label class="formulario__label" for="id_boletinBol">Identificador del Boletin</label>
                                <input id="id_boletinBol" name="id_boletinBol" class="form-control mb-3" readonly>
                                                                         
                                <label class="formulario__label" for="nombre_direBol">Nombre Dirección</label>
                                <input id="nombre_direBol" name="nombre_direBol" class="form-control mb-3" disabled>
                            </div>
                            <div class="col-6">
                                <div class="" id="grupo__titulo">
                                    <label class="formulario__label" for="titulo_boletinBol">Título del Boletín</label>
                                    <input id="titulo_boletinBol" name="titulo_boletinBol" class="form-control mb-3" disabled>  
                                </div>
                                <div class="" id="grupo__tituloR">
                                    <label class="formulario__label" for="fecha_creacionBol">Fecha Creación del Boletín</label>
                                    <input id="fecha_creacionBol" name="fecha_creacionBol" class="form-control mb-3" disabled>  
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="radio" class="btn-check" name="modificarBol" id="activo" autocomplete="off" value="1" required checked>
                                <label class="btn btn-outline-primary" for="activo">Activo</label>

                                <input type="radio" class="btn-check" name="modificarBol" id="inactivo" autocomplete="off" value="2" required>
                                <label class="btn btn-outline-secondary" for="inactivo">Inactivo</label>

                                <input type="radio" class="btn-check" name="modificarBol" id="eliminar" autocomplete="off" value="3" required>
                                <label class="btn btn-outline-danger" for="eliminar">Eliminar</label>
                            </div>
                        </div>
                        
                        <input name="consultarBoletines" id="consultarBoletines" type="hidden" value="Modificacion">
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success"onclick="AccionBoletin();">Realizar Acción</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PARA MOSTRAR MODIFICAIONES INSTRUMENTOS LEGALES --> 
    <div class="modal fade" id="ModifiInstru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información del Archivo:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ModifiInstruC">
                    <form id="form_ModificacionesInstru" method="POST">
                        <div class="container-fluid row">
                            <div class="col-6 mb-3">
                                <label class="formulario__label" for="id_instruM">Identificador del instrumento</label>
                                <input id="id_instruM" name="id_instruM" class="form-control mb-3" readonly>
                                                                         
                                <label class="formulario__label" for="nombre_direInstruM">Nombre Dirección</label>
                                <input id="nombre_direInstruM" name="nombre_direInstruM" class="form-control mb-3" disabled>
                            </div>
                            <div class="col-6">
                                <div class="" id="grupo__titulo">
                                    <label class="formulario__label" for="tituloInstruM">Título del Boletín</label>
                                    <input id="tituloInstruM" name="tituloInstruM" class="form-control mb-3" disabled>  
                                </div>
                                <div class="" id="grupo__tituloR">
                                    <label class="formulario__label" for="">Tipo</label>
                                    <input id="tipoInstruM" name="tipoInstruM" class="form-control mb-3" disabled>  
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="radio" class="btn-check" name="modificarInstru" id="instruActivo" autocomplete="off" value="1" required checked>
                                <label class="btn btn-outline-primary" for="instruActivo">Activo</label>

                                <input type="radio" class="btn-check" name="modificarInstru" id="instruInactivo" autocomplete="off" value="2" required>
                                <label class="btn btn-outline-secondary" for="instruInactivo">Inactivo</label>

                                <input type="radio" class="btn-check" name="modificarInstru" id="instruEliminar" autocomplete="off" value="3" required>
                                <label class="btn btn-outline-danger" for="instruEliminar">Eliminar</label>
                            </div>
                        </div>
                        
                        <input name="consultarInstrumento" id="consultarInstrumento" type="hidden" value="ModificacionInstru">
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success"onclick="ModificarInstrumento();">Realizar Acción</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>
    <main class="">
        <div class="container-fluid mt-5 mb-4 py-2  border-radius-15">
            <div class="w-95 mx-auto bg-blanco px-3 box-shadow-plano border-radius-15">
                <div class="ms-3">
                    <a href="modulo_desing.php" class="d-inline text-dark enlaces_limpios2"><u>Inicio</u></a>
                </div>
                <div class="d-flex flex-row-reverse">

                    <button class="btn btn-primary ms-0" onclick="cambio2();cambioPesta2();" id="botonCambiar2"
                        name="botonCambiar2"><img src="../assets/icon/multi/lista_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Visualizar Imágenes/Videos</button>
                    <button class="btn btn-primary mx-0 me-1" onclick="cambio3();cambioPesta3();" id="botonCambiar3"
                        name="botonCambiar3"><img src="../assets/icon/multi/lista_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Instrumentos Legales</button>
                    <button class="btn btn-primary mx-0 me-1" onclick=" cambio1();cambioPesta1();" id="botonCambiar1"
                        name="botonCambiar1"><img src="../assets/icon/multi/cruz_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Boletines</button>
                    <a href="modulo_desing.php" class="btn btn-primary mx-0 me-1 botones-solicitud"><img
                            src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
                </div>
                <!-- SUBIR NUEVA IMAGEN/VIDEO -->
                <div class="bg-barra-boton" id="parte1">

                    <div class="border mt-3">
                        <div>
                            <h3 class="m-0 py-4 ps-2 bg-blanco">Nueva Información de Boletín</h3>
                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="formulario_boletines" action="" enctype="multipart/form-data">
                            <input name="identificador" id="identificador" type="hidden" value="nuevoBoletin">

                            <!-- GRUPO DIRECCION DESTINO -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
    
                                    <p class="my-auto d-inline bold col-2">Indique la Dirección a la que pertenece el archivo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast3"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast3" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <strong class="me-auto">Seleccione</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique a cual de las 5 direcciones disponibles en la pagina web, desea subir la imagen o video.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" id="direccion_boletin" name="direccion_boletin">
                                    <option value="0">-- Opciones --</option>
                                        <?php
                                        // BUSCAR LA INFORMACIÓN
                                        include("../php/abrir_conexion.php");

                                        $consulta = "SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6";
                                        $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                        include("../php/cerrar_conexion.php");
                                        ?>
                                        <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            
                            <hr class="m-0">
                            <!-- GRUPO TITULO -->
                            <div class="m-0 py-3 row bg-blanco">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Agregue un título</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                        src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#toast2"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast2" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Título</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Puede agregar un titulo si lo desea, tambien puede dejar el campo vacío.
                                        </div>
                                    </div>
                                </div>
                                <div class="formulario__grupo col-9"  id="grupo__tituloBoletin">
                                    <label for="tituloBoletin"  class="formulario__label">Agregue un título</label>
                                    <div class="formulario__grupo-input">
                                        <input class="form-control formulario__input" type="text" id="tituloBoletin" name="tituloBoletin" placeholder="solo letras, números, guión bajo, guión y espacios" required>
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>    
                                </div>
                            </div>
                            <hr class="m-0">
                            <!-- PRIMERA SECCION -->
                            <!-- ********************************************************************************** -->
                            <!-- GRUPO SELECCIONAR IMAGEN -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Seleccione la imagen</p>
                                    <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#toast1"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert"  aria-live="assertive"aria-atomic="true" id="toast1" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Imagen</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            <i>Solo puede seleccionar imagenes.</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Imagen
                                        <input class="form-control" type="file" id="img1_subir"  name="img1_subir" accept=".png,.jpg,.jpeg,.webp" required>
                                    </label>
                                </div>
                            </div>

                            <hr class="m-0">
                            <!-- GRUPO Descripción -->
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-2">
                                <p class="my-auto bold col-2">Descripción</p>
                                <div class="col-9" id="grupo__descripcion_boletin1">
                                    <div class=" bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                        <label for="descripcion_boletin1" class="formulario__label p-0 m-0">Escriba una descripción para la Imagen.</label>
                                    </div>
                                    <div class="formulario__grupo-input">
                                            <textarea class="formulario__input form-control bg-blanco-hsl textarea descripcion" id="descripcion_boletin1" name="descripcion_boletin1" minlength="20"maxlength="998" required></textarea>
                                            <div id="charCount"></div>
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>  

                                </div>
                            </div>
                            <hr class="m-0">
                            <h2 class="py-3 ps-3 m-0 bg-blanco">Segunda Sección</h2>
                            <hr class="m-0">
                            <!-- SEGUNDA SECCION -->
                            <!-- ********************************************************************************** -->
                            <!-- GRUPO SELECCIONAR IMAGEN -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Seleccione la imagen (opcional)</p>
                                    <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#toast5"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert"  aria-live="assertive"aria-atomic="true" id="toast5" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Imagen (opcional)</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            <i>Solo puede seleccionar imagenes.</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Imagen (opcional)
                                        <input class="form-control" type="file" id="img2_subir"  name="img2_subir" accept=".png,.jpg,.jpeg,.webp">
                                    </label>
                                </div>
                            </div>

                            <hr class="m-0">
                            <!-- GRUPO Descripción -->
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-2">
                                <p class="my-auto bold col-2">Descripción</p>
                                <div class="col-9 " id="grupo__descripcion_boletin2">
                                    <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                        <label for="descripcion_boletin2" class="formulario__label p-0 m-0">Escriba una descripción para la imagen (opcional).</label>
                                    </div>
                                    <div class="formulario__grupo-input">
                                        <textarea class="formulario__input form-control bg-blanco-hsl textarea descripcion" id="descripcion_boletin2" name="descripcion_boletin2" minlength="0"maxlength="998" placeholder="El texto no puede contener comillas"></textarea>
                                        <div id="charCount"></div>
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>  

                                </div>
                            </div>
                            <hr class="m-0">
                            <h2 class="py-3 ps-3 m-0 bg-blanco">Tercera Sección</h2>
                            <hr class="m-0">
                            <!-- TERCERA SECCION -->
                            <!-- ********************************************************************************** -->
                            <!-- GRUPO SELECCIONAR IMAGEN -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Seleccione la imagen o video</p>
                                    <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#toast6"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert"  aria-live="assertive"aria-atomic="true" id="toast6" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Imagen o Video</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            <i>Solo puede seleccionar imagenes y videos. Puede dejar el campo vacío si lo desea. El archivo no puede ser mayor de 40mb</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Imagen o Video (opcional) <i>No puede ser mayor de 40mb</i>
                                        <input class="form-control" type="file" id="img3_subir"  name="img3_subir" accept=".png,.jpg,.jpeg,.webp,.mp4">
                                    </label>
                                </div>
                            </div>

                            <hr class="m-0">
                            <!-- GRUPO Descripción -->
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-2">
                                <p class="my-auto bold col-2">Descripción</p>
                                <div class="col-9 " id="grupo__descripcion_boletin3">
                                    <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                        <label for="descripcion_boletin1" class="formulario__label p-0 m-0">Escriba una descripción para la imagen o video (opcional).</label>
                                    </div>
                                    <div class="formulario__grupo-input">
                                        <textarea class="formulario__input form-control bg-blanco-hsl textarea descripcion" id="descripcion_boletin3" name="descripcion_boletin3" minlength="0"maxlength="998" placeholder="El texto no puede contener comillas"></textarea>
                                        <div id="charCount"></div>
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>  
                                </div>
                            </div>
                            <div class="formulario__mensaje my-2" id="formulario__mensajeBoletin">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>
                            <div class="m-0 row bg-blanco py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9">
                                    <button type="button" class="btn btn-primary" id="registrar" name="registrar" onclick="nuevoBoletin();">Enviar</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- *************************************************************************************************************************** -->
                <!-- ESTA ES LA PESTAÑA DE SEGUIMIENTO - DONDE COLOCAREMOS LOS REGISTROS HECHOS -->
                <!-- TODO: -->
                <div class="mt-3 ocultar-div " id="parte2">
                    <div class="accordion" id="Visualizador_acc">

                        <div class="px-2">
                            <h3 class="text-start mt-4"><u>Visualizar Boletines y Archivos</u></h3>
                            <div class="my-3 text-start">
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#boletinesModifi" aria-expanded="true"
                                    aria-controls="boletinesModifi">
                                    <b>Boletines</b>
                                </button>
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#InstruModifi" aria-expanded="true"
                                    aria-controls="InstruModifi">
                                    <b>Instrumentos Legales</b>
                                </button>
                            </div>

                            <div class="accordion-collapse collapse show" id="boletinesModifi"
                                aria-labelledby="headingOne" data-bs-parent="#Visualizador_acc">
                                <hr class="my-3">

                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Boletines</h3>
                                    <div id="mostrar_boletines" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>

                            <div class="accordion-collapse collapse" id="InstruModifi"
                                aria-labelledby="headingOne" data-bs-parent="#Visualizador_acc">
                                <hr class="my-3">

                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Instrumentos Legales</h3>
                                    <div id="mostrar_instrumentos" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- *************************************************************************************************************************** -->
                <!-- *************************************************************************************************************************** -->
                <!-- *************************************************************************************************************************** -->
                <!-- SUBIR NUEVA DOCUMENTO -->
                    <!-- MODAL CREACION DE GRUPO NUEVO-->
                    <div class="modal fade" id="grupo_instru_legal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Indique el grupo de la información:</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                    <!-- AQUÍ VA EL TÍTULO -->
                                </div>
                                <div class="modal-body" id="grupo_instru_legalC">
                                    <form id="formulario_grupoInstrumento" method="POST">
                                        <div>
                                            <h6>Seleccione una dirección a la que pertenecerá el nuevo grupo para identificar el documento:</h6>
                                                <select class="form-control" id="nuevo_grupoInstru_direccion" name="nuevo_grupoInstru_direccion">
                                                <option value="0">-- Opciones --</option>
                                                    <?php
                                                    // BUSCAR LA INFORMACIÓN
                                                    include("../php/abrir_conexion.php");

                                                    $consulta = "SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6 AND id_direcciones <> 1";
                                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                                    include("../php/cerrar_conexion.php");
                                                    ?>
                                                    <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                                    <?php foreach ($ejecutar as $opciones): ?>
                                                        <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                        </div>
                                        <hr class="my-4">
                                        <div class="formulario__grupo" id="grupo__NuevoGrupInstrumento">
                                            <label class="formulario__label">Indique un nombre al nuevo grupo</label>
                                            <div class="formulario__grupo-input">
                                                <input class="form-control  formulario__input" type="text" id="NuevoGrupInstrumento" name="NuevoGrupInstrumento" placeholder="solo letras, números y espacios">
                                            </div>
                                            <p class="formulario__input-error px-3">Solo utilice letras y espacios.</p>
                                        </div>
                                        <div class="formulario__mensaje my-2" id="formulario__mensajeGrupo">
                                            <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" onclick="nuevoGrupoInstrumento();">Crear</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL CREACION DE NUEVO TIPO DE DOCUMENTO-->
                    <div class="modal fade" id="crear_Tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Indique el Nuevo Tipo Formato para el documento:</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                    <!-- AQUÍ VA EL TÍTULO -->
                                </div>
                                <div class="modal-body" id="crear_TipoC">
                                    <form id="formulario_TipoInstrumento" method="POST">

                                        <div class="formulario__grupo" id="grupo__NuevoTipoInstru">
                                            <label class="formulario__label">Indique un nombre al nuevo tipo de instrumento</label>
                                            <div class="formulario__grupo-input">
                                                <input class="form-control  formulario__input" type="text" id="NuevoTipoInstru" name="NuevoTipoInstru" placeholder="solo letras, números y espacios">
                                            </div>
                                            <p class="formulario__input-error px-3">Solo utilice letras y espacios.</p>
                                        </div>
                                        <div class="formulario__mensaje my-2" id="formulario__mensajeGrupo">
                                            <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" onclick="nuevoTipoInstrumento();">Crear</button>
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="bg-grey-claro ocultar-div" id="parte3">

                    <div class="border mt-3">
                        <div>
                            <h3 class="m-0 py-4 ps-2 bg-blanco">Subir Nuevos Instrumentos Legales</h3>
                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="formulario_Instrumentos" action="" enctype="multipart/form-data">
                            <!-- GRUPO SELECCIONAR DOCUMENTO -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Seleccione el documento</p>
                                    <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#InstruDoc"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="InstruDoc" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Documento</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Busque dentro de su equipo, el documento que utilizará. Solo se acepta formato: <i>pdf</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Documento
                                        <input class="form-control" type="file" id="intrumentoDoc"  name="intrumentoDoc" accept=".pdf">
                                    </label>

                                </div>
                            </div>

                            <hr class="m-0">

                            <!-- TITULO -->
                            <div class="m-0 py-3 row bg-blanco">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Agregue un título</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                        src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#tituloInstru"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="tituloInstru" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Título</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                           Agregue un Título.
                                        </div>
                                    </div>
                                </div>
                                <div class="formulario__grupo col-9"  id="grupo__tituloInstrumentoLegal">
                                    <label for="tituloInstrumentoLegal"  class="formulario__label">Agregue un título</label>
                                    <div class="formulario__grupo-input">
                                        <input class="form-control formulario__input" type="text" id="tituloInstrumentoLegal" name="tituloInstrumentoLegal" placeholder="solo letras, números, guión bajo, guión y espacios">
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>    
                                </div>
                            </div>
                            <hr class="m-0">

                            <!-- DIRECCION DESTINO -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
    
                                    <p class="my-auto d-inline bold col-2">Indique la Dirección a la que pertenece el archivo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#direInstru"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="direInstru" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <strong class="me-auto">Seleccione</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique a cual de las 4 direcciones disponibles en la pagina web, desea subir el documento.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" id="direccion_instrumentos_legales" name="direccion_instrumentos_legales">
                                    <option value="0">-- Opciones --</option>
                                        <?php
                                        // BUSCAR LA INFORMACIÓN
                                        include("../php/abrir_conexion.php");

                                        $consulta = "SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6 AND id_direcciones <> 1";
                                        $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                        include("../php/cerrar_conexion.php");
                                        ?>
                                        <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            
                            <hr class="m-0">

                            <!-- GRUPO SELECCIONAR O CREAR NUEVO GRUPO DIVISOR -->
                            <div class="m-0 row bg-blanco py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Grupo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#grupoIns"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="grupoIns" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <strong class="me-auto">Grupos</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Cree un nuevo grupo o elija uno ya existente para identificar separar el archivo entre los mostrados en la Página Web.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <select class="form-control"  id='gruposInstrumentos_select'
                                    name='gruposInstrumentos_select'>
                                        <option value="0">-- Opciones --</option>

                                    </select>
                                </div>
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2 text-end">Crear nuevo grupo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast7"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast7" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Nuevo</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Cree un nuevo tipo de formato para los documentos, así podrá diferenciarlos.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#grupo_instru_legal">
                                        Nuevo
                                    </button>
                                </div>
                            </div>
                            <hr class="m-0">

                            <!-- TIPO DE DOCUMENTO -->
                            <div class="m-0 row py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Tipo Documento:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#tipoDoc"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="tipoDoc" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <strong class="me-auto">Tipo de Documento</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique que tipo de documento está subiendo para diferenciarlo del resto.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <select class="form-control"  id='TipoDocSelect'
                                    name='TipoDocSelect'>
                                        <option value="0">-- Opciones --</option>
                                            
                                    </select>
                                </div>
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2 text-end">Crear nuevo tipo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#NuevoTipo"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="NuevoTipo" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Nuevo</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Cree un nuevo grupo para dividir las publicaciones de la galería de la página web.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#crear_Tipo">
                                        Nuevo
                                    </button>
                                </div>
                            </div>

    
                            <div class="m-0 row bg-blanco py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9">
                                    <button type="button" class="btn btn-primary" id="registrar" name="registrar" onclick="nuevoInstrumentoLegal();">Enviar</button>
                                </div>
                            </div>
                            <input name="identificador" id="identificador" type="hidden" value="NuevoInstrumentoLegal">
                            <div class="formulario__mensaje my-2" id="formulario__mensaje">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div id="parte4"></div>
            </div>

                
        </div>

    </main>



    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/grupos_select.js"></script> -->
    
    <!-- <script src="js/imgVidmodificacion.js"></script> -->
    <!-- <script src="js/consultasImgVid.js"></script> -->
    <!-- <script src="js/nueva_img_vid.js"></script> -->

    <!-- DOCUMENTOS -->
    <script src="js/nuevoGrupoTipo.js"></script>
    <script src="js/gruposInstrumentos.js"></script>
    <!-- CAMBIO DE PESTAÑAS -->
    <script src="../js/editar_mostrar_datos.js"></script>
    <!-- CONTADOR DE MIL CARACTERES -->
    <script src="../js/descripcionMil.js"></script>
    <!-- CREAR BOLETINES -->
    <script src="js/boletines.js"></script>
    <script src="js/consultasBoletines.js"></script>
    <script src="js/consultasInstrumentos.js"></script>
    <script>
        // USADO PARA CAMBIAR PESTAÑAS Y BLOQUEARLAS DEPENDIENDO DE LA SELECCIONADA
        function cambio1() {
            document.getElementById("botonCambiar1").disabled = true;
            document.getElementById("botonCambiar2").disabled = false;
            document.getElementById("botonCambiar3").disabled = false;
            // document.getElementById("botonCambiar4").disabled = false;
        }
        function cambio2() {
            document.getElementById("botonCambiar2").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;
            document.getElementById("botonCambiar3").disabled = false;
            // document.getElementById("botonCambiar4").disabled = false;

        }
        function cambio3() {
            document.getElementById("botonCambiar3").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;
            document.getElementById("botonCambiar2").disabled = false;
            // document.getElementById("botonCambiar4").disabled = false;

        }
        function cambio4() {
            // document.getElementById("botonCambiar4").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;
            document.getElementById("botonCambiar2").disabled = false;
            document.getElementById("botonCambiar3").disabled = false;

        }
    </script>
    <script>
        var toastButtons = document.querySelectorAll('[data-toast]');
        toastButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var target = this.getAttribute('data-toast');
                var toast = new bootstrap.Toast(document.querySelector(target));
                toast.show();
            });
        });

    </script>

</body>
<?php
    include('../php/javascript_Footer.php');
    ?>
</html>