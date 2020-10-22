<?php
$id = $_GET['id'];
$id = intval($id);

$pdo = new PDO('mysql:host=mysql;dbname=basedeteste;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = $pdo->prepare("SELECT * FROM user WHERE id = :id");

$query->bindParam("id", $id);

$query->execute();
$user = $query->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
    <h1>Modification du formulaire</h1>
    <form method="POST" action="mod.php?id=<?= $user['id']?>">
        <fieldset><legend>Obligatoire</legend><br/>

            <label>Votre Nom :</label>
            <input type="text" name="nom" placeholder="Thimoté" minlength="2" value="<?= $user['firstName']; ?>" required / ><br/>
            <label>Votre Prémon :</label>
            <input type="text" name="prenom" placeholder="Dupond" minlength="2" value="<?= $user['name']; ?>" required/><br/>
            <label>Mot de passe :</label>
            <input type="password" name="password" minlength="8" value="<?= $user['password']; ?>" required /><br/><br/>

            <label>Quelle est votre genre ?</label>
            <select name="gender" id="gender">
                <option name="gender">Autre</option>
                <option name="gender">Homme</option>
                <option name="gender">Femme</option>
            </select><br/>

            <label for="mail">Votre mail :</label>
            <input type="email" name="mail" value="<?= $user['mail']; ?>" required /><br/>

        </fieldset><br/>
        <input type="submit" />
    </form>
</body>
</html>