<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 09</title>
</head>
<body>
    <h1>AULA09 - 02/10/25</h1>
    <?php
    $idade = 17;

    if ($idade >= 18){
        echo "Você é maior de idade.";
    }
    else{
        echo "Você não é maior de idade";
    }
        echo "<hr>";

    $hora = 7;

    if ($hora >=1 and $hora <= 11){
        echo "Bom dia!";
    }
    elseif ($hora >=12 and $hora <=18){
        echo "Boa tarde!";
    }
    elseif ($hora >=19 and $hora <=24){
        echo "Boa noite";
    }
    else{
        echo "Hora desconhecida";
    }
     echo "<hr>";

     $idade = 20;
     $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
     echo $mensagem

    ?>
</body>
</html>