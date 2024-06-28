<?php
include 'config.php'; // Подключение к базе данных

try {
    // Запрос для получения новостей
    $stmt = $pdo->query("SELECT title, content, created_at FROM news ORDER BY created_at DESC");

    // Отображение каждой новости
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='news-item'>";
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($row['content']) . "</p>";
        echo "<small>Опубликовано: " . $row['created_at'] . "</small>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "Ошибка при получении новостей: " . $e->getMessage();
}
?>
