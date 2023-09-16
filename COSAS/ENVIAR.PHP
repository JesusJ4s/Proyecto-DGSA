<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    <title>INTRANET</title>
</head>
<body class=" min-width-index">

    <div class="container-fluid row text-center">
        <div class="container col-9">
            <form method="post" action="MOSTRAR.php" name="enviar" id="enviar">
            <div class="form-group">
                <h3>Departamento</h3>
                <label>Informática
                    <input type="radio" name="departamento" id="departamento" value="1" required>
                </label>
                <br>
                <label>Epidemiologia
                    <input type="radio" name="departamento" id="departamento" value="2" required>
                </label>
                    
            </div>
            <div class="form-group">
                <h3>Cargo</h3>
                <label>Administrador
                    <input type="radio" name="cargo" id="cargo" value="1" required>
                </label>
                <br>
                <label>Jefe de Departamento
                    <input type="radio" name="cargo" id="cargo" value="2" required>
                </label>
                <br>
                <label>Comun
                    <input type="radio" name="cargo" id="cargo" value="3" required>
                </label>
            </div>
            <center><input type="submit" value="Enviar" class="btn btn-success" name="btn1"></center>
            </form>
        </div>
    </div>


<!-- JS en Bootstrap -->
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>