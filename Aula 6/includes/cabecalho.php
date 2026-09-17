<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIFIO Connect - Feed Dinâmico</title>
    
    <!-- Importação do Bootstrap 5 via CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     
    <!-- Importação do FontAwesome para os ícones -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
</head>

<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
        <!-- container: Centraliza o conteúdo da barra, limitando a largura máxima -->
        <div class="container">
            <!-- navbar-brand: Formata o texto para parecer um Logotipo -->
            <a class="navbar-brand fw-bold" href="#"><i class="fa-solid fa-code"></i> UNIFIO Connect</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <!-- ms-auto: Margin Start Auto. Empurra a lista de links para a direita -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disciplinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>