<?php
var_dump($data);
/**
 * Liste des véhicules
 * Tableau associatif avec les clés :
 *      - type : le type de véhicule
 *      - nom : le nom du véhicule
 *      - nombre_de_portes : le nombre de portes du véhicule
 *      - energie_du_moteur : l'énergie du moteur du véhicule
 *      - prix : le prix du véhicule à la journée
 */

$categorieVoitures = json_decode(file_get_contents(__DIR__ . '/../data/cars.json'), true);

/**
 * Fonction qui retourne les véhicules correspondant au type
 * @param string $type Le type de véhicule
 * @param array $categories La liste des véhicules
 * @return array Les véhicules correspondant au type
 */

/**
 * Traitement du formulaire
 * Récupération des information du POST
 * Préparation du mail
 * Envoi du mail
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'debut' => $_POST['debut'] ?? '',
        'fin' => $_POST['fin'] ?? '',
        'identite' => $_POST['identite'] ?? '',
        'email' => $_POST['email'] ?? '',
        'telephone' => $_POST['telephone'] ?? '',
    ];

    if (!empty($data['vehicle_type']) && in_array($data['vehicle_type'], array_keys($categorieVoitures))) {
        $data['vehicles'] = $categorieVoitures[$data['vehicle_type']] ?? '';
    }

    foreach ($_POST as $key => $value) {
        if (!in_array($key, array_keys($data))) {
            $data['type'] = $key;
            $data['vehicles'] = $categorieVoitures[$key] ?? '';
        }
    }

    // Préparation du mail


    // Envoi du mail


    // Redirection 
    header('Location: ../../home.php');
} else {
    header('Location: /');
}