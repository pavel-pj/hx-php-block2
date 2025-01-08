<?php

namespace Testeru\News2\Tree;

function itinerary(array $tree,string $city1,string $city2)
{
    $ancestor = [];
    $c2 = getAncestor( $tree, $city1, $ancestor);

    return $c2;

}

function getAncestor(array $node,string $needleCity, &$ancestor)
{

    $city = array_map (function ($item) use ($needleCity,$ancestor){

        if (is_array($item)) {

            $ancector[] =   getAncestor($item ,$needleCity,$ancestor);

        }
        if ($item  == $needleCity ){
            echo " $item \n";
            return $item;
        }

        if (!Empty(  $ancecor)) {
            echo "Если не пустой path   \n";
            return $item;
        }

    },$node);

    return $ancestor[] = $city ;

}