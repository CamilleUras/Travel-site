<?php
require_once "../function/db.func.php";

// Obtenir une connexion PDO
$conn = getPDOLink($config);

// Récupérer les données du formulaire
$imgurl = $_POST['imgurl'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$role = $_POST['role'];
$sex = $_POST['sex'];
$created_at = $_POST['created_at'];
$status = $_POST['status'];
$email = $_POST['email'];
$password = $_POST['password'];

// Préparer la requête SQL
$sql = "INSERT INTO users (imgurl, firstname, lastname, role, sex, created_at, status, email, password) 
        VALUES (:imgurl, :firstname, :lastname, :role, :sex, :created_at, :status, :email, :password)";

// Préparation de la requête
$stm = $conn->prepare($sql);

// Liaison des valeurs
$stm->bindParam(':imgurl', $imgurl);
$stm->bindParam(':firstname', $firstname);
$stm->bindParam(':lastname', $lastname);
$stm->bindParam(':role', $role);
$stm->bindParam(':sex', $sex);
$stm->bindParam(':created_at', $created_at);
$stm->bindParam(':status', $status);
$stm->bindParam(':email', $email);
$stm->bindParam(':password', $password);

// Exécuter la requête
$stm->execute();

echo "New record created successfully";

// Redirection vers la page d'accueil
header('location: ../dashboard.php');
?>
