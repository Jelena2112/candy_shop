<?php

function db_connect()
{
    $hosting = "localhost";
    $user = "root";
    $password = "";
    $db = "candy_shoop";

    return mysqli_connect($hosting, $user, $password , $db);
}


function addCandy(string $name, int $price, int $amount) : void
{
    $connection = db_connect();
    $name = $connection->real_escape_string($name);
    $price = $connection->real_escape_string($price);
    $amount = $connection->real_escape_string($amount);


    $connection->query("INSERT INTO candies (name, price, amount) VALUES ('$name' , $price, $amount)");
    $connection->close();
}
