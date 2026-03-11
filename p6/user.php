<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo 'Cette variable existe, donc je peux l\'afficher.' . $id;
} else {
    header('Location: ./users.php');
}

$user1 = [
    'firstname' => 'Steve',
    'lastname' => 'Jobs',
    'email' => 'stevejobs@apple.com'
];
$user2 = [
    "firstname" => "Jeff",
    "lastname" => "Bezos",
    "email" => "jeff.bezos@amazon.com"
];

$user3 = [
    "firstname" => "Marc",
    "lastname" => "Zuckerberg",
    "email" => "marc.zuckerberg@meta.com"
];

$user4 = [
    "firstname" => "Sundar",
    "lastname" => "Pichai",
    "email" => "sundar.pichai@google.com"
];

$user5 = [
    "firstname" => "Bill",
    "lastname" => "Gates",
    "email" => "bill.gates@microsoft.com"
];

$user6 = [
    "firstname" => "Julie",
    "lastname" => "Chapon",
    "email" => "julie.chapon@accenture.com"
];
$users = [$user1, $user2, $user3, $user4, $user5, $user6];
// var_dump($users);
// die
if (isset($_GET["color"])) {
    $color = $_GET["color"];
    // echo 'Cette variable existe, donc je peux l\'afficher.' . $id;
} else {
    $color = 'Black';
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
    <a href="mailto: <?= $users[$id]['email'] ?>" style="color : <?= $color ?>">contact <?= $users[$id]["firstname"] ?> <?= $users[$id]["lastname"] ?></a>

</body>

</html>