<?php
// database.php
$host = 'localhost';
$dbname = 'test2';
$username = 'root';
$password = 'root';

try {
    // Подключение к базе данных с помощью PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Установка атрибутов для обработки ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Возвращаем объект PDO
    return $pdo;
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    return null; 
}
