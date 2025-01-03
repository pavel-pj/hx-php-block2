<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function Testeru\News2\Assertions\capitalize;

if (capitalize('hello') !== 'Hello') {
    throw new \Exception("Функция работает неверно!\n");
}

if (capitalize('') !== '') {
    throw new \Exception("Функция работает неверно!\n");
}

echo "*** Все тесты пройдены! *** \n";