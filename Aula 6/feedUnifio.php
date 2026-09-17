<?php
// 1. BASE DE DADOS SIMULADA (Array Multidimensional)
// Em um cenário real, estes dados viriam de uma consulta SQL ao banco de dados.
$feedNoticias = [
    [
        "id" => 1,
        "autor" => "Prof. Marcelo Formico",
        "tempo" => "Há 10 minutos",
        "conteudo" => "Bem-vindos à aula de integração PHP e HTML! Hoje vamos ver como o backend dá vida à interface de usuário. Alguém já testou o Bootstrap 5?",
        "curtidas" => 45,
        "comentarios" => 12,
        "destaque" => true
    ],
    [
        "id" => 2,
        "autor" => "Aline Engenharia",
        "tempo" => "Há 2 horas",
        "conteudo" => "Finalmente consegui entender a diferença entre o método GET e POST. O projeto integrador está ganhando forma!",
        "curtidas" => 22,
        "comentarios" => 3,
        "destaque" => false
    ],
    [
        "id" => 3,
        "autor" => "Sistema UNIFIO",
        "tempo" => "Há 5 horas",
        "conteudo" => "Lembrete: A entrega da Sprint 1 do Projeto Integrador encerra nesta sexta-feira. Não esqueçam de realizar o commit no GitHub.",
        "curtidas" => 120,
        "comentarios" => 45,
        "destaque" => true
    ],
    [
        "id" => 4,
        "autor" => "Fernando TI",
        "tempo" => "Há 1 dia",
        "conteudo" => "Dica do dia: Sempre utilizem o htmlspecialchars() ao imprimir dados que vieram do usuário para evitar ataques XSS na aplicação.",
        "curtidas" => 89,
        "comentarios" => 7,
        "destaque" => false
    ]
];

// Simulando dados para a barra lateral direita
$trendingTopics = ["#PHP8", "#Bootstrap5", "#EngenhariaDeSoftware", "#UNIFIO", "#Frontend"];

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIFIO Connect - Feed Dinâmico</title>
    
    
</head>


<body class="bg-light">

    <!-- ========================================================================= -->
    <!-- CABEÇALHO: /includes/cabecalho.php -->
    <!-- ========================================================================= -->
    
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
                        <a class="nav-link active" href="#">Feed</a>
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

    <!-- ========================================================================= -->
    <!-- INÍCIO DO ARQUIVO: index.php (Conteúdo Central)                           -->
    <!-- ========================================================================= -->

    <div class="container mt-4">
        
        <div class="row">

            <!-- ---------------------------------------------------- -->
            <!-- ASIDE ESQUERDO: PERFIL DO USUÁRIO                    -->
            <!-- ---------------------------------------------------- -->

            <aside class="col-md-3 d-none d-md-block">
                
                <div class="card border-0 shadow-sm">
                    
                    <div class="card-body text-center">
                        
                        <img src="https://placehold.co/100x100/004998/ffffff?text=Perfil" alt="Avatar" class="rounded-circle mb-3">
                        
                        <h5 class="card-title fw-bold">Engenharia de Software</h5>
                        
                        <p class="card-text text-muted">2º Termo - UNIFIO</p>
                        
                        <button class="btn btn-outline-primary w-100">Ver Perfil</button>
                    </div>
                </div>
            </aside>

            <!-- ---------------------------------------------------- -->
            <!-- MAIN CENTRAL: O FEED DE NOTÍCIAS (ONDE O PHP BRILHA) -->
            <!-- ---------------------------------------------------- -->

            <main class="col-md-6 col-12">
                
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        
                        <div class="d-flex align-items-center mb-3">
                            
                            <img src="https://placehold.co/40x40/004998/ffffff?text=U" class="rounded-circle me-3">

                            <input type="text" class="form-control rounded-pill" placeholder="No que você está pensando?">
                        </div>
                    </div>
                </div>

                <h4 class="mb-3 text-secondary">Feed Recente</h4>

                <!-- INTEGRAÇÃO PHP + HTML USANDO SINTAXE DE TEMPLATE -->
                <?php foreach ($feedNoticias as $post): ?>
                    
                    <!-- Card de Postagem -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            
                            <!-- Cabeçalho do Post (Autor, Tempo e Destaque) -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/45x45/F29223/ffffff?text=<?php echo substr($post['autor'], 0, 1); ?>" class="rounded-circle me-2">
                                    <div>
                                        
                                        <h6 class="fw-bold m-0"><?= $post['autor'] ?></h6>
                                        
                                        <small class="text-muted"><?= $post['tempo'] ?></small>
                                    </div>
                                </div>
                                
                                <!-- Renderização Condicional. Só mostra o selo se for destaque -->
                                <?php if ($post['destaque'] === true): ?>
                                    <span class="badge bg-warning text-dark"><i class="fa-solid fa-star"></i> Aviso</span>
                                <?php endif; ?>
                            </div>

                            <!-- Conteúdo do Post -->
                            <p class="card-text">
                                <!-- htmlspecialchars previne que HTML injetado seja executado -->
                                <?= htmlspecialchars($post['conteudo']) ?>
                            </p>
                            
                            <hr> <!-- Linha divisória -->

                            <!-- Rodapé do Post (Interações) -->
                            <div class="d-flex justify-content-between text-muted">

                                <a href="#" class="text-decoration-none text-muted"><i class="fa-solid fa-thumbs-up"></i> <?= $post['curtidas'] ?> Curtidas</a>
                                <a href="#" class="text-decoration-none text-muted"><i class="fa-solid fa-comment"></i> <?= $post['comentarios'] ?> Comentários</a>

                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>
                <!-- Fim do laço PHP -->

            </main>

            <!-- ---------------------------------------------------- -->
            <!-- ASIDE DIREITO: TRENDING TOPICS (LAÇO SIMPLES)        -->
            <!-- ---------------------------------------------------- -->

            <aside class="col-md-3 d-none d-lg-block">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold text-secondary mb-3">Assuntos em Alta</h6>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach ($trendingTopics as $topic): ?>
                                
                                <span class="badge bg-secondary bg-opacity-10 text-primary p-2">
                                    <?= $topic ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                </div>

            </aside>

        </div> <!-- Fim da Row Principal -->
    </div> <!-- Fim do Container -->

    <hr>
    <br>

    <!-- Footer -->
    <footer class="mt-3 text-muted text-center">
        <small>&copy; 2026 UNIFIO - Projeto Integrador II</small>
    </footer>

    <br>

    <!-- ========================================================================= -->
    <!-- RODAPÉ: /includes/rodape.php    -->
    <!-- ========================================================================= -->
    
</body>
</html>