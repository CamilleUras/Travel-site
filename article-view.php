<?php
require_once "./function/db.func.php";
require_once "./controller/articles.php";
require_once "./components/header.php";
?>

<div class="container">
  <h1 class="text-center">ARTICLE PREVIEW</h1>
  <?php foreach ($articles as $article) { ?>
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card mb-4">
          <img src="<?php echo $article['imgblog']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $article['titre']; ?></h5>
            <p class="card-text"><?php echo $article['description']; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $article['auteur']; ?></small></p>
            <p class="card-text"><small class="text-muted"><?php echo $article['date']; ?></small></p>
            <a href="#" class="btn">Lire l'article</a>
            <a href="./controller/update-article-form?id=<?php echo $article['id']; ?>" class="btn">Modifier</a>
            <a href="./controller/delete-article.php?id=<?php echo $article['id']; ?>" class="btn">Supprimer</a>
          </div>
        </div>
      </div>
    </div>
<?php } ?>

  <a href="./index.php" class="btn">RETOUR PANNEAU ADMIN</a>
  <a href="./blog.php" class="btn">RETOUR BLOG</a>
  </div>