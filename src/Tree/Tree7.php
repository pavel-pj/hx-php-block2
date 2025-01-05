<?php

namespace Testeru\News2\Tree;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\getMeta;
use function Testeru\News2\Tree\isDirectory;
use function Testeru\News2\Tree\reduce;
use function Testeru\News2\Tree\flatten;

function iter($tree, $depth)
{
    $name = getName($tree);
    $children = getChildren($tree);

    if (count($children) === 0) {
        return $name;
    }

    if ($depth === 2) {
        return [];
    }

        $emptyDirPaths = array_filter($children, function ($child) {
        return isDirectory($child);
    });

    $output =  array_map(function ($item) use ($depth) {
        return iter($item, $depth + 1);
        }, $emptyDirPaths) ;

    return array_flatten($output);

}

function findEmptyPaths($tree,$depth = INF)
{
    // Начинаем с глубины 0
    return iter($tree,$depth);
}