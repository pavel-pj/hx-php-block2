<?php

namespace Testeru\News2\Functions;

use Funct\Strings;

class Lesson8 {

    public function s2(){
        echo "fasefaesfFWEFEWF";
    }

    public function testStr(string $text): ?string
    {
        $last = function ($str) {
            if (strlen($str) == 0) {
                return null;
            } else {
                return  substr($str, -1);
            }
        };
        return $last($text);
         


    }


}