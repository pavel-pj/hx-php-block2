<?php

namespace Testeru\News2\Oop;
use Countable;


class Collection implements Countable
{
    private $items;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function count(): int
    {
        return count($this->items);
    }
}