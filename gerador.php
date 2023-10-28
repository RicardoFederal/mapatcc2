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

        //Mas como é uma prova de conceito (proof of concept) eu não fiz a função de ler o diretorio inteiro da pasta
        // imagem e gerar automaticamente os caminhos no array.
        //Fica como um "To Do" no futuro caso este TCC seja relevante para ser aperfeiçoado como um programa sério na
        // área de educação.
        //Fiz a lista inicial com somente as palavras (dinossauro, camelo, gato e Rã), categoria animais, porém no
        // futuro, o programa poderia gerar atividades com mais palavras, dividida por campos semânticos (doces,
        // brinquedos, etc), respeitando o polissílabo, trissilabo, dissilabo e monosilabo.

        $palavras1Silabas = array("imagem/1ra.jpg");

        $palavras2Silabas = array("imagem/2gato.jpg");

        /* exemplo do array com mais palavras - bastando adicionar a imagem na pasta e gerar o caminho:

         * $palavras2Silabas = array("imagem/2gato.jpg", "imagem/2pato.jpg", "imagem/2rato.jpg", "imagem/2sapo.jpg",
            "imagem/2vaca.jpg");
         */

        $palavras3Silabas = array("imagem/3camelo.jpg");

        $palavras4Silabas = array("imagem/4dinossauro.jpg");

        //Escolher aleatoriamente uma palavra do array relevante - quando tiver mais palavras no array de cima ou
        //  até categorias novas (isso para um futuro).

        switch ($silabas) {

            case 1:
                $indiceAleatorio = array_rand($palavras1Silabas); //Randomizei os indices das imagens do array.
                $imagemSelecionada = $palavras1Silabas[$indiceAleatorio]; //Acessei o elemento correspondente no array.
                echo '<img src="' . $imagemSelecionada . '" alt="Imagem" /><br />';
                break;
            case 2:
                $indiceAleatorio = array_rand($palavras2Silabas); //Randomizei os indices das imagens do array.
                $imagemSelecionada = $palavras2Silabas[$indiceAleatorio]; //Acessei o elemento correspondente no array.
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
                // $palavra = "Palavra não encontrada"; //como o código é pequeno, coloquei a verificação somente
                // no futuro estar tratado esta questão, tipo try/catch do Java.
        }

        //return $palavra;
    }

        gerarPalavra(4);
        gerarPalavra(3);
        gerarPalavra(2);
        gerarPalavra(1);



    // Cria um código numérico para associar com o aluno do professor
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
        echo "<input type='text' name='respostas[]' maxlength='$numSilabas' placeholder='____'
            required> ($numSilabas sílaba)";
        echo "</li>";
    }
    echo "</ol>";
    echo "<input type='submit' value='Enviar Respostas'>";
    echo "</form>";
    */


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
