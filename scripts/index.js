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

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
