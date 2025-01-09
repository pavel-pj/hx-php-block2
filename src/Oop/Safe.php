<?php

namespace Testeru\News2\Oop;
use Exception;

function json_decode($json, $assoc = false)
{
    $result = \json_decode($json, $assoc);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Ошибочка вышла");
    }
    return $result;

}