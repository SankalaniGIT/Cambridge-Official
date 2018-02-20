$(document).ready(function () {

    $("input").focus(function () {
        $(".loginPanel").css('opacity','1.0');
    });
    $("input").blur(function () {
        $(".loginPanel").css('opacity','0.1');
    });

});