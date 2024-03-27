<?php
require_once "../function/db.func.php";

$id = $_GET["id"];

echo "
<form action='update-article.php?id=$id' method='post'>

        <label for=''>Titre</label>
        <input type='text' name='titre'>

        <label for=''>Description</label>
        <input type='text' name='description'>

        <label for=''>Image</label>
        <input type='text' name='imgblog'>

        <input type='submit'>

    </form>
";

?>
