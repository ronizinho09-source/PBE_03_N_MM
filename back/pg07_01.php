<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA07_01</title>
</head>
<body>
    <h1>Aula07_01 - 18/09¹25</h1>
    <h2>Aritméticos</h2>
    <?php
    $a=10;
    $b=2;
    echo "Adição:".($a + $b);
    echo "<br>Subtração:".($a - $b);
    echo "<br>Multiplicação:".($a * $b);
    echo "<br>Divisão:".($a / $b);
    echo "<br>Módulo:".($a % $b);
    echo "<br>Exponenciação:".($a ** $b);
    echo "<hr>"
    ?>
    <h2>Atribuição</h2>
    <?php
    $a=10;
    $b=2;
    $a+=$b; //$a = $a+$b// a = 2+10// a=12
    $b-=5; //$b=2-5//$b= -3
    echo "a = ".$a; //
    echo "<br>b = ".$b;
    $c=11;
    $d=6;
    $c%=$d; //$c = 11%6// $c=5
    $d+=$a; //$d = 6+12// d=18
    echo "<br>c = ".$c;
    echo "<br>d = ".$d;
    echo "<hr>"
    ?>
    <h2>String</h2>
    <?php
    $a = "Roro ";
    echo "$a <br>";
    $b = "Soares ";
    echo "$b <br>";
    echo $a . $b;
    $b.= $a; //$b = $b.$a
    $b.= " Lindo";
    echo "<br>$b";
    echo "<hr>"
    ?>
    <h2>Incremento/Decremento</h2>
    <?php
    $x = 100;
    echo "$x = " .$x++;
    echo "<br>x final = " .$x;
    $y = 100;
    echo "<br>$y = " .--$y;
    echo "<br>y final = " .$y;
    $i=10;
    echo "<br> i = $i";
    echo "<hr>";

    ?>
    <h2>Comparação</h2>
    <?php
    $a=10;
    $b="10";
    echo "Igualdade = ".($a==$b)."<br>";
    echo "Idêntico = ".($a===$b)."<br>";
    echo "Não igual = ".($a!=$b)."<br>";
    echo "Não Idêntico = ".($a!==$b)."<br>";
    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";
    echo "Menor ou igual: ".($a<=$b)."<br>";
    echo "Maior: ".($c>$b)."<br>";
    echo "Maior ou igual: ".($c>=$b)."<br>";
    echo "<hr>"
    ?>
    <br><a href="pg08_01.php">PARTE 2</a><br>
</body>
</html>