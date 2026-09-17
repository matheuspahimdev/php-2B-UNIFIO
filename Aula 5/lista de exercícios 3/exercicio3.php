<?php

    $configuracoes = [
        "dominio"=> "unifio.edu.br",
        "https"=> "ativado",
        "limite_upload"=> "20MB"
    ];

    foreach ($configuracoes as $key => $value) {
        echo "<strong>" . $key ."</strong>: ". $value ."<br>";
    }

?>