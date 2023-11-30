<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SONDAGEM</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<p></p>
<p></p>
<fieldset style = "width: 50%; margin: 0 auto;">
    <legend>Sondagem Fácil</legend>
    <div class="container">
        <p>Sistema gerador de atividades para sondagem pedagógica</p>
    </div>
</fieldset>

<p></p>

<fieldset style = "width: 50%; margin: 0 auto;">

    <div class="container">
        <form id="principal" action="">

            <button type="button" class="pop" onclick="capturaNome()">Gerar atividade inicial</button>
            <button type="button" class="pop-emBreve">Gerar atividade extra - em breve</button>
            <button type="button" class="pop-emBreve">Gerar mapa de sondagem - em breve</button>

        </form>
    </div>
</fieldset>

<p></p>
<script>
    function capturaNome() {

        let nomeAluno = prompt("Digite o nome do aluno: ");
        let serieAluno = prompt("Digite a série do aluno: ");
        window.location.href = 'gerador.php?nomeAluno=' + nomeAluno + '&serieAluno=' + serieAluno;
        }
</script>
</body>
</html>