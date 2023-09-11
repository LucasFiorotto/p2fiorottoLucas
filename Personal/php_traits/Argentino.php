<?php
    require_once("Persona.php");
    require_once("Saludar_trait.php");

    class Argentino extends Persona {
        use saludar;

        public function nacionalidad() {
            echo "Soy Argentino";
        }
    }
?>