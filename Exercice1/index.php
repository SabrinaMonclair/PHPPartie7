<?php

var_dump($_GET);
var_dump(isset($_GET['lastname']));

if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $message = $_GET['lastname'] . '<br>' . $_GET['firstname'];
} else {
    $message = 'Les paramètres d\'URL lastname et firstname ne sont pas présents';
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>

<body>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>

    <div class="form-check">
        <form action="index.php" method="get">
            <label>Nom</label>
            <input type="text" name="lastname"></input>
            <label>Prénom</label>
            <input type="text" name="firstname"></input>
            <input type="submit">
        </form>
    </div>
</body>

</html>