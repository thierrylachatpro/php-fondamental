<?php
$name = 'Elouan';
$age = 19;
$weight = 74.3;
$height = 173;
$bmc = 20;
$color = "brown"
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php p1</title>
</head>

<body>
    <p>
        <?= $name; ?>
        <br>
        <?= $age; ?>
        <br>
        <?= $weight; ?>
        <br>
        <?= $height; ?>
        <br>
        <?= $weight * 1000 . ' grammes'; ?>
        <br>
        <?= $height / 100 . 'm' ?>
        <br>
        <?= $bmc ?>
        <br>
        <?php 
        $bmc = $weight / ($height / 100 * $height / 100);
        echo $bmc;
        ?>
        <br>
        <?= "Bonjour $name, comment vas-tu? Tu as $age ans." ?>
        <br>
        <?= 'Bonjour' . $name . ', comment vas-tu? Tu as' . $age . 'ans.' ?>
        <br>
        <p style="color: <?= $color ?>"><?= $color ?></p>
        <br>
        <p style="color: <?= $color ?>; text-transform:uppercase"><?= $color ?></p>
        <br>
        <p style="color: <?= $color ?>"><?= strtoupper($color) ?></p>
        <br>

    </p>



</body>

</html>