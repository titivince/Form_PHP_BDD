<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire PHP</title>
</head>
<body>
    <form method="POST" action="form.php">
        <fieldset><legend>Obligatoire</legend><br/>
            
            <label>Votre Nom :</label>
            <input type="text" name="nom"placeholder="Thimoté" minlength="2" autofocus required /><br/>
            <label>Votre Prémon :</label>
            <input type="text" name="prenom" placeholder="Dupond" minlength="2" autofocus required/><br/>
            <label>Mot de passe :</label>
            <input type="password" name="password" minlength="8" required /><br/><br/>
            
            <label>Quelle est votre genre ?</label>
            <select name="gender" id="gender">
            <option name="gender">Autre</option>
            <option name="gender">Homme</option>
            <option name="gender">Femme</option>
            </select><br/>

            <label for="mail">Votre mail :</label>
            <input type="email" name="mail" required /><br/>

        </fieldset><br/>
    
        <input type="submit" value="envoyer"/>
    </form>
</body>
</html>