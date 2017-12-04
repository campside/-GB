var showmenu = document.getElementById('showMenu');
var menu = document.getElementById('mobileMenu');
menu.style.display = 'none';

showmenu.addEventListener('click', function () {
    console.log(menu.style.display);
    if (!menu.style.display) {
        menu.style.display = 'none';
    } else {
        menu.style.display = '';
    }
});