<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Correção</title>
</head>
<body>
<h1>Verificação</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter respostas do formulário
    $respostaDinossauro = $_POST['dinossauro'];
    $respostaCamelo = $_POST['camelo'];
    $respostaGato = $_POST['gato'];
    $respostaRa = $_POST['ra'];

    // Respostas corretas (você pode ajustar conforme necessário)
    $corretaDinossauro = 'dinossauro';
    $corretaCamelo = 'camelo';
    $corretaGato = 'gato';
    $corretaRa = 'ra';

    // Verificar respostas
    $corretoDinossauro = ($respostaDinossauro == $corretaDinossauro);
    $corretoCamelo = ($respostaCamelo == $corretaCamelo);
    $corretoGato = ($respostaGato == $corretaGato);
    $corretoRa = ($respostaRa == $corretaRa);

    // Exibir feedback
    echo "<h2>Feedback:</h2>";
    echo "Dinossauro: " . ($corretoDinossauro ? "Correto" : "Incorreto") . "<br />";
    echo "Camelo: " . ($corretoCamelo ? "Correto" : "Incorreto") . "<br />";
    echo "Gato: " . ($corretoGato ? "Correto" : "Incorreto") . "<br />";
    echo "Rã: " . ($corretoRa ? "Correto" : "Incorreto") . "<br />";
} else {
    // Se não for uma solicitação POST, redirecionar ou lidar com isso de acordo com sua lógica
    header("Location: index.php"); // Redireciona para a página principal (ajuste conforme necessário)
    exit();
}
?>


</body>
</html>
