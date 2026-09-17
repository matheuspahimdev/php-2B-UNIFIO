<?php

    $categorias = ["Ficção", "Tecnologia", "História", "Romance", "Fantasia"];

    $total = count($categorias);

    for ($i = 0; $i < $total; $i++) {
        echo "<br>". $categorias[$i];
    }

?>