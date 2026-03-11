<?php

if (!empty($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
}

if (!empty($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
} 

if (!empty($_POST["gender"])) {
    $gender = $_POST["gender"];
} 
if (!empty($_POST["picture"])) {
    $picture = $_POST["picture"];
    var_dump($_FILES);
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

    <?php
    if ($_SERVER["REQUEST_METHOD"]!="POST") {
    ?>
        <form action="./user.php" method="POST" enctype="multipart/form-data">
            <div class="nom_get">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" id="lastname" required>
            </div>
            <div class="prenom_get">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" required>
            </div>
            <select name="gender" id="gender">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <input type="file" name="picture">
            <button type="submit">envoi</button>
        </form>
    <?php

    } else {
    ?>
        <p>
            Bonjour <?= $gender ?> <?= $firstname  ?> <?= $lastname  ?>
        </p>
    <?php
    }

    ?>



</body>

</html>