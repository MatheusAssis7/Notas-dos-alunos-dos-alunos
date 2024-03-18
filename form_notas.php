<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado das notas</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    echo "Nome do Aluno: " . $nome . "<br>";
    echo "Média: " . $media . "<br>";

    if ($media < 4.0) {
        echo "Situação: Reprovado";
    } elseif ($media >= 4.0 && $media < 6.0) {
        echo "Situação: Exame Final";
    } elseif ($media>= 6.00) {
        echo "Situação: Aprovado";
    }
}
?>
    
</body>
</html>