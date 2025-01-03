<?php

$autoloadPath = __DIR__ . '/vendor/autoload.php';
require_once $autoloadPath;



if (capitalize('hello') !== 'Hello') { // Если результат функции не равен ожидаемому значению,
    // то мы выбрасываем исключение и завершаем выполнение теста
    throw new Exception('Функция работает неверно!');
}



