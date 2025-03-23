<?php

namespace Testeru\News2\Tree;
use function Testeru\News2\Tree\mkdir;
use function Testeru\News2\Tree\mkfile;
use function Testeru\News2\Tree\isFile;
use function Testeru\News2\Tree\getName;
use function Testeru\News2\Tree\isDirectory;
use function Testeru\News2\Tree\getChildren;

function map (callable $callback, array $tree)
{

    $name =  getName($tree) ;
    $newMeta = getMeta($tree);
    if (isFile($tree)) {
       return $callback(mkfile($name));
    }

    $childs = getChildren($tree);

    $result = array_map(function ($item) use ($callback) {
        return map($callback, $item);
    },$childs);

    $newTree = $callback(mkdir($name, $result, $newMeta));

    return $newTree;

}



function reduce2(callable $callback, array $tree, mixed $start){

    $name = getName($tree);


    if(isFile($tree)) {
        $start =  $callback($start);
        return mkfile($name);
    }

    $childs = getChildren($tree);

    $result = array_map(function ($item) use ($callback, $start) {

        return reduce2($callback, $item , $start);
    },$childs);



    $start =  $callback($start);
    return $callback($start);
    //return  $dir;

}

function filter (callable $callback, array $tree){
    $name = getName($tree);


    if(isFile($tree)) {
        return mkfile($name);
    }

    $childs = getChildren($tree);

    $result = array_map(function ($item) use ($callback) {
        return filter($callback, $item);
    },$childs);


    $filtered = array_values(array_filter($result, function($item) use ($callback){
        return  $callback($item);
    }));

    $childrens = mkdir($name, $filtered);

    return  $childrens;
}


