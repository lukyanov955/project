<?php
// Конфигурация подключения к базе данных
$host = 'localhost';    // Хост базы данных
$db = 'news_db';        // Имя базы данных
$user = 'username';     // Имя пользователя базы данных
$pass = 'password';     // Пароль пользователя базы данных

try {
    // Подключение к базе данных с помощью PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Установка режима обработки ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Если не удалось подключиться, выводим ошибку
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>
