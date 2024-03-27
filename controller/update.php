<?php

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users_bank';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sqlQuery = "UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email WHERE id = :id";
        $stmt = $conn->prepare($sqlQuery);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();
        echo "Update réussi";
        header('Location: ../dashboard.php');
        exit();

    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
