<?php

namespace Testeru\News2\Functions;

use function Funct\Collection;
use function Functional\reduce_left;
use function Functional\map;
use function Functional\flatten;

class Lesson15
{
// BEGIN
    function duplicateEach(array $items)
    {
        return reduce_left(
            map($items, fn($item) => [$item, $item]),
            function ($value, $index, $coll, $acc) {
                return [...$acc, ...$value];
            },
            []
        );
    }

    function enlargeArrayImage($matrix)
    {
        $horizontallyStretched = map($matrix, fn($col) => $this->duplicateEach($col));
        return $this->duplicateEach($horizontallyStretched);
    }


}