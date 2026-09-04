<?php

    $user = "admin";
    $pass = "1234";
    $role = null;

    $userSeguro = $user ?? "user";
    $passSeguro = $pass ?? "pass";
    $roleSeguro = $role ?? "guest";

    if ($user === "admin" && $pass === "1234") {

        $mensagemRole = match ($roleSeguro) {
            "manager" => "Bem-vindo ao painel gerencial.",
            "guest" => "Bem-vindo ao portal público."
        };

        echo $mensagemRole;

    } else {

        $tentativaRegistrada = true;

        $alertaSeguranca = $tentativaRegistrada ? "Acesso negado. Tentativa registrada." : "Acesso negado. Tentativa não registrada";

        echo $alertaSeguranca;

    }

?>