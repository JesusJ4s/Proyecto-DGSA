<?php
// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
include("../php/verificacion_login.php");
Login_Dise_Admin();
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

    <title>Coordinaciones y Programas</title>
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


    <!-- MODAL PARA MODIFICAR COORDINACIONES-->
    <!-- TODO: -->
    <div class="modal fade" id="ModifiCoordinaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información del Archivo:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ModifiImg_VidC">
                    <form id="form_ModificacionesCor" method="POST">
                        <div class="container-fluid row">
                            <div class="col-6 mb-3">
                                <label class="formulario__label" for="direccion">Dirección en la que se muestra</label>
                                <input id="direccion" name="direccion" class="form-control mb-3" readonly>
                                                                                                    
                                <label class="formulario__label" for="identificador">Identificador</label>
                                <input id="identificador" name="identificador" class="form-control mb-3" readonly>

                            </div>
                            <div class="col-6">
                                <div class="" id="grupo__tituloR">
                                    <label class="formulario__label" for="tituloR">Título de la Coordinación</label>
                                    <input id="titulo" name="titulo" class="form-control mb-3" readonly>
                                </div>
                                <div class="" id="grupo__creacionR">
                                    <label class="formulario__label" for="creacionR">Fecha de Creación</label>
                                    <input id="creacion" name="creacion" class="form-control mb-3" readonly>
                                </div>
                            </div>
                            <div>
                                <h6 class="mt-4">Elija una opción si desea cambiar el estado de la coordinación:</h6>
                                    <input type="radio" class="btn-check" name="actInac" id="activo" autocomplete="off" value="1" required checked>
                                    <label class="btn btn-outline-primary" for="activo">Activo</label>

                                    <input type="radio" class="btn-check" name="actInac" id="inactivo" autocomplete="off" value="2" required>
                                    <label class="btn btn-outline-secondary" for="inactivo">Inactivo</label>

                                    <input type="radio" class="btn-check" name="actInac" id="eliminar" autocomplete="off" value="3" required>
                                    <label class="btn btn-outline-danger" for="eliminar">Eliminar</label>
                            </div>
                            <input id="visible_anterior" name="visible_anterior" type="hidden">
                        </div>
                        
                        <input name="consultarCoordinaciones" id="consultarCoordinaciones" type="hidden" value="Modificacion">
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

                    <button class="btn btn-primary ms-0" onclick="cambio3();cambioPesta3();" id="botonCambiar3"
                        name="botonCambiar3"><img src="../assets/icon/multi/lista_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Habilitar - inhabilitar</button>
                    <!-- <button class="btn btn-primary ms-0 me-1" onclick="cambio2();cambioPesta2();" id="botonCambiar2"
                        name="botonCambiar2"><img src="../assets/icon/multi/lista_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Modificación de Páginas de Coordinaciones</button> -->
                    <button class="btn btn-primary mx-0 me-1" onclick=" cambio1();cambioPesta1();" id="botonCambiar1"
                        name="botonCambiar1"><img src="../assets/icon/multi/cruz_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Nueva Información</button>
                    <a href="modulo_desing.php" class="btn btn-primary mx-0 me-1 botones-solicitud"><img
                            src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
                </div>
                <!-- SUBIR NUEVA IMAGEN/VIDEO -->
                <div class="bg-grey-claro">
                    <!-- TODO: COMIENZA LA WEB -->
                    <div class="border mt-3" id="parte1">
                        <div>
                            <h3 class="m-0 py-4 ps-2 bg-blanco">Crear Nueva Página de Coordinación para una División.</h3>
                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="formulario_coordinaciones" action="" enctype="multipart/form-data">
                            <div class="accordion" id="coordinaciones">
                                
                                <!-- GRUPO DIRECCION DESTINO -->
                                <div class="m-0 py-3 row">
                                    <div class="col-2">

                                        <p class="my-auto d-inline bold col-2">Indique la Dirección a la que pertenece la Coordinación:</p>
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
                                                Indique a cual de las 4 direcciones disponibles en la pagina web, desea subir la nueva Coordinación. Con ésta información también se creará el título de la nueva página.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <select class="form-control" id="coord_direccion" name="coord_direccion" required>
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

                                <!-- IMAGENES -->
                                <div class="m-0 py-3 row bg-blanco">
                                    <div class="col-2">
                                        <p class="my-auto d-inline bold col-2">Seleccione la imagen de Entrada a la página de la coordinación (obligatoria)</p>
                                        <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen1"></button>
                                        <!-- TOAST -->
                                        <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                            aria-atomic="true" id="imagen1" data-bs-delay="4000">
                                            <div class="toast-header">
                                                <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                <strong class="me-auto">Imagen</strong>
                                                <!-- <small>11 mins ago</small> -->
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-white">
                                                Busque dentro de su equipo, la imagen que utilizará. Solo se acepta formato: <i>png, jpg, jpeg, webp.</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <label>Imagen
                                            <input class="form-control" type="file" id="imagen_coord1"  name="imagen_coord1" accept=".png,.jpg,.jpeg,.webp" required>
                                        </label>

                                    </div>
                                </div>
                                <hr class="m-0">

                                <!-- GRUPO TITULO -->
                                <div class="m-0 py-3 row">
                                    <div class="col-2">
                                        <p class="my-auto d-inline bold col-2">Título  (obligatorio)</p>
                                        <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo1"></button>
                                        <!-- TOAST -->
                                        <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                            aria-atomic="true" id="titulo1" data-bs-delay="4000">
                                            <div class="toast-header">
                                                <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                <strong class="me-auto">Título</strong>
                                                <!-- <small>11 mins ago</small> -->
                                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body text-white">
                                                Agregue un título para el inicio del primer párrafo de la coordinación.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formulario__grupo col-9"  id="grupo__titulo_txt1">
                                        <label for="titulo_txt1"  class="formulario__label">Agregue un título para identificar a la coordinación. Ejemplo: Coordinación de ...</label>
                                        <div class="formulario__grupo-input">
                                            <input class="form-control formulario__input" type="text" id="titulo_txt1" name="titulo_txt1" placeholder="solo letras, números, guión bajo, guión y espacios">
                                        </div>
                                        <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                    </div>
                                </div>
                                <hr class="m-0">

                                <!-- GRUPO Descripción -->
                                <div class="m-0 row bg-blanco py-2">
                                    <p class="my-auto bold col-2">Descripción (obligatoria)</p>
                                    <div class="col-9 "id="grupo__descripcion_txt1">
                                        <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                            <label for="descripcion_txt1" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                        </div>
                                        <div class="formulario__grupo-input">
                                            <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt1" name="descripcion_txt1" minlength="0" maxlength="20000" required></textarea>
                                            <div id="charCount"></div>
                                        </div>
                                        <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                    </div>
                                </div>
                                <!-- ********************************************************************** -->

                                <hr class="m-0">
                                <div class="py-2 bg-blanco">
                                    <button class="btn btn-secondary m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#segundaSeccion" aria-expanded="true" aria-controls="segundaSeccion">
                                        <h2 class=" m-0">Segunda Sección (opcional)</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="segundaSeccion" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- IMAGENES -->
                                        <div class="m-0 py-3 row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Seleccione una imagen (opcional)</p>
                                                <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="imagen2" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Imagen</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Busque dentro de su equipo, la imagen que utilizará. Solo se acepta formato: <i>png, jpg, jpeg, webp.</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <label>Imagen
                                                    <input class="form-control" type="file" id="imagen_coord2"  name="imagen_coord2" accept=".png,.jpg,.jpeg,.webp">
                                                </label>

                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 bg-grey-claro row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título para el texto (opcional)</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="titulo2" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Título</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Agregue un título para el inicio del párrafo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_txt2">
                                                <label for="titulo_txt2"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_txt2" name="titulo_txt2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO Descripción -->
                                        <div class="m-0 row py-2">
                                            <p class="my-auto bold col-2">Descripción (opcional)</p>
                                            <div class="col-9 "id="grupo__descripcion_txt2">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="descripcion_txt2" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt2" name="descripcion_txt2" minlength="0" maxlength="20000" required></textarea>
                                                    <div id="charCount"></div>
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                            </div>
                                        </div>

                                        <hr class="m-0">
                                    </div>
                                </div>


                                <!-- ********************************************************************** -->

                                <hr class="m-0">
                                <div class="py-2 bg-blanco">
                                    <button class="btn btn-secondary m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#terceraSeccion" aria-expanded="true" aria-controls="terceraSeccion">
                                        <h2 class=" m-0">Tercera Sección (opcional)</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="terceraSeccion" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- IMAGENES -->
                                        <div class="m-0 py-3 row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Seleccione una imagen o video (opcional). El archivo no puede ser mayor de 40mb</p>
                                                <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen3"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="imagen3" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Imagen o Video</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Busque dentro de su equipo, la imagen o video que utilizará. Solo se acepta formato: <i>png, jpg, jpeg, webp, mp4. El archivo no puede ser mayor de 40mb</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <label>Imagen o Video. El archivo no puede ser mayor de 40mb
                                                    <input class="form-control" type="file" id="imagen_coord3"  name="imagen_coord3" accept=".png,.jpg,.jpeg,.webp,.mp4">
                                                </label>

                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 bg-grey-claro row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título para el texto (opcional)</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo3"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="titulo3" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Título</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Agregue un título para el inicio del párrafo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_txt3">
                                                <label for="titulo_txt3"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_txt3" name="titulo_txt3" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO Descripción -->
                                        <div class="m-0 row py-2">
                                            <p class="my-auto bold col-2">Descripción (opcional)</p>
                                            <div class="col-9 "id="grupo__descripcion_txt3">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="descripcion_txt3" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt3" name="descripcion_txt3" minlength="0" maxlength="20000" required></textarea>
                                                    <div id="charCount"></div>
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                            </div>
                                        </div>

                                        <hr class="m-0">
                                    </div>
                                </div>

                                <!-- ********************************************************************** -->
                                <hr class="m-0">
                                <div class="py-2 bg-blanco">
                                    <button class="btn btn-secondary m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#cuartaSeccion" aria-expanded="true" aria-controls="cuartaSeccion">
                                        <h2 class=" m-0">Cuarta Sección - Lista 1 (opcional)</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="cuartaSeccion" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 row bg-blanco">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título Lista</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#tituloLista"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="tituloLista" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Título Lista</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Agregue un título para la lista a desplegar en la página web.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_lista1">
                                                <label for="titulo_lista1"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_lista1" name="titulo_lista1" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- USAR TAMBIÉN PARA LISTAS -->
                                        <div class="m-0 row bg-blanco py-2">
                                            <p class="my-auto col-2 bold">Escriba una lista separada por el símbolo <i>*</i> (opcional).</p>
                                            <div class="col-9 "id="grupo__Lista1_coord">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="Lista1_coord" class="formulario__label p-0 m-0">Escriba una lista (opcional).</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="Lista1_coord" name="Lista1_coord" minlength="0" maxlength="20000" required placeholder='Escriba una lista separada por el símbolo "*" al utlizar el símbolo indicado el sistema guardará lo siguente escrito como inicio de un segundo contenido para la lista. Ejemplo: Aguas, Desechos, Minerales. * Suelo, granito. Así se podrá almacenar la lista.'></textarea>
                                                    <div id="charCount"></div>
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                            </div>
                                        </div>

                                        <hr class="m-0">
                                    </div>
                                </div>

                                <!-- ********************************************************************** -->
                                <hr class="m-0">
                                <div class="py-2 bg-blanco">
                                    <button class="btn btn-secondary m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#quintaSeccion" aria-expanded="true" aria-controls="quintaSeccion">
                                        <h2 class=" m-0">Quinta Sección - Lista 2 (opcional)</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="quintaSeccion" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 row bg-blanco">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título Lista</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#tituloLista2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="tituloLista2" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Título Lista</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Agregue un título para la lista a desplegar en la página web.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_lista2">
                                                <label for="titulo_lista2"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_lista2" name="titulo_lista2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- USAR TAMBIÉN PARA LISTAS -->
                                        <div class="m-0 row bg-blanco py-2">
                                            <p class="my-auto col-2 bold">Escriba una lista separada por el símbolo <i>*</i> (opcional).</p>
                                            <div class="col-9 "id="grupo__Lista2_coord">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="Lista2_coord" class="formulario__label p-0 m-0">Escriba una lista (opcional).</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="Lista2_coord" name="Lista2_coord" minlength="0" maxlength="20000" required placeholder='Escriba una lista separada por el símbolo "*" al utlizar el símbolo indicado el sistema guardará lo siguente escrito como inicio de un segundo contenido para la lista. Ejemplo: Aguas, Desechos, Minerales. * Suelo, granito. Así se podrá almacenar la lista.'></textarea>
                                                    <div id="charCount"></div>
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                            </div>
                                        </div>

                                        <hr class="m-0">
                                    </div>
                                </div>
                            </div>

                            <div class="m-0 row bg-blanco py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9">
                                    <button type="button" class="btn btn-primary" id="registrar" name="registrar" onclick="nuevaCoord();">Enviar</button>
                                </div>
                            </div>
                            <input name="coordinacionesWeb" id="coordinacionesWeb" type="hidden" value="nuevaCoord">


                            <div class="formulario__mensaje my-2" id="formulario__mensajeNuevaCoordi">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- *************************************************************************************************************************** -->
                <!-- ESTA ES LA PESTAÑA DE SEGUIMIENTO - DONDE COLOCAREMOS LOS REGISTROS HECHOS -->
                <div class="mt-3 ocultar-div " id="parte3">
                    <div class="accordion" id="CoordinacionesAcordion">

                        <div class="px-2">
                            <h3 class="text-start mt-4"><u>Visualizar</u></h3>
                            <div class="my-3 text-start">
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#CoordinacionesWeb" aria-expanded="true"
                                    aria-controls="CoordinacionesWeb">
                                    <b>Coordinaciones</b>
                                </button>
                            </div>

                            <div class="accordion-collapse collapse show" id="CoordinacionesWeb"
                                aria-labelledby="headingOne" data-bs-parent="#CoordinacionesAcordion">
                            <hr class="my-3">

                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Coordinaciones</h3>
                                    <div id="mostrar_Coordinaciones" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">
                        </div>
                    </div>
                </div>
                <!-- TODO: -->
                <!-- TODO: -->
                <!-- TODO: -->
                <!-- TODO: -->
                
                <div class="ocultar-div" id="parte2"></div>
                <div class="ocultar-div" id="parte4"></div>
            </div>
        </div>

    </main>



    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/editar_mostrar_datos.js"></script>
    <!-- LARGO DEL TEXTO -->
    <script src="../js/descripcionMil.js"></script>

    <script src="js/coordinaciones_web.js"></script>
    <script src="js/consultasCoordi.js"></script>

    <script>
        // USADO PARA CAMBIAR PESTAÑAS Y BLOQUEARLAS DEPENDIENDO DE LA SELECCIONADA
        function cambio1() {
            document.getElementById("botonCambiar1").disabled = true;
            // document.getElementById("botonCambiar2").disabled = false;
            document.getElementById("botonCambiar3").disabled = false;
        }
        // function cambio2() {
        //     // document.getElementById("botonCambiar2").disabled = true;
        //     document.getElementById("botonCambiar1").disabled = false;
        //     document.getElementById("botonCambiar3").disabled = false;

        // }
        function cambio3() {
            document.getElementById("botonCambiar3").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;
            // document.getElementById("botonCambiar2").disabled = false;

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