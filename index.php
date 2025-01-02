<?php


$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;


use Testeru\News2\Functions\Lesson7;
use Testeru\News2\Functions\Lesson8;
use Testeru\News2\Functions\Lesson9;
use Testeru\News2\Functions\Lesson10;
use Testeru\News2\Functions\Lesson11;
use Testeru\News2\Functions\Lesson12;
use Testeru\News2\Functions\Lesson13;
use Testeru\News2\Functions\Lesson13a;
use Testeru\News2\Functions\Lesson14;
use Testeru\News2\Basic\TestAddDigits;

use Testeru\News2\CollectionsTest\CollectionsPlay;

use Funct\Strings;





/*
$col = new CollectionsPlay();
$col->lesson13();


/*
$ms = new Lesson7();
 print_r( $ms->slugify(" yOu   "));
 */

/*
 $ms = new Lesson8();
 echo( $ms->testStr(''));
*/

/*
$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];

$ls = new Lesson9 ();
print_r($ls->takeOldest($users,2));
*/

/*
$ls = new Lesson10();

$users = [
    ['name' => 'Tirion', 'children' => [
        ['name' => 'Mira', 'birthday' => '1983-03-23']
    ]],
    ['name' => 'Bronn', 'children' => []],
    ['name' => 'Sam', 'children' => [
        ['name' => 'Aria', 'birthday' => '2012-11-03'],
        ['name' => 'Keit', 'birthday' => '1933-05-14']
    ]],
    ['name' => 'Rob', 'children' => [
        ['name' => 'Tisha', 'birthday' => '2012-11-03']
    ]],
];


print_r($ls->getChildren($users));


$ls = new TestAddDigits ();
print_r("FFF - ". $ls->addDigits(99999999). "\n");


$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

$ls = new Lesson11();
print_r($ls->getGirlFriends($users));

*/
/*
$users = [
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
];

$ls = new Lesson12();
print_r($ls-> getMenCountByYear($users));



$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];

$d =[
    'gmain'=>'info@gmail.com',
    'Fodd'=>'fsefef@mail.com'

];


$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female']
    ]],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female'],
        ['name' => 'Tanisha', 'gender' => 'female']
    ]],
    ['name' => 'Bronn', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male'],
        ['name' => 'Keit', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
];

$ls = new Lesson13a();
print_r ($ls->getManWithLeastFriends($users));

//$d='vovan@hotmail.com';
 //print_r($d);
*/

$ls = new Lesson14();
print_r ($ls->without(['wow', false, 4, 0, 4, 'true'], false, 4));




