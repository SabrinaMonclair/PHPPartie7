<?php
var_dump($_POST);

if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
    $message = $_POST['gender'] . '<br>' . $_POST['lastname'] . '<br>' . $_POST['firstname'];
} else {
    $message = 'Aucune valeur post n\'a été posté';
}




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>

<body>
    <p>Créer un formulaire sur la page index.php avec :

        Une liste déroulante pour la civilité (Mr ou Mme)
        Un champ texte pour le nom
        Un champ texte pour le prénom


        Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.</p>
    <div class="form-check">
        <form action="index.php" method="post">
            <select name="gender">
                <option type="text">Mr</option>
                <option type="text">Mme</option>
            </select>
            <label>Nom</label>
            <input type="text" name="lastname"></input>
            <label>Prénom</label>
            <input type="text" name="firstname"></input>
            <input type="submit">
        </form>
    </div>
    <p><?= $message ?></p>
</body>

</html>