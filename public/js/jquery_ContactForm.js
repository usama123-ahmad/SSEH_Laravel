$(document).ready(function() {

    $("#nameCheck").hide();
    $("#emailCheck").hide();
    $("#subjectCheck").hide();
    $("#messageCheck").hide();

    var name_err=true;
    var email_err=true;
    var subject_err=true;
    var message_err=true;
    var match_name=/^\s*[a-zA-Z,\s]+\s*$/;
    var match_email= /^([\w-\.]+@([\w-]+\.)+[\w-]{3})?$/;

    $("#contact_name").keyup(function () {
        name_check();
    });
    function name_check()
    {
        var name_val=$("#contact_name").val();
        if (name_val=="")
        {
            $("#nameCheck").show();
            $("#nameCheck").html("**please enter name");
            $("#nameCheck").focus();
            $("#nameCheck").css("color","red")
            $("#contact_name").css("border-bottom","2px solid #F90A0A");
            name_err=false;
            return false;
        }else
        {
            $("#nameCheck").hide();
            $("#contact_name").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(name_val))
        {
            $("#nameCheck").show();
            $("#nameCheck").html("**please use alphabets only");
            $("#nameCheck").focus();
            $("#nameCheck").css("color","red");
            $("#contact_name").css("border-bottom","2px solid #F90A0A");
            name_err=false;
            return false;
        }else
        {
            $("#nameCheck").hide();
            $("#contact_name").css("border-bottom","2px solid #34F458");
        }
    }

    $("#contact_email").keyup(function () {
        email_check();
    });
    function email_check()
    {
        var email_val=$("#contact_email").val();
        if (email_val=="")
        {
            $("#emailCheck").show();
            $("#emailCheck").html("**please enter email");
            $("#emailCheck").focus();
            $("#emailCheck").css("color","red");
            $("#contact_email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#emailCheck").hide();
            $("#contact_email").css("border-bottom","2px solid #34F458");
        }
        if (!match_email.test(email_val))
        {
            $("#emailCheck").show();
            $("#emailCheck").html("**please enter valid email");
            $("#emailCheck").focus();
            $("#emailCheck").css("color","red");
            $("#contact_email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#emailCheck").hide();
            $("#contact_email").css("border-bottom","2px solid #34F458");
        }
    }

    $("#contact_subject").keyup(function () {
        subject_check();
    });
    function subject_check() {
        var subject_val = $("#contact_subject").val();
        if (subject_val == "") {
            $("#subjectCheck").show();
            $("#subjectCheck").html("**please enter subject");
            $("#subjectCheck").focus();
            $("#subjectCheck").css("color", "red");
            $("#contact_subject").css("border-bottom","2px solid #F90A0A");
            subject_err = false;
            return false;
        } else {
            $("#subjectCheck").hide();
            $("#contact_subject").css("border-bottom","2px solid #34F458");
        }
    }

    $("#contact_message").keyup(function () {
        message_check();
    });
    function message_check() {
        var message_val = $("#contact_message").val();
        if (message_val == "") {
            $("#messageCheck").show();
            $("#messageCheck").html("**please enter message");
            $("#messageCheck").focus();
            $("#messageCheck").css("color", "red");
            $("#contact_message").css("border-bottom","2px solid #F90A0A");
            message_err = false;
            return false;
        } else {
            $("#messageCheck").hide();
            $("#contact_message").css("border-bottom","2px solid #34F458");
        }
    }

    $("#submit").attr("disabled",true);
    $("#contactForm").on("keyup",function () {
        var name=$("#contact_name").val();
        var email=$("#contact_email").val();
        var message=$("#contact_message").val();
        var subject=$("#contact_subject").val();
        if(name!=0 && email!=0 && message!=0 && subject!=0) {
            $("#submit").attr("disabled", false);
        }
        else {
            $("#submit").attr("disabled", true);
        }
    });

});
