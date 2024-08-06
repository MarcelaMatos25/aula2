<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$idade = 19;
$status = ($idade >=18) ? "Maior de idade" : "Menor de idade" . "<br>";
$nome = "Marcela" . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Nome: ". $nome; 
echo $status;

$temConta = true;
$possuiCartao = false;
echo "Tem conta?" . ($temConta ? "Sim" : "Não") . "<br>";
echo "Possui cartão ?" . ($possuiCartao ? "Sim" : "Não") . "<br>";

$cores = array("vermelho", "verde", "azul");
$numeros = [1, 2, 3, 4, 5];

$posicao = 1;
echo "posicao" . $posicao . "<br/>";
echo "Cor na posição " . $posicao . ": " . $cores[$posicao];
?>