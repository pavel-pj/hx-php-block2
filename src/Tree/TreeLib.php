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
    echo $node;
    return $node['type'] == 'file';
}

function getChildren($node)
{
    return $node['children'];
}
