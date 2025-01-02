<?php

namespace Testeru\News2\Functions;

use function Funct\Collection\firstN;

class Lesson9
{
    public function takeOldest(array $users, int $limit = 1)
    {
        usort($users, function ($a, $b) {
            return strtotime($a['birthday']) <=> strtotime($b['birthday']);
        });

        return \Funct\Collection\firstN($users, $limit);
    }
}
