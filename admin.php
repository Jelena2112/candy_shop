<?php

require "app/base.php";

$candies = getAllCandies();


?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method="post" action="app/add_candy.php">

    <input name="name" type="text" placeholder="name">
    <input name="price" type="number" placeholder="price">
    <input name="amount" type="number" placeholder="amount">
    <button>submit</button>


</form>


<?php foreach ($candies as $candy) : ?>
    <p><?= $candy['name'] ?></p>
    <p><?= $candy['price'] ?></p>
    <p><?= $candy['amount'] ?></p>
    <a href="edit.php?id=<?= $candy['id'] ?>">Edit</a>
    <a href="app/delete.php?id=<?= $candy['id'] ?>">Delete</a>
<?php endforeach; ?>


</body>
</html>