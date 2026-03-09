<?php
    $name = 'Elouan';
    $age = 19;
    $weight = 74.3;
    $height = 173;
    $bmc = 20;
    $color = "brown";
    if ($age >= 18) {
        echo "Vous etes majeur";
    }
    else{
        echo"Vous etes mineur";
    }
    $isOk = true;
    if ($isOk=true) {
        echo`C'est bon`;

    }
    else{
        echo`Ce n'est pas bon !!!`;    
    }

    $gender = "homme" ;
    if ($gender == "homme" && $age >=18 ) {
        echo `Vous êtes un homme et vous êtes majeur`;
    }
    elseif($gender == "homme" && $age <=18) {
        echo `Vous êtes un homme et vous êtes mineur`;
    }
    elseif($gender == "femme" && $age >=18){
        echo `Vous êtes une femme et vous êtes majeure`;
    }
    elseif($gender == "femme" && $age <=18) {
        echo `Vous êtes une femme et vous êtes mineur`;
    }
    if ($bmc<18.5) {
       echo`Maigreur`;
    }
    elseif ($bmc >= 18.5 && $bmc <= 24.9) {
        echo`Corpulence normale`;
    }
    elseif ($bmc >= 25 && $bmc <= 29.9) {
        echo`surpoids`;
    }
    elseif ($bmc >= 30) {
        echo `obésité`;
    }
    if($gender != "homme"){
        echo `C\'est une développeuse`;
    }
    else  {
        echo `C\'est un développeur !!!`;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>