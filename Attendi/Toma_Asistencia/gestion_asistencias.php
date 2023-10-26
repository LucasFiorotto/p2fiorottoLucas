<!DOCTYPE html>
<html>
<head>
    <title>Gestionar Asistencias</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="gestion_asistencias.php">Asistencias</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="../Configuracion/index.php">Configuracion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container pt-3 ms-1 w-25">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" autocomplete="off">
            <div class="input-group mt-3">
                <span class="input-group-text">Fecha: </span>
                <input type="date" class="form-control" name="fecha">
                <button type="submit" class="btn btn-primary">Mostrar</button>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <table class="table table-hover mt-3">
            <tr class="table-light">
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Hora</th>
            </tr>

            <tr>
                <?php
                    require_once("../clases/Database.php");
                    require_once("../clases/Asistencia.php");

                    $conexion = new Database;
                    $conexion->conectar();

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $fecha = $_POST['fecha'];
                
                        $asistencia = new Asistencia($conexion);
                        $asistencia->mostrarAsistencias($fecha);
                    }
                ?>
            </tr>
        </table>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>