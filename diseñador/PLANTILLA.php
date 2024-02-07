<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ********************************************************************** -->
        <!-- IMAGENES -->
        <div class="m-0 py-3 row">
            <div class="col-2">
                <p class="my-auto d-inline bold col-2">Seleccione la imagen, video o documento</p>
                <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen1"></button>
                <!-- TOAST -->
                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                    aria-atomic="true" id="imagen1" data-bs-delay="4000">
                    <div class="toast-header">
                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                        <strong class="me-auto">Imagen, Video o Documento</strong>
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
                    <input class="form-control" type="file" id="imagen_coord1"  name="imagen_coord1" accept=".png,.jpg,.jpeg,.webp">
                </label>

            </div>
        </div>
        <hr class="m-0">
    <!-- ********************************************************************** -->

        <!-- GRUPO TITULO -->
        <div class="m-0 py-3 row bg-blanco">
            <div class="col-2">
                <p class="my-auto d-inline bold col-2">Títulos</p>
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
                        Agregue un título.
                    </div>
                </div>
            </div>
            <div class="formulario__grupo col-9"  id="grupo__tituloArchivo">
                <label for="titulo_txt1"  class="formulario__label">Agregue un título</label>
                <div class="formulario__grupo-input">
                    <input class="form-control formulario__input" type="text" id="titulo_txt1" name="titulo_txt1" placeholder="solo letras, números, guión bajo, guión y espacios">
                </div>
                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
            </div>
        </div>
        <hr class="m-0">

    <!-- ********************************************************************** -->

        <!-- USAR TAMBIÉN PARA LISTAS -->

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

        <hr class="m-0">
 
</body>
</html>

<div class="ocultar-div bg-barra border" id="parte2">
                    <div>
                            <h3 class="m-0 py-4 ps-3 bg-blanco">Crear Nueva Página de Coordinación para una División.</h3>
                            <div class="bg-blanco py-3 ps-3">
                                <label><h5>Ingrese el identificador de la Coordinación que desea modificar:</h5>
                                    <input class="form-control w-50" type="number" id="buscarCoor" onblur="ModificarCo();">
                                </label>
                                <p class="bold">Una vez coloque el identificador, se precargarán los datos que posee dicha coordinación, si desea ingresar un cambio solo debe sobre escribir los datos que se precarguen. En el caso de imágenes o videos, solo debe seleccionar una nueva Imagen/Video</p>
                            </div>

                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="ModifyCoordinaciones" action="" enctype="multipart/form-data">
                            <div class="accordion" id="coordinaciones">
                                
                                <!-- GRUPO DIRECCION DESTINO -->
                                <div class="m-0 py-3 row">
                                    <div class="col-2">

                                        <p class="my-auto d-inline bold col-2">Indique la Dirección a la que pertenece la Coordinación:</p>
                                        <button type="button" class="boton_toast d-inline "><img
                                                src="../assets/intranet/pregunta.png" class="img_toast"
                                                data-toast="#toast3PART2"></button>
                                        <!-- TOAST -->
                                        <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                            aria-atomic="true" id="toast3PART2" data-bs-delay="4000">
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
                                        <select class="form-control" id="coord_direccionPART2" name="coord_direccionPART2">
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
                                        <input class="form-control w-50 mt-2" readonly id="Vcoord_direccion" name="Vcoord_direccion">
                                    </div>
                                </div>
                                
                                <hr class="m-0">

                                <!-- IMAGENES -->
                                <div class="m-0 py-3 row bg-blanco">
                                    <div class="col-2">
                                        <p class="my-auto d-inline bold col-2">Seleccione la imagen de Entrada a la página de la coordinación</p>
                                        <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen1PART2"></button>
                                        <!-- TOAST -->
                                        <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                            aria-atomic="true" id="imagen1PART2" data-bs-delay="4000">
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
                                            <input class="form-control" type="file" id="imagen_coord1PART2"  name="imagen_coord1PART2" accept=".png,.jpg,.jpeg,.webp" required>
                                        </label>

                                    </div>
                                </div>
                                <hr class="m-0">

                                <!-- GRUPO TITULO -->
                                <div class="m-0 py-3 row">
                                    <div class="col-2">
                                        <p class="my-auto d-inline bold col-2">Título</p>
                                        <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo1PART2"></button>
                                        <!-- TOAST -->
                                        <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                            aria-atomic="true" id="titulo1PART2" data-bs-delay="4000">
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
                                    <div class="formulario__grupo col-9"  id="grupo__titulo_txt1PART2">
                                        <label for="titulo_txt1PART2"  class="formulario__label">Agregue un título para identificar a la coordinación. Ejemplo: Coordinación de ...</label>
                                        <div class="formulario__grupo-input">
                                            <input class="form-control formulario__input" type="text" id="titulo_txt1PART2" name="titulo_txt1PART2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                        </div>
                                        <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                    </div>
                                    <div class="col-2"></div>
                                    <div class="col-9">
                                        <input class="form-control w-50 mt-2" readonly id="Vtitulo_txt1">
                                    </div>

                                </div>
                                <hr class="m-0">

                                <!-- GRUPO Descripción -->
                                <div class="m-0 row bg-blanco py-2">
                                    <p class="my-auto bold col-2">Descripción</p>
                                    <div class="col-9 "id="grupo__descripcion_txt1PART2">
                                        <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                            <label for="descripcion_txt1PART2" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                        </div>
                                        <div class="formulario__grupo-input">
                                            <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt1PART2" name="descripcion_txt1PART2" minlength="0" maxlength="20000" required></textarea>
                                            <div id="charCount"></div>
                                        </div>
                                        <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>  
                                    </div>
                                </div>
                                <!-- ********************************************************************** -->

                                <hr class="m-0">
                                <div class="py-2 bg-blanco">
                                    <button class="btn btn-light m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#segundaSeccionPART2" aria-expanded="true" aria-controls="segundaSeccionPART2">
                                        <h2 class=" m-0">Segunda Sección</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="segundaSeccionPART2" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- IMAGENES -->
                                        <div class="m-0 py-3 row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Seleccione una imagen</p>
                                                <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen2PART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="imagen2PART2" data-bs-delay="4000">
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
                                                    <input class="form-control" type="file" id="imagen_coord2PART2"  name="imagen_coord2PART2" accept=".png,.jpg,.jpeg,.webp">
                                                </label>

                                            </div>
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 bg-barra row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título para el texto </p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo2PART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="titulo2PART2" data-bs-delay="4000">
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
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_txt2PART2">
                                                <label for="titulo_txt2PART2"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_txt2PART2" name="titulo_txt2PART2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-9">
                                                <input class="form-control w-50 mt-2" readonly id="Vtitulo_txt2">
                                            </div>

                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO Descripción -->
                                        <div class="m-0 row py-2">
                                            <p class="my-auto bold col-2">Descripción</p>
                                            <div class="col-9 "id="grupo__descripcion_txt2PART2">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="descripcion_txt2PART2" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt2PART2" name="descripcion_txt2PART2" minlength="0" maxlength="20000"></textarea>
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
                                    <button class="btn btn-light m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#terceraSeccionPART2" aria-expanded="true" aria-controls="terceraSeccionPART2">
                                        <h2 class=" m-0">Tercera Sección</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="terceraSeccionPART2" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- IMAGENES -->
                                        <div class="m-0 py-3 row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Seleccione una imagen</p>
                                                <button type="button" class="boton_toast d-inline "><img src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#imagen3PART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="imagen3PART2" data-bs-delay="4000">
                                                    <div class="toast-header">
                                                        <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                                        <strong class="me-auto">Imagen o Video</strong>
                                                        <!-- <small>11 mins ago</small> -->
                                                        <button type="button" class="btn-close" data-bs-dismiss="toast"aria-label="Close"></button>
                                                    </div>
                                                    <div class="toast-body text-white">
                                                        Busque dentro de su equipo, la imagen o video que utilizará. Solo se acepta formato: <i>png, jpg, jpeg, webp, mp4</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <label>Imagen o Video
                                                    <input class="form-control" type="file" id="imagen_coord3PART2"  name="imagen_coord3PART2" accept=".png,.jpg,.jpeg,.webp,.mp4">
                                                </label>

                                            </div>
                                            
                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 bg-barra row">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título para el texto </p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#titulo3PART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="titulo3PART2" data-bs-delay="4000">
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
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_txt3PART2">
                                                <label for="titulo_txt3"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_txt3PART2" name="titulo_txt3PART2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-9">
                                                <input class="form-control w-50 mt-2" readonly id="Vtitulo_txt3">
                                            </div>

                                        </div>
                                        <hr class="m-0">

                                        <!-- GRUPO Descripción -->
                                        <div class="m-0 row py-2">
                                            <p class="my-auto bold col-2">Descripción</p>
                                            <div class="col-9 "id="grupo__descripcion_txt3PART2">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="descripcion_txt3PART2" class="formulario__label p-0 m-0">Escriba una descripción para el inicio.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="descripcion_txt3PART2" name="descripcion_txt3PART2" minlength="0" maxlength="20000" ></textarea>
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
                                    <button class="btn btn-light m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#cuartaSeccionPART2" aria-expanded="true" aria-controls="cuartaSeccionPART2">
                                        <h2 class=" m-0">Cuarta Sección - Lista 1</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="cuartaSeccionPART2" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 row bg-blanco">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título Lista</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#tituloListaPART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="tituloListaPART2" data-bs-delay="4000">
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
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_lista1PART2">
                                                <label for="titulo_lista1PART2"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_lista1PART2" name="titulo_lista1PART2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-9">
                                                <input class="form-control w-50 mt-2" readonly id="Vtitulo_lista1">

                                            </div>

                                        </div>
                                        <hr class="m-0">

                                        <!-- USAR TAMBIÉN PARA LISTAS -->
                                        <div class="m-0 row bg-blanco py-2">
                                            <p class="my-auto col-2 bold">Escriba una lista separada por el símbolo <i>*</i>.</p>
                                            <div class="col-9 "id="grupo__Lista1_coordPART2">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="Lista1_coordPART2" class="formulario__label p-0 m-0">Escriba una lista.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="Lista1_coordPART2" name="Lista1_coordPART2" minlength="0" maxlength="20000" required placeholder='Escriba una lista separada por el símbolo "*" al utlizar el símbolo indicado el sistema guardará lo siguente escrito como inicio de un segundo contenido para la lista. Ejemplo: Aguas, Desechos, Minerales. * Suelo, granito. Así se podrá almacenar la lista.'></textarea>
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
                                    <button class="btn btn-light m-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#quintaSeccionPART2" aria-expanded="true" aria-controls="quintaSeccionPART2">
                                        <h2 class=" m-0">Quinta Sección - Lista 2</h2>
                                    </button>
                                </div>
                                <div class="accordion-collapse collapse bg-blanco" id="quintaSeccionPART2" aria-labelledby="headingOne" data-bs-parent="#coordinaciones">
                                    <hr class="m-0">
                                    <div class="accordion-body" aria-expanded="true">
                                        <!-- ********************************************************************** -->
                                        <!-- GRUPO TITULO -->
                                        <div class="m-0 py-3 row bg-blanco">
                                            <div class="col-2">
                                                <p class="my-auto d-inline bold col-2">Título Lista</p>
                                                <button type="button" class="boton_toast d-inline "><img
                                                    src="../assets/intranet/pregunta.png" class="img_toast" data-toast="#tituloLista2PART2"></button>
                                                <!-- TOAST -->
                                                <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                                    aria-atomic="true" id="tituloLista2PART2" data-bs-delay="4000">
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
                                            <div class="formulario__grupo col-9"  id="grupo__titulo_lista2PART2">
                                                <label for="titulo_lista2PART2"  class="formulario__label">Agregue un título</label>
                                                <div class="formulario__grupo-input">
                                                    <input class="form-control formulario__input" type="text" id="titulo_lista2PART2" name="titulo_lista2PART2" placeholder="solo letras, números, guión bajo, guión y espacios">
                                                </div>
                                                <p class="formulario__input-error px-3">Solo letras, números, guión bajo, guión, paréntesis y espacios.</p>    
                                                

                                            </div>
                                            <div class="col-2"></div>
                                            <div class="col-9">
                                                <input class="form-control w-50 mt-2" readonly id="Vtitulo_lista2">
                                            </div>

                                        </div>

                                        <hr class="m-0">

                                        <!-- USAR TAMBIÉN PARA LISTAS -->
                                        <div class="m-0 row bg-blanco py-2">
                                            <p class="my-auto col-2 bold">Escriba una lista separada por el símbolo <i>*</i>.</p>
                                            <div class="col-9 "id="grupo__Lista2_coordPART2">
                                                <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                                    <label for="Lista2_coordPART2" class="formulario__label p-0 m-0">Escriba una lista.</label>
                                                </div>
                                                <div class="formulario__grupo-input">
                                                    <textarea class="formulario__input form-control bg-blanco-hsl textarea" id="Lista2_coordPART2" name="Lista2_coordPART2" minlength="0" maxlength="20000" required placeholder='Escriba una lista separada por el símbolo "*" al utlizar el símbolo indicado el sistema guardará lo siguente escrito como inicio de un segundo contenido para la lista. Ejemplo: Aguas, Desechos, Minerales. * Suelo, granito. Así se podrá almacenar la lista.'></textarea>
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
                                    <button type="button" class="btn btn-primary" id="registrar" name="registrar" onclick="ModificarCoord();">Enviar</button>
                                </div>
                            </div>
                            <input name="coordinacionesWeb" id="coordinacionesWeb" type="hidden" value="ModifyCoordPART2">


                            <div class="formulario__mensaje my-2" id="formulario__mensajeModifyCoordi">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>
                        </form>
                </div>