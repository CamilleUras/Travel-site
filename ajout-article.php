<?php 
require_once "./function/db.func.php";
require_once  "./controller/articles.php";
require_once "./components/header.php";
?>

<form action="./controller/process-ajout-article.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="titre">Titre de l'article</label>
    <input type="text" class="form-control" id="titre" name="titre" required>
  </div>
  <div class="form-group">
    <label for="description">Description de l'article</label>
    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
  </div>
  <div class="form-group">
  <label for="image" class="form-label">Url de l'image</label>
    <input type="text" id="image" name="imgblog" class="form-control">
  </div>
  <div class="form-group">
  <label for="date" class="form-label">Date</label>
    <input type="date" id="date" name="date" class="">
  </div>
  <div class="form-group">
    <label for="auteur">Auteur</label>
    <textarea class="form-control" id="auteur" name="auteur" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn">Ajouter l'article</button>
</form>
