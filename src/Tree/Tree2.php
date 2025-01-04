<?php

namespace Testeru\News2\Tree;

function generator()
{
    return mkdir( 'php-package',[
        mkfile('Makefile'),
        mkfile('README.md'),
        mkfile('dist'),
        mkdir('tests',[
            mkfile('test.php',['type' => 'text/php']),
        ]),
        mkdir('src',[
            mkfile('index.php',['type' => 'text/php']),
        ]),
        mkfile('phpunit.xml',['type' => 'text/xml']),
        mkdir('assets',[
            mkdir('util',[
                mkdir('cli',[
                    mkfile('LICENSE')
                ])
            ])
        ],['owner' => 'root', 'hidden' => false])
    ],['hidden'=>true]);

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

function mkfile(string $name, array $meta = [])
{
    return [
        "name" => $name,
        "meta" => $meta,
        "type" => "file",
    ];
}