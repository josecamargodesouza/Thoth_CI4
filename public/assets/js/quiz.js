const questionNumber = $(".question-number");
const questionText = $(".question-text");
const optionContainer = $(".option-container");
const optionContainerPure = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionLimit = quiz.length //Caso queira todas as questões -> quiz.length.
let questionCounter = 0;
let correntQuestion;
let avaibleQuestions = [];
let avaibleOptions = [];
let correctAnswers = 0;
let attempt = 0;


// armazena a quantidade de questões no array AvaibleQuestions
function setAvaibleQuestions() {
    const totalQuestion = questionLimit;
    for (let i = 0; i < totalQuestion; i++) {
        avaibleQuestions.push(quiz[i]);
    }
}

//set no número da questão, descrição e opções
function getNewQuestion() {
    //set numero questão

    questionNumber.html("Questão " + (questionCounter + 1) + " de " + questionLimit);
    //set na descrição da questão pegando uma questão aleatoria do array
    const questionIndex = avaibleQuestions[Math.floor(Math.random() * avaibleQuestions.length)];

    currentQuestion = questionIndex;
    questionText.html(currentQuestion.q);

    //pega a posição de 'questionIndex' do array de 'avaibleQuestions'
    const index1 = avaibleQuestions.indexOf(questionIndex);
    //remove o index da questão atual do array de questões disponiveis, para não haver repetição
    avaibleQuestions.splice(index1, 1);

    // exibe a imagem da questão se a propriedade 'img' existir
    if (currentQuestion.hasOwnProperty("img")) {
        const img = document.createElement("img");
        img.src = currentQuestion.img;
        questionText.append(img);
    }

    //set opções
    //pega quantas opçoes existem para a questão
    const optionLen = currentQuestion.options.length
    //insere as opções da questão no array de opções
    for (let i = 0; i < optionLen; i++) {
        avaibleOptions.push(i);
    }

    optionContainer.html('');
    let animationDelay = 0.15;
    //exibe as opções no HTML
    for (let i = 0; i < optionLen; i++) {
        //opção aleatória
        const optionIndex = avaibleOptions[Math.floor(Math.random() * avaibleOptions.length)];
        //pega a posição da optionIndex no array avaibleOptions
        const index2 = avaibleOptions.indexOf(optionIndex);
        //remove a posição da opção no optionIndex do array avaibleOptions para as opções não repetirem
        avaibleOptions.splice(index2, 1);

        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        $(".option-container").append(option);
        option.setAttribute("onclick", "getResult(this)")
    }
    questionCounter++;
}

//pega o resultado da questão atual
function getResult(element) {
    const id = parseInt(element.id);
    //confere se a resposta bate com a resposta armazenada no array da Questão Atual
    if (id === currentQuestion.answer) {
        //seta uma cor verde para a resposta correta
        element.classList.add("correct");
        //adiciona um indicador de acerto
        updateAnswerIndicator("correct");
        correctAnswers++;
    } else {
        //seta uma cor vermelha para a resposta correta
        element.classList.add("wrong");
        //adiciona um indicador de erro
        updateAnswerIndicator("wrong");

        //se a resposta for incorreta mostra a opção correta 
        const optionLen = optionContainerPure.children.length;
        for (let i = 0; i < optionLen; i++) {
            if (parseInt(optionContainerPure.children[i].id) === currentQuestion.answer) {
                optionContainerPure.children[i].classList.add("correct");
            }
        }
    }
    attempt++;
    unclickableOptions();
}
//deixa todas as resposta inclicáveis assim que o usuario selecionar uma opção.
function unclickableOptions() {
    const optionLen = optionContainer.children().length;
    for (let i = 0; i < optionLen; i++) {
        optionContainer.children().eq(i).addClass("already-answered");
    }
}

function answersIndicator() {
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = questionLimit;
    for (let i = 0; i < totalQuestion; i++) {
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}
function updateAnswerIndicator(markType) {
    answersIndicatorContainer.children[questionCounter - 1].classList.add(markType);
}
function next() {
    if (questionCounter == questionLimit) {
        quizOver();
    } else {
        getNewQuestion();
    }
}

function quizOver() {
    // esconde a caixa do quiz
    quizBox.classList.add("hide");
    // mostra o resultado
    resultBox.classList.remove("hide");
    quizResult();
}

// pega o resultado salvo
function quizResult() {
    $(".total-question").html(questionLimit);
    $(".total-attempt").html(attempt);
    $(".total-correct").html(correctAnswers);
    $(".total-wrong").html(attempt - correctAnswers);
    const percentage = (correctAnswers / questionLimit) * 100;
    $(".percentage").html(percentage.toFixed(2) + "%");
    $(".total-score").html(correctAnswers + " / " + questionLimit);
}

function resetQuiz() {
    questionCounter = 0;
    correctAnswers = 0;
    attempt = 0;
}
function tentarNovamente() {

    //esconde o resultado
    resultBox.classList.add("hide");
    //mostra o quiz novamente
    quizBox.classList.remove("hide");
    // reseta o quiz
    resetQuiz();
    startQuiz();
}


// função para começar o quiz
function startQuiz() {
    console.log(quiz)
    // esconde a caixa de inicio
    homeBox.classList.add("hide");

    // exibe a caixa do quiz
    quizBox.classList.remove("hide");
    //primeiro é colocado todas as questões no array avaibleQuestions
    setAvaibleQuestions();
    //depois é chamado a questão
    getNewQuestion();
    //criar os indadores das respostas
    answersIndicator();
}

window.onload = function () {
    $(".total-question").html(questionLimit);
    $(".instructions").html(quiz[0].descricao);
}