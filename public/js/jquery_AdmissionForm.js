$(document).ready(function() {

    $("#fNameCheck").hide();
    $("#lNameCheck").hide();
    $("#fatherNameCheck").hide();
    $("#cnicCheck").hide();
    $("#phoneNoCheck").hide();
    $("#emailCheck").hide();
    $("#addressCheck").hide();

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
            $("#fNameCheck").show();
            $("#fNameCheck").html("**please enter first name");
            $("#fNameCheck").focus();
            $("#fNameCheck").css("color","red")
            $("#firstName").css("border-bottom","2px solid #F90A0A");
            fname_err=false;
            return false;
        }else
        {
            $("#fNameCheck").hide();
            $("#firstName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Fname_val))
        {
            $("#fNameCheck").show();
            $("#fNameCheck").html("**please use alphabets only");
            $("#fNameCheck").focus();
            $("#fNameCheck").css("color","red");
            $("#firstName").css("border-bottom","2px solid #F90A0A");
            fname_err=false;
            return false;
        }else
        {
            $("#fNameCheck").hide();
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
            $("#lNameCheck").show();
            $("#lNameCheck").html("**please enter last name");
            $("#lNameCheck").focus();
            $("#lNameCheck").css("color","red")
            $("#lastName").css("border-bottom","2px solid #F90A0A");
            lname_err=false;
            return false;
        }else
        {
            $("#lNameCheck").hide();
            $("#lastName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Lname_val))
        {
            $("#lNameCheck").show();
            $("#lNameCheck").html("**please use alphabets only");
            $("#lNameCheck").focus();
            $("#lNameCheck").css("color","red");
            $("#lastName").css("border-bottom","2px solid #F90A0A");
            lname_err=false;
            return false;
        }else
        {
            $("#lNameCheck").hide();
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
            $("#fatherNameCheck").show();
            $("#fatherNameCheck").html("**please enter father name");
            $("#fatherNameCheck").focus();
            $("#fatherNameCheck").css("color","red")
            $("#fatherName").css("border-bottom","2px solid #F90A0A");
            fathername_err=false;
            return false;
        }else
        {
            $("#fatherNameCheck").hide();
            $("#fatherName").css("border-bottom","2px solid #34F458");
        }
        if (!match_name.test(Fathername_val))
        {
            $("#fatherNameCheck").show();
            $("#fatherNameCheck").html("**please use alphabets only");
            $("#fatherNameCheck").focus();
            $("#fatherNameCheck").css("color","red");
            $("#fatherName").css("border-bottom","2px solid #F90A0A");
            fathername_err=false;
            return false;
        }else
        {
            $("#fatherNameCheck").hide();
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
            $("#cnicCheck").show();
            $("#cnicCheck").html("**please enter CNIC");
            $("#cnicCheck").focus();
            $("#cnicCheck").css("color","red")
            $("#cnic").css("border-bottom","2px solid #F90A0A");
            cnic_err=false;
            return false;
        }else
        {
            $("#cnicCheck").hide();
            $("#cnic").css("border-bottom","2px solid #34F458");
        }
        if (!myRegExp.test(cnic_val))
        {
            $("#cnicCheck").show();
            $("#cnicCheck").html("**please enter with dashes(-)");
            $("#cnicCheck").focus();
            $("#cnicCheck").css("color","red");
            $("#cnic").css("border-bottom","2px solid #F90A0A");
            cnic_err=false;
            return false;
        }else
        {
            $("#cnicCheck").hide();
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
            $("#phoneNoCheck").show();
            $("#phoneNoCheck").html("**please enter phone no.");
            $("#phoneNoCheck").focus();
            $("#phoneNoCheck").css("color","red")
            $("#phoneNo").css("border-bottom","2px solid #F90A0A");
            phoneNo_err=false;
            return false;
        }else
        {
            $("#phoneNoCheck").hide();
            $("#phoneNo").css("border-bottom","2px solid #34F458");
        }
        if (!match_phone.test(phoneNo_val))
        {
            $("#phoneNoCheck").show();
            $("#phoneNoCheck").html("**please enter valid phone no.");
            $("#phoneNoCheck").focus();
            $("#phoneNoCheck").css("color","red");
            $("#phoneNo").css("border-bottom","2px solid #F90A0A");
            phoneNo_err=false;
            return false;
        }else
        {
            $("#phoneNoCheck").hide();
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
            $("#emailCheck").show();
            $("#emailCheck").html("**please enter email");
            $("#emailCheck").focus();
            $("#emailCheck").css("color","red");
            $("#email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#emailCheck").hide();
            $("#email").css("border-bottom","2px solid #34F458");
        }
        if (!match_email.test(email_val))
        {
            $("#emailCheck").show();
            $("#emailCheck").html("**please enter valid email");
            $("#emailCheck").focus();
            $("#emailCheck").css("color","red");
            $("#email").css("border-bottom","2px solid #F90A0A");
            email_err=false;
            return false;
        }else
        {
            $("#emailCheck").hide();
            $("#email").css("border-bottom","2px solid #34F458");
        }
    }

    $("#address").keyup(function () {
        address_check();
    });
    function address_check() {
        var address_val = $("#address").val();
        if (address_val == "") {
            $("#addressCheck").show();
            $("#addressCheck").html("**please enter address");
            $("#addressCheck").focus();
            $("#addressCheck").css("color", "red");
            $("#address").css("border-bottom","2px solid #F90A0A");
            address_err = false;
            return false;
        } else {
            $("#addressCheck").hide();
            $("#address").css("border-bottom","2px solid #34F458");
        }
    }

});
