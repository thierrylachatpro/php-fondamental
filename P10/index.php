<?php

$pdo = new PDO("mysql:host=localhost;dbname=school", "root", "", [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$stmt = $pdo->query("SELECT * FROM firstname " and "SELECT *FROM lastname ");
$nom = $stmt->fetchAll();
print_r($nom)
?>
