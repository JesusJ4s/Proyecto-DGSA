<?php
// PERMITE USAR VARIABLES GLOBALES
// session_start();
// ob_start();


function Modulos_Navegacion()
{

    if ($_SESSION['nivel_usuario'] == 4) {
        if ($_SESSION['id_departamento']==81) {
            echo
            '
        <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
            <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
        
            <section class="container-fluid contenedor-grid-4">
                <!-- RELLENO DE ESPACIO -->
                <div></div>
                <!-- SOPORTE TÉCNICO -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/soporte/Soporte_Tecnico3.jpg" class="w-100 mt-2 mb-2">
                    </div>
                    <div class=" text-center py-3 px-3">
                        <h2>Centro de Soporte</h2>
                        <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                        <a class="btn btn-primary w-65 hover-boton mt-4" href="soporte_tecnico.php">Acceder</a>
                    </div>
                </div>
                <!-- CONTROL DE LA WEB -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/diseñador/diseñador.jpg" class="w-100 mt-2 mb-2">
                    </div>
                    <div class=" text-center py-3 px-3">
                        <h2>Web</h2>
                        <p class="text-justify">A través del siguiente modulo podrá controlar lo que se muestra en la página web.</p>
                        <a class="btn btn-primary w-65 hover-boton mt-4" href="../diseñador/modulo_desing.php">Acceder</a>
                    </div>
                </div>
                <!-- RELLENO DE ESPACIO -->
                <div></div>

            </section>

        </section>
        
        ';
        }else {
            echo
            '
            <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
                <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
            
                <section class="container-fluid contenedor-grid-3">
                    <!-- RELLENO DE ESPACIO -->
                    <div></div>
                    <!-- SOPORTE TÉCNICO -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <div class="text-center">
                            <img src="../assets/intranet/soporte/Soporte_Tecnico3_JEFE.jpg" class="w-100 mt-2 mb-2">
                        </div>
                        <div class=" text-center py-3 px-3">
                            <h2>Centro de Soporte</h2>
                            <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                            <a class="btn btn-primary w-65 hover-boton mt-4" href="soporte_tecnico.php">Acceder</a>
                        </div>
                    </div>
                    <!-- RELLENO DE ESPACIO -->
                    <div></div>

                </section>

            </section>
        
        ';
        }
        
    } else if ($_SESSION['nivel_usuario'] == 1) {
        echo
            '
        <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
            <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
        
            <section class="container-fluid contenedor-grid-4">
            
                <!-- SOPORTE TÉCNICO -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/soporte/Soporte_Tecnico3.jpg" class="w-100">
                    </div>
                    <div class="p-3 text-center contenedores_modulos_info">
                        <h2>Centro de Soporte</h2>
                        <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico.php">Acceder</a>
                    </div>
                </div>
                
                <!-- PARQUE TECNOLÓGICO -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/parque_tecnologico/Parque Tecnologico3.jpg" class="w-100">
                    </div>
                    <div class=" p-3 text-center contenedores_modulos_info">
                        <h2>Parque Tecnológico</h2>
                        <p class="text-justify">Es una aplicación que permite ingresar nuevos equipos al parque tecnológico, actualizarlo y verificar la ubicación y cantidad de los mismos.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="parque_tecno.php">Acceder</a>

                    </div>

                </div>

                <!-- CORRESPONDENCIA -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/correspondencia/correspondencia2.jpg" class="w-100">
                    </div>
                    <div class=" p-3 text-center contenedores_modulos_info">
                        <h2>Correspondencia</h2>
                        <p class="text-justify">Permite el registro de los documentos dirigidos a la DGSA, para su evaluación y remisión a los distintos departamentos de toda la institución.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="correspondencia_menu.php">Acceder</a>
                    </div>

                </div>
                
                <!-- USUARIOS -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/gestion_usuarios/gestion_usuarios2.jpg" class="w-100">
                    </div>
                    <div class=" p-3 text-center contenedores_modulos_info">
                        <h2>Gestión del Sistema</h2>
                        <p class="text-justify">Permite la restauración de cuentas y la modificación de cargos dentro del sistema, además de copias de seguridad.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="gestion_usuario.php">Acceder</a>
                    </div>

                </div>
            </section>
            <section class="container-fluid contenedor-grid-4">
                <!-- CONTROL DE LA WEB -->
                <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/diseñador/diseñador.jpg" class="w-100 mt-2 mb-2">
                    </div>
                    <div class=" text-center py-3 px-3">
                        <h2>Web</h2>
                        <p class="text-justify">A través del siguiente modulo podrá controlar lo que se muestra en la página web.</p>
                        <a class="btn btn-primary w-65 hover-boton mt-4" href="../diseñador/modulo_desing.php">Acceder</a>
                    </div>
                </div>

            </section>


        </section>
        
        ';
    }  else if ($_SESSION['nivel_usuario'] == 2) {
        echo
            '
        <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
            <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
        
            <section class="container-fluid contenedor-grid">
            
                <!-- SOPORTE TÉCNICO -->
                <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/soporte/Soporte_Tecnico3.jpg" class="w-65">
                    </div>
                    <div class="p-3 text-center contenedores_modulos_info">
                        <h2>Centro de Soporte</h2>
                        <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico.php">Acceder</a>
                    </div>
                </div>
                
                <!-- PARQUE TECNOLÓGICO -->
                <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                    <div class="text-center">
                        <img src="../assets/intranet/parque_tecnologico/Parque Tecnologico3.jpg" class="w-65">
                    </div>
                    <div class=" p-3 text-center contenedores_modulos_info">
                        <h2>Parque Tecnológico</h2>
                        <p class="text-justify">Es una aplicación que permite ingresar nuevos equipos al parque tecnológico, actualizarlo y verificar la ubicación y cantidad de los mismos.</p>
                    </div>
                    <div class="align-middle text-center">
                        <a class="btn btn-primary w-65 hover-boton" href="parque_tecno.php">Acceder</a>

                    </div>

                </div>
            </section>

        </section>
        
        ';
    } 
    else if ($_SESSION['nivel_usuario'] == 3 && $_SESSION['id_departamento'] != 80){
        echo
            '
        <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
        <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
    
        <section class="container-fluid contenedor-grid">
        
            <!-- SOPORTE TÉCNICO -->
            <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                <div class="text-center">
                    <img src="../assets/intranet/soporte/Soporte_Tecnico3_JEFE.jpg" class="w-65">
                </div>
                <div class="p-3 text-center contenedores_modulos_info">
                    <h2>Centro de Soporte</h2>
                    <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                </div>
                <div class="align-middle text-center">
                    <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico.php">Acceder</a>
                </div>
            </div>
            <!-- CORRESPONDENCIA -->
            <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                <div class="text-center">
                    <img src="../assets/intranet/correspondencia/correspondencia2_CONSULTA.jpg" class="w-65">
                </div>
                <div class=" p-3 text-center contenedores_modulos_info">
                    <h2>Correspondencia</h2>
                    <p class="text-justify">Permite el registro de los documentos dirigidos a la DGSA, para su evaluación y remisión a los distintos departamentos de toda la institución.</p>
                </div>
                <div class="align-middle text-center">
                    <a class="btn btn-primary w-65 hover-boton" href="correspondencia_menu.php">Acceder</a>
                </div>

            </div>
        </section>

    </section>
        
        ';
    } else if ($_SESSION['nivel_usuario'] == 3 && $_SESSION['id_departamento'] == 80){
        echo
            '
        <section class="border my-3 mb-5 mx-4 bg-blanco box-shadow-plano">
        <h6 class="my-1 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
    
        <section class="container-fluid contenedor-grid">
        
            <!-- SOPORTE TÉCNICO -->
            <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                <div class="text-center">
                    <img src="../assets/intranet/soporte/Soporte_Tecnico3_JEFE.jpg" class="w-65">
                </div>
                <div class="p-3 text-center contenedores_modulos_info">
                    <h2>Centro de Soporte</h2>
                    <p class="text-justify">Es una aplicación que permite realizar solicitudes de soporte técnico de forma remota.</p>
                </div>
                <div class="align-middle text-center">
                    <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico.php">Acceder</a>
                </div>
            </div>
            <!-- CORRESPONDENCIA -->
            <div class="border mx-3 altura-app mb-5 w-85 box-shadow-plano">
                <div class="text-center">
                    <img src="../assets/intranet/correspondencia/correspondencia2_CORRESP.jpg" class="w-65">
                </div>
                <div class=" p-3 text-center contenedores_modulos_info">
                    <h2>Correspondencia</h2>
                    <p class="text-justify">Permite el registro de los documentos dirigidos a la DGSA, para su evaluación y remisión a los distintos departamentos de toda la institución.</p>
                </div>
                <div class="align-middle text-center">
                    <a class="btn btn-primary w-65 hover-boton" href="correspondencia_menu.php">Acceder</a>
                </div>

            </div>
        </section>

    </section>
        
        ';
    }

}
