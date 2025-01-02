<?php

namespace Testeru\News2\Functions;

use Funct\Collection;
use Funct\Strings;

class Lesson7 {


    public function slugify($str)
    {
        $norm = \Funct\Strings\collapseWhitespace(trim($str));
        $arr = explode(" ",$norm);


        $arrLow = array_map(function ($item){
            return \Funct\Strings\toLower($item);
        },$arr);

        $arrNew = implode("-",$arrLow);

        return $arrNew;

    }



}