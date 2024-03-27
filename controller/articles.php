<?php

require_once dirname(__DIR__) . '../function/db.func.php';

$conn = getPDOLink($config);

$sql = "SELECT * FROM articles";

$requete = $conn->query($sql);

$articles = $requete->fetchAll(PDO::FETCH_ASSOC);