<?php

namespace Testeru\News2\Tree;


function mkfile(string $name, array $meta = [])
{
    return [
        "name" => $name,
        "meta" => $meta,
        "type" => "file",
    ];
}


function mkdir(string $name, array $children = [], array $meta = [])
{
    return [
        "name" => $name,
        "children" => $children,
        "meta" => $meta,
        "type" => "directory",
    ];
}

function isFile($node)
{

    return $node['type'] == 'file';
}

function getChildren($node)
{
    return $node['children'];
}

function getName($node)
{
    return $node['name'];
}

function getMeta($node)
{
    return $node['meta'];
}
function isDirectory($node)
{
    return $node['type'] == 'directory';
}

function reduce($func, $tree, $accumulator)
{
    $children = $tree['children'] ?? [];
    $newAcc = $func($accumulator, $tree);

    if (isFile($tree)) {
        return $newAcc;
    }

    return array_reduce(
        $children,
        fn($acc, $node) => reduce($func, $node, $acc),
        $newAcc
    );
}

function array_flatten($tree, $depth = 0)
{
    $result = [];
    foreach ($tree as $key => $value) {
        if ($depth >= 0 && is_array($value)) {
            $value = array_flatten($value, $depth > 1 ? $depth - 1 : 0 - $depth);
            $result = array_merge($result, $value);
        } else {
            $result[] = $value;
        }
    }
    return $result;
}
