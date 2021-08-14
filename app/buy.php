<?php
if (!isset($_POST["name"]) || !isset($_POST["address"]) || !isset($_POST["city"]) || !isset($_POST["phone"]) || !isset($_GET['id'])) {
    die("djsljdls");
}

require "functions.php";

if (fieldsbuyerEmpty($_POST['name'], $_POST['address'], $_POST['city'], $_POST['phone'])) {
    die("buyer fields are empty");
}
require "base.php";
$name = $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$id = $_GET['id'];

createbuyerInformation($name, $address, $city, $phone, $id);

//if (!isset($_GET["name"]) || !isset($_GET["price"]) || !isset($_GET["amount"]) || !isset($_GET["id"]))
//{
//    die("djsljdls");
//}
//
//require "base.php";
//
//$name = $_GET['name'];
//$price = $_GET['price'];
//$amount = $_GET['amount'];

//
//
//buyCandies($name, $price, $amount, $id);
//

