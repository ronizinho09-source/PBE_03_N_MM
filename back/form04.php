<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESU</title>
</head>
<body>
    <h1>Calculando o resto da divisão</h1>
    <?php
    echo "<pre>";print_r($_REQUEST); echo "</pre>";
    $num1 =$_POST["num1"];
    $num2 =$_POST["num2"];
    $res1 = ($num1 % $num2 == 1) ? "impar" : "par";

    echo "o resultado é: ".$res1
    
    ?>
</body>
</html>