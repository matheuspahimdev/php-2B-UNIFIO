<?php

    $turma = [
        ["nome"=> "José","nota1"=> 7.8,"nota2"=> 6],
        ["nome"=> "Pedro","nota1"=> 5.7,"nota2"=> 4],
        ["nome"=> "João","nota1"=> 1.5,"nota2"=> 3]
    ];

    foreach ($turma as $value) {
        $media = ($value["nota1"] + $value["nota2"]) / 2;
        
        if ($media >= 6) {
            $status = '<h1 style="color: green;">Aprovado</h1>';
        } else {
            $status = '<h1 style="color: red;">Reprovado</h1>';
        }

        echo $value["nome"] . " - Média: " . $media . " - Status: " . $status . "<br>";
    }

?>