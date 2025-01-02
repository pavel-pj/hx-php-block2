<?php

namespace Testeru\News2\CollectionsTest;

use Illuminate\Support\Collection;

class CollectionsPlay
{
    
    protected  Collection $data ;

    public function __construct(){
        $this->data = collect([
            ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
            ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
            ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
            ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
            ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
            ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
            ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
            ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
            ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
            ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
            ]
        );
    }
    

    public function mainProgramm(){

        print_r ( $this->getMap($this->data));
       // print_r($this->getFiltered($this->data));

    }

    public function getMap(Collection $col): Collection {

         $col2= $col->map(function(array $item ){
             $age = time();//date('Y',     strtotime($item['birthday']) ());
             return  ['age'=>$age,$item['birthday'],'diff'=>date(
                 'Y',time()-strtotime($item['birthday']))];

         });

         return $col2;//->flatten(2);


    }

    public function getFiltered (Collection $col): Collection {

        $col2= $col->filter(function($item){
            $age = date('Y',  time() -  strtotime($item['birthday']));
            return ($item['gender'] == 'male' && $age >25 ) ;
        });
        return $col2;


    }

    public function lesson13()//:Collection
    {



        $domains = collect([
          'gmail.com', 'yandex.ru', 'hotmail.com'
        ]);

        $emails= collect( [
            'info@gmail.com',
            'info@yandex.ru',
            'info@hotmail.com',
            'mk@host.com',
            'support@hexlet.io',
            'key@yandex.ru',
            'sergey@gmail.com',
            'vovan@gmail.com',
            'vovan@hotmail.com'
        ]);

       /// if( $domains->contains(fn(string $value,int $key) => $value =='gmail.com'))
        //    echo "YES\n";






        $result = $emails->map( fn($email) => explode('@',$email)[1])
                         ->filter(function ($item) use ($domains){
                             return $domains->contains($item);
                         })->reduce(function($carry,$item){

                             if( $carry->has($item)) {
                                 $carry[$item] +=1;
                             } else {
                                 $carry->put($item,1);
                             }

                         return $carry;

                         } , collect());
      print_r( $result);



    }


}