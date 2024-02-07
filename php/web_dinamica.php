<?php

echo '
<script src="js/boletines_divisiones.js"></script>
<script src="js/instrumentos_divisiones.js"></script>
<script src="js/descargas_direcciones.js"></script>
<script src="js/coordinaciones_web.js"></script>
<script>
    $(document).ready(function(){
        var textarea = $(".textarea2");

        textarea.on("input", function() {
        this.style.height = "auto";
        this.style.height = this.scrollHeight + "px";
        });

        // Ajustar la altura inicial al cargar la página
        textarea.trigger("input");
    })
</script>


';