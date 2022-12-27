<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraQuiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center mt-5 mb-5">LaraQuiz!</h1>
<div class="container">
    <form action="{{ route('quiz.verificarRespostas') }}" method="GET">
        @csrf
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Questão #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Oque é o Laravel?</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao1" id="op1">
                            <label class="form-check-label" for="op1">
                                Um biscoito
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao1" id="op2">
                            <label class="form-check-label" for="op2">
                                Uma linguagem de programação backend
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao1" id="op3" value="correta">
                            <label class="form-check-label" for="op3">
                                Um framework
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Questão #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Qual a base do Bootstrap?</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao2" id="op1" value="correta">
                            <label class="form-check-label" for="op1">
                                CSS e Javascript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao2" id="op2" value="errada">
                            <label class="form-check-label" for="op2">
                                Água, cal e cimento
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao2" id="op3" value="errada">
                            <label class="form-check-label" for="op3">
                                C#
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Questão #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Qual a definição de mito?</strong>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao3" id="op3" value="errada">
                            <label class="form-check-label" for="op3">
                                Lenda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao3" id="op3" value="errada">
                            <label class="form-check-label" for="op3">
                                História de Ficção
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="questao3" id="op3" value="correta">
                            <label class="form-check-label" for="op3">
                                Ricardo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-5">Finalizar Quiz</button>
    </form>
</div>
<footer>
    <h6 class="mt-5 text-center">LaraQuiz Beta v1.0</h6>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
