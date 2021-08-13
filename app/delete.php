<?php
if (!isset($_GET["id"]))
{
    die("djsljdls");
}

require "base.php";

deleteCandy($_GET['id']);

header("Location: ../admin.php");