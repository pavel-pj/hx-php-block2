<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;


use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\downcaseFileNames;

$tree = mkdir('Iof/', [
    mkdir('eTc', [
        mkdir('NgiNx'),
        mkdir('CONSUL', [
            mkfile('config.json'),
        ]),
    ]),
    mkfile('hOsts'),
]);


print_r(downcaseFileNames($tree));
//print_r($tree);


