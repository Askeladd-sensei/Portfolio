<?php
// connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "demek");
$conn = mysqli_connect("localhost", "root", "", "demek");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
