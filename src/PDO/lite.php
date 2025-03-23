<?php

// Создаем соединение с базой данных в памяти
$conn = new PDO('sqlite::memory:');
// Настраиваем получение данных в виде аасоциативного массива
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Создаем таблицу users
$sql = "CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, phone TEXT)";
$conn->exec($sql);

// Создаем таблицу users
$sql = "CREATE TABLE products (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, price INTEGER)";
$conn->exec($sql);


// Вставляем данные в таблицу users
$sql2 = "INSERT INTO users (username, phone) VALUES (?, ?)";
$stmt  = $conn->prepare($sql2);

$stmt->bindParam(1, $name);
$stmt->bindParam(2, $phone);

$name = "Валера";
$phone = '+8930400-34-24';
$stmt->execute();


$name = "Иван Иваныч Заорский";
$phone = '+8912-303-22-33';
$stmt->execute();


// Вставляем данные в таблицу products
$sql2 = "INSERT INTO products (name,price) VALUES (?, ?)";
$stmt  = $conn->prepare($sql2);
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$price);

$name = 'Утюг';
$price = 3500;
$stmt->execute();

$name = 'Айфон';
$price = 100000;
$stmt->execute();


/*
// Выбираем данные из таблицы users
$sql3 = "SELECT * FROM products where id = ?";
$stmt = $conn->prepare($sql3);
$stmt->bindParam(1, $id);
$id = 2;
*/



$stmt->execute();
$result = $stmt->fetchAll();

// Выводим результаты запроса
print_r($result);





