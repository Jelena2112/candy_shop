<?php

function fieldsEmpty(string $name, int $price, int $amount): bool
{
    if ($name == "" || $price == "" || $amount == "") {
        return true;
    }
    return false;
}

function fieldsbuyerEmpty(string $name, string $address, string $city, string $phone): bool
{
    if ($name == "" || $address == "" || $city == "" || $phone == "") {
        return true;
    }
    return false;
}
