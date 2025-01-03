<?php

namespace Testeru\News2\Assertions;

function capitalize($text)
{
    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
 