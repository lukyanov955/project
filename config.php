<?php
// Конфигурация подключения к базе данных
$host = 'localhost';    // Хост базы данных
$db = 'p-343070_news_db';        // Имя базы данных
$user = 'p-343070_admin';     // Имя пользователя базы данных
$pass = 'Max6601052Max***';     // Пароль пользователя базы данных

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
