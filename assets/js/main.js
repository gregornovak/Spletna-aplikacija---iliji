$(document).ready(function() {

    $(".fa-custom-icon").on("click", function(){
        var navbar = $("header nav");
        navbar.toggleClass("showing");
    });

    $(".site-welcome a").on("click", function(){
        $("html, body").animate({ scrollTop: $("#about-us").offset().top
    }, 800);
    });

});
