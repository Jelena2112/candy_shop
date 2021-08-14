<?php
require "app/base.php";

$candies = getAllCandies();

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>



<?php foreach ($candies as $candy) : ?>
    <p><?= $candy['name'] ?></p>
    <p><?= $candy['price'] ?></p>
    <p><?= $candy['amount'] ?></p>
    <a href="buy.php?id=<?= $candy['id'] ?>">buy</a>
<?php endforeach; ?>


</body>
</html>