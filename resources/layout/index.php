<?php

function init_header($page='index', array $styles = [], $allMenu = true)
{
	switch ($page) 
    {
      
      case 'index':
       		$title = 'Cambridge International School';
        break;
	  case 'news':
	        $title = 'News | Cambridge International School';
        break;
        case 'school':
            $title = 'School Information | Cambridge International School';
        break;
        case 'careers':
            $title = 'Careers | Cambridge International School';
        break;
        case 'apply_online':
            $title = 'Application Online | Cambridge International School';
        break;
        case 'management':
            $title = 'Management | Cambridge International School';
        break;
        case 'messages':
            $title = 'Messages | Cambridge International School';
        break;
      default:
         $title = 'Cambridge International School';
        break;
    }

    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="UTF-8">
    <meta name="keywords" content="Cambridge Internatinal School,Colombo 15,Mattakkuliya"/>
    <meta name="author" content="AppleTech Labs"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  GOOGLE FONTS  -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Muli|News+Cycle" rel="stylesheet">


    <!--  SCHOOL LOGO  -->
    <link rel="icon" type="image/png" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/images/logos/LOGO.gif">

    <!--  STYLESHEETS  -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/owl.theme.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/owl.carousel.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/jquery.vegas.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/animate.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/slider.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/aboutUs.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/responsive.css">

    <?php

            foreach ($styles as $style) {
                echo "<link rel='stylesheet' href='". $style ."'>". PHP_EOL;
            }

    ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/css/styles.css">

    <!-- WEB FONT -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple'
          rel='stylesheet' type='text/css'>

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- FANCY BOX -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
  </head>
  <body>

   <!-- container -->
  

 <!-- Static navbar -->
     <body>

<!--BACKGROUND LOADER-->
<div class="preloader">
    <ul class="list-inline list-unstyled">
        <li><strong>CAMBRIDGE INTERNATIONAL SCHOOL</strong></li>
    </ul>
    <img src="http://localhost/cmb/Assets/images/logos/LOGO.gif" width="50"/>
    <hr/>
    <div class="status"></div>
</div>


<!--HOME SECTION-->
<header id="home" class="header">

    <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header responsive-logo">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#bs-navbar-collapse">
                    <span aria-readonly="true"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="//localhost/cmb">
                    <span>
                    <div class="logoWord"></div>
                        <span>CAMBRIDGE INTERNATIONAL SCHOOL</span>
                   </span>
                </a>
            </div>
            <?php 

            if($allMenu)
            {
            ?>

            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#home">HOME</a></li>
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#aboutus">ABOUT US</a></li>
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#news">NEWS</a></li>
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#gallery">GALLERY</a></li>
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#management">MANAGEMENT</a></li>
                    <!--<li><a href="#testimonials">TESTIMONIALS</a></li>-->
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/#contact">CONTACT</a></li>
                    <li>
                        <a href="javascript: void()" onclick="toggleMorePanel()">
                            MORE
                        </a>
                    </li>
                    <li id="student" onclick="redirect(this.id)"><img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/images/icons/studentIcon.png"/></li>
                    <li id="admin" onclick="redirect(this.id)"><img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/images/icons/adminIcon.png"/></li>
                </ul>
                </ul>
            </nav>
        
            <?php }

            else{
            ?>
            <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                    <li><h5 style="color: white;margin-top: 5px"><?php echo $title; ?></h5></li>
                </ul>
            </nav>

            <?php

        }
        ?>

        </div>
    </div>
    <div id="morePanel" class="panel hidden">
        <table class="table table-hover">
            <tr>
                <td>
                    <a href="resources/applications/careers/">
                        CAREERS
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="resources/applications/applyOnline/">
                        ONLINE APPLICATION
                    </a>
                </td>
            </tr>
        </table>
    </div>

    <?php
}


function init_footer($scripts = [])
{
	?>

	<!-- SCRIPTS -->
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/wow.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/jquery.nav.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/owl.carousel.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/jquery.vegas.min.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/validateContactForm.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/aboutUs.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/validateContactForm.js"></script>
<script src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/cmb/Assets/js/cambridge.js"></script>
<?php

foreach ($scripts as $script) {
    echo "<script src='". $script ."'></script>" . PHP_EOL;
}

?>
</body>
</html>

	<?php
}

?>