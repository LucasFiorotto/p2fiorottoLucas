<?php
    class Persona {
        public $nombre;
        public $apellido;
        public $edad;
        public $dni;

        public function __construct($nombre, $apellido, $edad, $dni) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            if ($this->edad = $edad <= 0) {
                $this->edad = $edad = 18;
            };
            $this->dni = $dni;
        }

        public function setNombre($nuevoNombre) {
            $this->nombre = $nuevoNombre;
        }

        public function getNombre() {
            return $this->nombre;
        }
    };
?>