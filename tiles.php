<?php
include 'config.php'; // Подключение к базе данных

try {
    // Запрос для получения информации о плитках
    $stmt = $pdo->query("SELECT title, image_url, link_url FROM tiles");
    $tiles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Количество плиток
    $tileCount = count($tiles);

    // Генерация плиток
    foreach ($tiles as $row) {
        echo "<div class='tile' style='background-image: url(" . htmlspecialchars($row['image_url']) . ");'>";
        echo "<a href='" . htmlspecialchars($row['link_url']) . "' class='tile-link'>";
        echo "<div class='tile-title'>" . htmlspecialchars($row['title']) . "</div>";
        echo "</a>";
        echo "</div>";
    }
    
    // Передача количества плиток в JavaScript
    echo "<script>const tileCount = $tileCount;</script>";
} catch (PDOException $e) {
    echo "Ошибка при получении данных о плитках: " . $e->getMessage();
}
?>
