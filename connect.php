<?php
require_once __DIR__ . '/components/header.php';
?>

<body>
    <div class="container-connect">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="./controller/process-login.php" method="post">
            <div class="form-group mb-3">
              <label for="username">Nom d'utilisateur:</label>
              <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                required
              />
            </div>
            <div class="form-group mb-3">
              <label for="password">Mot de passe:</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
              />
            </div>
            <button type="submit" class="btn btn-block">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
require_once __DIR__ . '/components/footer.php';
?>
