<?php

    $peso = (float)70.0;
    $altura = (float)1.75;

    $imc = $peso / ($altura * $altura);

    echo "O IMC é igual a: $imc\n";

    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } else if ($imc >= 18.5 && $imc <= 24.9) {
        echo "Peso normal";
    } else if ($imc >= 25.0 && $imc <= 29.9) {
        echo "Sobrepeso";
    } else{
        echo "Obesidade";
    }

?>