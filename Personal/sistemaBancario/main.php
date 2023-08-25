<?php
    // Sistema bancario: clases: Persona, Banco, CuentaBancaria.
    // Persona: nombre, apellido, edad, dni.
    // Banco: nombre, direccion, lista cuentas (array). Metodos: constructor -> nombre, direccion, agregarCuenta($cuenta).
    // buscarCuentaPorTitular($nombre, $apellido) = devuelve cuenta bancaria asociada a esa persona.
    // CuentaBancaria: numeroCuenta, titular (instancia clase Persona), saldo. Metodos: constructor -> inicializar numero de cuenta, titular y saldo.
    // depositar($cantidad), retirar($cantidad) (siempre y cuando tenga saldo).

    // 1) crear al menos 2 instancias de la clase Persona y 2 instancias o mas de la clase CuentaBancaria.
    // 2) crear 1 instancia de la clase banco y agregar las cuentas bancarias a la lista del banco.
    // 3) realizar las siguientes operaciones: op1. deposita diferentes cantidades en las cuentas bancarias.
    // op2. realiza retiros de diferentes montos de las cuentas bancarias, verificando que haya saldo suficiente.
    // op3. busca una cuenta bancaria por el titular utilizando el metodo buscarCuentaPorTitular.

    require_once "Persona.php";
    require_once "Banco.php";
    require_once "CuentaBancaria.php";

    $persona1 = new Persona("Lucas", "Fiorotto", 19, 45389325);
    $persona2 = new Persona("Pablo", "Martinez", 19, 45742785);
    //echo $persona1->nombre, $persona1->apellido, $persona1->edad, $persona1->dni;

    $cuentaBancaria1 = new CuentaBancaria(1, "Lucas Fiorotto", 100000);
    $cuentaBancaria2 = new CuentaBancaria(2, "Pablo Martinez", 250000);

    $banco1 = new Banco("Santander", "Urquiza 1000");
?>