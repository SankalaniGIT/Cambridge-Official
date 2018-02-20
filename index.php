<?php
//Database includes
require('./helpers/database.class.php');

//Status
require('helpers/status.php');
?>

<?php require_once('./resources/layout/index.php') ?>

<?php

    init_header();

?>
<style type="text/css">
    .header{
        min-height: 775px;
    }
</style>
    <div class="container">

        <h2 class="intro">CAMBRIDGE INTERNATIONAL SCHOOL</h2>
        <hr class="bar"/>
        <p style="color: white;font-size: 23px">THE LEADING INTERNATIONAL SCHOOL IN SRI LANKA</p>

        <div class="buttons inpage-scroll goDownLink">
            <a href="#aboutus"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>

</header>

<!--ABOUTUS SECTION-->
<?php include('./resources/index/aboutUs-section/index.php'); ?>


<!--NEWS SECTION-->
<?php include('./resources/index/news-section/index.php'); ?>


<!--GALLERY SECTION-->
<?php include('./resources/index/gallery-section/index.php'); ?>


<!--MANAGEMENT SECTION-->
<?php include('./resources/index/management-section/index.php'); ?>


<!--TESTIMONY SECTION-->
<?php //include('./resources/index/testimony-section/index.php'); ?>
<div>
    <?php if (isset($status)) {
        echo $status;
    }
    ?>
</div>

<!--CONTACT SECTION-->
<?php include('./resources/index/contact-section/index.php'); ?>


<?php init_footer(["http://localhost/cmb/Assets/js/index.js"]) ?>