<?php


$pdo = new PDO("mysql:host=localhost;dbname=school", "root", "", [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$sql = "SELECT `id`, `firstname`, `lastname`, `email` FROM `students` ORDER by `lastname`, `firstname` ASC;";
$stmt = $pdo->query($sql);
$nom = $stmt->fetchAll();
var_dump($nom)

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
