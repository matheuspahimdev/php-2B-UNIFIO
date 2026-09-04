<?php

    $opcaoDigitada = (int)5;

    switch ($opcaoDigitada) {
        case 1:
            echo "Redirecionando para Suporte Técnico...";
            break;

        case 2:
            echo "Redirecionando para Financeiro...";
            break;

        case 3:
            echo "Redirecionando para Comercial...";
            break;

        default:
            echo "Opção inválida. Tente novamente.";
    }

?>