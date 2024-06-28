<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости и Плитки</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Подключение стилей -->
</head>
<body>
    <div class="header">
        <div class="circle-icon" id="circleIcon">&#9776;</div>
    </div>

    <div class="tile-menu" id="tileMenu">
        <!-- Включение файла с плитками -->
        <?php include 'tiles.php'; ?>
    </div>

    <div class="news-container">
        <!-- Включение файла с новостями -->
        <?php include 'news.php'; ?>
    </div>

    <script src="js/script.js"></script> <!-- Подключение скрипта -->
</body>
</html>
