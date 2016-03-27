<?php

// url du serveur
$servername = "localhost";
// Nom d'utilisateur Base de données
$username = "root";
// MDP utilisateur
$password = "";
// Nom de la base de donnée
$dbname = "Dynamo";

$co = mysqli_connect($servername, $username, $password, $dbname);

$text = $_GET['l'];
?>
