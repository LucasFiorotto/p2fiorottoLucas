<?php
    class Persona {
        public $nombre;
        public $apellido;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function getNombre() {
            echo $this-> nombre;
        }
    }
?>
