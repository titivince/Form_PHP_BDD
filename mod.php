<?php
$firstName = $_POST["prenom"];
$name = $_POST["nom"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$mail = $_POST["mail"];
$id = $_GET['id'];
$id = intval($id);

$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$query = $pdo->prepare(
    "UPDATE user SET firstName = '$firstName', name = '$name', password = '$password', gender = '$gender', mail = '$mail' WHERE id = '$id' "
);

//$query->bindParam('id', $id);

var_dump($query);
$query->execute();
echo "Vos information ont bien été modifié";
