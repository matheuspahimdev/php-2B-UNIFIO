<?php

    $opcaoDigitada = (int)3;

    $mensagemSetor = match ($opcaoDigitada) {
        1 => "Redirecionando para Suporte Técnico...",
        2 => "Redirecionando para Financeiro...",
        3 => "Redirecionando para Comercial...",
        default => "Opção inválida. Tente novamente.",
    };

    echo $mensagemSetor;

    /*
        O que acontece no match se você passar a opção como texto "1" ao invés do número 1?
        R: Ele não vai retornar a string, porque diferentemente do switch que usa o (==) para a comparação de valores,
        o match utiliza o (===) para a checagem que reconhece a diferença de tipos de variáveis.
    */

?>