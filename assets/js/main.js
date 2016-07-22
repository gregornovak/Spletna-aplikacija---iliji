$(document).ready(function() {

    $(".fa-custom-icon").on("click", function(){
        var navbar = $("header nav");
        navbar.toggleClass("showing");
    });

    $(".site-welcome a").on("click", function(){
        $("html, body").animate({ scrollTop: $("#about-us").offset().top
    }, 800);
    });

//    if (window.matchMedia("(min-width: 1141px)").matches) {
//        $(".clear-fix").first().remove();
//    } else {
//        $(".clear-fix").first().addClass('clear-fix');
//    }

});
