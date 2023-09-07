<?php
    require_once("Persona.php");
    require_once("Argentino.php");
    require_once("Saludar_trait.php");

    $persona1 = new Argentino('Lucas');
    $persona1->saludar();
    echo " ";
    $persona1->nacionalidad();
?>