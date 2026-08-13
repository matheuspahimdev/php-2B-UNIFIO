<?php

    $quantidade = 2;
    $precoProduto = 4500.50;
    $descontoFixo = 250.00;

    $subtotal = $quantidade * $precoProduto;
    $total = $subtotal - $descontoFixo;

    echo "---RESUMO DA COMPRA---<br>";
    echo "Subtotal: R$ $subtotal<br>";
    echo "Total a pagar: R$ $total";

?>