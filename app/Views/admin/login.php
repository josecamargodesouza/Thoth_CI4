<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<?php
use App\Lib\Session;

?>

<section class="section-main-area">

<div class="app-container">
    <div class="forms-container">
        <div class="sigin-signup">
            <?= form_open("Login/". ($action = 'logar'), 'class="sign-in-form"') ?>
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" required id="usuario" name="usuario" placeholder="Usuário">
                </div>
                <input type="hidden" name="email" id="email" value="">
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" required name="senha" placeholder="Senha" id="senha">
                </div>
                <input type="submit" value="Logar" class="app-btn solid">

                <?= mensagemSucesso()?>
                <?= loginError()?>

                <p class="social-text">Ou faça login com as redes sociais</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            <?= form_close() ?>

            <?= form_open("Login/". ($action = 'new'), 'class="sign-up-form"') ?>
              
                <h2 class="title">Criar uma conta</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" required name="usuario" id="usuario" placeholder="Usuário">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" required name="email" id="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" required name="senha" id="senha" minlength="8" placeholder="Senha" id="">
                </div>
                <input type="submit" value="Registrar-se" class="app-btn solid">

                <?= cadError()?>

                <p class="social-text">Ou crie sua conta com as redes sociais</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            <?= form_close() ?>

        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="form-content">
                <h3>Novo por aqui?</h3>
                <p>Crie sua conta rapidinho, não demora nem 30 segundos!</p>
                <button class="app-btn transparent" id="sign-up-btn">Registrar-se</button>
            </div>
            <img src="<?=SITEURL?>public/assets/img/log.svg" class="image" alt="">
        </div>
        <div class="panel right-panel">
            <div class="form-content">
                <h3>Já é um de nós?</h3>
                <p>Faça login e começe a exercitar o cérebro! 🧠</p>
                <button class="app-btn transparent" id="sign-in-btn">Fazer Login</button>
            </div>
            <img src="<?=SITEURL?>public/assets/img/register.svg" class="image" alt="">
        </div>
    </div>
</div>

</section>

</main>

<?= $this->endSection() ?>
