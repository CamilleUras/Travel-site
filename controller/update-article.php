<?php

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $imgblog = $_POST['imgblog'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users_bank';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlQuery = "UPDATE articles SET titre = :titre, description = :description, imgblog = :imgblog WHERE id = :id";
        $stmt = $conn->prepare($sqlQuery);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':imgblog', $imgblog, PDO::PARAM_STR);

        $stmt->execute();
        echo "Update réussi";
        header('Location: ../dashboard.php');
        exit();

    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
