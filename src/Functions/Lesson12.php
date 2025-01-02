<?php

namespace Testeru\News2\Functions;
use function Funct\Collection\flatten;

class Lesson12
{

    public function getMenCountByYear(array $arr)
    {

        $years = array_reduce($arr, function ($carry, $item) {

            if ( $item['gender']=='male') {
                $birthYear = date('Y', strtotime($item['birthday']));

                if (!array_key_exists($birthYear, $carry)) {

                    $carry[$birthYear] = 1;
                } else {
                    $carry[$birthYear] += 1;
                }
            }

            return $carry;

        },
            []);

        return $years;


    }


}