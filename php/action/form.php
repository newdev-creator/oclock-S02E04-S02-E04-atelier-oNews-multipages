<?php
$request = [
    filter_input(INPUT_GET, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, 'message', FILTER_SANITIZE_SPECIAL_CHARS),
];

// On enregistre les données dans la BDD

// Rediriger vers une autre page
header("Location: ../contact.php?prenom=$request[0]&message=$request[1]");