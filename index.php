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
use Testeru\News2\Oop\Collection;
use function Testeru\News2\Oop\jdecode;
use Testeru\News2\CollectionsTest\CollectionsPlay;


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

$coll =new CollectionsPlay();
$coll->mainProgramm();




