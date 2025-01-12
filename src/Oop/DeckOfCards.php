<?php

namespace Testeru\News2\Oop;

use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;

class DeckOfCards
{
    private Collection $deck;

    public function __construct( array $deck ){

         $this->deck = collect($deck)->map(function($item){
            return [$item,$item,$item,$item];
        })->flatten();

    }



    public function getShuffled()
    {

        $shuffled = $this->deck->shuffle();
        return $shuffled->all();

    }


}