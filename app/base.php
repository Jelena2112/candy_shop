<?php

function db_connect()
{
    $hosting = "localhost";
    $user = "root";
    $password = "";
    $db = "candy_shoop";

    return mysqli_connect($hosting, $user, $password , $db);
}

