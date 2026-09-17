<?php

    $faturamentoTotal = 0;
    $transacoes = [
        ["id"=> "1","valor"=> 1500,"status"=> "aprovado"],
        ["id"=> "2","valor"=> 4000,"status"=> "estornado"],
        ["id"=> "3","valor"=> 10000,"status"=> "fraude"],
        ["id"=> "4","valor"=> 500,"status"=> "aprovado"],
        ["id"=> "5","valor"=> 750,"status"=> "aprovado"]
    ];

    foreach ($transacoes as $value) {
        if ($value["status"] === "estornado") {
            continue;
        } elseif ($value["status"] === "fraude") {
            echo "Alerta de Segurança! Caixa Bloqueado.<br>";
            break;
        } else {
            $faturamentoTotal += $value["valor"];
        }
    }

    echo "Faturamento total: " . $faturamentoTotal;

?>