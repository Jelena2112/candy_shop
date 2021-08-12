<?php

if (!isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_POST["amount"]))
{
    die("djsljdls");
}

require "functions.php";

if (!fieldsEmpty($_POST["name"] , $_POST["price"], $_POST["amount"]))
{
    die('kjkjkj');
}

require "base.php";

addCandy($_POST["name"] , $_POST["price"], $_POST["amount"]);
