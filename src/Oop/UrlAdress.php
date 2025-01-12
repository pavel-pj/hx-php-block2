<?php

namespace Testeru\News2\Oop;

use Illuminate\Support\Collection;

class UrlAdress
{
   public array $urlScheme;
   public array $params =[];


    public function __construct(string $url){

        $this->urlScheme =  parse_url($url) ;
        $this->params = $this->formArrayParams();


    }

    public function getScheme():string {

       return $this->urlScheme['scheme'];

    }

    public function getHostName(){
        return $this->urlScheme['host'];
    }
    public function getPort(){
        if (array_key_exists('port', $this->urlScheme)) {
            return $this->urlScheme['port'];
        }
        return '';
    }

    public function getQueryParams()
    {

        return $this->params;
    }

    public function getQueryParam(string $key, $default = null)
    {
        if (array_key_exists($key, $this->params)) {
            return $this->params[$key];
        }
        return $default;

    }

    public function formArrayParams(): array
    {
        if (!array_key_exists('query',$this->urlScheme)) return [];
        $params = explode('&',$this->urlScheme[ 'query']);

        $result = array_merge(...array_map (function($item){
             $arr = explode('=', $item);
             return [$arr[0] => $arr[1]];
        },$params));

        return $result;

    }

    public function equals(UrlAdress $url){

        return $this == $url;


    }

    public function isEqual(string|array $el1, string|array $el2): bool{

        if (is_string($el2) && is_string($el1)) {
            if ($el1 === $el2) return true;
        }

        if(is_array($el2) && is_array($el1)){

            if (empty(array_diff($el2,$el1))) return true;

        }

        return false;
 
    }

}