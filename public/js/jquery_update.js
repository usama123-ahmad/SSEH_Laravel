$(document).ready(function() {

    $("#fc").hide();
    $("#lc").hide();
    $("#fac").hide();
    $("#cc").hide();
    $("#pc").hide();
    $("#ec").hide();
    $("#ac").hide();

    var fname_err=true;
    var lname_err=true;
    var fathername_err=true;
    var cnic_err=true;
    var phoneNo_err=true;
    var email_err=true;
    var address_err=true;
    var match_phone=/^[0-9]{11}$/;
    myRegExp = new RegExp(/\d{5}-\d{7}-\d/);
    var match_name=/^\s*[a-zA-Z,\s]+\s*$/;
    var match_email= /^([\w-\.]+@([\w-]+\.)+[\w-]{3})?$/;

    $("#firstName").keyup(function () {
        Fname_check();
    });
    function Fname_check()
    {
        var Fname_val=$("#firstName").val();
        if (Fname_val=="")
        {
            $("#fc").show();
            $("#fc").html("**please enter first name");
            $("#fc").focus();
            $("#fc").css("color","red")
            $("#firstName").css("border-bottom","2px solid #F90A0A");
            fname_err=false;
            return false;
        }else
        {
            $("#fc").hide();
            $("#firstName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Fname_val))
        {
            $("#fc").show();
            $("#fc").html("**please use alphabets only");
            $("#fc").focus();
            $("#fc").css("color","red");
            $("#firstName").css("border-bottom","2px solid #F90A0A");
            fname_err=false;
            return false;
        }else
        {
            $("#fc").hide();
            $("#firstName").css("border-bottom","2px solid #34F458");
        }
    }

    $("#lastName").keyup(function () {
        Lname_check();
    });
    function Lname_check()
    {
        var Lname_val=$("#lastName").val();
        if (Lname_val=="")
        {
            $("#lc").show();
            $("#lc").html("**please enter last name");
            $("#lc").focus();
            $("#lc").css("color","red")
            $("#lastName").css("border-bottom","2px solid #F90A0A");
            lname_err=false;
            return false;
        }else
        {
            $("#lc").hide();
            $("#lastName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Lname_val))
        {
            $("#lc").show();
            $("#lc").html("**please use alphabets only");
            $("#lc").focus();
            $("#lc").css("color","red");
            $("#lastName").css("border-bottom","2px solid #F90A0A");
            lname_err=false;
            return false;
        }else
        {
            $("#lc").hide();
            $("#lastName").css("border-bottom","2px solid #34F458");
        }
    }

    $("#fatherName").keyup(function () {
        Fathername_check();
    });
    function Fathername_check()
    {
        var Fathername_val=$("#fatherName").val();
        if (Fathername_val=="")
        {
            $("#fac").show();
            $("#fac").html("**please enter father name");
            $("#fac").focus();
            $("#fac").css("color","red")
            $("#fatherName").css("border-bottom","2px solid #F90A0A");
            fathername_err=false;
            return false;
        }else
        {
            $("#fac").hide();
            $("#fatherName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Fathername_val))
        {
            $("#fac").show();
            $("#fac").html("**please use alphabets only");
            $("#fac").focus();
            $("#fac").css("color","red");
            $("#fatherName").css("border-bottom","2px solid #F90A0A");
            fathername_err=false;
            return false;
        }else
        {
            $("#fac").hide();
            $("#fatherName").css("border-bottom","2px solid #34F458");
        }
    }

    $("#cnic").keyup(function () {
        cnic_check();
    });
    function cnic_check()
    {
        var cnic_val=$("#cnic").val();
        if (cnic_val=="")
        {
            $("#cc").show();
            $("#cc").html("**please enter CNIC");
            $("#cc").focus();
            $("#cc").css("color","red")
            $("#cnic").css("border-bottom","2px solid #F90A0A");
            cnic_err=false;
            return false;
        }else
        {
            $("#cc").hide();
            $("#cnic").css("border-bottom","2px solid #34F458");
        }
        if (!myRegExp.test(cnic_val))
        {
            $("#cc").show();
            $("#cc").html("**please enter with dashes(-)");
            $("#cc").focus();
            $("#cc").css("color","red");
            $("#cnic").css("border-bottom","2px solid #F90A0A");
            cnic_err=false;
            return false;
        }else
        {
            $("#cc").hide();
            $("#cnic").css("border-bottom","2px solid #34F458");
        }
    }

    $("#phoneNo").keyup(function () {
        phoneNo_check();
    });
    function phoneNo_check()
    {
        var phoneNo_val=$("#phoneNo").val();
        if (phoneNo_val=="")
        {
            $("#pc").show();
            $("#pc").html("**please enter phone no.");
            $("#pc").focus();
            $("#pc").css("color","red")
            $("#phoneNo").css("border-bottom","2px solid #F90A0A");
            phoneNo_err=false;
            return false;
        }else
        {
            $("#pc").hide();
            $("#phoneNo").css("border-bottom","2px solid #34F458");
        }
        if (!match_phone.test(phoneNo_val))
        {
            $("#pc").show();
            $("#pc").html("**please enter valid phone no.");
            $("#pc").focus();
            $("#pc").css("color","red");
            $("#phoneNo").css("border-bottom","2px solid #F90A0A");
            phoneNo_err=false;
            return false;
        }else
        {
            $("#pc").hide();
            $("#phoneNo").css("border-bottom","2px solid #34F458");
        }
    }

    $("#email").keyup(function () {
        email_check();
    });
    function email_check()
    {
        var email_val=$("#email").val();
        if (email_val=="")
        {
            $("#ec").show();
            $("#ec").html("**please enter email");
            $("#ec").focus();
            $("#ec").css("color","red");
            $("#email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#ec").hide();
            $("#email").css("border-bottom","2px solid #34F458");
        }
        if (!match_email.test(email_val))
        {
            $("#ec").show();
            $("#ec").html("**please enter valid email");
            $("#ec").focus();
            $("#ec").css("color","red");
            $("#email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#ec").hide();
            $("#email").css("border-bottom","2px solid #34F458");
        }
    }

    $("#address").keyup(function () {
        address_check();
    });
    function address_check() {
        var address_val = $("#address").val();
        if (address_val == "") {
            $("#ac").show();
            $("#ac").html("**please enter address");
            $("#ac").focus();
            $("#ac").css("color", "red");
            $("#address").css("border-bottom","2px solid #F90A0A");
            address_err = false;
            return false;
        } else {
            $("#ac").hide();
            $("#address").css("border-bottom","2px solid #34F458");
        }
    }

});
