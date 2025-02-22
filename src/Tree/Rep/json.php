<?php

namespace Testeru\News2\Tree\Rep;

function stringify(
    $data,
    string $symbol = ' ',
    int $indent = 1  )
{

    return iterate($data, str_repeat($symbol,$indent),0);

}


function iterate(
    $value,
    string $indent,
    int $level,
    $key = null)
{
    if (
        (gettype($value) == 'string' or
        gettype($value) == 'integer' or
        gettype($value) == 'double')
        and (!$key) ){
        return $value;
    }

    if ( gettype($value)=='boolean'  and !$key ) {
        if ($value) return 'true';
        return 'false';
    }




    if (!is_array($value) ) {
        $thisValue = $value;
        if (gettype($value) == 'boolean') {
            if ($value) {
                $thisValue = 'true';
            } else {
                $thisValue = 'false';
            }
        }
        return str_repeat($indent,$level) ."{$key}: {$thisValue}";
    }

    $result = '';
    $childs  = array_map (function ($value,$key) use ($indent, $level) {
        return  iterate($value,$indent,$level+1,$key) ;
    },$value , array_keys($value) );

    if ($key) {
        $result = str_repeat($indent,$level). "{$key}: {\n" . implode("\n", $childs) . "\n".str_repeat($indent,$level)."}";
    }
    else {
        $result = "{\n" . implode("\n", $childs) . "\n}";
    }
    return $result;

}


