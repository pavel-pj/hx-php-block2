<?php

namespace Testeru\News2\Oop;

class Truncater
{
    const OPTIONS = [
        'separator' => '...',
        'length' => 200,
    ];

    private string $length ;
    private string $separator;

    public function __construct(array $options = []){
        (array_key_exists('length', $options))
            ? $this->length = $options['length']
            : $this->length = self::OPTIONS['length'];
        (array_key_exists('separator', $options))
            ? $this->separator = $options['separator']
            : $this->separator = self::OPTIONS['separator'];
    }

    public function truncate($string, array $options = [])
    {
           $length = $this->length;
           $separator = $this->separator;

           if (array_key_exists('length', $options)) {
               $length = $options['length'];
           }
           if (array_key_exists('separator', $options)) {
               $separator = $options['separator'];
           }





        if ($length < strlen($string)){

            return substr($string, 0, $length) . $separator;
        }
        else {
            return $string;
        }


    }

}