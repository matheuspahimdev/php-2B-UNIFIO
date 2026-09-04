<?php

    $emailEnviado = "<script>alert('hack')</script>";

    echo htmlspecialchars($emailEnviado ?? "visitante@anonimo.com");

?>