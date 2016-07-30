$(document).ready(function() {

    $(".fa-custom-icon").on("click", function(){
        var navbar = $("header nav");
        navbar.toggleClass("showing");
    });

    $(".site-welcome a").on("click", function(){
        $("html, body").animate({ scrollTop: $("#about-us").offset().top
    }, 800);
    });

    //scoville lestvica

    var scoville = [0, 100, 1000, 3500, 10000, 30000, 50000, 100000, 350000, 580000];

    var vrednostShu = $(".chili-shu").text();

    if (vrednostShu > 0 && vrednostShu <= 100){
        console.log("0-100");
    } else if (vrednostShu > 101 && vrednostShu <= 1000) {
        console.log("101-1000")
    } else if (vrednostShu > 1001 && vrednostShu <= 3500){
        console.log("1001-3500")
    } else if (vrednostShu > 3501 && vrednostShu <= 10000){
        console.log("3501-10000")
    } else if (vrednostShu > 10001 && vrednostShu <= 30000){
        console.log("10001-30000")
    } else if (vrednostShu > 30001 && vrednostShu <= 50000){
        console.log("30001-50000")
    } else if (vrednostShu > 50001 && vrednostShu <= 100000){
        console.log("50001-100000")
    } else if (vrednostShu > 100001 && vrednostShu <= 350000){
        console.log("100001-350000")
    } else {
        console.log("580000")
    }


});
