<?php
    class Persona {
        public static $nombre = 'Lucas';
        public static function saludar() {
            echo 'Hola';
        }
        public static function saludarPorNombre() {
            echo 'Hola, tu nombre es: '.self::$nombre;
        }
    }
?>