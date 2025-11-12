<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula 08 - 25/09/25</h1>
    <h2>Comparação</h2>
    <?php
    $a = 10;
    $b = "10";
    echo "igualdade = ".($a==$b)."<br>";
    echo "identico = ".($a===$b)."<br>";
    echo "Não igual = ".($a!=$b)."<br>";
    echo "Não identico = ".($a!==$b)."<br>";
    
    $a =10;
    $b =10;
    $c = 11;
    echo "<br> menor: ".($a<$b)."<br>";
    echo "menor ou igual: ".($a<=$b)."<br>";
    echo "maior: ".($c>$b)."<br>";
    echo "maior ou igual: ".($c>=$b)."<br>";
    echo "<hr>"
    ?>
    <h2>Lógicos</h2>
    <?php
    echo "Não - not - !<br>";
    $a = 50;
    $b = 120;
    $c = ($a<=$b);
    $d = !($a<=$b);
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";

    echo "<br> E - and - &&<br>";
    $a = 50;
    $b = 120;
    $c = 200;
    $d = (($a<=$b) and ($a<=$c));
    $e = (($a<=$b) && ($a>=$c));
    $f = (($a<=$b) && !($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo"<br>";
    var_dump($f);
    echo "<br>";

    echo "<br> Ou - or - ||<br>";
    $a = 50;
    $b = 120;
    $c = 200;
    $d = (($a>=$b) or ($a>=$c));
    $e = (($a>=$b) || ($a<=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";

    echo "<br>Xor<br>";
    $a = 50;
    $b = 120;
    $c = 200;
    $d = (($a<=$b) xor ($c<=$a));
    $e = (($a>=$b) xor ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);
    echo "<br>";
    echo "<hr>"
    ?>
    <h2>Ternário</h2>
    <?php
    $a = 50;
    $b = 120;
    $c = 200;
    $d = ($a<=$b) ? "certo menó" : "errou véinho";
    $e = ($a>=$c) ? "certo menó" : "errou véinho";
    echo "d = $d<br> e = $e";  
    ?>
</body>
</html>