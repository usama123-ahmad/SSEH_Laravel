$(document).ready(function() {

    $("#mailCheck").hide();
    var chat_err = true;
    var match_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{3})?$/;

    $("#mail").keyup(function () {
        email_();
    });

    function email_() {
        var mail_val = $("#mail").val();
        if (mail_val == "") {
            $("#mailCheck").show();
            $("#mailCheck").html("**please enter email");
            $("#mailCheck").focus();
            $("#mailCheck").css("color", "red");
            $("#mail").css("border-bottom", "2px solid #F90A0A");
            chat_err = false;
            return false;
        } else {
            $("#mailCheck").hide();
            $("#mail").css("border-bottom", "2px solid #34F458");
        }
        if (!match_email.test(mail_val)) {
            $("#mailCheck").show();
            $("#mailCheck").html("**please enter valid email");
            $("#mailCheck").focus();
            $("#mailCheck").css("color", "red");
            $("#mail").css("border-bottom", "2px solid #F90A0A");
            chat_err = false;
            return false;
        } else {
            $("#mailCheck").hide();
            $("#mail").css("border-bottom", "2px solid #34F458");
        }
    }
});
