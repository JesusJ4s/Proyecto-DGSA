<!DOCTYPE html>
<html lang="es">
<head>
    <!--MetaDatos, Titulo y Conecciones(Librerias)-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="gg.css">
    <title>Intranet</title>
</head>
 <header id="inicio-pag">
        <?php
            include("php/logos.php")
        ?>
    </header>
<body>

    
   <!--Navegacion-->
   <nav>
       
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <a href="#" class="enlace"><img src="logo.webp" class="logo" alt="No se encuentra imagen"></a>
      
                
				<input class="btn btn-outline-secondary pb-3" placeholder="Usuario" id="idusuario" name="idusuario" required>
				<input class="btn btn-outline-secondary pb-3" placeholder="********" type="password" id="password" name="password" required>
                <button class="btn">INICIAR SESIÓN</button>
    
    
            </nav>
    
    <section></section>
    
    
   
</body>

</html>