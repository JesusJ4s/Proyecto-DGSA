<?php
// PERMITE USAR VARIABLES GLOBALES
// session_start();
// ob_start();


function Modulos_NavegacionCorrespondencia()
{

    if ($_SESSION['nivel_usuario'] == 3 && $_SESSION['id_departamento'] != 80) {
        echo
            '
        <section class="border mb-5 mx-4 bg-blanco box-shadow-plano">
            <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
        
            <section class="container-fluid contenedor-grid-3">
                <!-- RELLENO DE ESPACIO -->
                <div></div>
                <!-- CONSULTA E IMPRESION CORRESPONDENCIA-->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">

                        <h3 class="border text-center p-2 mb-3">Consulte su correspondencia</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/correspondencia/consulta-de-busqueda.png"
                                class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">A través de distintos filtros podrá consultar los registros hechos,
                                para verificar información o cualquier dato solicitado.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="correspondencia_jefes.php">Acceder</a>
                        </div>
                    </div>
                <!-- RELLENO DE ESPACIO -->
                <div></div>

            </section>

        </section>
        
        ';
    } else if ($_SESSION['nivel_usuario'] == 1) {
        echo
            '
            <!-- SECCIÓN PRINCIPAL -->
            <section class="border mb-5 mx-4 bg-blanco box-shadow-plano">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las
                    aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"
                </h6>


                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid">
                    <!-- REGISTRAR CORRESPONDENCIA -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Registro</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/correspondencia/envio.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Registre nueva correspondencia que llega a la institución.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="correspondencia_registro.php"
                                >Acceder</a>
                        </div>

                    </div>

                    <!-- CONSULTA E IMPRESION CORRESPONDENCIA -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">

                        <h3 class="border text-center p-2 mb-3">Consulte su correspondencia</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/correspondencia/consulta-de-busqueda.png"
                                class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">A través de distintos filtros podrá consultar los registros hechos,
                                para verificar información o cualquier dato solicitado.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="correspondencia_jefes.php">Acceder</a>
                        </div>
                    </div>

                </section>

            </section>
        
        ';
    } else if ($_SESSION['nivel_usuario'] == 3 && $_SESSION['id_departamento'] == 80){
        echo
            '
            <!-- SECCIÓN PRINCIPAL -->
            <section class="border mb-5 mx-4 bg-blanco box-shadow-plano">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las
                    aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"
                </h6>


                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid-3">
                    <!-- CORRESPONDENCIA -->
                    <div></div>
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Registro</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/correspondencia/envio.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Registre nueva correspondencia que llega a la institución.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="correspondencia_registro.php"
                                >Acceder</a>
                        </div>

                    </div>

                    <div></div>

                </section>

            </section>
        
        ';
    }

}





?>