<?php

    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);

    echo "Processando o acesso para o e-mail: " . $email;

?>