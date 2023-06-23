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

   
    //1) suma de elementos: escribir una función que reciba un array numérico y calcule la suma de todos los elementos.
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

   
    //2) ordenamiento ascendente: crear una funcion que ordene un array numerico (10 numeros) en orden ascendente (funcion sort).

    $numerosDesordenados = array(10, 50, 30, 40, 20, 70, 5);
    sort($numerosDesordenados);
    foreach($numerosDesordenados as $numero) {
        //echo $numero, " ";
    };

    
    //3) escribe una funcion que elimine los elementos duplicados de un array. array_unique().

    $numerosDuplicados = array(7, 2, 8, 5, 3, 6, 9, 1, 2, 5, 9);
    $numerosUnicos = array_unique($numerosDuplicados);
    foreach ($numerosUnicos as $numero) {
        //echo $numero, " ";
    };

    
    //4) crear una funcion que reciba un array y un valor a buscar, y devuelva un nuevo array con los indices de todas las ocurrencias del valor en el array original. array_keys().

    $numerosIndice = array(3, 6, 8, 4, 6, 2, 1, 9, 9, 4);
    $indicesNumeros = array_keys($numerosIndice, 4);
    foreach ($indicesNumeros as $numero) {
        //echo $numero, " ";
    };

    
    //5) combinacion de arrays: escribir una funcion que combine dos arrays en uno solo. Buscar en el array resultante los numeros impares.

    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(6, 7, 8, 9);

    $arrayCombinado = array_merge($array1, $array2);
    foreach ($arrayCombinado as $numero) {
        if (($numero % 2) != 0) {
            //echo $numero, " ";
        }
    };

    
    //Arrays asociativos.
    $clubes = array(
        'Independiente' => array(
            'Jugadores' => array('Bochini', 'Cautericcio', 'Marcone')
        ),
        'San Lorenzo' => array(
            'Jugadores' => array('Barrios', 'Galetto', 'Sanchez')
        ),
        'Boca' => array(
            'Jugadores' => array('Advincula', 'Weigandt', 'Romero')
        )
    );

    print_r($clubes['Boca']['Jugadores']);

    //6) 1. Mostrar si Fernando Galetto juega en San Lorenzo. 2. Mostrar en que club juega marcone.
?>