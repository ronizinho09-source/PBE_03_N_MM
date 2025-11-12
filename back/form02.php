<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Média da nota</h1>
    <?php
    echo "<pre>";print_r($_REQUEST); echo "</pre>";
    $nome=$_POST["nome"];
    $data=$_POST["data"];
    $av1=$_POST['AV1'];
    $av2=$_POST["AV2"];
    $media=($av1+$av2)/2;

    echo "Nome: $nome<br>";
    echo "Data: $data<br>";
    echo "Sua nota da av1: $av1<br>";
    echo "Sua nota da av2: $av2<br>";
    echo "<h1>Sua média é: $media</h1><br>";  

    if ($media >= 1 && $media <= 3 ){
    echo "<p>Você foi mal, seu burro. MELHORE!</p>";
    echo "<img src='\Users\roniz\OneDrive\Imagens\picapaublabla.jpg' width='200'>";
}
    ?>
</body>
</html>