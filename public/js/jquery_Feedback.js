$(document).ready(function() {
    $("#fsubmit").attr("disabled",true);
    $("#fForm").on("keyup",function () {
        var feedback=$("#feedback").val();
        if(feedback!=0) {
            $("#fsubmit").attr("disabled", false);
        }
        else {
            $("#fsubmit").attr("disabled", true);
        }
    });
});
