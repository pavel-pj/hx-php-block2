<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;


use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\compressImages;

$tree = mkdir('my documents', [
    mkdir('documents.jpg'),
    mkfile('avatar.jpg', ['size' => 100]),
    mkfile('passport.jpg', ['size' => 200]),
    mkfile('family.jpg', ['size' => 150]),
    mkfile('addresses', ['size' => 125]),
    mkdir('presentations')
], [ 'test' => 'haha']);

//print_r($tree);
 print_r(compressImages($tree));
//print_r($tree);


