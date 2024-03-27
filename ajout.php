<?php
require_once "./components/header.php";
require_once "./function/db.func.php";
?>

<form class="row g-3" action="./controller/traitementform.php" method="POST">
  <div class="col-md-4">
    <label for="image" class="form-label">Url de l'image</label>
    <input type="text" id="image" name="imgurl" class="form-control">
  </div>
  <div class="col-md-4">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" id="firstname" name="firstname" class="">
  </div>
  <div class="col-md-4">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" id="lastname" name="lastname" class="">
  </div>
  <div class="col-md-4">
    <label for="role" class="form-label">Role</label>
    <input type="text" id="role" name="role" class="">
  </div>
  <div class="col-md-4">
    <label for="sex" class="form-label">Sex</label>
    <input type="text" id="sex" name="sex" class="">
  </div>
  <div class="col-md-4">
    <label for="created_at" class="form-label">Created At</label>
    <input type="date" id="created_at" name="created_at" class="">
  </div>
<div class="col-md-4">
    <label for="status" class="form-label">Status</label>
    <select id="status" name="status" class="form-select">
        <option value="active">Actif</option>
        <option value="inactive">Inactif</option>
    </select>
</div>
  <div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="">
  </div>
  <div class="col-md-4">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" name="password" class="">
  </div>
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
