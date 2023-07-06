<?php
    require_once('conexion.php');

    $query = "SELECT * FROM jugadoras";
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
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Club</th>
        </tr>
        <tr>
            <?php
                foreach ($jugadoras as $row) { ?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td> 
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['club']; ?></td>
                        <?php echo "<td><a href='updateJugadoras.php?id=".$row['id']."'><button>Editar</button></a></td>"; ?>
                    </tr>
                <?php
                } ?>
        </tr>
    </table>
</body>
</html>