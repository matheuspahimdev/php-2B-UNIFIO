<?php

    $valorCompra = (float)501;
    $clientePremium = (bool)false;

    if (($valorCompra > 150.00 && $clientePremium) || $valorCompra > 500.00) {
        echo "Frete Grátis Liberado";
    } else {
        echo "Frete Padrão Aplicado";
    }

?>