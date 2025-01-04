<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;


use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\downcaseFileNames;
use function Testeru\News2\Tree\getHiddenFilesCount;

$tree = mkdir('/', [
    mkdir('etc', [
        mkdir('apache', []),
        mkdir('nginx', [
            mkfile('.nginx.conf', ['size' => 800]),
        ]),
        mkdir('.consul', [
            mkfile('.config.json', ['size' => 1200]),
            mkfile('data', ['size' => 8200]),
            mkfile('raft', ['size' => 80]),
        ]),
    ]),
    mkfile('.hosts', ['size' => 3500]),
    mkfile('resolve', ['size' => 1000]),
]);

//$dd = '.jofe';
//if( substr($dd, 0, 1) == '.')  {echo "YES";} else {echo "NO";}

//print_r($tree);
print_r(getHiddenFilesCount($tree)) ;
 print_r("\n");


