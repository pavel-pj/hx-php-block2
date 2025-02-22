<?php

namespace Testeru\News2\Tree;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isDirectory;
use function Testeru\News2\Tree\getChildren;

function testFunc(array $tree)
{
    $name =  getName($tree);
    if (isFile($tree)) {

        return mkFile(strtolower($name));
    }

    $childs = getChildren($tree);

    $result = array_map(function ($child) {
        return testFunc($child);
    },$childs);

    return mkdir($name,$result);


}
/*
function iterate (array $tree,array $acc) {

    if (isFile($tree)) {

          $name = getName($tree);
          $acc[] = $name;

          return $acc;
    }

    $childs = getChildren($tree);
    $result = array_merge(...array_map(function ($item) use ($acc){
        return iterate($item,$acc);
    },$childs));

    return  $result ;
}
*/
