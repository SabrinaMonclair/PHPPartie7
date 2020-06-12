<?php


if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
    $message = $_POST['lastname'] . '<br>' . $_POST['firstname'];
} else {
    $message = 'Les paramètres d\'URL lastname et firstname ne sont pas présents';
}

echo 'firstname : ' . $_POST['firstname'] . '<br>';
echo 'lastname : ' . $_POST['lastname'] . '<br>';
