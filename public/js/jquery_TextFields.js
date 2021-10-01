$(document).ready(function() {
        $("#firstName").hover(function () {
            $('input[name="firstName"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#firstName").mouseleave(function () {
            $('input[name="firstName"]').css('background-color','#fff');
        });
        $("#lastName").hover(function () {
            $('input[name="lastName"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#lastName").mouseleave(function () {
            $('input[name="lastName"]').css('background-color','#fff');
        });
        $("#fatherName").hover(function () {
            $('input[name="fatherName"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#fatherName").mouseleave(function () {
            $('input[name="fatherName"]').css('background-color','#fff');
        });
        $("#cnic").hover(function () {
            $('input[name="cardNo"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#cnic").mouseleave(function () {
            $('input[name="cardNo"]').css('background-color','#fff');
        });
        $("#phoneNo").hover(function () {
            $('input[name="telNo"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#phoneNo").mouseleave(function () {
            $('input[name="telNo"]').css('background-color','#fff');
        });
        $("#email").hover(function () {
            $('input[name="email"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#email").mouseleave(function () {
            $('input[name="email"]').css('background-color','#fff');
        });
        $("#address").hover(function () {
            $('input[name="address"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#address").mouseleave(function () {
            $('input[name="address"]').css('background-color','#fff');
        });
        $("#contact_name").hover(function () {
            $('input[name="cn"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#contact_name").mouseleave(function () {
            $('input[name="cn"]').css('background-color','#fff');
        });
        $("#contact_email").hover(function () {
            $('input[name="ce"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#contact_email").mouseleave(function () {
            $('input[name="ce"]').css('background-color','#fff');
        });
        $("#contact_subject").hover(function () {
            $('input[name="cs"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#contact_subject").mouseleave(function () {
            $('input[name="cs"]').css('background-color','#fff');
        });
        $("#contact_message").hover(function () {
            $('input[name="cm"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#contact_message").mouseleave(function () {
            $('input[name="cm"]').css('background-color','#fff');
        });
        $("#feedback").hover(function () {
            $('input[name="feedback"]').css('background-color','rgba(4,165,139,0.2)');
        });
        $("#feedback").mouseleave(function () {
            $('input[name="feedback"]').css('background-color','#fff');
        });
        $(window).resize(function () {
        if((screen.width<1024)){
            $(".carousel-caption").hide();
        }else{
            $(".carousel-caption").show();
        }
    });
    });

