<?php
//Database includes
require('../../../helpers/database.php');

//Status
require('../../../helpers/status.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Highlights-Cambridge College</title>
    <?php include('../../../helpers/styles.php') ?>
    <link rel="stylesheet" href="../../../Assets/css/highlights.css">
</head>


<body>
<!-- =========================
   PRE LOADER
============================== -->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
<!-- =========================
   HOME SECTION
============================== -->
<header id="home" class="header">

    <!-- TOP BAR -->
    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#bs-navbar-collapse-2">
                    <span aria-readonly="true"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../#home">
                    <span><img src="../../../Assets/images/logos/LOGO.gif" width="60" height="70"/><span id="logoWord">CAMBRIDGE INTERNATIONAL SCHOOL</span></span>
                </a>
            </div>
            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse-2">
                <ul style="float: right" class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><a href="../../../#aboutus">ABOUT US</a></li>
                    <li><a href="../../../#news">NEWS</a></li>
                    <li><a href="../../../#gallery">GALLERY</a></li>
                    <li><a href="../../../#management">MANAGEMENT</a></li>
                    <li><a href="../../../#testimonials">TESTIMONIALS</a></li>
                    <li><a href="../../../#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- / END TOP BAR -->
</header>
<section id>
</section>

<?php

include('../../../helpers/footer.php');
include('../../../helpers/scripts.php');
?>
<script src="../../../Assets/js/highlights.js"></script>
</body>
</html>