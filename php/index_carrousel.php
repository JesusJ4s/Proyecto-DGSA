<?php
echo 
'
<div class="container-fluid mb-2 p-0 box-shadow-nav w-95">
    <div id="carousel-id" class="carousel slide mt-3" data-bs-ride="carousel">

    <!-- Botones para pasar imagenes (inferiores) -->
        <div class="carousel-indicators">
            <button data-bs-target="#carousel-id" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#carousel-id" data-bs-slide-to="1"></button>
            <button data-bs-target="#carousel-id" data-bs-slide-to="2"></button>
            <button data-bs-target="#carousel-id" data-bs-slide-to="3"></button>
        </div>

        <!-- Contenedor de las imágenes en carrousel -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/banner/DGSA/BANNER 1.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
            </div>

            <div class="carousel-item">
                <img src="assets/banner/DGSA/BANNER 2.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
            </div>

            <div class="carousel-item">
                <img src="assets/banner/DGSA/BANNER 3.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
            </div>

            <div class="carousel-item">
                <img src="assets/banner/DGSA/BANER OFICIAL.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
            </div>
        </div>

    <!-- Botones para cambiar imágenes (altura normal) -->
        <button class="carousel-control-prev" data-bs-target="#carousel-id" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" data-bs-target="#carousel-id" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


<!-- MODAL PARA MOSTRAR SOLUCITUD EXITOSA-->
    <div class="modal fade" id="ImgVidGalery" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>

                    </div>
                <div class="modal-body" id="ImgVidGaleryC">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
';