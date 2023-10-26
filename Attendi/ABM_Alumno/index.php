<!DOCTYPE html>
<html>
<head>
    <title>ABM Alumno</title>
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
                    <a class="nav-link" href="index.php">Alumnos</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="../Configuracion/index.php">Configuracion</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex justify-content-center">
        <a href="alta_alumno.php" class="btn btn-primary btn-lg mt-3 ms-3">Dar alta</a>
    </div>

    <div class="table-responsive d-flex justify-content-center mt-3 ms-3">
            <table class="table table-hover border border-2 caption-top w-auto">
                <caption><h5>Lista de alumnos:</h5></caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="h5 text-center">Apellido</th>
                        <th scope="col" class="h5 text-center">Nombre</th>
                        <th scope="col" class="h5 text-center">DNI</th>
                        <th scope="col" class="h5 text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        require_once("../clases/Database.php");
                        require_once("../clases/Alumno.php");
                    
                        $conexion = new Database;
                        $conexion->conectar();

                        $alumno = new Alumno('', '', '', '',$conexion);
                        $alumno->getListaAlumnos();
                    ?>
                </tbody>
            </table>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>