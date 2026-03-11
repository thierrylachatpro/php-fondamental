<?php
$string1 = 'bloubloublou';
$chaine_caractere2 = 'bliblibli';
$number1 = 6;
$number2 = 8;
$number3 = 14;
$firstname = 'Beryl';
$lastname = 'Cuvillier--Couvreur';
$year = 18;
$gender = 'Homme';

function true(): bool
{
    return true;
}


function chaine($string1): string
{
    return $string1;
}


function chaineConca($string1, $chaine_caractere2): string
{
    return $string1 . $chaine_caractere2;
}


function comparaison($number1, $number2): string
{
    if ($number1 > $number2) {
        return "Le premier nombre est plus grand";
    } elseif ($number1 < $number2) {
        return "Le premier nombre est plus petit";
    } else {
        return "Les deux nombres sont identiques";
    }
}


function concatenation($string1, $number1): string
{
    return $string1 . $number1;
}


function nameYear($firstname, $lastname, $year): string
{
    return "Bonjour $lastname $firstname, tu as $year ans";
}


function verifieMajeur($gender, $year): string
{
    if (strtolower($gender) == 'homme' and $year >= 18) {
        return 'Vous êtes un homme et vous êtes majeur';
    } elseif (strtolower($gender) == 'homme' and $year < 18) {
        return 'Vous êtes un homme et vous êtes mineur';
    } elseif (strtolower($gender) == 'femme' and $year >= 18) {
        return 'Vous êtes une femme et vous êtes majeur';
    } elseif (strtolower($gender) == 'femme' and $year < 18) {
        return 'Vous êtes une femme et vous êtes mineur';
    } else {
        return 'Tu n\'es pas un extraterrestre';
    }
}

function verifieMajeur2($gender, $year): string
{
    if (strtolower($gender) == 'homme' and $year >= 18) {
        $message = 'Vous êtes un homme et vous êtes majeur';
    } elseif (strtolower($gender) == 'homme' and $year < 18) {
        $message = 'Vous êtes un homme et vous êtes mineur';
    } elseif (strtolower($gender) == 'femme' and $year >= 18) {
        $message = 'Vous êtes une femme et vous êtes majeur';
    } elseif (strtolower($gender) == 'femme' and $year < 18) {
        $message = 'Vous êtes une femme et vous êtes mineur';
    } else {
        $message = 'Tu n\'es pas un extraterrestre';
    }
    return $message;
}


function calculNumber($number1 = 0, $number2 = 0, $number3 = 0): int | float
{
    return $number1 + $number2 + $number3;
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
    <?php
    echo chaine($string1)
    ?>
    <br>
    <?php
    echo chaineConca($string1, $chaine_caractere2)
    ?>
    <br>
    <?php
    echo comparaison($number1, $number2)
    ?>
    <br>
    <?php
    echo concatenation($string1, $number1)
    ?>
    <br>
    <?php
    echo nameYear($firstname, $lastname, $year)
    ?>
    <br>
    <?php
    echo verifieMajeur($gender, $year)
    ?>
    <br>
    <?php
    echo calculNumber($number1, $number2)
    ?>
</body>

</html>