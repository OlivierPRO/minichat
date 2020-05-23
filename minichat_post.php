<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=Test;charset=utf8', 'olivier', '6156');
} catch (Exception $e) {
    die('erreur : ' . $e->getMessage());
}


$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

header('location: minichat.php');
?>