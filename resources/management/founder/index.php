<?php
//Status
require('../../../helpers/status.php');


?>
<!doctype html>
<html lang="en">
<head>
    <title>Founder-Cambridge College</title>

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
                    <h6 class="text-info"><strong><i>Mrs. K.Muthusamy</i></strong></h6>
                    <p class="text-justify personDetail">
                        <i class="w3-text-blue">
                            I take pride in the fact to state that I am the founder person of Cambridge
                            International School. With the assistance of my husband the Chairman Mr.Muthusamy who
                            has spent a large sum of money to establish and continuously uplift the school....<br/>Education
                            is a fundamental right of every child and therefore, every child should have the
                            opportunity to get proper education. Unfortunately, the few schools in Kotahena are
                            unable to absorb all the children and the international schools here provide education
                            at a price which is beyond the reach of poor and middle class parents. As a result many
                            children belonging to various communities and ethnic groups are deprived of good
                            education.<br/><br/>It is with the objective of providing quality education at
                            affordable price that Cambridge International School was established in the year 2000,
                            with two teachers and five students. Mrs.Pamini Vetrichelvan was the first principal. I
                            still remember vividly what I said to Mrs. Pamini Vetrichelvan, when the chairman came
                            to inaugurate the school &ldquo; I have provided good education to my children to become
                            engineers,&nbsp; doctors and accountant. Similarly, I want to give this opportunity for
                            other children in the community so that they become professionals&rdquo;. With the
                            passage of time the number on roll increased rapidly and the management shifted the
                            school to the present venue.<br/><br/>Going to school with books is not the be all and
                            end all of education. Education moulds the character of pupils nurtures their knowledge,
                            exploits their creativity for productivity and trains them to become good citizens and
                            professionals to face the tomorrow&rsquo;s challenge.<br/><br/>As school developed
                            steadily, Mrs.A.C.N.Jasmin was appointed the principal whom we found to be a strict
                            disciplinarian and workaholic. During her principalship, the school improved by leaps
                            and bounds. Education curriculum was further enhanced, books were imported from overseas
                            publishers, examination papers were streamlined and discipline was enforced to the
                            letter.<br/><br/>Our development programme has not ceased. A significant amount of money
                            has been already invested to construct modern classrooms, laboratory and on sports
                            facilities, so that we could provide nothing but the best in quality education and extra
                            curricular activities.<br/><br/>May I take this opportunity to thank all the teachers,
                            parents and the principal for their unstinted support and co-operation for building our
                            school to this reputed position.<br/><br/><br/>&nbsp;Mrs.K.Muthusamy
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