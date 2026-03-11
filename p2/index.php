<?php
$age = 18;
$weight = 70.5;
$height = 1.78;
$bmc = $weight / ($height * $height);
$isOk = true;
$gender = 'toto';
$state = '';
if ($age >= 18) {
    $exo1 = 'majeur';
} else {
    $exo1 = 'mineur';
}
if (strtolower($gender) == 'homme' and $age >= 18) {
    $exo3 = 'Vous êtes un homme et vous êtes majeur';
} elseif (strtolower($gender) == 'homme' and $age < 18) {
    $exo3 = 'Vous êtes un homme et vous êtes mineur';
} elseif (strtolower($gender) == 'femme' and $age >= 18) {
    $exo3 = 'Vous êtes une femme et vous êtes majeur';
} elseif (strtolower($gender) == 'femme' and $age < 18) {
    $exo3 = 'Vous êtes une femme et vous êtes mineur';
} else {
    $exo3 = 'Tu n\'es pas un extraterrestre';
}
if ($bmc < 18.5) {
    $exo4 = 'Maigreur';
} elseif ($bmc < 25) {
    $exo4 = 'Corpulence normale';
} elseif ($bmc < 30) {
    $exo4 = 'Surpoids';
} else {
    $exo4 = 'Obésité';
}
if (strtolower($gender) != 'homme') {
    $exo5 = 'C\'est une développeuse !!!';
} else {
    $exo5 = 'C\'est un développeur !!!';
}
if ($age >= 18) {
    $state = 'Tu es majeur';
} else {
    $state = 'Tu n\'es pas majeur';
}
if ($isOk == false) {
    $exo7 = 'c\'est pas bon !!!';
} else {
    $exo7 = 'c\'est ok !!';
}
if ($isOk == true) {
    $exo8 = 'c\'est ok !!';
} else {
    $exo8 = 'c\'est pas bon !!!';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <div>
        <p>
            <?php
            echo $exo1
            ?>
            <br>
            <?php
            echo $isOk ? "C'est bon !!" : "Ce n'est pas bon !!!";
            ?>
            <br>
            <?php
            echo $exo3
            ?>
            <br>
            <?php
            echo $exo4
            ?>
            <br>
            <?php
            echo $exo5
            ?>
            <br>
            <?php
            echo $state
            ?>
            <br>
            <?php
            echo $exo7
            ?>
            <br>
            <?php
            echo $exo8
            ?>
        </p>
    </div>
</body>

</html>