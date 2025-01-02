<?php

namespace Testeru\News2\Functions;

use function Funct\Collection;

class Lesson13a
{
    public function getManWithLeastFriends(array $arr)
    {
        if (empty($arr)) {
            return null;
        }
        return \Funct\Collection\minValue($arr, function ($user) {
            return count($user['friends']);
        });
    }
}
