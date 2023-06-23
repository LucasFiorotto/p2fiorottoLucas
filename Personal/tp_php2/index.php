<?php
    //$aux = 33;
    //var_dump($aux);
    //echo $aux;

    //$semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes');
    //var_dump($semana[1]);

    //$cosas = array('piedra', 35, true);
    //var_dump($cosas);

    //$planetas = array();
    //$planetas[] = 'urano';
    //$planetas[] = 'tierra';
    //$planetas[] = 'jupiter';
    //$planetas[] = 'mercurio';
    //$planetas[] = 'saturno';
    //foreach($planetas as $planeta) {
    //    echo "$planeta <br>";
    //};

    //function sumarNumeros($monto) {
    //    $valor = 5;
    //    $resultado = $valor + $monto;
    //    return $resultado;
    //};

    //$resultado = sumarNumeros(12);
    //echo $resultado;

    //suma de elementos: escribir una función que reciba un array numérico y calcule la suma de todos los elementos.
    //ejemplo: [1,2,3,4,5] -> 15.

    $numeros = array(1,2,3,4,5);
    function sumaElementos($numeros) {
        $suma = 0;
        foreach($numeros as $numero) {
            $suma = $suma + $numero;
            //$suma += $numero;
        };
        return $suma;
    };

    $resultado = sumaElementos($numeros);
    //echo $resultado;

    //ordenamiento ascendente: crear una funcion que ordene un array numerico (10 numeros) en orden ascendente (funcion sort).

    $numerosDesordenados = array(10, 50, 30, 40, 20, 70, 5);
    sort($numerosDesordenados);
    foreach($numerosDesordenados as $numero) {
        //echo $numero, " ";
    };

    //escribe una funcion que elimine los elementos duplicados de un array. array_unique().

    $numerosDuplicados = array(7, 2, 8, 5, 3, 6, 9, 1, 2, 5, 9);
    $numerosUnicos = array_unique($numerosDuplicados);
    foreach ($numerosUnicos as $numero) {
        echo $numero, " ";
    }
?>