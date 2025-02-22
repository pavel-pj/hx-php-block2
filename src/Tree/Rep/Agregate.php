<?php

namespace Testeru\News2\Tree\Rep;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isDirectory;
use function Testeru\News2\Tree\getChildren;

function getHiddensFiles(array $tree) {

    return count(iter($tree,[]));

}

function iter(array $tree, array $acc){

    $name = getName($tree);
    if ( isFile($tree)) {
        if (substr($name,0,1) === '.') {
           $acc[] = $name;
           return $acc;
        }
        else return $acc;
    }

    $childs = getChildren ($tree);



   $result =  array_merge(...array_map(function ($item) use ($acc) {

        return iter($item,$acc);
    },$childs));

    return $result;

}
