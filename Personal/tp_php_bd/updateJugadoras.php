<?php
    require_once('conexion.php');
    $idJugadora = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $idJugadora = $_POST['idJugadora'];
        $nombreJugadora = $_POST['nombreJugadora'];
        $apellidoJugadora = $_POST['apellidoJugadora'];
        $edadJugadora = $_POST['edadJugadora'];
        $clubJugadora = $_POST['clubJugadora'];

        $query = "UPDATE jugadoras SET nombre = '$nombreJugadora' WHERE id = '$idJugadora'";
        $statement = $conn -> prepare($query);
        $statement -> execute();
        echo '<script> alert("Datos editados con éxito");
        location.href = "../index.html";
        </script>';
      };

    $query = "SELECT * FROM jugadoras WHERE id = '$idJugadora'";
    $statement = $conn -> prepare($query);
    $statement -> execute();
    $jugadoras = $statement -> fetchAll();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="idJugadora" value="<?php echo $jugadoras[0]['id'];?>">
        Nombre: <input type="text" name="nombreJugadora" value="<?php echo $jugadoras[0]['nombre'];?>"><br>
        Apellido: <input type="text" name="apellidoJugadora" value="<?php echo $jugadoras[0]['apellido'];?>"><br>
        Edad: <input type="number" name="edadJugadora" value="<?php echo $jugadoras[0]['edad'];?>"><br>
        Club: <input type="text" name="clubJugadora" value="<?php echo $jugadoras[0]['club'];?>"><br>
        <input type="submit">
    </form>
</body>
</html>