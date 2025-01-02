<?php

namespace Testeru\News2\Functions;

use function Funct\Collection;

class Lesson14
{
    public function without(array $arr, mixed ...$values)
    {
        $result = array_filter($arr, function ($item) use ($values) {
            return !in_array($item, $values, true);
        });

        return array_values($result);
    }
}
