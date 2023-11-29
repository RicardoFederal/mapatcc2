<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Atividade de Sondagem - Hipótese de Escrita</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<fieldset style = "width: 50%; margin: 0 auto;">
<div style="text-align: center">
    <h3>Atividade de Sondagem - Hipótese de Escrita</h3>
    <p>Escreva o nome das figuras abaixo:</p>


    <form action="verificar_correcao.php" method="post">

        <img src="imagem/4dinossauro.jpg" alt="Imagem" /> <input type="text" name="palavraDinossauro" /><br/><br/>
        <img src="imagem/3camelo.jpg" alt="Imagem" />     <input type="text" name="palavraCamelo" /><br/><br/>
        <img src="imagem/2gato.jpg" alt="Imagem" />       <input type="text" name="palavraGato" /><br/><br/>
        <img src="imagem/1ra.jpg" alt="Imagem" />         <input type="text" name="palavraRa" /><br/>
        <br/>
        <input type='submit' value='Enviar Respostas'>
    </form>

    <?php
    echo '<input type="hidden" name="dinossauro" value="' . $_POST["palavraDinossauro"] . '" />';
    echo '<input type="hidden" name="camelo" value="' . $_POST["palavraCamelo"] . '" />';
    echo '<input type="hidden" name="gato" value="' . $_POST["palavraGato"] . '" />';
    echo '<input type="hidden" name="ra" value="' . $_POST["palavraRa"] . '" />';
    ?>

</div>
</fieldset>

    <div class="container2">
    <button type="button" onclick="window.location.href='index.php'">Início</button>
    </div>
</body>
</html>