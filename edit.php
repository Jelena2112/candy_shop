<?php

require "app/base.php";

if(!isset($_GET["id"]))
{
    die("sjdksdjksdj");
}

$result = getCandi($_GET["id"]);
?>
<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>

    <form method="post" action="app/edit_candy.php">

        <input name="name" type="text" value=" <?= $result['name']  ?>">
        <input name="price" type="number" value="<?= $result['price'] ?>">
        <input name="amount" type="number" value="<?= $result['amount'] ?>">
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <button>submit</button>


    </form>

    </body>

</html>
