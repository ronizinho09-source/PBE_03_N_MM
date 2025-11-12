<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula11 - 30/10/25</title>
</head>
<body>
    <h1>Aula11_01</h1>
    <?php
    $x=10;
    $x=7.5;
    $x="teste";
    echo "x=$x<br>";
    $y =[10,7.5,"teste"];
    echo "<br>y=".$y[1]; 
    echo '<br>'; 
    print_r($y);
    echo '<br>';
    echo '<br>y[0]='.$y[0];
    echo '<br>y[1]='.$y[1];
    echo '<br>y[2]='.$y[2];
    $y[0]%=2;
    $y[1]+=0.5;
    $y[2].=", 123";
    echo "<br>y[0]=".$y[0];
    echo "<br>y[1]=".$y[1];
    echo "<br>y[2]=".$y[2];
    echo '<hr>';
    $estudante=[
        "id"=>1,
        "ra"=>1234,
        "nome"=>"Roro",
        "av1"=>8,
        "av2"=>7.5
    ];
    echo "<br>ID: ".$estudante['id'];
    echo "<br>RA: ".$estudante["ra"];
    echo "<br>Estudante: ".$estudante["nome"];
    echo "<br>AV1: ".$estudante["av1"];
    echo "<br>AV2: ".$estudante["av2"];
    $media=($estudante['av1']+$estudante['av2'])/2;
    echo "<br>Media: $media";
    echo '<hr>';

    $num =[
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    echo "<br>".$num[1][0]; 
    echo "<hr>";

    $naval =[
        ["água", "água", "submarino", "água"],
        ["veleiro", "água", "água", "água"],
        ["água", "água", "água", "avião"],
        ["água", "trem","água", "água"]
    ];
    echo $naval[1][0]." ".$naval[3][1]." ".$naval[0][2]." ".$naval[2][3];
    echo "<br>".$naval[0][2];
    echo"<br>".$naval[1][0];
    echo"<br>".$naval[2][3];
    echo"<br>".$naval[3][1];
    ?>
</body>
</html>