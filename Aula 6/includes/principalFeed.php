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
        <!-- MAIN CENTRAL: O FEED DE NOTÍCIAS                     -->
        <!-- ---------------------------------------------------- -->
        <main class="col-md-6 col-12">
            
            <!-- Área de Criar Postagem -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://placehold.co/40x40/004998/ffffff?text=U" class="rounded-circle me-3">
                        <input type="text" class="form-control rounded-pill" placeholder="No que você está pensando?">
                    </div>
                </div>
            </div>

            <h4 class="mb-3 text-secondary">Feed Recente</h4>

            <!-- AQUI ENTRA O LAÇO PHP UTILIZANDO OS DADOS IMPORTADOS -->
            <?php 
                global $feedNoticias;
                foreach ($feedNoticias as $post): ?>
                    
                    <!-- Card de Postagem -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            
                            <!-- Cabeçalho do Post -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://placehold.co/45x45/F29223/ffffff?text=<?= substr($post['autor'], 0, 1) ?>" class="rounded-circle me-2">
                                    <div>
                                        <h6 class="fw-bold m-0"><?= $post['autor'] ?></h6>
                                        <small class="text-muted"><?= $post['tempo'] ?></small>
                                    </div>
                                </div>
                                
                                <!-- Renderização Condicional: Só mostra o selo se for destaque -->
                                <?php if ($post['destaque'] === true): ?>
                                    <span class="badge bg-warning text-dark"><i class="fa-solid fa-star"></i> Aviso</span>
                                <?php endif; ?>
                            </div>

                            <!-- Conteúdo do Post -->
                            <p class="card-text">
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

        </main>

        <!-- ---------------------------------------------------- -->
        <!-- ASIDE DIREITO: TRENDING TOPICS                       -->
        <!-- ---------------------------------------------------- -->
        <aside class="col-md-3 d-none d-lg-block">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold text-secondary mb-3">Assuntos em Alta</h6>
                    
                    <div class="d-flex flex-wrap gap-2">
                        <?php 
                            global $trendingTopics;
                            foreach ($trendingTopics as $topic): ?>
                                <span class="badge bg-secondary bg-opacity-10 text-primary p-2">
                                    <?= $topic ?>
                                </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </aside>

    </div>
</div>