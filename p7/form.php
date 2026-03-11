<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./user.php" method="get">
        <div>
            <label for="lastname">Entrez votre nom: </label>
            <input type="text" name="lastname" id="lastname" placeholder="Ex: Colin"/>
        </div>
        <div>
            <label for="firstname">Entrez votre prénom: </label>
            <input type="firstname" name="firstname" id="firstname" placeholder="Ex: Elouan" />
        </div>
        <div>
            <input type="submit" value="Envoyer !" />
        </div>
    </form>
    <br>
    <form action="./user.php" method="post">
        <div>
            <label for="lastname">Entrez votre nom: </label>
            <input type="text" name="lastname" id="lastname" placeholder="Ex: Colin"/>
        </div>
        <div>
            <label for="firstname">Entrez votre prénom: </label>
            <input type="firstname" name="firstname" id="firstname" placeholder="Ex: Elouan" />
        </div>
        <div>
            <input type="submit" value="Envoyer !" />
        </div>
    </form>
    <br>
    <div>
        <input type="radio" id="Mr" name="drone" value="Mr" checked />
        <label for="Mr">MR</label>
    </div>
    <br>
    <div>
        <input type="radio" id="Mme" name="drone" value="Mme" />
        <label for="Mme">Mme</label>
    </div>

    <div>
</body>

</html>