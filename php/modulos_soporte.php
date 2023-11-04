<?php

function Modulos_Navegacion_soporte(){
    if ($_SESSION['nivel_usuario']==4) {
        echo
        '
            <!-- SECCIÓN PRINCIPAL -->
            <section class="border my-3 mx-4 bg-blanco box-shadow-plano mb-5">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
            
                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid">
                    <!-- INGRESO SOLICITUD -->
                    <div class="border mx-3 altura-app p-2 mb-3 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Solicitud de Soporte Técnico</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/salvavidas.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center py-3 px-3">
                            <p class="text-justify">Realice su consulta a través del sistema de solicitudes</p>
                            <div class="py-2">
                                <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_solicitud.php">Acceder</a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- BASE DE CONOCIMIENTO -->
                    <div class="border mx-3 altura-app p-2 mb-3 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Base de Conocimiento</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/biblioteca-en-linea.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center py-3 px-3">
                            <p class="text-justify">Verifique si su consulta ha sido realizada antes.</p>
                            <div class="py-2">
                                <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_base.php">Acceder</a>
                            </div>
                        </div>
                    </div>        
                </section>

            </section>
        ';
    }
    else if ($_SESSION['nivel_usuario']==3) {
        echo
        '
            <!-- SECCIÓN PRINCIPAL -->
            <section class="border my-3 mx-4 bg-blanco box-shadow-plano mb-5">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
            

                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid">
                    <!-- INGRESO SOLICITUD -->
                    <div class="border mx-3 altura-app p-2 mb-3 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Solicitud de Soporte Técnico</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/salvavidas.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center py-3 px-3">
                            <p class="text-justify">Realice su consulta a través del sistema de solicitudes</p>
                            <div class="py-2">
                                <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_solicitud.php">Acceder</a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- BASE DE CONOCIMIENTO -->
                    <div class="border mx-3 altura-app p-2 mb-3 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Base de Conocimiento</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/biblioteca-en-linea.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" text-center py-3 px-3">
                            <p class="text-justify">Verifique si su consulta ha sido realizada antes.</p>
                            <div class="py-2">
                                <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_base.php">Acceder</a>
                            </div>
                        </div>
                    </div>
                    
        
                </section>

            </section>
        ';
    }
    else if ($_SESSION['nivel_usuario']==1 || $_SESSION['nivel_usuario']==2) {
        echo
        '
            <!-- SECCIÓN PRINCIPAL -->
            <section class="border my-3 mx-4 bg-blanco box-shadow-plano mb-5">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
            

                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid-3">

                    <!-- INGRESO SOLICITUD -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Solicitud de Soporte Técnico</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/salvavidas.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Realice su consulta a través del sistema de solicitudes</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_solicitud.php">Acceder</a>
                        </div>
                        
                    </div>
                    <!-- BASE DE CONOCIMIENTO -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Base de Conocimiento</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/biblioteca-en-linea.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Verifique si su consulta ha sido realizada antes.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_base.php">Acceder</a>
                        </div>
                    </div>
                    <!-- VER SOLICITUDES -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                                
                        <h3 class="border text-center p-2">Notificaciones de Soporte<img src="../assets/intranet/soporte/iconos/notificacion.png" class="campana" ><input id="cant_sopor" readonly type="text" class="texto_campana"></h3>

                        <div class="text-center">
                            <img src="../assets/intranet/soporte/notificaciones.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Conozca los anuncios de soporte de último momento.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="soporte_tecnico_notifi.php">Acceder</a>
                        </div>
                    </div>
        
                </section>

            </section>
        ';
    }
}



?>