<?php

namespace Testeru\News2\Functions;
use function Funct\Collection\flatten;

class Lesson11
{
    public function getGirlFriends(array $arr): array
    {
        $arrFriends = array_map (fn ($item) => $item['friends'] ,$arr);

        $arrNormFriends =  \Funct\Collection\flatten($arrFriends,1);

        $arrGirls = array_values(array_filter($arrNormFriends, fn ($item) => $item['gender'] == 'female'));

        return $arrGirls;
    }


}