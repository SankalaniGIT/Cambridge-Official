var url = window.location.toString();
if (url.split('?msgStatus').length == 2) {
    setTimeout(function () {
        window.location = "./#contact";
    }, 5000);

}

$(document).scroll(function () {
    if ($(document).scrollTop() > 20) {
        $('#main-nav').css('background', "black");
    } else {
        $('#main-nav').css('background', "transparent");
    }
});

//BACKGROUND LOADER
jQuery(window).load(function () {
    jQuery(".status").fadeOut();
    jQuery(".preloader").delay(1000).fadeOut("slow");

})

//BOOTSTRAP FIXES FOR MOBILE BROWSERS
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
        document.createTextNode(
            '@-ms-viewport{width:auto!important}'
        )
    )
    document.querySelector('head').appendChild(msViewportStyle)
}

//NAVIGATOR HEADER SCRIPT

$(document).ready(function () {
    $('.main-nav-list').onePageNav({
        changeHash: true,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: ':not(.external)'
    });

    var top = $('#main-nav').offset().top - parseFloat($('#main-nav').css('margin-top').replace(/auto/, 0));

    $(window).scroll(function (event) {
        var y = $(this).scrollTop();
        if (y >= top) {
            $('#main-nav').addClass('fixed');
        } else {
            $('#main-nav').removeClass('fixed');
        }
    });

});

//ONE PAGE SCROLLING SCRIPT
$(document).ready(function () {
    $('a[href^="#"].inpage-scroll, .inpage-scroll a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);
        $('.main-navigation a[href="' + target + '"]').addClass('active');
        $('.main-navigation a:not([href="' + target + '"])').removeClass('active');
        $('html, body').stop().animate({
            'scrollTop': ($target.offset()) ? $target.offset().top : 0
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});


var scrollAnimationTime = 1200,
    scrollAnimation = 'easeInOutExpo';
$('a.scrollto').bind('click.smoothscroll', function (event) {
    event.preventDefault();
    var target = this.hash;
    $('html, body').stop().animate({
        'scrollTop': $(target).offset().top
    }, scrollAnimationTime, scrollAnimation, function () {
        window.location.hash = target;
    });
});


//TESTIMONY AND GALLERY OWL CAROUSELS
$(document).ready(function () {
    var owl = $("#testinimonialBlock");
    owl.owlCarousel({
        items: 3,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [900, 1],
        itemsTablet: [600, 1],
        itemsMobile: false
    });

    $("#galleryOwl").owlCarousel({
        items: 1,
        singleItem: true
    });

    $("#projectOwl").owlCarousel({
        items: 1,
        singleItem: true
    });

});


//WOW DIVISION SLOW ANIMATION SCRIPT

new WOW().init();


//CONTACT PAGE SCRIPT

$('footer .icon-top').mouseover(function () {
    $(this).removeClass('white-text');
    $(this).addClass('red-text');
});
$('footer .icon-top').mouseout(function () {
    $(this).removeClass('red-text');
    $(this).addClass('white-text');
});


function goToPanel(str) {

    if (str == 'admin') {
        window.location = './studentManage/';
    }
    else if (str == 'student') {
        window.location = './studentPage/';
    } else {
        window.alert('No Links Fouund');
    }

}


/*----------------------------------------------------
 GALLERY EFFECT
 -----------------------------------------------------*/

function filterGallery(id) {
    $('#galleryOwl').prepend('<div class="blockLoader"><div class="status"></div></div>');

    // OWL DIVISIONS

    $.ajax({
        url: './helpers/gallery/gallery.php',
        data: {id: id},
        type: 'GET',
        success: function (data) {
            $('#filterOwl').removeClass('hidden');
            $('#galleryOwl').addClass('hidden');
            $('#filterOwl').html(data);


        },
        error: function (error) {

        },
        complete: function () {
            $(".blockLoader").fadeOut("slow");
            $(".blockLoader .status").delay(1000).fadeOut("slow");

            $('.blockLoader').remove();
        }
    });
}
