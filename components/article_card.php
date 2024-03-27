<?php

require_once dirname(__DIR__) . '/function/db.func.php';
require_once dirname(__DIR__) . '/controller/articles.php';

?>

<div class="w-100 d-flex justify-content-around align-items-center">

<?php

foreach($articles as $article): ?>

      <div class="w-25 card mb-4">
        <img src="<?php echo $article['imgblog']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $article['titre']; ?></h5>
            <p class="card-text"><?php echo $article['description']; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo $article['auteur']; ?></small></p>
            <p class="card-text"><small class="text-muted"><?php echo $article['date']; ?></small></p>
            <a href="#" class="btn">Lire l'article</a>
          </div>
      </div>

      <?php endforeach ?>

</div>