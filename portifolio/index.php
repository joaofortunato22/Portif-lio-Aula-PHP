<?php include('includes/header.php'); ?>
<?php include('data/projects.php'); ?>

<section class="hero">
    <img src="assets/img/profile.png" class="profile" alt="Foto de perfil">

    <h3>Hello World! Meu nome é <span>João Antônio</span></h3>
    <h1>Desenvolvedor PHP</h1>

    <p>
        Desenvolvedor focado em soluções web modernas, apaixonado por criar sistemas
        escaláveis e experiências incríveis.
    </p>

    <div class="tags">
        <span class="tag green">PHP</span>
        <span class="tag purple">CSS</span>
        <span class="tag blue">HTML</span>
        <span class="tag orange">JavaScript</span>
    </div>
</section>

<section class="projects">
    <h2>Meus Projetos</h2>
    <p>Veja os projetos em destaque</p>

    <div class="grid">
        <?php foreach($projects as $project): ?>
            <div class="card">
                <img src="<?= htmlspecialchars($project['image']) ?>" alt="Projeto">

                <h3><?= htmlspecialchars($project['title']) ?></h3>
                <p><?= htmlspecialchars($project['description']) ?></p>

                <div class="tags">
                    <?php foreach($project['techs'] as $tech): ?>
                        <span class="tag"><?= htmlspecialchars($tech) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="contact">
    <h2>Contato</h2>

    <div class="contact-list">

        <a href="https://www.rocketseat.com.br" target="_blank" class="contact-card">
            <i class="fas fa-globe"></i>
            <span>Nosso Site</span>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="https://www.instagram.com/rocketseat/" target="_blank" class="contact-card">
            <i class="fab fa-instagram"></i>
            <span>Instagram</span>
            <i class="fas fa-arrow-right"></i>
        </a>

        <a href="https://www.youtube.com/rocketseat" target="_blank" class="contact-card">
            <i class="fab fa-youtube"></i>
            <span>YouTube</span>
            <i class="fas fa-arrow-right"></i>
        </a>

    </div>
</section>

<?php include('includes/footer.php'); ?>