<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<section class="main-area">

    <section class="main-materias">
        <div class="section-title materias-page-title">
            <h2>Matemática</h2>
            <div class="pesquisar-div">
                <i class="fas fa-search"></i>
                <input type="text" class="search-input" placeholder="Pesquisar...">
            </div>
        </div>
        <div class="temas-content">
            <h4 class="section-title">Escolha um tema:</h4>
            <ul class="temas-list">
                <a href="<?=SITEURL?>public/Home/sobreMateria">
                    <li class="temas-item">
                        <i class="fas fa-chevron-right"></i> Equações de 2º Grau
                    </li>
                </a>
                <a href="#">
                    <li class="temas-item">
                        <i class="fas fa-chevron-right"></i> Inequações
                    </li>
                </a>
                <a href="#">
                    <li class="temas-item">
                        <i class="fas fa-chevron-right"></i> Trigonometria
                    </li>
                </a>
                <a href="#">
                    <li class="temas-item">
                        <i class="fas fa-chevron-right"></i> Geometria
                    </li>
                </a>
                <a href="#">
                    <li class="temas-item">
                        <i class="fas fa-chevron-right"></i> Conjuntos
                    </li>
                </a>
                
            </ul>
        </div>
    </section>
</section>

</main>

<?= $this->endSection() ?>