<?php
//Status
require('../../../helpers/status.php');


?>
<!doctype html>
<html lang="en">
<head>
    <title>Directress-Cambridge College</title>

    <?php include('../../../helpers/styles.php') ?>

    <link rel="stylesheet" href="../../../Assets/css/management.css">

</head>


<body>
<!-- =========================
   PRE LOADER
============================-->
<div class="preloader">
    <div class="status"></div>
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
                    <span>
                        <img src="../../../Assets/images/logos/LOGO.gif" width="60" height="70"/>
                        <span id="logoWord">CAMBRIDGE INTERNATIONAL SCHOOL</span>
                    </span>
                </a>
            </div>
            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse-2">
                <ul style="float: right" class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><a href="../../../#aboutus">ABOUT US</a></li>
                    <li><a href="../../../#features">HIGHLIGHTS</a></li>
                    <li><a href="../../../#focus">NEWS</a></li>
                    <li><a href="../../../#works">GALLERY</a></li>
                    <li><a href="../../../#team">MANAGEMENT</a></li>
                    <!--                    <li><a href="../../../#testimonials">TESTIMONIALS</a></li>-->
                    <li><a href="../../../#contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- / END TOP BAR -->
</header>
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <center>
                    <div class="container">
                        <img class="thumbnail" src="../../../assets/images/messages/dummy.png" alt="founder"/>
                        <div class="doubleBar">
                            <hr/>
                            <hr/>
                        </div>
                    </div>
                    <h6 class="text-info"><strong><i>Mrs.M.D.I.N.Siriwardena</i></strong></h6>
                    <p class="text-justify personDetail">
                        <i class="w3-text-blue">
                            Our mission is to nurture students to achieve excellence in education to become smart
                            citizens with balanced personalities, who can face the challenges in the new millennium
                            as members of the Global Village. The intention of Cambridge International School is to
                            establish a learning environment that is equipped with modern technology including a
                            modern computer lab and an e-learning centre. With the changes in teaching methodology,
                            using advanced technology to teach has become a necessity. Our purpose is to strengthen
                            students with advanced communication skills by enabling them to use e-learning
                            facilities to improve their knowledge and develop the technical skills.<br/><br/>We
                            believe that students can be empowered to enable them to become more responsible and
                            develop well balanced personalities. According to our vision, by enhancing their
                            creative abilities and including moral values and good attitudes, we can instill in them
                            patience, compassion, passion to the work hard and humility to treat all others with
                            mutual respect. At the same tie, we believe that students must be strong enough to stand
                            on their own feet with courage and to face any challenges independently and solve
                            problems they face in day to day life.<br/>Our aim is to ensure that each and every
                            student must complete at least a first degree in a university either in Sri Lanka or
                            anywhere in the world. With the training they should be able to reach near an idealistic
                            situation and ultimately should be able to achieve self actualization with this
                            education with the foundation that they get at Cambridge International School.<br/><br/>To
                            achieve all the above we practice Good Governance in a systematic and methodical way.
                            The culture of the school has evolved by valuing every one&rsquo;s identity and
                            maintaining a high standard of discipline that will enhance the image of the school. I
                            wish the students and staff of the school the very best to live a life to it fullest
                            potential.<br/><br/>Principal<br/>Mrs.M.D.I.N.Siriwardena
                        </i>
                    </p>
                </center>
            </div>
        </div>

</section>

<?php
include('../../../helpers/database.class.php');
include('../../../helpers/footer.php');
include('../../../helpers/scripts.php');

?>

</body>
</html>