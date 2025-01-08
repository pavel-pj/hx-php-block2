<?php

namespace Testeru\News2\Tree;

function flatten(array $arr)
{
    $acc = [];
    sub_flatten($arr,$acc);
    
    return $acc;

}

function sub_flatten(array $arr,&$acc)
{
   array_walk_recursive($arr, function (&$item) use (&$acc) {
         $acc[] =  $item;
    } );

 }