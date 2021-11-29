<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<?php

use App\Lib\Session;

?>

<section class="main-area">

    <section class="header-sobre-materia">
        <div class="sobre-materia-title">
            <h1><?= $userData[0]['user'] ?></h1>
            <div>
                <div class="divider"></div>
            </div>
            <h5>Jovem Padawan 🥉</h5>
        </div>
    </section>

    <section class="m-3 user-area">
        <div class="about-card-user">
            <img src="<?= SITEURL ?>public/assets/img/userImg/user.png">
        </div>
        <div class="about-user">
            <div class="bio-area">
                <h3>Bio:</h3>
                <p>Lorem ipsun asujyh ashghuse hashdaf ashdkasf asjfakfjasf afhjakfas ajkfajf kafk jafka fkajkashghuse hashdaf ashdkasf asjfakfjasf afhjakfas ajkfajf</p>
            </div>
            <div class="archiviments-area">
                <h3>Conquistas:</h3>
                <div class="archiviments-area-medals">
                    <div class="about-card-arch">
                        <img title="Completou seu primeiro Questionário!" src="<?= SITEURL ?>public/assets/img/flag.png">
                        <p>Que comecem os jogos!</p>
                    </div>
                    <div class="about-card-arch">
                        <img title="Acertou 100% das questões de um questionário!" src="<?= SITEURL ?>public/assets/img/medal.png">
                        <p>Eu tenho certeza!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container text-center mt-5">
        <a href="<?= SITEURL ?>public/Usuario/logoff" class="btn btn-outline-danger pl-5 pr-5">Deslogar</a>
    </div>
</section>

<?= $this->endSection() ?>