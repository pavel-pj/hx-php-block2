<?php

namespace Testeru\News2\Tree;

 use function Testeru\News2\Tree\mkdir;
 use function Testeru\News2\Tree\mkfile;
 use function Testeru\News2\Tree\isFile;
 use function Testeru\News2\Tree\getChildren;

function compressImages(array $arr): array
{


    $result = mkdir($arr['name'],[ ...array_map(function ($item){

        return (isFile($item) && strrchr($item['name'],'.')==='.jpg') ? mkfile($item['name'],['size'=>$item['meta']['size']/2]) : $item;

    },getChildren($arr) )],$arr['meta']  );

    return $result;

}