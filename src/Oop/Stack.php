<?php

namespace Testeru\News2\Oop\Stack;

use Ds\Stack;

function compare(string $str1,string $str2): bool
{

    $strS1 = getString($str1);
    $strS2 = getString($str2);

    if ($strS1 === $strS2) {
        return true;
    }

    return false;

}

function getString(string $str): string
{
    $stack = new Stack();
    $chr = "#";

    for ($i = 0; $i < strlen($str); $i++) {

        $ch = $str[$i];
        if ($ch == $chr) {
            ($stack->count() > 0) ? $stack->pop() : '';

        }else {
            $stack->push($ch);
        }

    }
    $arr = implode($stack->toArray());

    return $arr;
}
