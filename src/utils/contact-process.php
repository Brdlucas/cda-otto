<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'email' => $_POST['email'] ?? '',
        'nom' => $_POST['nom'] ?? '',
        'prenom' => $_POST['prenom'] ?? '',
        'sujet' => $_POST['sujet'] ?? '',
        'message' => $_POST['message'] ?? '',
    ];

    header('Location: ../../home.php');
} else {
    header('Location: /');
}