<?php

    $servidorEmManutencao = false;
    $usuarioAdmin = false;

    if (!$servidorEmManutencao || $usuarioAdmin) {
        echo "Acesso liberado";
    } else {
        echo "Acesso negado";
    }

?>