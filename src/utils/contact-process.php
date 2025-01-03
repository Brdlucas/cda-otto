<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'email' => $_POST['email'] ?? '',
        'nom' => $_POST['nom'] ?? '',
        'prenom' => $_POST['prenom'] ?? '',
        'sujet' => $_POST['sujet'] ?? '',
        'message' => $_POST['message'] ?? '',
        'rgpd' => $_POST['rgpd'] ?? '',
    ];

    var_dump($data);;
    die();

    header('Location: /../../home.php');
} else {
    header('Location: /../../home.php');
}