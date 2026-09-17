<?php

    $tentativa = 1;

    do {
        echo "Tentando conectar ao banco de dados... (Tentativa " . $tentativa .")<br>";
        $tentativa++;
    } while ($tentativa <= 3);

?>