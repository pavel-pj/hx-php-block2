<?php

namespace Testeru\News2\Tree;

function filterEmptyNode($tree){



    $internalFiltered = array_map(function($node) {
        if ($node['type'] === 'tag-internal') {
            // Тут самый важный момент. Рекурсивно вызываем функцию фильтрации.
            // Дальнейшая работа не завершится, пока функция фильтрации не отфильтрует вложенные узлы.
            return filterEmptyNode($node);
        }
        return $node;
    }, $tree['children']);

    return $tree;

}
