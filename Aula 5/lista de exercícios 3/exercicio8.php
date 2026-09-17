<?php

    $logs = ["OK", "Aviso", "OK", "Fatal", "Aviso", "OK"];

    foreach ($logs as $log) {
        if ($log === "Fatal") {
            echo '<h1 style="color: red;">Erro Fatal</h1>';
            break;
        }
        echo $log . "<br>";
    }

?>