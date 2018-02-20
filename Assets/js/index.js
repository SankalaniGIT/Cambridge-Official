    $(function () {

        $('.itemNews').each(function (event) {
            var max_length = 150;

            if ($(this).text().length > max_length) {
                var length = $(this).text().length;
                var short_content = $(this).html().substr(0, max_length);
                var long_content = $(this).html().substr(max_length, length);


                $(this).html(short_content + '<strong>...</strong>');
            }
        });
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });

    function redirect(dest) {
        if (dest == 'student') {
            window.location = 'http://localhost/cmb/studentPage';
        } else if (dest == 'admin') {
            window.location = 'http://localhost/cmb/studentManage';
        }
        else {

        }
    }

    function toggleMorePanel() {
        if ($('div#morePanel').hasClass('hidden')) {
            $('div#morePanel').removeClass('hidden');
        } else {
            $('div#morePanel').addClass('hidden');
        }
    }
     //VEGAS BACKGROUND SLIDER FOR SCHOOL BACKGROUND IMAGES
    $.vegas('slideshow', {
        delay: 7000,
        backgrounds: [
            {src: 'http://localhost/cmb/assets/images/backgrounds/cis.png', fade: 1000}
        ]
    });

