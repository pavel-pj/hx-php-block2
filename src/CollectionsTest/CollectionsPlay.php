<?php

namespace Testeru\News2\CollectionsTest;

use Illuminate\Support\Collection;
use Exception;

class CollectionsPlay
{
    protected Collection $data ;

    public function __construct()
    {
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
            ]);
    }

    public function mainProgramm()
    {
        try {
            print_r($this->checkFirstOrFail($this->data));
        }catch (Exception $error)
        {
            print_r([$error->getMessage(),'Несуществующая запись']);
        }



    }
    public function getMap(Collection $col): Collection
    {
         $col2 = $col->map(function (array $item) {
             $age = time();
             return  ['age' => $age, $item['birthday'], 'diff' => date(
                 'Y',
                 time() - strtotime($item['birthday'])
             )];
         });
         return $col2;
    }

    public function lesson13()
    {

        $domains = collect([
          'gmail.com', 'yandex.ru', 'hotmail.com'
        ]);

        $emails = collect([
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

        $result = $emails->map(fn($email) => explode('@', $email)[1])
                         ->filter(function ($item) use ($domains) {
                             return $domains->contains($item);
                         })->reduce(function ($carry, $item) {

                            if ($carry->has($item)) {
                                 $carry[$item] += 1;
                            } else {
                                 $carry->put($item, 1);
                            }

                            return $carry;
                         }, collect());
        print_r($result);
    }

    public function checkFirstOrFail(Collection $col)//: Collection
    {

        return $col->map(function ($item) {
            return $item['name'];
        })->firstOrFail(function ($value,$key){
              return $value == 'Sansayy';
        });


    }
}
