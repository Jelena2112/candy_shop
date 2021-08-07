<?php


if (!isset($_POST["name"]) || !isset($_POST["price"]) || !isset($_POST["amount"]))
{
    die("djsljdls");
}

if ($_POST["name"] == "" || $_POST["price"] == "" || $_POST["amount"] == "")
{
    die("dnnnnnnn");
}

require "base.php";

addCandy($_POST["name"] , $_POST["price"], $_POST["amount"]);
