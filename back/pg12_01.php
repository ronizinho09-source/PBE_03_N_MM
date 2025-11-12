<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12 06/11/2025</title>
</head>
<body>
    <h1>AULA 12</h1>
    <?php 
    $cores =["blue", "red", "green", "yellow", "gray", "orange","pink"];
    echo "Quantidade: ".count($cores);
    sort($cores);
    for($i=0; $i<count($cores); $i++){
    echo "<p style='background:$cores[$i]'>$cores[$i]</p>";
    }
    //echo "<p>$cores[1]</p>";
    //echo "<p>$cores[2]</p>";
    //echo "<p>$cores[3]</p>"
    echo "<hr>";
    $produto=[
        "id"=>1,
        "nome"=>"caderno",
        "valor"=>3.55
    ];
    foreach($produto as $pos=>$valor){  #variavel da posição e variavel do valor/dado
        echo "$pos: $valor<br>";
    };

    $produtos=[
        ["id"=>1,"nome"=>"caderno","valor"=>35.55],
        ["id"=>2,"nome"=>"lapis","valor"=>2.35],
        ["id"=>3,"nome"=>"borracha","valor"=>0.55]
    ];

    foreach($produtos as $linha){
        echo "<br>".$linha["id"]."<br>";
        echo $linha["nome"]."<br>";
        echo $linha["valor"]."<hr>";
    };

    //echo "<br>".$produtos[0]["id"]."<br>";
    //echo $produtos[0]["nome"]."<br>";
    //echo $produtos[0]["valor"]."<hr>";
    
    ?>
</body>
</html>