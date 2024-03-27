<?php
require_once "../function/db.func.php";

// Récupère l'ID de l'utilisateur à supprimer à partir des paramètres de la requête GET
$id = $_GET['id'];

try {
    // Obtient l'objet PDO en appelant la fonction getPDOLink()
    $conn = getPDOLink($config);

    // Requête SQL pour supprimer l'utilisateur avec un paramètre de liaison ":id_value"
    $sql = "DELETE FROM articles WHERE id = :id_value ";
    
    // Prépare la requête SQL pour exécution
    $stmt = $conn->prepare($sql);
    
    // Lie le paramètre ":id_value" à la valeur de l'ID récupéré de la requête GET
    $stmt->bindParam(':id_value', $id, PDO::PARAM_INT);
    
    // Exécute la requête SQL préparée
    $stmt->execute();
    
    header('Location: ../article-view.php');
    exit();
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
