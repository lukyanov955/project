document.getElementById('circleIcon').addEventListener('click', function() {
    var tileMenu = document.getElementById('tileMenu');
    if (tileMenu.style.display === 'none' || tileMenu.style.display === '') {
        tileMenu.style.display = 'grid';
        // Добавляем анимацию плавного появления плиток
        tileMenu.style.opacity = '0';
        setTimeout(function() {
            tileMenu.style.opacity = '1';
            tileMenu.style.transition = 'opacity 0.3s';
        }, 10);
    } else {
        tileMenu.style.opacity = '0';
        setTimeout(function() {
            tileMenu.style.display = 'none';
        }, 300); // Время должно совпадать с продолжительностью анимации
    }
});
