<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<section class="main-area">
    <div class="section-title">
        <h2>Equações de 2º Grau</h2>
        <span>Matemática</span>
    </div>

    <div class="quiz-area">
        <div class="home-box custom-box">
            <h3>Instrução:</h3>
            <p class="instructions"></p>
            <p>Número total de questões: <span class="total-question"></span></p>
            <button type="button" class="next-button" onclick="startQuiz()">Começar</button>
        </div>
        <div class="quiz-box custom-box hide">

            <div class="question-number"></div>
            <div class="question-text"></div>
            <div class="option-container"></div>

            <div class="next-question-btn">
                <button type="button" class="next-button" onclick="next()">Continuar</button>
            </div>
            <div class="answers-indicator"></div>
        </div>

        <div class="result-box custom-box hide">
            <h1>Resultado</h1>
            <table>
                <tr>
                    <td>Total de Questões</td>
                    <td><span class="total-question"></span></td>
                </tr>
                <tr>
                    <td>Tentativas</td>
                    <td><span class="total-attempt"></span></td>
                </tr>
                <tr>
                    <td>Corretas</td>
                    <td><span class="total-correct"></span></td>
                </tr>
                <tr>
                    <td>Erradas</td>
                    <td><span class="total-wrong"></span></td>
                </tr>
                <tr>
                    <td>Porcentagem</td>
                    <td><span class="percentage"></span></td>
                </tr>
                <tr>
                    <td>Sua Pontuação Total</td>
                    <td><span class="total-score"></span></td>
                </tr>
            </table>
            <button type="button" onclick="tentarNovamente()" class="result-btns again-btn">Tentar Novamente</button>
            <button type="button" class="result-btns return-btn">Início</button>
        </div>
    </div>

</section>

</main>

<<?= $this->endSection() ?>