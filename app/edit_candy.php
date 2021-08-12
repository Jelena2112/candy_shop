<?php

if (!isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_POST["amount"]) || !isset($_POST["id"]))
{
    die("djsljdls");
}

require "functions.php";

if (fieldsEmpty($_POST["name"] , $_POST["price"], $_POST["amount"]))
{
    die('helo');
}

require "base.php";

$name = $_POST['name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$id = $_POST['id'];


editCandy($name, $price, $amount, $id);

header("Location: ../admin.php");
