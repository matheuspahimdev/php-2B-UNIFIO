<?php

    $produtos = [
        ["id"=> "1","nome"=> "celular","preco"=> 2000.00],
        ["id"=> "2","nome"=> "teclado","preco"=> 700.50],
        ["id"=> "3","nome"=> "memória RAM","preco"=> 999.99]
    ];

    foreach ($produtos as $produto) {
        echo "Produto: ". $produto["nome"] ." - Valor: R$ ". $produto["preco"] . "<br>";
    }

?>