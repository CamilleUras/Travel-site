<?php

require_once dirname(__DIR__) . '/function/db.func.php';

$conn = getPDOLink($config);

$sql = "SELECT * FROM users";

$requete = $conn->query($sql);

$users = $requete->fetchAll();

