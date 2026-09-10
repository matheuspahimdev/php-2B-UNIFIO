<?php

    $usuario = "Matheus";
    $senhaDigitada = "123456";
    $senhaCorreta = "123456";

    if ($senhaDigitada === $senhaCorreta) {
        echo "Acesso liberado, Bem vindo $usuario";
    } else {
        echo "Senha incorreta";
    }

    $perfil = "admin";

    if ($perfil === "admin") {
        echo "<br>Acesso total";
    } else if ($perfil === "editor") {
        echo "<br>Permissão exclusiva para publicar artigos.";
    } else {
        echo "<br>Acesso restrito apenas para leitura.";
    }

    $statusPedido = 2;

    // A expressão match retorna a string diretamente para a variável
    $mensagem = match ($statusPedido) {
        1 => "<br><br>Aguardando Pagamento",
        2 => "<br><br>Pagamento aprovado",
        default => "<br><br>Status inválido"
    };

    echo $mensagem;

?>