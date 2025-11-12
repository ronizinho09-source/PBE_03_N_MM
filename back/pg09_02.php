<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA09_02</title>
</head>
<body>
    <h1>switch case</h1>
    <?php
    echo md5("Uninove");

    echo"<hr>";
    date_default_timezone_set("America/Sao_Paulo");
    echo date("d/m/Y H:i:s");
    echo "<hr>";

    $diaSemana = date('w');  
    switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
</body>
</html>