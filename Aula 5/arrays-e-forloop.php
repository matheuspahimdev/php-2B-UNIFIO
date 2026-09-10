<?php

    // Arrays normais
    $alunos = ["joão", "matheus", "tiago", "lucas"];

    echo "\nO primeiro aluno é " . $alunos[0];

    echo "\nO terceiro aluno é " . $alunos[2];


    // Arrays associativos
    $produto = [
        "codigo" => 8492,
        "descricao" => "Notbook Dell",
        "preco" => 4500.00
    ];

    echo "\nProduto: " . $produto["descricao"];

    // Arrays multidimensionais
    $catalogo = [
        ["id" => 1, "nome" => "Mouse", "estoque" => 15],
        ["id" => 2, "nome" => "Teclado", "estoque" => 0]
    ];

    echo "Estoque do teclado: " . $catalogo[1]["estoque"];
    echo "Estoque do mouse: " . $catalogo[0]["estoque"];


    // For loop
    $alunos2 = ["Marcelo", "Aline", "fernando"];

    $total = count($alunos2);

    for ($i = 0; $i < $total; $i++) {
        echo "\nAluno: $alunos2[$i]";
    }


    // Foreach loop
    $produto2 = ["descricao" => "Monitor", "preco" => 120.00];

    foreach ($produto2 as $chave => $valor) {
        echo "\n" . $chave . ": " . $valor;
    }

    foreach ($produto2 as $valor) {
        echo "\n" . $valor;
    }

?>