<?php
    require_once('conexion.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombreJugadora = $_POST['nombreJugadora'];
        $apellidoJugadora = $_POST['apellidoJugadora'];
        $edadJugadora = $_POST['edadJugadora'];
        $clubJugadora = $_POST['clubJugadora'];

        $query = "INSERT INTO jugadoras (nombre,apellido,edad,club) VALUES (:nombreJugadora, :apellidoJugadora, :edadJugadora, :clubJugadora)";
        $statement = $conn -> prepare($query);
        $statement -> bindParam(":nombreJugadora", $nombreJugadora);
        $statement -> bindParam(":apellidoJugadora", $apellidoJugadora);
        $statement -> bindParam(":edadJugadora", $edadJugadora);
        $statement -> bindParam(":clubJugadora", $clubJugadora);
        $statement -> execute();
        echo "Nuevos registros creados con exito";
      };
?>