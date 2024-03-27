<?php 
require_once "./function/db.func.php";
require_once  "./controller/users.php";
require_once  "./components/header.php";

getPDOLink($config);

// Vérifier si la session de l'administrateur est active
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Rediriger vers la page de connexion si l'administrateur n'est pas connecté
    header('Location: process-login.php');
    exit();
}

?>

<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Created</th>
      <th scope="col">Status</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col offset-2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php

  foreach($users as $user):
?>
      <tr>
        <td>
          <img style="font-size: 40px; vertical-align: middle; margin-right: 10px;" src="<?php echo $user['imgurl']; ?>" alt="<?php echo $user['firstname'] . ' ' . $user['lastname']; ?>">
          <div style="display: inline-block; vertical-align: middle;">
            <p style="margin: 0;"><strong><?php echo $user['firstname']; ?> <br> </strong><?php echo $user['lastname']; ?></p>
            <p style="margin: 0; font-style: italic;"><?php echo $user['role']; ?></p>
            <p style="margin: 0; font-style: italic;"><?php echo $user['sex']; ?></p>
          </div>
        </td>
        <td><?php echo $user['created_at']; ?></td>
        <td>
        <input type="checkbox" class="btn-check" id="status" name="status" <?php echo ($user['status'] == 'active') ? 'checked' : ''; ?>>
<label class="btn <?php echo ($user['status'] == 'active') ? 'btn-success' : 'btn-secondary'; ?> btn-outline" for="status">
    <?php echo ucfirst($user['status']); ?>
</label>
<br>
        </td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['password']; ?></td>
        <td>
          <a href="./controller/detail.php?id=<?php echo $user['id']; ?>">
          <i class="fa-solid fa-magnifying-glass-plus" style="font-size: 20px; color: blue"></i>
          <a href="./controller/updateform.php?id=<?php echo $user['id']; ?>">
          <i class="fa-solid fa-pencil" style="font-size: 20px; color: blue"></i>
          </a>
          <a href="./controller/delete.php?id=<?php echo $user['id']; ?>">
          <i class="fa-solid fa-trash" style="font-size: 20px; color: red"></i>
          </a>
        <td>
        <a href="ajout-article.php?user_id=<?php echo $user['id']; ?>" class="btn">CRÉER UN ARTICLE</a>
  </td>
  </td>
      </tr>

<?php endforeach ?>     
</table>

<a href="ajout.php" class="btn">AJOUTER UN ADMIN</a>
<a href="article-view.php" class="btn">LES ARTICLES</a>
<a href="index.phtml" class="btn">SITE</a>

</body>
</html>
