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

    <title>Galería</title>
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

<!-- TODO: -->
    <!-- MODAL PARA MOSTRAR MODIFICAIONES DE IMAGENES Y VIDEO -->
    <div class="modal fade" id="ModifiImg_Vid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información del Archivo:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ModifiImg_VidC">
                    <form id="form_Modificaciones" method="POST">
                        <div class="container-fluid row">
                            <div class="col-6 mb-3">
                                <label class="formulario__label" for="nombre_dire">Dirección en la que se muestra la imagen</label>
                                <input id="nombre_dire" name="nombre_dire" class="form-control mb-3" readonly>
                                    <select class="form-control" id="nombre_direR" name="nombre_direR">
                                    <option value="0">-- Modificar --</option>
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
                                                                
                                <label class="formulario__label" for="nombre_grupo">Grupo Imagen</label>
                                <input id="nombre_grupo" name="nombre_grupo" class="form-control mb-3" readonly>
                                    <select class="form-control"  id='nombre_grupoR' name='nombre_grupoR'>
                                        <option value="0">-- Opciones --</option>

                                    </select>
                                    <input id="id_direccionVieja" name="id_direccionVieja" type="hidden">
                                    <input id="nombre_ImagenV" name="nombre_ImagenV" type="hidden">
                                    <input id="id_galeria_grupo_anterior" name="id_galeria_grupo_anterior" type="hidden">
                                    <input id="nombre_tipo" name="nombre_tipo" type="hidden">
                            </div>
                            <div class="col-6">
                                <div class="" id="grupo__tituloR">
                                    <label class="formulario__label" for="tituloR">Título de la Imagen</label>
                                    <input id="titulo" name="titulo" class="form-control mb-3" readonly>
                                    <div class="formulario__grupo-input">
                                        <input id="tituloR" name="tituloR" class="form-control formulario__input mb-3" placeholder="modificar">
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>    
                                </div>


                                <label class="formulario__label" for="visible">Visibilidad</label>
                                <input id="visible" name="visible" class="form-control mb-3" disabled>
                                <h6 class="mt-4">¿Desea inhabilitar publicación?:</h6>
                                        <input type="radio" class="btn-check" name="actInac" id="activo" autocomplete="off" value="1" required checked>
                                        <label class="btn btn-outline-primary" for="activo">Activo</label>

                                        <input type="radio" class="btn-check" name="actInac" id="inactivo" autocomplete="off" value="2" required>
                                        <label class="btn btn-outline-secondary" for="inactivo">Inactivo</label>

                                        <input type="radio" class="btn-check" name="actInac" id="eliminar" autocomplete="off" value="3" required>
                                        <label class="btn btn-outline-danger" for="eliminar">Eliminar</label>

                            </div>
                                <input id="visible_anterior" name="visible_anterior" type="hidden">
                            <div>
                                <label class="formulario__label" for="">Descripción <span class="text-secondary">(puede modificarla)</span></label>
                                <textarea id="descripcion" name="descripcionR" class="form-control mb-3" placeholder="Escriba una descripción para la imagen o video si así lo desea. Solo letras, espacios, números, guión, guión bajo, paréntesis; sin comillas.">

                                </textarea>
                            </div>
                            <div class="col-9 mb-2">
                                    <label>Imagen, Video o Documento (Elija una si desea cambiar el archivo actual)
                                        <input class="form-control" type="file" id="archivo_actualizar"  name="archivo_actualizar" accept=".png,.jpg,.jpeg,.webp,.mp4,.pdf">
                                    </label>

                                </div>

                            <div class="col-9 mb-3">
                                <input type="radio" class="btn-check" name="tipo_archivoAct" id="Actipo_imagen"
                                    autocomplete="off" value="1" required>
                                <label class="btn btn-outline-primary" for="Actipo_imagen">Imagen</label>

                                <input type="radio" class="btn-check" name="tipo_archivoAct" id="Actipo_video"
                                    autocomplete="off" value="2" required>
                                <label class="btn btn-outline-primary" for="Actipo_video">Video</label>

                                <input type="radio" class="btn-check" name="tipo_archivoAct" id="Actipo_doc"
                                    autocomplete="off" value="3" required>
                                <label class="btn btn-outline-primary" for="Actipo_doc">Documento</label>
                            </div>
                        </div>
                        <div>
                            <div class="text-center" id="imV" name="imV">
                                
                            </div>
                        </div>
                        <input id="id_imagen" name="id_imagen" type="hidden">
                        
                    <input name="identificador" id="identificador" type="hidden" value="ModificImgVid">
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success"onclick="ModificarArchivo();">Aceptar</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    <div class="formulario__mensaje my-2" id="formulario__mensaje">
                        <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CREACION DE GRUPO NUEVO-->
    <div class="modal fade" id="crear_grupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Cree un nuevo grupo:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="crear_grupoC">
                    <form id="formulario_nuevo_grupo" method="POST">
                        <div>
                            <h6>Seleccione una dirección a la que pertenecerá el nuevo grupo:</h6>
                                <select class="form-control" id="nuevo_grupo_direccion" name="nuevo_grupo_direccion">
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
                        <hr class="my-4">
                        <div class="formulario__grupo" id="grupo__tituloNuevoGrupo">
                            <label class="formulario__label">Indique un nombre al nuevo grupo</label>
                            <div class="formulario__grupo-input">
                                <input class="form-control  formulario__input" type="text" id="tituloNuevoGrupo" name="tituloNuevoGrupo" placeholder="solo letras, números y espacios">
                            </div>
                            <p class="formulario__input-error px-3">Solo utilice letras y espacios.</p>
                        </div>
                        <div class="formulario__mensaje my-2" id="formulario__mensajeGrupo">
                            <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                        </div>
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="nuevoGrupo();">Crear</button>
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
                    <button class="btn btn-primary mx-0 me-1" onclick=" cambio1();cambioPesta1();" id="botonCambiar1"
                        name="botonCambiar1"><img src="../assets/icon/multi/cruz_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Nueva Información</button>
                    <a href="modulo_desing.php" class="btn btn-primary mx-0 me-1 botones-solicitud"><img
                            src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
                </div>
                <!-- SUBIR NUEVA IMAGEN/VIDEO -->
                <div class="bg-barra-boton">

                    <div class="border mt-3" id="parte1">
                        <div>
                            <h3 class="m-0 py-4 ps-2 bg-blanco">Subir Nueva Imagen, Video o Documento</h3>
                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="formulario_galeria" action="" enctype="multipart/form-data">
                            <!-- GRUPO SELECCIONAR IMAGEN -->
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Seleccione la imagen, video o documento</p>
                                    <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#toast1"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast1" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Imagen, Video o Documento</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Busque dentro de su equipo, la imagen, video o documento que utilizará. Solo se acepta formato: <i>png, jpg, jpeg, webp, gif, mp4 y pdf</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <label>Imagen, Video o Documento
                                        <input class="form-control" type="file" id="archivo_subir"  name="archivo_subir" accept=".png,.jpg,.jpeg,.webp,.mp4,.pdf">
                                    </label>

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
                                <div class="formulario__grupo col-9"  id="grupo__tituloArchivo">
                                    <label for="tituloArchivo"  class="formulario__label">Agregue un título</label>
                                    <div class="formulario__grupo-input">
                                        <input class="form-control formulario__input" type="text" id="tituloArchivo" name="tituloArchivo" placeholder="solo letras, números, guión bajo, guión y espacios">
                                    </div>
                                    <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión y espacios.</p>    
                                </div>
                            </div>
                            <hr class="m-0">

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
                                    <select class="form-control" id="direccion_archivo" name="direccion_archivo">
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

                            <!-- GRUPO SELECCIONAR O CREAR NUEVO GRUPO DIVISOR -->
                            <div class="m-0 row bg-blanco py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Grupo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast6"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast6" data-bs-delay="4000">
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
                                    <select class="form-control"  id='grupos_select'
                                    name='grupos_select'>
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
                                            Cree un nuevo grupo para dividir las publicaciones de la galería de la página web.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#crear_grupo">
                                        Nuevo
                                    </button>
                                </div>
                            </div>
                            <hr class="m-0">

                            <!-- GRUPO TIPO DE ARCHIVO IMAGEN O VIDEO -->
                            <div class="m-0 row py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Tipo de Archivo:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast8"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast8" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Tipo de Archivo</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique si lo que está subiendo es una imagen o un video.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input type="radio" class="btn-check" name="tipo_archivo" id="tipo_imagen"
                                        autocomplete="off" value="1" required>
                                    <label class="btn btn-outline-primary" for="tipo_imagen">Imagen</label>
    
                                    <input type="radio" class="btn-check" name="tipo_archivo" id="tipo_video"
                                        autocomplete="off" value="2" required>
                                    <label class="btn btn-outline-primary" for="tipo_video">Video</label>

                                    <input type="radio" class="btn-check" name="tipo_archivo" id="tipo_doc"
                                        autocomplete="off" value="3" required>
                                    <label class="btn btn-outline-primary" for="tipo_doc">Documento</label>
                                </div>
                            </div>
    
                            <!-- GRUPO Descripción -->
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-2">
                                <p class="my-auto bold col-2">Descripción</p>
                                <div class="col-9 ">
                                    <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                        Escriba una descripción para la imagen o video si así lo desea.
                                    </div>
                                    <div>
                                        <textarea class="bg-blanco-hsl textarea" id="descripcion" name="descripcion" minlength="0"maxlength="250"></textarea>
                                        <div id="charCount"></div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="m-0 row bg-blanco py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9">
                                    <button type="button" class="btn btn-primary" id="registrar" name="registrar" onclick="nuevoArchivo();">Enviar</button>
                                </div>
                            </div>
                            <input name="identificador" id="identificador" type="hidden" value="nuevaImgVid">
                            <div class="formulario__mensaje my-2" id="formulario__mensaje">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- *************************************************************************************************************************** -->
                <!-- ESTA ES LA PESTAÑA DE SEGUIMIENTO - DONDE COLOCAREMOS LOS REGISTROS HECHOS -->
                <div class="mt-3 ocultar-div " id="parte2">
                    <div class="accordion" id="Visualizador_acc">

                        <div class="px-2">
                            <h3 class="text-start mt-4"><u>Visualizar</u></h3>
                            <div class="my-3 text-start">
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#Imagenes_acc" aria-expanded="true"
                                    aria-controls="Imagenes_acc">
                                    <b>Imágenes - Videos</b>
                                </button>

                            </div>

                            <div class="accordion-collapse collapse show" id="Imagenes_acc"
                                aria-labelledby="headingOne" data-bs-parent="#Visualizador_acc">
                            <hr class="my-3">

                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Imágenes - Videos Subidas a la Web</h3>
                                    <div id="mostrar_imagenes_web" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">

                        </div>
                    </div>
                </div>
                <div class="ocultar-div" id="parte3"></div>
                <div class="ocultar-div" id="parte4"></div>
            </div>
        </div>

    </main>



    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/descripcionMil.js"></script>
    <script src="../js/editar_mostrar_datos.js"></script>
    <script src="js/grupos_select.js"></script>
    <script src="js/nuevo_grupo.js"></script>
    <script src="js/imgVidmodificacion.js"></script>
    <script src="js/consultasImgVid.js"></script>
    <!-- <script src="js/nueva_img_vid.js"></script> -->

    <script>
        // USADO PARA CAMBIAR PESTAÑAS Y BLOQUEARLAS DEPENDIENDO DE LA SELECCIONADA
        function cambio1() {
            document.getElementById("botonCambiar1").disabled = true;
            document.getElementById("botonCambiar2").disabled = false;
        }
        function cambio2() {
            document.getElementById("botonCambiar2").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;

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