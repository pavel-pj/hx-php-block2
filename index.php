<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;

/*e function Testeru\News2\Tree\mkdir;

use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\changeClass;
use function Testeru\News2\Tree\convert;
use function Testeru\News2\Tree\itinerary;
use Testeru\News2\Oop\Point;
//use Testeru\News2\Oop\Collection;
use function Testeru\News2\Oop\json_decode;
use Testeru\News2\Oop\Url;
use Testeru\News2\Oop\Node;
use Testeru\News2\CollectionsTest\CollectionsPlay;
use Testeru\News2\Oop\Validator;
use Testeru\News2\Oop\Truncater;
use function Testeru\News2\Oop\Converter\toStd;
use Illuminate\Support\Collection;
use function Testeru\News2\Oop\Stack\compare;
use Testeru\News2\Oop\UrlAdress;
use Testeru\News2\Oop\DeckOfCards;
use function Testeru\News2\Oop\normalizer;
use Carbon\Carbon;
use function Testeru\News2\Tree\convert;
 */
use Testeru\News2\CollectionsTest\CollectionsPlay;
use Testeru\News2\Carbon\CarbonDate;
use function Testeru\News2\Tree\sortDeps;
use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\testFunc;
use function Testeru\News2\Tree\Rep\stringify;

$data = [
    'hello' => 'world',
    'is' => true,
    'nested' => ['count' => 5],
];
echo "\n\n";
$data2 =900;

$data3 = [
    'string' => 'value',
    'boolean' => true,
    'number' => 5,
    'float' => 1.25,
    'object' => [
        5 => 'number',
        '1.25' => 'float',
        'null' => 'null',
        'true' => 'boolean',
        'value' => 'string',
        'nested' => [
            'boolean' => true,
            'float' => 1.25,
            'string' => 'value',
            'number' => 5,
            'null' => 'null'
        ]
    ]
];


echo (stringify($data3,'|-',2));
echo "\n\n";











