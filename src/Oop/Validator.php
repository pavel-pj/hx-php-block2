<?php

namespace Testeru\News2\Oop;

class Validator
{

    public function validate(string $pass, int $minLength = 8, array $options = null): null|array
    {
        $errorMessages = [];

        if (strlen($pass) < $minLength) {
            $errorMessages ['minLength' ] = 'too small';

        }

        if (!empty($options) and array_key_exists('containNumbers',$options)) {
            if($options['containNumbers'] == 'true'){
                $arr = str_split($pass);
                $nums = array_filter($arr, function($item){
                     return is_numeric($item);
                 });
                if (count($nums) == 0) {
                    $errorMessages ['containNumbers'] ='should contain at least one number';
                }
            }
        }

        return $errorMessages;

    }




}