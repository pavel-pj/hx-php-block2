<?php

namespace Testeru\News2\Basic;

class TestAddDigits
{

    public function addDigits(int $num): int
    {
        $sum = 0;



        $currentNumber = $num;
        $str = (string)$currentNumber;
        $len = strlen($str);
        $offset = 0;
        $letter = substr($str, $offset,1);
        $p = 1;
            do {


                if ($offset < $len) {
                    $sum += (int)$letter;
                     echo "letter  - $letter \n";
                    $offset ++;
                     echo "offset  - $offset \n";
                    $letter = substr($str, $offset, 1);
                     echo "sum : $sum \n";
                }
                else {
                    echo "We are here \n";
                    $currentNumber = $sum;
                    $sum=0;
                    $str = (string)$currentNumber;
                    $len = strlen($str);
                    $offset = 0;
                    $letter = substr($str, $offset, 1);
                }
                $p=$p+1;

            } while (!$this->isOneNumber($currentNumber));

        return $currentNumber;



    }

    public function isOneNumber($num)
    {

        if (strlen((string)$num) == 1) {
            echo "isOneNumber true- $num \n";
            return true;
        }
        echo "isOneNumber false- $num \n";
        return false;
    }





}