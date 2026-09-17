<?php

    $funcionarios = [
        ["nome"=> "Armando","status"=> "demitido"],
        ["nome"=> "Samuel","status"=> "ativo"],
        ["nome"=> "Vitor","status"=> "ativo"],
        ["nome"=> "Matheus","status"=> "ativo"]
    ];

    foreach ($funcionarios as $value) {
        if ($value["status"] === "demitido") {
            continue;
        }  else {
            echo "Enviando o email para: " . $value["nome"] . "<br>";
        }
    }

?>