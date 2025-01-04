<?php

namespace Testeru\News2\Tree;

function removeFirstLevel(array $arr):array
{

    return array_merge(...array_filter($arr, function ($item) {
        return is_array( $item);
    }));

}