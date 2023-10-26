<!DOCTYPE html>
<html>
<head>
    <title>Tomar Asistencia</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-info navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ABM_Alumno/index.php">Alumnos</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="../Configuracion/index.php">Configuracion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <h5 class="d-flex justify-content-center mt-3">Fecha de hoy: <?php
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        echo date("d-m-Y") ?> </h5>
    </div>

    <div class="container-fluid">
            <table class="table table-hover mt-3">
                <tr class="table-light">
                    <th>Apellido</th>
                    <th>Nombre</th>
                </tr>

                <tr>
                <?php
                    require_once("../clases/Database.php");
                    require_once("../clases/Alumno.php");

                    $conexion = new Database;
                    $conexion->conectar();

                    $alumno = new Alumno('', '', '', '', $conexion);
                    $alumno->getListaAlumnosAusentes();
                ?>
                </tr>
            </table>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>