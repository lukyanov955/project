<?php
include 'config.php'; // Подключение к базе данных

try {
    // Запрос для получения информации о плитках
    $stmt = $pdo->query("SELECT title, image_url, link_url FROM tiles");

    // Отображение каждой плитки
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='tile' style='background-image: url(" . htmlspecialchars($row['image_url']) . ");'>";
        echo "<a href='" . htmlspecialchars($row['link_url']) . "' class='tile-link'>";
        echo "<div class='tile-title'>" . htmlspecialchars($row['title']) . "</div>";
        echo "</a>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "Ошибка при получении данных о плитках: " . $e->getMessage();
}
?>
