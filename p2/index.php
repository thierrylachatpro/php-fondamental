<?php
$age = 13;
if ($age >= 18) {
    $result = "Vous êtes majeur";
} else {
    $result = "Vous êtes mineur";
}
$isOK = false;
$result2 = ($isOK == true) ? 'C\'est bon!!' : 'Ce n\'est pas bon!!!';
$gender = "Femme"
if ($age >= 18 && $gender == "Homme") {
    echo "Vous êtes un Homme et vous êtes majeur";
} elseif ($age >= 18 && $gender == "Femme") {
    echo "Vous êtes une Femme et vous êtes majeur";
} elseif ($age < 18 && $gender == "Homme") {
    echo "Vous êtes un Homme et vous êtes mineur";
} else {
    echo "Vous êtes une Femme et vous êtes mineure";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?= $result ?><br>
    <?= $result2 ?><br>
    <?php 
    ?><br>
    <?php if ($gender =="Femme") {
        echo 'C\'est une développeuse';
    }
        else {echo 'C\'est un développeur';
    }
    ?><br>
    <?php if ($age >= 18) {
    echo "Tu es majeur";}
    else {echo 'Tu n\'es pas majeur';}
?>
<?php if ($isOk == false) {'c\'est pas
bon !!!'
 } else {'c\'est ok !!';}
?>
    </p>
</body>
</html>