<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\changeClass;
use function Testeru\News2\Tree\convert;
use function Testeru\News2\Tree\itinerary;
use Testeru\News2\Oop\Point;

$tree = [
    'name' => 'html',
    'type' => 'tag-internal',

    'children' => [
        [
            'name' => 'body',
            'type' => 'tag-internal',

            'className' =>'hexlet',
            'children' => [
                [
                    'name' => 'h1',
                    'type' => 'tag-internal',
                    'className' =>'hexlet',
                    'children' => [
                        [
                            'name' => '',
                            'type' => 'text',
                            'content' => 'Сообщество',
                        ],
                    ],
                ],
                [
                    'name' => 'p',
                    'type' => 'tag-internal',
                    'children' => [
                        [
                            'type' => 'text',
                            'content' => 'Общение между пользователями Хекслета',
                        ],
                    ],
                ],
                [
                    'name' => 'hr',
                    'type' => 'tag-leaf',
                ],
                [
                    'name' => 'input',
                    'type' => 'tag-leaf',
                ],
                [
                    'name' => 'div',
                    'type' => 'tag-internal',
                    'className' => 'hexlet',
                    'children' => [
                        [
                            'name' => 'div',
                            'type' => 'tag-internal',
                            'className' => 'text-xs-center',
                            'children' => [],
                        ],
                        [
                            'name' => 'div',
                            'type' => 'tag-internal',
                            'className' => 'fa fa-spinner',
                            'children' => [],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
//
$tree1 = [
    'name' => 'div',
    'type' => 'tag-internal',
    'className' => 'hexlet-community',
    'children' => [
        [
            'name' => 'div',
            'type' => 'tag-internal',
            'className' => 'old-class',
            'children' => [],
        ],
        [
            'name' => 'div',
            'type' => 'tag-internal',
            'className' => 'old-class',
            'children' => [],
        ],
    ],
];

$tree3 = [ ['key2', 'value2']];

$tree4 = [
    ['key2', 'value2'],
    ['anotherKey', [
        ['key2', false],
        ['innerKey', []],
    ]],
    ['key', null],
    ['anotherKey2', [
        ['wow', [['one', 'two'], ['three', 'four']]],
        ['key2', true],
    ]],
];

$tree5 = [['key1', 'value1'], ['key2', 'value2']];
$tree6 = [['key', 'value']];

$list = [[1, [5], [], [[-3, 'hi']]], 'string', 10, [[[5]]]];


$tree = ['Moscow', [
    ['Smolensk'],
    ['Yaroslavl'],
    ['Voronezh', [
        ['Liski'],
        ['Boguchar'],
        ['Kursk', [
            ['Belgorod', [
                ['Borisovka'],
            ]],
            ['Kurchatov'],
        ]],
    ]],
    ['Ivanovo', [
        ['Kostroma'], ['Kineshma'],
    ]],
    ['Vladimir'],
    ['Tver', [
        ['Klin'], ['Dubna'], ['Rzhev'],
    ]],
]];
/*
//print_r(itinerary($tree, 'Dubna', 'Kostroma'));
*/



function getMidpoint($point1, $point2): Point{

    $point = new Point();

    $middleX = getMiddle ($point1->x, $point2->x);
    $middleY = getMiddle ($point1->y, $point2->y);

    $point->x = $middleX;
    $point->y = $middleY;

    return $point;

}

function getMiddle(int $a1, int $a2)
{
    return ($a1 >= $a2) ? ( $a2 + $a1)/2 : ( $a1 + $a2 )/2;


}



//$point = new Point(10,20);

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

print_r($point1);


$midpoint = getMidpoint($point1, $point2);
echo $midpoint->x; // 5.5
echo $midpoint->y; // 5.5

