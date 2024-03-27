<?php
// Réglages fuseau horaire Fr
date_default_timezone_set('EUROPE/Paris');
setlocale(LC_TIME, 'fr_FR.UTF8', 'fra');

// Session start si la session n'existe pas
if (empty(session_id())) {
    session_start();
}

// Gestion des pages et des titres
$domaine = 'http://localhost/travel-blog/';
$index_page = $domaine;
$blog_page = $domaine . 'blog.php';
$destinations_page = $domaine . 'destinations.php';
$about_page = $domaine . 'about.php';
$register_page = $domaine . 'connect.php';

$index_name = 'Bienvenue sur Travel Blog!' ;
$blog_name   = 'Nos articles';
$destinations_name   = 'Nos destinations';
$about_name = 'A propos';
$register_name = 'Se connecter';

// URL courante
$current_url = $_SERVER['SCRIPT_NAME'];

// Génération du titre et de la classe en fonction de l'URL sur laquelle l'utilisateur est positionné
if (strpos($index_page, $current_url)!==false || strpos($index_page . 'index.php', $current_url)!==false) {
    $title = $index_name;
    $subtitle = 'Votre compagnon ultime pour explorer les merveilles du monde !';
} elseif (strpos($blog_page, $current_url)!==false) {
    $title = $blog_name;
    $subtitle = '';
} elseif (strpos($destinations_page, $current_url)!==false) {
    $title = $destinations_name;
    $subtitle = '';
} elseif (strpos($about_page, $current_url)!==false) {
    $title = $about_name;
    $subtitle = '';
} elseif (strpos($register_page, $current_url)!==false) {
    $title = $register_name;
    $subtitle = '';
} else {
    $title = 'Travel Blog';
    $subtitle = '';
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./assets/style/style.css" />
    <title><?= $title ?></title>
  </head>
  <body>
    <!-- DEBUT DE NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!-- Logo à gauche -->
        <a class="navbar-brand mx-auto" href="<?= $index_page; ?>">
          <img
            src="./assets/img/travelblog.png"
            alt="Logo du site"
            style="max-width: 150px"
          />
        </a>

        <!-- Bouton de basculement pour les petits écrans -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Liens de navigation -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <!-- Utilisez la classe "mx-auto" pour centrer les éléments -->
            <li class="nav-item">
              <a class="nav-link <?php if (strpos($index_page, $current_url) !== FALSE || strpos($index_page . 'index.php', $current_url) !== FALSE) echo 'active'; ?>" href="<?= $index_page; ?>">ACCUEIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (strpos($blog_page, $current_url) !== FALSE) echo 'active'; ?>" href="<?= $blog_page; ?>">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (strpos($destinations_page, $current_url) !== FALSE) echo 'active'; ?>" href="<?= $destinations_page; ?>">DESTINATIONS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if (strpos($about_page, $current_url) !== FALSE) echo 'active'; ?>" href="<?= $about_page; ?>">A PROPOS</a>
            </li>
          </ul>

        </div>
        <!-- Icone de profil à droite -->
        <?php 
        if (!isset($_SESSION['id'])) : ?>
        <ul class="navbar-nav justify-content-end" style="width: 160px;">
            <li class="nav-item">
            <a 
            class="nav-link"
            href="<?= $register_page; ?>"><i class="fas fa-user"></i>
            </a>
            </li>
        </ul>
        <?php endif; ?>
      </div>
    </nav>
    <!-- FIN DE NAV BAR -->

    <!-- IMAGE -->
    <div class="container-fluid" style="padding-top: rem">
        <img
        src="./assets/img/van.jpg"
        class="img-fluid"
        style="object-fit: cover; width: 100%; max-height: 400px"
        alt=""
      />
    </div>
    <!-- ZONE DE TEXTE ET IMAGE  -->
    <div class="container text-center" style="padding-top: 5rem">
      <h1>
        <span style="color: #ffd78a"
          ><strong><?= $title ?></strong></span><br/>
          <?= $subtitle ?>  <br/><br/>
      </h1>