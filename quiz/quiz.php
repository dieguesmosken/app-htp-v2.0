<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PréDiag</title>
</head>

<body>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript">
    $(document).ready(function() {

        var url = "http://localhost/login/logar.php";

        $.ajax({
            type: "POST",
            crossDomain: true,
            cache: false,
            url: url,
            data: url,
            success: function(data) {

                console.log(data);
                console.log(" array.length ")
                console.log(data.length)
                $.getJSON(url, function(result) {

                    $.each(result, function(i, field) {

                        var idq = field.id;
                        var questao = field.question;
                        var resposta1 = field.answer1;
                        var resposta2 = field.answer2;
                        var resposta3 = field.answer3;
                        var resposta4 = field.answer4;
                        var size = data.length;
                        console.log(size);
                        var questions = [];
                        /*for (var i = 0; i < idq; i++) {
                            console.log(idq + " id");
                            
                            console.log(resposta1) + " r1";
                            console.log(resposta2 + " r2");
                            console.log(resposta3 + " r3");
                            console.log(resposta4  + " r4");
                            //more statements
                        }*/

                    });


                });

            }
        });
    });
    </script>
    <header>
        <div class="header-tipe2">
            <h1>PréDiag</h1>

            <div class="seta-voltar">
                <a href="../View/index.php">
                    <img src="imagens/setaVoltar.svg" alt="...">
                </a>
            </div>
            <!--seta-voltar-->
            <div class="clear"></div>
            <!--clear-->
        </div>
        <!--header-tipe2-->
        <div class="reset-height"></div>
        <!--reset-height-->
    </header>

    <section>
        <div class="quiz-pre">
            <h2>Você está preparado para responder o Pre-diagnostico?</h2>
            <p>Aqui teremos algumas perguntas sobre seus sintomas. </p>
            <input type="button" id="pronto" value="Estou preparado!">
        </div>
        <!--quiz-pre-->
    </section>
    <section>
        <div class="container-quiz">
            <div class="box_questions">
                <div class="conteudo_atual">
                    <h1>Responda as questões</h1>
                </div>
                <!---conteudo_atual-->
                <div class="perguntas_quiz">
                    <div class="question_titulo">
                        <h2></h2>
                    </div>
                    <!--question_titulo-->

                    <div class="wrap_options">
                        <div class="option" id="0">
                            <p></p>
                        </div>
                        <!--option-->

                        <div class="option" id="1">
                            <p></p>
                        </div>
                        <!--option-->

                        <div class="option" id="2">
                            <p></p>
                        </div>
                        <!--option-->

                        <div class="option" id="3">
                            <p></p>
                        </div>
                        <!--option-->

                        <div class="verifica_resp">
                            <p>Resposta correta!</p>
                        </div>
                        <!--verifica_resp-->
                    </div>
                    <!--wrap_options-->

                    <div class="prox">
                        <input type="button" value="Proxima questão">
                    </div>
                    <!--prox-->
                </div>
                <!--perguntas_quiz-->
            </div>
            <!--box_questions-->
        </div>
        <!--container-quiz-->
    </section>

    <section>
        <div class="score">
            <h3>Questão:</h3>
            <p style="color:white"></p> / <span></span>
        </div>
        <!--score-->
    </section>

    <section>
        <div class="tela_final">
            <h1>RESULTADO FINAL</h1>
            <p>Você pode estar <span id="result" style="color:gold"></span> </p>
            <a href="../View/index.php">SAIR</a>
            <a onclick="location.reload();">Refazer</a>
        </div>
        <!--tela_final-->
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/quizbd.js"></script>
</body>

</html>