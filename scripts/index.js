var showmenu = document.getElementById('showMenu');
var menu = document.getElementById('mobileMenu');
menu.style.display = 'none';

showmenu.addEventListener('click', function () {

    if (!menu.style.display) {
        menu.style.display = 'none';
    } else {
        menu.style.display = '';
    }
});

$(function() {
    $(".item").draggable({ revert: true, helper: "clone" });
    $(".cart-icon").droppable({
        drop: function( event, ui ) {
            $( this )
                .find( "i" )
                .removeClass( "fa-shopping-cart" )
                .addClass( "fa-cart-arrow-down" );
        }
    });
});
