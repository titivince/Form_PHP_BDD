<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$query = $pdo->prepare('SELECT * FROM user');

$ok = $query->execute();

$user = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>BDD</title>
    </head>
    <body>
    <h2>Voici la base de donnée</h2>
    <ul class="liste">
        <?php foreach ($user as $contact):?>
            <li>
                <?= $contact['name']?> <?=$contact['firstName']?> <?=$contact['password']?> <?=$contact['gender']?> <?=$contact['mail'] ?>
            </li>

        <?php endforeach; ?>
    </ul>

    </body>
</html>

