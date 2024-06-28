document.getElementById('circleIcon').addEventListener('click', function() {
    var tileMenu = document.getElementById('tileMenu');
    if (tileMenu.style.display === 'none' || tileMenu.style.display === '') {
        tileMenu.style.display = 'grid';
    } else {
        tileMenu.style.display = 'none';
    }
    
    // Обновление стиля grid-template-rows в зависимости от количества плиток
    if (tileCount) {
        const rows = Math.ceil(tileCount / 3); // Пример расчета: 3 плитки на строку
        tileMenu.style.gridTemplateRows = `repeat(${rows}, 1fr)`;
    }
});
