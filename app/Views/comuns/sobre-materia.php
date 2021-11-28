<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>


<section class="main-area">
    <section class="header-sobre-materia">
        <div class="sobre-materia-title">
            <h1>Equação de 2º Grau</h1>
            <div>
                <div class="divider"></div>
            </div>
            <h5>Matemática</h5>
        </div>
    </section>
    <section class="sobre-materia-content">
        <div class="tags">
            <div class="card-specs">
                <span class="card-specs-item">Conceito</span>
            </div>
            <div class="card-specs">
                <span class="card-specs-item">Uso Geral</span>
            </div>
            <div class="card-specs">
                <span class="card-specs-item">Exemplos</span>
            </div>
        </div>
        <div class="materia-description container">
            Em matemática, uma equação quadrática ou equação do segundo grau é uma 
            equação polinomial de grau dois.[1][2][3] A forma geral deste tipo de 
            equação é:[1][2][3] {ax^{2}+bx+c=0}ax^{2}+bx+c=0, em que x é uma variável, sendo a, b e c constantes, com a ≠ 0 (caso contrário, 
            a equação torna-se linear (equação de primeiro grau)). As constantes a, 
            b e c, são chamadas respectivamente de coeficiente quadrático, coeficiente
            linear e coeficiente constante ou termo livre.
            A variável x representa um valor a ser determinado, e também é chamada de 
            incógnita. O termo "quadrático" vem de quadratus, que em latim significa 
            quadrado. Equações quadráticas podem ser resolvidas por meio da fatoração, 
            do completamento de quadrados, do uso de gráficos, da aplicação do método 
            de Newton ou do uso de uma fórmula. Um uso frequente das equações do segundo 
            grau é em modelos simples de cálculo das trajetórias de projéteis em movimento.
            <br><br>
            Se {a}a, {b}b, e {c}c forem números reais, o problema de resolver a equação quadrática 
            {ax^{2}+bx+c=0}ax^{2}+bx+c=0 é equivalente a encontrar os valores             de {\displaystyle x}x para os quais a função quadrática
            {f(x)=ax^{2}+bx+c}{f(x)=ax^{2}+bx+c} - cujo domínio frequentemente se restringe aos números reais - cruza o eixo das 
            abscissas em um gráfico de {f(x)}f(x). Isto é, os valores de {x}x para os quais {\displaystyle f(x)=0}f(x)=0. De fato, dada uma 
            parábola cuja geometria esteja fixa (não haja deformações na forma de esticamentos
            ou achatamentos), o número de soluções para a função quadrática correspondente 
            dependerá exclusivamente do transladamento da parábola ao longo do eixo das ordenadas
            (eixo y). Para uma parábola com concavidade voltada para o semieixo y positivo, 
            há três possibilidades de localização para o mínimo global: ele pode estar localizado 
            "abaixo" do eixo x, resultando em duas raízes distintas devido a duas intersecções da 
            função com o mesmo; pode estar tangenciando o eixo x, situação na qual a raiz é dupla 
            e é a própria abscissa do ponto de mínimo; e ele também pode estar acima do eixo x, 
            não o interseccionando e indicando a não existência de raízes (dentro do domínio dos 
            números reais). Um raciocínio similar é aplicável a uma parábola com concavidade voltada
            para o semieixo y negativo, podendo o máximo global estar "acima" de, tangenciar, ou estar
            "abaixo" do máximo global.
        </div>

        <div class="container about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 about-card-area">
                        <div class="about-card questions">
                            <img class="img-fluid" src="<?= SITEURL ?>public/assets/img/nquestions.png">
                            <h5>15</h5>
                            <span>Questões</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 about-card-area">
                        <div class="about-card author">
                            <img src="<?= SITEURL ?>public/assets/img/userImg/user.jpg">
                            <h5>Sofia Doe</h5>
                            <span>Professora de Matemática<br>Formada pela USP</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 about-card-area">
                        <div class="about-card difficult">
                            <img src="<?= SITEURL ?>public/assets/img/easy.png">
                            <h5>Fácil</h5>
                            <span>Dificuldade selecionada pela maioria dos usuários</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comands">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="return-button">
                            <a href="<?= SITEURL ?>public/Home/temasMaterias">Voltar</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="continue-button">
                            <a href="<?= SITEURL ?>public/Home/quiz">Iniciar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>

</main>

<<?= $this->endSection() ?>