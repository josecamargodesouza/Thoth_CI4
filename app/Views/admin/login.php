<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<?php
use App\Lib\Session;

?>

<section class="section-main-area">

<div class="app-container">
    <div class="forms-container">
        <div class="sigin-signup">
            <form action="" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Usuário">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="" placeholder="Senha" id="">
                </div>
                <input type="submit" value="Logar" class="app-btn solid">

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
            </form>

            <form action="" class="sign-up-form">
                <h2 class="title">Criar uma conta</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Usuário">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="" placeholder="Senha" id="">
                </div>
                <input type="submit" value="Registrar-se" class="app-btn solid">

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
            </form>

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
