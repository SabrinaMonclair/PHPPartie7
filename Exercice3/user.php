<?php


if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $message = $_GET['lastname'] . '<br>' . $_GET['firstname'];
} else {
    $message = 'Les paramètres d\'URL lastname et firstname ne sont pas présents';
}

echo 'firstname : '.$_GET['firstname'].'<br>';
echo 'lastname : ' .$_GET['lastname'].'<br>';
