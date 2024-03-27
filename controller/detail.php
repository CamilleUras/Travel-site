<?php
require_once "../function/db.func.php"; // Inclure le fichier de connexion à la base de données
require_once "../controller/users.php"; // Inclure le fichier où vous avez défini vos utilisateurs

// Vérifier si un ID d'utilisateur est fourni dans l'URL
if(isset($_GET['id'])) {
    // Récupérer l'ID de l'utilisateur depuis l'URL
    $userId = $_GET['id'];

    // Recherche de l'utilisateur dans votre tableau d'utilisateurs (simulé ici)
    $user = null;
    foreach($users as $u) {
        if($u['id'] == $userId) {
            $user = $u;
            break;
        }
    }

    // Vérifier si l'utilisateur existe
    if($user) {
        // Afficher les détails de l'utilisateur
        echo "<h1>Détails de l'utilisateur</h1>";
        echo "<p>Nom: " . $user['firstname'] . ' ' . $user['lastname'] . "</p>";
        echo "<p>Rôle: " . $user['role'] . "</p>";
        echo "<p>Sexe: " . $user['sex'] . "</p>";
        echo "<p>Date de création: " . $user['created_at'] . "</p>";
        echo "<p>Statut: " . $user['status'] . "</p>";
        echo "<p>Email: " . $user['email'] . "</p>";
        // Ne jamais afficher le mot de passe dans les détails de l'utilisateur pour des raisons de sécurité
    } else {
        echo "<p>L'utilisateur avec l'ID " . $userId . " n'existe pas.</p>";
    }
} else {
    echo "<p>Aucun ID d'utilisateur n'a été fourni.</p>";
}
?>
