<?php

namespace Testeru\News2\Tree;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\getName;

function getHiddenFilesCount(?array $node) : int
{

    if (isFile($node)) {
       return (str_starts_with($node['name'],'.')) ? 1 :0;
    }
    $childs = getChildren($node);

    $counts = array_map( fn ($item) =>getHiddenFilesCount($item) , $childs);

    return  array_sum($counts);

}