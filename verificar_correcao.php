<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Correção</title>
</head>
<body>
<h1>Verificação</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $respostaDinossauro = $_POST['palavraDinossauro'];
    $respostaCamelo = $_POST['palavraCamelo'];
    $respostaGato = $_POST['palavraGato'];
    $respostaRa = $_POST['palavraRa'];

    // Possíveis respostas dos alunos...

    // Alfabético: escreve com pouquíssimos erros, ou troca sons parecidos, tipo 'o' com 'u', ou usa caracteres coringas:
    // como trocar 'ca' do camelo por 'k' (kmelo) devido à correspondência sonora.
    $alfabetico = array(
        'palavraDinossauro' => array('dinossauro', 'dinossauru', 'dinussauru', 'dinosaro', 'dinosaru', 'dinusaru',
            'dinosarro', 'dinosarru', 'dinusarru', 'dinossalro', 'dinossalru', 'dinussalru', 'dinussalro'),

        'palavraCamelo' => array('camelo', 'kamelo', 'kmelo', 'cmelo', 'camelu', 'kamelu', 'kmelu', 'cmelu',
            'cameulo', 'kameulo', 'cameulu', 'kameulu', 'kmeulo', 'kmeulu', 'cmeulo', 'cmeulu'),

        'palavraGato' => array('gato', 'hato', 'gatu', 'hatu'),

        'palavraRa' => array('rã', 'ra', 'ram', 'ran', 'raan', 'raam', 'rah', 'raah')
    );

    // Silábico-Alfabético: Oscila entre 1 letra e sílaba (geralmente).
    $silabico_alfabetico = array(
        'palavraDinossauro' => array('dinosro', 'diosar', 'diosaro', 'diosaru'),

        'palavraCamelo' => array('kmeu', 'cmeu', 'kmeo', 'cmeo'),

        'palavraGato' => array('gao', 'gto', 'hao', 'hto', 'gau', 'gtu', 'hau', 'htu'),

        'palavraRa' => array('r')
    );

    // Silábico com valor sonoro: pode usar só letra, só vogal, ora usa vogal, ora usa consoante, ou somente consoante.
    $silabico_com_valor_sonoro = array(
        'palavraDinossauro' => array('dosu', 'ioao', 'dnsr'),

        'palavraCamelo' => array('kmo', 'aeo'),

        'palavraGato' => array('gt', 'ao'),

        'palavraRa' => array('a')
    );

    // Silábico sem valor: usa somente letra, mas não tem correspondência sonora, ou usa 1 letra para cada som.
    // neste caso aqui, se o que foi digitado não estiver em nenhuma das correspondências acima, se encaixa na
    // categoria Silábico sem valor, por isso não foi criado um array para armazenar as possíveis escritas nesta faixa.
    // pois geralmente a criança usaria um monte de letras sem significado para a palavra dinossauro, pois é uma
    // animal grande, e somente uma letra para a palavra rã, pois é um bicho pequenino.
    // Pode também usar uma letra para cada som, por exemplo, VSMT para dinossauro e GEZ para camelo.

    $tipoDinossauro = '';
    $tipoCamelo = '';
    $tipoGato = '';
    $tipoRa = '';

    if (in_array($respostaDinossauro, $alfabetico['palavraDinossauro'])) {
        $tipoDinossauro = 'alfabético';
    } elseif (in_array($respostaDinossauro, $silabico_alfabetico['palavraDinossauro'])) {
        $tipoDinossauro = 'silábico-alfabético';
    } elseif (in_array($respostaDinossauro, $silabico_com_valor_sonoro['palavraDinossauro'])) {
        $tipoDinossauro = 'silábico com valor sonoro';
    } else {
        $tipoDinossauro = 'silábico sem valor';
    }

    if (in_array($respostaCamelo, $alfabetico['palavraCamelo'])) {
        $tipoCamelo = 'alfabético';
    } elseif (in_array($respostaCamelo, $silabico_alfabetico['palavraCamelo'])) {
        $tipoCamelo = 'silábico-alfabético';
    } elseif (in_array($respostaCamelo, $silabico_com_valor_sonoro['palavraCamelo'])) {
        $tipoCamelo = 'silábico com valor sonoro';
    } else {
        $tipoCamelo = 'silábico sem valor';
    }

    if (in_array($respostaGato, $alfabetico['palavraGato'])) {
        $tipoGato = 'alfabético';
    } elseif (in_array($respostaGato, $silabico_alfabetico['palavraGato'])) {
        $tipoGato = 'silábico-alfabético';
    } elseif (in_array($respostaGato, $silabico_com_valor_sonoro['palavraGato'])) {
        $tipoGato = 'silábico com valor sonoro';
    } else {
        $tipoGato = 'silábico sem valor';
    }

    if (in_array($respostaRa, $alfabetico['palavraRa'])) {
        $tipoRa = 'alfabético';
    } elseif (in_array($respostaRa, $silabico_alfabetico['palavraRa'])) {
        $tipoRa = 'silábico-alfabético';
    } elseif (in_array($respostaRa, $silabico_com_valor_sonoro['palavraRa'])) {
        $tipoRa = 'silábico com valor sonoro';
    } else {
        $tipoRa = 'silábico sem valor';
    }



    echo "<h2>Feedback:</h2>";
    echo "Dinossauro: $tipoDinossauro<br />";
    echo "Camelo: $tipoCamelo<br />";
    echo "Gato: $tipoGato<br />";
    echo "Rã: $tipoRa<br />";
}
?>

</body>
</html>


