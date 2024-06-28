document.getElementById('circleIcon').addEventListener('click', function() {
    var tileMenu = document.getElementById('tileMenu');
    if (tileMenu.style.display === 'none' || tileMenu.style.display === '') {
        tileMenu.style.display = 'grid';
    } else {
        tileMenu.style.display = 'none';
    }
});
