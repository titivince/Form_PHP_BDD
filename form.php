<?php
    $firstName = $_POST["prenom"];
    $name = $_POST["nom"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $mail = $_POST["mail"];
    $sql = 0;
    $pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $sql = "INSERT INTO user (firstName, name, password, gender, mail) 
    VALUES 
    ('$firstName', '$name', '$password', '$gender','$mail')";

    $pdo -> exec($sql);
    echo "Vos information ont bien été envoyé";
?>