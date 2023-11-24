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


    <form action="verificar_correcao.php" method="post">

        <img src="imagem/4dinossauro.jpg" alt="Imagem" /><br/> <input type="text" name="palavraDinossauro" /><br/>
        <img src="imagem/3camelo.jpg" alt="Imagem" /><br/>     <input type="text" name="palavraCamelo" /><br/>
        <img src="imagem/2gato.jpg" alt="Imagem" /><br/>       <input type="text" name="palavraGato" /><br/>
        <img src="imagem/1ra.jpg" alt="Imagem" /><br/>         <input type="text" name="palavraRa" /><br/>

        <input type='submit' value='Enviar Respostas'>
    </form>


    <?php

    echo '<input type="hidden" name="dinossauro" value="' . $_POST["palavraDinossauro"] . '" />';
    echo '<input type="hidden" name="camelo" value="' . $_POST["palavraCamelo"] . '" />';
    echo '<input type="hidden" name="gato" value="' . $_POST["palavraGato"] . '" />';
    echo '<input type="hidden" name="ra" value="' . $_POST["palavraRa"] . '" />';

    //echo "Você digitou: ", $_POST["dinossauro"], "<br>";
    //echo "Você digitou: ", $_POST["camelo"], "<br>";
    //echo "Você digitou: ", $_POST["gato"], "<br>";
    //echo "Você digitou: ", $_POST["ra"], "<br>";


    ?>

    <br/>

    <button type="button" onclick="window.location.href='index.php'">Voltar</button>


    <script>
        function gerarNovaAtividade() {
            window.location.reload();
        }
    </script>
</div>
</body>
</html>