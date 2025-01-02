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
        $letter = substr($str, $offset, 1);
        $p = 1;
        do {
            if ($offset < $len) {
                $sum += (int)$letter;
                $offset++;
                $letter = substr($str, $offset, 1);
            } else {
                $currentNumber = $sum;
                $sum = 0;
                $str = (string)$currentNumber;
                $len = strlen($str);
                $offset = 0;
                $letter = substr($str, $offset, 1);
            }
            $p = $p + 1;
        } while (!$this->isOneNumber($currentNumber));
        return $currentNumber;
    }

    public function isOneNumber($num)
    {
        if (strlen((string)$num) == 1) {
            return true;
        }
        return false;
    }
}
