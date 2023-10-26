<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item" style="display:flex">
                    <img src="bootstrap/icons/Attendi_logo.png" role="img" width="64" height="64" class="mt-2">
                    <a class="nav-link" href="index.php"><h5>INICIO</h5></a>
                </li>
                <li class="nav-item ms-3" style="display:flex">
                    <img src="bootstrap/icons/person-lines-fill.svg" role="img" width="24" height="24" class="mt-2">
                    <a class="nav-link" href="ABM_Alumno/index.php"><h5>ALUMNOS</h5></a>
                </li>
                <li class="nav-item ms-3" style="display:flex">
                    <img src="bootstrap/icons/person-raised-hand.svg" role="img" width="28" height="28" class="mt-2">
                    <a class="nav-link" href="Toma_Asistencia/gestion_asistencias.php"><h5>ASISTENCIAS</h5></a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item me-1" style="display:flex">
                    <a class="nav-link" href="Configuracion/index.php"><h5>CONFIGURACIÓN</h5></a>
                    <img src="bootstrap/icons/gear-fill.svg" role="img" width="28" height="28" class="mt-2">
                </li>
            </ul>
        </div>
    </nav>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        $dniAlumno = $_GET['dni'];
    ?>

    <div class="d-flex justify-content-center container pt-3">
        <form action="Toma_Asistencia/estado_alumno.php" method="post" autocomplete="off">
            <label for="dni_alumno" class="form-label">DNI del Alumno: </label>
            <input type="number" class="form-control" id="dni_alumno" placeholder="Ingresar DNI" name="dni_alumno" value="<?php echo $dniAlumno ?>">

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Consultar</button>
            </div>
        </form>
    </div>

    <div class="text-center mt-3">
        <a href="Toma_Asistencia/index.php" class="btn btn-primary">Tomar Asistencia</a>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>