<?php
$firstnames = ['Steve', 'Jeff', 'Marck', 'Sundar'];
$firstnames[2] = 'Mark';
array_push($firstnames, 'Bill');
array_unshift($firstnames, 'Julie');
sort($firstnames);
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
//var_dump($users);
//die
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>Le premier prénom du tableau <span style="font-weight : bold;">firstnames</span> est <?= $firstnames[0] ?>
    </div>
    <div>Il y a <?= count($firstnames) ?> éléments dans le tableau</div>
    <ul>
        <?php foreach ($firstnames as $firstname) { ?>
            <li><?= $firstname ?></li>
        <?php } ?>
    </ul>
    <ul>
        <?php foreach ($firstnames as $firstname) {
            echo "<li>$firstname</li>";
        } ?>
    </ul>
    <p>
        L'email du patron de Meta est <?= $users[2]["email"] ?> . Le patron de Microsoft s'appelle <?= $users[4]['firstname'] . ' ' . $users[4]['lastname'] ?>. Dans un monde si
        masculin, Yuka à été fondé en 2016, notamment par <?= $users[5]['firstname'] . ' ' . $users[5]['lastname'] ?>.
    </p>
    <ul> <?php foreach ($users as $user) {
                
                echo '<li>'.$user["firstname"]  . ' ' .   $user["lastname"]  . ' ' .  $user["email"].'</li>';
            }
            ?>


    </ul>
</body>

</html>