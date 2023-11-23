<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Correção</title>
</head>
<body>
<h1>Verificação</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $respostaDinossauro = $_POST['dinossauro'];
    $respostaCamelo = $_POST['camelo'];
    $respostaGato = $_POST['gato'];
    $respostaRa = $_POST['ra'];

    // Possíveis respostas dos alunos:
    $corretas = array(
        'dinossauro' => array('dinossauro', 'dinosaro', 'dinossaro', 'dinosarro', 'dinossauru', 'dinosaru',
            'dinossaru', 'dinusaro', 'dinussaru'),

        'camelo' => array('camelo'),  // Adicione mais respostas corretas se necessário
        'gato' => array('gato'),      // Adicione mais respostas corretas se necessário
        'ra' => array('ra')           // Adicione mais respostas corretas se necessário
    );

    $corretoDinossauro = in_array($respostaDinossauro, $corretas['dinossauro']);
    $corretoCamelo = in_array($respostaCamelo, $corretas['camelo']);
    $corretoGato = in_array($respostaGato, $corretas['gato']);
    $corretoRa = in_array($respostaRa, $corretas['ra']);


    echo "<h2>Feedback:</h2>";
    echo "Dinossauro: " . ($corretoDinossauro ? "Correto" : "Incorreto") . "<br />";
    echo "Camelo: " . ($corretoCamelo ? "Correto" : "Incorreto") . "<br />";
    echo "Gato: " . ($corretoGato ? "Correto" : "Incorreto") . "<br />";
    echo "Rã: " . ($corretoRa ? "Correto" : "Incorreto") . "<br />";
}

?>

</body>
</html>

