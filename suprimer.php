<?php
$id = $_GET['id'];
$id = intval($id);

$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare("DELETE FROM user WHERE id = :id");

$query->bindParam("id", $id);

$query->execute();

echo "Vos information ont bien été suprimer";

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Info</title>
        <?php header("Location: http://localhost/Form_PHP_BDD/bdd.php"); ?>
    </head>
    <body>

    </body>
</html>
