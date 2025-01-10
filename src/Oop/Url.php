<?php

namespace Testeru\News2\Oop;
use Testeru\News2\Contracts\UrlInterface;

class Url implements UrlInterface
{
    private array $schemeArray;
    private array $params = [];

    public function __construct(private string $url){

        $this->schemeArray = parse_url($this->url);
        parse_str($this->schemeArray['query'], $this->params);

    }

    public function getScheme(){

         return $this->schemeArray['scheme'];
    }
    public function getQueryParams(){
        return $this->params;
    }
    public function getQueryParam($key, $defaultValue = null){

        if (array_key_exists($key, $this->params)){
            return $this->params[$key];
        }
        return $defaultValue;


    }
    public function getHost(){
        return $this->schemeArray['host'];
    }



}