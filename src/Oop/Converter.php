<?php

namespace Testeru\News2\Oop\Converter;
use stdClass;

function toStd(array $arr): stdClass
{
    $stdClass = new stdClass();

    foreach (array_keys($arr) as $key) {
        $stdClass->$key = $arr[$key];
    }

    return $stdClass;

    
}