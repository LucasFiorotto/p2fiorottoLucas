<?php
    require_once("../clases/Database.php");
    require_once("../clases/Alumno.php");

    $conexion = new Database;
    $conexion->conectar();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dniAnterior = $_POST['dni_alumno_anterior'];
        $dni = $_POST['dni_alumno'];
        $nombre = $_POST['nombre_alumno'];
        $apellido = $_POST['apellido_alumno'];
        $fechaNacimiento = $_POST['fecha_nacimiento'];

        $alumno = new Alumno($dni, $nombre, $apellido, $fechaNacimiento, $conexion);
        $alumno->updateAlumno($dniAnterior);
    };

    $dniAlumno = $_GET['dni'];

    $alumno = new Alumno($dniAlumno, '', '', '', $conexion);
    $datosAlumno = $alumno->getAlumno();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Alumno</title>
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

    <div class="container mt-3">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
            <div class="row">

                <input type="hidden" name="dni_alumno_anterior" value="<?php echo $dniAlumno; ?>" required>

                <div class="col">
                    <label for="dni_alumno" class="form-label">DNI: </label>
                    <input type="number" class="form-control" id="dni_alumno" name="dni_alumno" value="<?php echo $datosAlumno[0]['dni']; ?>" min="1" required> <br>
                </div>
                <div class="col">
                    <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento: </label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $datosAlumno[0]['fecha_nacimiento']; ?>" required> <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="dni_alumno" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre_alumno" name="nombre_alumno" value="<?php echo $datosAlumno[0]['nombre']; ?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" required> <br>
                </div>
                <div class="col">
                    <label for="dni_alumno" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" id="apellido_alumno" name="apellido_alumno" value="<?php echo $datosAlumno[0]['apellido']; ?>" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode == 32)" required> <br>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </form>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>