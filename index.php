<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 001 de PHP</h1>
    <hr>
    <?php
    echo "<h2>Variável</hr>";
    $nome = "Fernando C Lourenço";
    $idade = 16;
    $fumante = false;
    echo "<h2>Nome : </h2>" . $nome . "<br>";
    echo "<h2>Idade : </h2>" . $idade . "<br>";
    echo "<h2>Fumante : </h2>";
    if($fumante == true){
    echo "Sim";
    }
    else{
    echo "Não";
    }
    ?>
</body>
</html>