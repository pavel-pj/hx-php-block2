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

/*
function iterator($node,$str, $path, $acc)
{
    $name = getName($node);

    if ($name !== '/') {
       str_ends_with($path, '/') ? $path .= $name : $path .= '/' . $name;
    }

    if (isFile($node)) {
        if( str_contains($name, $str)){
            $acc[]=$path;
        }
        return $acc;
    }

    $children = getChildren($node);

    $result = array_reduce(
        $children,
        function ($newAcc,$item) use ($str,$path){
            return iterator($item,$str,$path,$newAcc);
        },
        $acc
    );
    $result =array_flatten($result);



   return $result;

}

function findFilesByName($tree, $str)
{
   $path = getName($tree);
   return iterator($tree,$str,$path,[]);

}
*/

function itera($tree,$type,$acc,$path):array
{
    $name = getName($tree);

    if (isFile($tree)) {
         str_contains($name, $type) ? $acc[]= getMeta($tree)['size']:$acc ;
        return $acc;
    }

    $childrens = getChildren($tree);

    $result =  array_reduce ($childrens,function ($newAcc,$item) use ($type,$path){
        return  itera($item,$type,$newAcc,$path) ;
    },$acc);

    return   $result;



}

function getFilesAndSizes($tree,$type)
{
    return array_sum(itera($tree,$type,[],'/'));

}

