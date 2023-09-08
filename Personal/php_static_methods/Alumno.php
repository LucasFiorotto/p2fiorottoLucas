<?php
    class Alumno extends Persona {
        public static function saludarAlumno() {
            echo 'Hola alumno: '.parent::$nombre;
        }
    }
?>