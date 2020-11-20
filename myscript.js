$(document).ready(function () {
    $("#cabtype").change(function () {       
        if ($(this).val() == 1) {
            $("#luggage").attr("disabled", "disabled")
           
        } else {
            $("#luggage").removeAttr("disabled");
            $("#luggage").focus();
        }
    });
    // $(".btn1").click(function(event){
    //     event.preventDefault();
    //   });
});
$('.lug').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});
