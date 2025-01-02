<?php

namespace Testeru\News2\Functions;
use function Funct\Collection\flatten;

class Lesson13
{

    const FREE_EMAIL_DOMAINS = [
        'gmail.com', 'yandex.ru', 'hotmail.com'
    ];

    public function getFreeDomainsCount(array $emails)
    {


        $domains = array_map(fn($email) => explode('@', $email)[1], $emails);

       // $normArray= array_map(fn ($item) =>explode('@',$item);
       // $domains = array_map( fn($email) => explode('@', $email)[1], $arr);
        print_r($domains);
        /*

            $domen=$domenArr[1];
            return ['domain'=>$domen,'email'=>$item];
        },$arr);

        $filtered = array_filter($normArray, function ($item) {
            return in_array($item['domain'],$this::FREE_EMAIL_DOMAINS);
        });

        $pivot = array_reduce($filtered, function ($carry, $item) {

            if (!array_key_exists($item['domain'], $carry)) {
                $carry[$item['domain']] = 1;
            }else {
                $carry[$item['domain']] += 1;
            }


            return $carry;


        },[]);


         print_r( $pivot);
*/
    }






}