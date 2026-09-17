<?php

    $cliente = [
        "nome"=> "Antonio",
        "email"=> "antonio@email.com",
        "telefone"=> 18999990000,
        "cidade"=> "Ourinhos"
    ];

    echo "O cliente " . $cliente["nome"] ." mora em ". $cliente["cidade"] . ". Contato: " . $cliente["email"] . " / " . $cliente["telefone"];

?>