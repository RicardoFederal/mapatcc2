<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Atividade de Sondagem - Hipótese de Escrita</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div style="text-align: center">
    <h2>Atividade de Sondagem - Hipótese de Escrita</h2>
    <h3>Escreva o nome das figuras abaixo:</h3>
    <?php
    function gerarPalavra($silabas){

        //Fiz a lista inicial com somente as palavras (dinossauro, camelo, gato e Rã), categoria animais, porém no
        // futuro, o programa poderia gerar atividades com mais palavras, dividida por campos semânticos (doces,
        // brinquedos, etc), respeitando o polissílabo, trissilabo, dissilabo e monosilabo.

        //Fica como um "To Do" no futuro caso este TCC seja relevante para ser aperfeiçoado como um programa sério na
        // área de educação no futuro.

        switch ($silabas) {

            case 1:
                echo '<img src="imagem/1ra.jpg" alt="Imagem" /><br />';
                break;
            case 2:
                echo '<img src="imagem/2gato.jpg" alt="Imagem" /><br />';
                break;
            case 3:
                echo '<img src="imagem/3camelo.jpg" alt="Imagem" /><br />';
                break;
            case 4:
                echo '<img src="imagem/4dinossauro.jpg" alt="Imagem" /><br />';
                break;
            default:

        }

        return $silabas;
    }

        gerarPalavra(4); echo '<input type="text" name="dinossauro" size="10" maxlength="10" /><br />';
        gerarPalavra(3); echo '<input type="text" name="camelo" size="6" maxlength="6" /><br />';
        gerarPalavra(2); echo '<input type="text" name="gato" size="4" maxlength="4" /><br />';
        gerarPalavra(1); echo '<input type="text" name="ra" size="1" maxlength="2" /><br />';

        echo "<h2>Folha de Resposta do Aluno:</h2>";
        echo "<form method='post' action='verificar_correcao.php'>";

            echo '<input type="hidden" name="dinossauro" value="' . $_POST['dinossauro'] . '" />';
            echo '<input type="hidden" name="camelo" value="' . $_POST['camelo'] . '" />';
            echo '<input type="hidden" name="gato" value="' . $_POST['gato'] . '" />';
            echo '<input type="hidden" name="ra" value="' . $_POST['ra'] . '" />';

        echo "<input type='submit' value='Enviar Respostas'>";
        echo "</form>";

    ?>

    <br>

    <button type="button" class="pop" onclick='gerarNovaAtividade()'>Gerar Nova Atividade</button><br>
    <button type="button" class="pop" onclick="window.location.href='index.php'">Voltar</button>


    <script>
        function gerarNovaAtividade() {
            window.location.reload();
        }
    </script>
</div>
</body>
</html>
