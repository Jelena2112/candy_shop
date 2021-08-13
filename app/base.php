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

function getAllCandies() : array
{
    $connection = db_connect();
    $result = $connection->query("SELECT * FROM candies");
    $connection->close();
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getCandi(int $id)
{
    $connection = db_connect();
    $id = $connection->real_escape_string($id);
    $result = $connection->query("SELECT * FROM candies WHERE id = $id LIMIT 1");
    $connection->close();
    return $result->fetch_assoc();
}

function editCandy(string $name, int $price, int $amount,int $id) :void
{
    $connect = db_connect();
    $id = $connect->real_escape_string($id);
    $name = $connect->real_escape_string($name);
    $price = $connect->real_escape_string($price);
    $amount = $connect->real_escape_string($amount);
    $connect->query("UPDATE candies SET name='$name' , price=$price, amount=$amount WHERE id=$id");
    $connect->close();
}

function deleteCandy(int $id) :void
{
    $connect = db_connect();
    $id = $connect->real_escape_string($id);
    $connect->query("DELETE FROM candies WHERE id = $id");
    $connect->close();
}