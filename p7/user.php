<?php
if (!empty($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
}   else{
    header('location: ./index.php');
}

if (!empty($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
}   else{
    header('location: ./index.php');
}

if (!empty($_POST["gender"])) {
    $gender = $_POST["gender"];
}   else{
    header('location: ./index.php');
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
    <p>
    Bonjour <?= $gender ?> <?= $firstname  ?>  <?= $lastname  ?>
    </p>
</body>

</html>