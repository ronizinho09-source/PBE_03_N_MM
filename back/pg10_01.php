<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA_11 23/10/25</title>
</head>
<body>
    <h1>Estruturas de Looping em PHP</h1>
    <?php
        echo "<h2>while</h2>";
        $i = 0;
        while($i<5){
            echo "$i ";
            $i++;
        }
        echo '<hr>';
        /*
        1) Qual a saída?  0 1 2 3 4
        2) Qual o valor inicial?  0
        3) Qual a condicição?  $i<5  enquanto i for menor que 5
        4) Qual o contador?  $i++
        5) Quantas fezes o looping foi executado?  5
        6) Qual valor que tornou a condição falsa?  5
         */
        echo "<h2>while</h2>";
        $i = 13;
        while($i<=16){
            echo "$i ";
            $i++;
        }
        echo '<hr>';
        /*
        1) 13 14 15 16
        2) 13
        3) $i<17 or $1<=16
        4) $i++
        5) 4
        6) 17
        */
        echo "<h2>while</h2>";
        $i = 5;
        while($i>0){
            echo "$i ";
            $i--;
        }
        echo '<hr>';
        /*
        1) 5 4 3 2 1 
        2) 5
        3) $1>0 or $i>=1
        4) $i--
        5) 5
        6) 0
        */
        echo "<h2>while</h2>";
        $i = 0;
        while($i<12){
            echo "$i ";
            $i+=2;
        }
        echo '<hr>';
        /*
        1) 0 2 4 6 8 10
        2) 0
        3) $i<11 or i$<=10
        4) $i++; $i++; (Programação orientada a gambiarra) or $i+=2
        5) 6
        6) 12 (porque está indo de 2 em 2)
        */
        echo "<h2>Do While</h2>";
        $i =0;
        do{
            echo "$i ";
            $i++;
        }while($i<5);
        echo '<hr>';
        /*
        1) 0 1 2 3 4
        2) 0
        3) $i<5
        4) $i++;
        5) 5
        6) 5
        */
        echo "<h2>Do While</h2>";
        $i =7;
        do{
            echo "$i ";
            $i++;
        }while($i<5);

        echo '<hr>';
        echo '<h2>For</h2>';
        for($i= 5; $i<25; $i+=5)
            echo "$i ";

        echo "<hr>";
        echo '<h2>For(Aninhada)</h2>';
        for ($i=1; $i<4; $i++){//looping externo
            for($j=5;$j<7;$j++){//looping interno
                echo "$i $j<br>";
            }
        }
        /*
        i j
        0 0
        0 1
        0 2
        1 0
        1 1
        1 2
        o looping externo só executa após o looping interno ser executado
        */

    ?>
</body>
</html>