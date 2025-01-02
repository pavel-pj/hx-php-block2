<?php

namespace Testeru\News2\Functions;

use function Funct\Collection\flatten;

class Lesson10
{
    public function getChildren(array $users): array
    {
        $arr = array_map(function ($user) {
            return $user['children'];
        }, $users);

        $arrNorm = \Funct\Collection\flatten($arr, 1);

        return $arrNorm;
    }
}
