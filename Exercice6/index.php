<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
</head>

<body>
    <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  
N'utiliser qu'une seule page.</p>
 


    
//var_dump($_POST);

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

<?
if (isset($_POST['gender']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
    $message = $_POST['gender'] . '<br>' . $_POST['lastname'] . '<br>' . $_POST['firstname'];
}
 else { <form action="index.php" method="post">
 }
 ?>


</body>

</html>