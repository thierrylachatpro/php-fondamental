<?php

// Ex1
$ex1 = 0;

// Ex2
$ex2a = 0;
$ex2b = rand(1, 100);

// Ex3
$ex3a = 100;
$ex3b = rand(1, 100);

// Ex4
$ex4 = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>EX1</p>
    <?php
    while ($ex1 < 10) {
        echo $ex1 . "<br>";
        $ex1++;
    }
    ?>
    <br>
    <br>
    <p>EX2</p>
    <?php
    while ($ex2a <= 20) {
        echo $ex2a * $ex2b;
        $ex2a++;
        echo '<br>';
    }
    ?>
    <br>
    <br>
    <p>Ex3</p>
    <?php
    while ($ex3a > 10) {
        echo $ex3a * $ex3b . '<br>';
        $ex3a--;
    }
    ?>
    <br>
    <br>
    <p>Ex4</p>
    <?php
    while ($ex4 < 10) {
        echo $ex4;
        $ex4 += $ex4 / 2;
        //$ex4 = $ex4 + $ex4/2
        echo "<br>";
    }
    ?>
    <br>
    <br>
    <p>Ex5</p>
    <?php
    for ($ex5 = 1; $ex5 <= 15; $ex5++) {
        echo 'On y arrive presque <br>';
    }
    ?>
    <br>
    <br>
    <p>$ex6</p>
    <?php
    for ($ex6 = 20; $ex6 >= 0; $ex6--) {
        echo 'C \'est presque bon <br>';
    }
    ?>
    <br>
    <br>
    <p>$ex7</p>
    <?php
    for ($ex7 = 1; $ex7 <= 100; $ex7 += 15) {
        echo 'On tient le bon bout <br>';
    }
    ?>
    <br>
    <br>
    <p>$ex8</p>
    <?php
    for ($ex8 = 200; $ex8 >= 0; $ex8 -= 12) {
        echo 'Enfin !!!! <br>';
    } ?>
</body>

</html>