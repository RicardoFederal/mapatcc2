<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Verificação da Correção</title>
</head>
<body>
<h1>Verificação da Correção</h1>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a correção enviada pelo aluno e a palavra correta
    $correcao = $_POST["correcao"];
    $palavraCorreta = $_POST["palavra_correta"];

    // Verifica se a correção está correta
    if (strtolower($correcao) === strtolower($palavraCorreta)) {
        echo "<p>Parabéns! Sua correção está correta.</p>";
    } else {
        echo "<p>Sua correção está incorreta. A palavra correta é: <strong>" . $palavraCorreta . "</strong></p>";
    }
} else {
    echo "<p>Por favor, envie a correção através do formulário.</p>";
}
?>

<p><a href="atividade.php">Tentar outra atividade</a></p>
</body>
</html>
