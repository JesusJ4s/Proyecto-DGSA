<?php
// CONSULTAR CONOCIMIENTO - BOTONES SUPERIORES

function formCasos(){
    if ($_SESSION['nivel_usuario']==3 || $_SESSION['nivel_usuario']==4 || $_SESSION['nivel_usuario']==5) {
        echo 
        '
        ';
    }else{
        // <!-- PESTAÑA PARA INGRESAR UN NUEVO CASO -->
        echo 
        '
            <div id="parte4" class="ocultar-div">
                <form id="form_Conocimiento" method="post">
                    <div class="container-fluid">
                    <h5>Ingrese el nuevo caso:</h5>
                    <div class="row">
                        <!-- INDICA EL TIPO DE PROBLEMA (HARDWARE O SOFTWARE) -->
                        <!-- DESCRIPCION DEL PROBLEMA Y SOLUCIÓN -->
                        <!-- Izquierda -->                     
                        <div class="col-6">
                            <input type="radio" class="btn-check" name="tipo_fallo" id="Software" autocomplete="off" value="1" required>
                            <label class="btn btn-outline-primary" for="Software">Software</label>

                            <input type="radio" class="btn-check" name="tipo_fallo" id="Hardware" autocomplete="off" value="2" required>
                            <label class="btn btn-outline-primary" for="Hardware">Hardware</label>

                            <input id="conocimiento" name="conocimiento" value="BaseConocimiento" type="hidden" readonly> 


                            <div class="col-12">
                            <label>Descripción del Caso:</label>
                            <input maxlength="45" class="form-control" required id="descripcion_titulo" name="descripcion_titulo">
                            </div>
                            
                            <div class="col-12">
                            <label>Posible Solución:</label>
                            <textarea required class="bg-blanco-hsl descripcion" id="descripcion" name="descripcion"  minlength="20" maxlength="200"></textarea>
                            

                            </div>
                        </div>
                        <!-- DERECHA -->
                        <div class="col-6">
                            <h6>Debe específicar que provoca el fallo:</h6>
                            <p>
                                Seleccione si es Software o Hardware
                            </p>
                            <br>
                            <h6>Describa lo más reducido el tipo de fallo que ocurre:</h6>
                            <p>
                                Escriba con palabras sencillas los problemas que pueden ocurrir. Ejemplo: <i>Al intentar abrir Word, no habre.</i>
                            </p>
                            <br>
                            <h6>Explique como se puede solucionar la problemática que se presentó:</h6>
                            <p>
                                Explique los pasos a seguir en caso de que se presente dicha situación.
                            </p>
                            
                        </div>

                    </div>
                    <div class="col-9">
                        <button type="submit" class="btn btn-primary my-3" id="reg_Conoci" name="reg_Conoci">Enviar</button>
                    </div>
                    </div>
                </form>
            </div>
        ';
    }
}
?>