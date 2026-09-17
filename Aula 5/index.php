<?php 

    $catalogo = [
        ["produto" => "SSD 1TB", "estoque" => 5, "status" => "ok"],
        ["produto" => "Monitor", "estoque" => 0, "status" => "ok"],
        ["produto" => "Bateria", "estoque" => 10, "status" => "recall"],
        ["produto" => "Teclado", "estoque" => 20, "status" => "ok"]
    ];

    foreach ($catalogo as $item) {
        
        if ($item["estoque"] === 0) {
            continue;
        }
        
        if ($item["status"] === "recall") {
            echo "<br><span style='color:red;'>ALERTA: Catálogo bloqueado. Recall detectado!</span>";
            break;
        }

        echo "<br>Produto: {$item["produto"]} (Quantidade: {$item["estoque"]})";

    }

?>