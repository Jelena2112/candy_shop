<?php

function fieldsEmpty(string $name, int $price , int $amount): bool
{
    if ($name == "" || $price == "" || $amount == "")
    {
        return true;
    }
    return false;
}
