<?php
    require_once('conexion.php');
    $idJugadora = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombreJugadora = $_POST['nombreJugadora'];
        $apellidoJugadora = $_POST['apellidoJugadora'];
        $edadJugadora = $_POST['edadJugadora'];
        $clubJugadora = $_POST['clubJugadora'];

        $query = "UPDATE jugadoras SET nombre = :nombreJugadora WHERE id = :idJugadora";
        $statement = $conn -> prepare($query);
        $statement -> bindParam(":nombreJugadora", $nombreJugadora);
        $statement -> bindParam(":apellidoJugadora", $apellidoJugadora);
        $statement -> bindParam(":edadJugadora", $edadJugadora);
        $statement -> bindParam(":clubJugadora", $clubJugadora);
        $statement -> execute();
        echo '<script> alert("Datos cargados con éxito");
        location.href = "../index.html";
        </script>';
      };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateJugadoras.php" method="post">
        Nombre: <input type="text" name="nombreJugadora"><br>
        Apellido: <input type="text" name="apellidoJugadora"><br>
        Edad: <input type="number" name="edadJugadora"><br>
        Club: <input type="text" name="clubJugadora"><br>
        <input type="submit">
    </form>
</body>
</html>