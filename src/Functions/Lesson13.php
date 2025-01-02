<?php

namespace Testeru\News2\Functions;

use function Funct\Collection\flatten;

class Lesson13
{
    public const FREE_EMAIL_DOMAINS = [
        'gmail.com', 'yandex.ru', 'hotmail.com'
    ];
    public function getFreeDomainsCount(array $arr)
    {
        $normArray = array_map(fn ($item) => explode('@', $item)[1], $arr);

         $filtered = array_filter($normArray, function ($item) {
             return in_array($item, $this::FREE_EMAIL_DOMAINS);
         });

         $pivot = array_reduce($filtered, function ($carry, $item) {

            if (!array_key_exists($item['domain'], $carry)) {
                 $carry[$item] = 1;
            } else {
                 $carry[$item] += 1;
            }
             return $carry;
         }, []);
        return  $filtered;
    }
}
