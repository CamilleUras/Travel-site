<?php
session_start();
// Vérifier les informations d'identification (par exemple, si l'utilisateur est admin)
if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
    // Les informations d'identification sont correctes, démarrer la session
    $_SESSION['admin'] = true;
    // Rediriger vers la page d'administration
    header('Location: ../dashboard.php');
    exit();
} else {
    // Les informations d'identification sont incorrectes, renvoyer à la page de connexion avec un message d'erreur
    header('Location: /login.php?error=1');
    exit();
}
