<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<section class="main-area">

    <section class="main-materias">
        <div class="section-title materias-page-title">
            <h2>Todas as Matérias</h2>
            <div class="pesquisar-div">
            <i class="fas fa-search"></i> 
            <input type="text" class="search-input" placeholder="Pesquisar...">
            </div>            
        </div>
        <div class="container materias-grid">
            <div class="row">
                <div class="col-sm">
                    <a class="card-link" href="<?=SITEURL?>public/Home/temasMaterias">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>Matemática</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a class="card-link" href="#">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>História</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a class="card-link" href="#">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>Geografia</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <a class="card-link"href="#">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>Física</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a class="card-link" href="#">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>Inglês</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a class="card-link" href="#">
                        <div class="materias-item">
                            <div class="materias-title">
                                <span>< HTML /> </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>

</main>

<<?= $this->endSection() ?>