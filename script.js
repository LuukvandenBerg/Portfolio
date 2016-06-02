$(document).ready(
    function(){
        $(".contact-link").click(function () {
            $(".contact").show("slow");
            $(".login").hide("slow");
            $(".about-info").hide("slow");
            $(".register").hide("slow");
        });

        $(".about-link").click(function () {
            $(".about-info").show("slow");
            $(".contact").hide("slow");
            $(".login").hide("slow");
            $(".register").hide("slow");
        });

        $(".login-link").click(function () {
            $(".login").show("slow");
            $(".about-info").hide("slow");
            $(".contact").hide("slow");
            $(".register").hide("slow");
        }); 

        $(".register-link").click(function () {
            $(".register").show("slow");
            $(".about-info").hide("slow");
            $(".contact").hide("slow");
            $(".login").hide("slow");
        });   

        $(".login-link2").click(function () {
            $(".login").show("slow");
            $(".about-info").hide("slow");
            $(".contact").hide("slow");
            $(".register").hide("slow");
        });     

    });