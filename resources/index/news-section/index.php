<?php
require_once('./resources/includes/news/get.php');
?>

<section class="news" id="news">
    <div class="container-fluid">

        <div class="section-header">
            <div class="header-title wow bounceInDown animated" data-wow-offset="30" data-wow-duration="1s"
                 data-wow-delay="0s">LATEST <strong>NEWS</strong></div>
            <div class="doubleBar">
                <hr/>
                <hr/>
            </div>
        </div>

        <div class='row container-fluid newsBlock'>

            <?php
            require_once('./resources/includes/news/post.php');
            ?>


        </div>

    </div>

</section>
<script type="text/javascript">

    if ($(window).width() > 1000) {
        $('.newsBox').mouseover(function () {
            $(this).css({'backgroundColor': 'black'});
            $(this).find('.newsText').addClass('black')
        });
        $('.newsBox').mouseout(function () {
            $(this).css({'backgroundColor': 'white'});
            $(this).find('.newsText.black').removeClass('black')
        });
    }
    function viewThisNew(id) {
        window.location = './resources/home/news/?newsID=' + id;
    }

</script>