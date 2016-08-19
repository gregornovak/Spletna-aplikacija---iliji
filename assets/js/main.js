$(document).ready(function() {

    $(".fa-custom-icon").on("click", function(){
        var navbar = $("header nav");
        navbar.toggleClass("showing");
    });

    $(".site-welcome a").on("click", function(){
        $("html, body").animate({ scrollTop: $("#about-us").offset().top
    }, 800);
    });

    function loginValidation() {
        var email = document.forms["loginUser"]["email"].value();
        var pass  = document.forms["loginUser"]["pass1"].value();
        return console.log(email + " " + pass);
        //if ((email == null) || (email == "") || (pass == null) || (pass == "")){
        //    alert("Niste vpisali vseh podatkov!");
        //    return false;
        //}
    }
});
