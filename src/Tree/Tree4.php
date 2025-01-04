<?php

namespace Testeru\News2\Tree;

use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getChildren;
use function Testeru\News2\Tree\getName;

function downcaseFileNames(array $tree): array
{
    $name = getName($tree);

     if (isFile($tree)) {
         return mkfile(
             strtolower($tree['name']),
             $tree['meta']
         );

     }
     return mkdir(
          $tree['name'] ,
          array_map(fn ($item) => downcaseFileNames($item) ,getChildren($tree)),
          $tree['meta']
     );

}