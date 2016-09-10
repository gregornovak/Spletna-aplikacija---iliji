$(document).ready(function() {
    //spreminjam class za prikaz menuja na mobilnih napravah
    $(".fa-custom-icon").on("click", function(){
        var navbar = $("header nav");
        navbar.toggleClass("showing");
    });
    //ko klikneš na <a> tag animiraj do idja #about-us po 0.8s
    $(".site-welcome a").on("click", function(){
        $("html, body").animate({ scrollTop: $("#about-us").offset().top
    }, 800);
    });

    ///////////////////////////////////////////////////////////////////////////
    //validacija za novega uporabnika
    ///////////////////////////////////////////////////////////////////////////
    //pridobim formo, za dodajanje uporabnikov
    var registerForm = document.forms["addUser"];
    registerForm.onsubmit = function isInsertValid(){
        //validiranje imena
        //pridobim prvi element v formi
        var firstName = registerForm.elements["first_name"];
        //če ustvariš regex z constructorjem, potem nerabiš /
        //validacija imena s pomočjo regular expr
        //ustvarim regex za ime
        var reg = new RegExp("^[a-zA-Z]+$");
        if(reg.test(firstName.value) === true || firstName.value.length === 0){
            firstName.style.backgroundColor = "rgb(148, 255, 143)";
            var span = registerForm.querySelector(".add-err1");
            span.style.display = "none";
        } else {
            var span = registerForm.querySelector(".add-err1");
            span.innerHTML = "Dovoljene so samo črke A-Z!";
            span.style.display = "initial";
            firstName.style.backgroundColor = "rgb(255, 111, 111)";
        }

        //pridobim prvi element v formi
        var lastName = registerForm.elements["last_name"];
        //če ustvariš regex z constructorjem, potem nerabiš /
        //validacija priimka s pomočjo regular expr
        //ustvarim regex za ime
        var reg = new RegExp("^[a-zA-Z]+$");
        if(reg.test(lastName.value) === true || lastName.value.length === 0){
            lastName.style.backgroundColor = "rgb(148, 255, 143)";
            var span = registerForm.querySelector(".add-err2");
            span.style.display = "none";
        } else {
            var span = registerForm.querySelector(".add-err2");
            span.innerHTML = "Dovoljene so samo črke A-Z!";
            span.style.display = "initial";
            lastName.style.backgroundColor = "rgb(255, 111, 111)";
        }

        //validacija emaila z regexi
        var email = registerForm.elements["email"];
        //dodam regex za validacijo emaila
        var reg = new RegExp("^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$");
        //če email ne vsebuje prepovedanih characterjev je email validen
        if(reg.test(email.value) === true){
            email.style.backgroundColor = "rgb(148, 255, 143)";
            var span = registerForm.querySelector(".add-err3");
            span.style.display = "none";
        } else {
            email.style.backgroundColor = "rgb(255, 111, 111)";
            var span = registerForm.querySelector(".add-err3");
            span.style.display = "initial";
            span.innerHTML = "Neveljaven email";
            return false;
        }

        //validacija gesla
        var password1 = registerForm.elements["pass1"];
        var password2 = registerForm.elements["pass2"];
        //če nista oba polja prazna
        if(!(password1.value === "" || password1.value === null) && !(password2.value === "" || password2.value === null)){
            //preveri če sta vrednosti 1. in 2. polja isti
            if(password1.value === password2.value){
                //dodam regex za gesli
                var reg = new RegExp("^[a-zA-Z0-9]+$");
                //če je geslo večje od 6 znakov ter krajše od 60 in test funkcija vrne true za regex -> je vse vredu
                if(password1.value.length >= 6 && password1.value.length <= 100 && reg.test(password1.value) === true){
                    password1.style.backgroundColor = "rgb(148, 255, 143)";
                    password2.style.backgroundColor = "rgb(148, 255, 143)";
                    var span = registerForm.querySelector(".add-err4");
                    span.style.display = "none";
                } else{
                    password1.style.backgroundColor = "rgb(255, 111, 111)";
                    password2.style.backgroundColor = "rgb(255, 111, 111)";
                    var span = registerForm.querySelector(".add-err4");
                    span.innerHTML = "Prekratko geslo/dovoljene so črke A-Z ter števila";
                    span.style.display = "initial";
                    return false;
                }
            } else{
                password1.style.backgroundColor = "rgb(255, 111, 111)";
                password2.style.backgroundColor = "rgb(255, 111, 111)";
                var span = registerForm.querySelector(".add-err4");
                span.innerHTML = "Gesli se ne ujemata!";
                span.style.display = "initial";
                return false;
            }
        } else{
            password1.style.backgroundColor = "rgb(255, 111, 111)";
            password2.style.backgroundColor = "rgb(255, 111, 111)";
            var span = registerForm.querySelector(".add-err4");
            span.innerHTML = "Vpišite gesli v obe polji!";
            span.style.display = "initial";
            return false;
        }
    return true;
    }

});
