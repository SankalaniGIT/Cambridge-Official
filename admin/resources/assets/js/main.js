/* ================================
 ===  BACKGROUND SLIDER        ====
 ================================= */
$.vegas('slideshow', {
    delay:7000,
    backgrounds:[
        { src:'//localhost/adminpanel/public/images/backgrounds/matBlack.jpg', fade:1000 }
    ]
});


$( function() {
    $( "#tabs" ).tabs();
});


$('.toggleText').click(function () {
    $('.onlyOne').hide();
    $(this).next().next().next().next().show();
});


$('#t_check').change(function () {
    if($(this).is(':checked')){
        $(this).next().next().prop('disabled',true);
    }else{
        $(this).next().next().removeAttr('disabled');
    }
});

$('#st_check').change(function () {
    if($(this).is(':checked')){
        $(this).next().next().prop('disabled',true);
    }else{
        $(this).next().next().removeAttr('disabled');
    }
});


$('#c_check').change(function () {
    if($(this).is(':checked')){
        $(this).next().next().prop('disabled',true);
    }else{
        $(this).next().next().removeAttr('disabled');
    }
});


$('#nc_check').change(function () {
    if($(this).is(':checked')){
        $(this).next().next().prop('disabled',true);
    }else{
        $(this).next().next().removeAttr('disabled');
    }
});


$('#p_check').change(function () {
    if($(this).is(':checked')){
        $(this).next().next().prop('disabled',true);
    }else{
        $(this).next().next().removeAttr('disabled');
    }
});

