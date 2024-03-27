<?php
require_once "../function/db.func.php";

$id = $_GET["id"];

echo "
<form action='update.php?id=$id' method='post'>

        <label for=''>Mail</label>
        <input type='text' name='email'>

        <label for=''>Firstname</label>
        <input type='text' name='firstname'>

        <label for=''>Lastname</label>
        <input type='text' name='lastname'>

        <input type='submit'>

    </form>
";

?>