<?php

namespace Testeru\News2\Basic;

class GetSameParity {

    public function filterAnagrams(string $needle, array $haystack){//: array {

        $result = array_filter($haystack, function ($item) use ($needle) {
            echo $item."\n";
            return  $this->isWordsEqual(
                $this->sortWord($item),
                $this->sortWord($needle)
            );

        });
        return array_values($result);
     }

    public function sortWord(string $word): string
    {
        $arrLetters = str_split($word,1);
        sort($arrLetters,SORT_STRING);
        $newWord = implode("",$arrLetters);
        return $newWord;
    }

    public function isWordsEqual(string $word1, string $word2){
        return $word1 === $word2;
    }


}