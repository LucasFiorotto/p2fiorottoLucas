<?php
    require_once('conexion.php');
    $query = "SELECT * FROM users";
    $statement = $conn -> prepare($query);
    $statement -> execute();
    $usuarios = $statement -> fetchAll();

    $edad_users = 0;
    $edad_jugadoras = 0;

    foreach($usuarios as $usuario) {
        echo $usuario["nombre"], " ";
        echo $usuario["apellido"], "<br>";
        $edad_users += $usuario["edad"];
    };
    
    echo "<br>";

    require_once('conexion.php');
    $query = "SELECT * FROM jugadoras";
    $statement = $conn -> prepare($query);
    $statement -> execute();
    $usuarios = $statement -> fetchAll();

    foreach($usuarios as $usuario) {
        echo $usuario["nombre"], " ";
        echo $usuario["apellido"], "<br>";
        $edad_jugadoras += $usuario["edad"];
    };

    echo "<br>";

    if ($edad_users>$edad_jugadoras) {
        echo "Los usuarios suman mas edad."; 
    } else {
        echo "Las jugadoras suman mas edad.";
    };
?>