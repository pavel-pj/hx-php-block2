<?php

namespace Testeru\News2\Oop;
use Illuminate\Support\Collection;

function normalizer(array $arr )
{



    $col = collect($arr)->map(function ($item) {
        return [
            'name'=>trim(strtolower($item['name'])),
            'country'=>trim(strtolower($item['country']))];
    })
        ->unique()
        ->sortBy('name')->values()
        ->toArray() ;


    $result = array_reduce($col, function ($carry, $item) {


        $carry[$item['country']][] = $item['name'];


        return $carry;


    },[]);


    return $result;

}