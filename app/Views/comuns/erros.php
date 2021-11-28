<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<section class="section-main-area error-page">
    <div class="lottie-error">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_j3gumpgp.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>

    <div class="error-message">
        <span>Página não localizada</span>
    </div>
    <div class="error-submessage">
        <span>Se você parar pra pensar, tudo pode ter sido só coisa da sua cabeça...</span>
    </div>
    <a href="<?= SITEURL ?>" class="error-return" rel="noopener noreferrer">
        <div class="error-btn mt-3">
            Voltar ao início
        </div>
    </a>

</section>

</main>

<<?= $this->endSection() ?>