<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Atividade de Sondagem - Hipótese de Escrita</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div style="text-align: center">
    <h2>Atividade de Sondagem - Hipótese de Escrita</h2>

    <?php
    function gerarPalavra($silabas){
        //eu sei que para uma pasta com sei lá, 50 imagens, escrever cada uma ali demandaria tempo e é contra-produtivo.
        //mas como é uma prova de conceito (proof of concept) eu não fiz a função de ler o diretorio inteiro da pasta imagem e gerar automaticamente os caminhos no array.
        //mas fica como um To Do no futuro caso este TCC seja relevante para ser aperfeiçoado como um programa sério na área de educação.

        $palavras2Silabas = array("imagem/2gato.jpg", "imagem/2pato.jpg", "imagem/2rato.jpg", "imagem/2sapo.jpg", "imagem/2vaca.jpg");

        $palavras3Silabas = array("imagem/3cavalo.jpg", "imagem/3girafa.jpg", "imagem/3macaco.jpg", "imagem/3ovelha.jpg", "imagem/3tucano.jpg");

        $palavras4Silabas = array("imagem/4borboleta.jpg", "imagem/4dinossauro.jpg", "imagem/4elefante.jpg", "imagem/4hipopotamo.jpg", "imagem/4tartaruga.jpg");

        // Escolher aleatoriamente uma palavra do array relevante.

        switch ($silabas) {

            case 2:
                $indiceAleatorio = array_rand($palavras2Silabas); // randomizei os indices das imagens do array.
                $imagemSelecionada = $palavras2Silabas[$indiceAleatorio]; // Acessei o elemento correspondente no array.
                echo '<img src="' . $imagemSelecionada . '" alt="Imagem" /><br />';
                break;
            case 3:
                $indiceAleatorio = array_rand($palavras3Silabas);
                $imagemSelecionada = $palavras3Silabas[$indiceAleatorio];
                echo '<img src="' . $imagemSelecionada . '" alt="Imagem" /><br />';
                break;
            case 4:
                $indiceAleatorio = array_rand($palavras4Silabas);
                $imagemSelecionada = $palavras4Silabas[$indiceAleatorio];
                echo '<img src="' . $imagemSelecionada . '" alt="Imagem" /><br />';
                break;
            default:
               // $palavra = "Palavra não encontrada"; //como o código é pequeno, coloquei a verificação somente por no futuro estar tratado esta questão.
        }

        //return $palavra;
    }

    // Gerar as palavras com diferentes números de sílabas (1 a 4 sílabas)
    //$palavras = array(

        gerarPalavra(4);
        gerarPalavra(3);
        gerarPalavra(2);

    //);

    // Cria um código numérico para associar com a atividade do professor
    $codigoAtividade = rand(1000, 9999);

    // Exibir atividade para o professor
    echo "<h3>Atividade para o Professor:</h3>";
    /*echo "<ol>";
    foreach ($palavras as $palavra) {
        echo "<ul>$palavra</ul>";
    }
    echo "</ol>";*/
    echo "<p>Código da Atividade: $codigoAtividade</p>";

    /*// Exibir folha de resposta para o aluno
    echo "<h2>Folha de Resposta do Aluno:</h2>";
    echo "<form method='post' action='verificar_resposta.php'>";
    echo "<input type='hidden' name='codigo_atividade' value='$codigoAtividade'>";
    echo "<ol>";
    foreach ($palavras as $palavra) {
        echo "<li>";
        $numSilabas = strlen(preg_replace("/[^aeiou]/i", "", $palavra)) + 1;
        echo "<input type='text' name='respostas[]' maxlength='$numSilabas' placeholder='____' required> ($numSilabas sílaba)";
        echo "</li>";
    }
    echo "</ol>";
    echo "<input type='submit' value='Enviar Respostas'>";
    echo "</form>";
    */


    ?>

    <br>

    <button type="button" class="pop" onclick='imprimirFolha()'>Imprimir Folha</button><br>
    <button type="button" class="pop" onclick='gerarNovaAtividade()'>Gerar Nova Atividade</button><br>
    <button type="button" class="pop" onclick="window.location.href='index.php'">Voltar</button>


    <script>
        function imprimirFolha() {
            window.print();
        }

        function gerarNovaAtividade() {
            window.location.reload();
        }
    </script>
</div>
</body>
</html>
