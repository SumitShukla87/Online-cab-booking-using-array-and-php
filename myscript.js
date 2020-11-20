$(document).ready(function () {
    $("#cabtype").change(function () {       
        if ($(this).val() == 1) {
            $("#luggage").attr("disabled", "disabled")
           
        } else {
            $("#luggage").removeAttr("disabled");
            $("#luggage").focus();
        }
    });
});