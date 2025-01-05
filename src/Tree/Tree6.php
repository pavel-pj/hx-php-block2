<?php

namespace Testeru\News2\Tree;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\getMeta;

function du(array $tree)
{
    $children = getChildren($tree);
    $map = array_map (
        fn ($item) => [ $item['name'] ,getFilesSize($item) ],
        $children
    );

     usort($map, function ($a, $b) {
        return $b[1] <=> $a[1];
    });

    return $map;
}

function getFilesSize($node){

    if (isFile($node)) {
        return getMeta($node)['size'];
    }
    $children = getChildren($node);
    return array_sum(array_map(fn ($item) =>getFilesSize($item) ,$children));

}
