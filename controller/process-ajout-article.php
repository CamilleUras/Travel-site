<?php
require_once "../function/db.func.php";

$dsn = getPDOLink($config);

// Récupérer les données du formulaire
$titre = $_POST['titre'];
$description = $_POST['description'];
$auteur = $_POST['auteur'];
$date = $_POST['date'];
$imgblog = $_POST['imgblog'];


// Préparer la requête SQL
$sql = "INSERT INTO articles (titre, description, date, imgblog, auteur) 
        VALUES (:titre, :description, :date, :imgblog, :auteur)";

// Préparation de la requête
$stm = $dsn->prepare($sql);

// Liaison des valeurs
$stm->bindParam(':titre', $titre);
$stm->bindParam(':description', $description);
$stm->bindParam(':auteur', $auteur);
$stm->bindParam(':date', $date);
$stm->bindParam(':imgblog', $imgblog);

// Exécuter la requête
$stm->execute();

// Redirection vers la page d'accueil
header('location: ../blog.php');
?>
