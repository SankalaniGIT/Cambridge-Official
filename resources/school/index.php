<?php

require_once('../layout/index.php');

require_once('../../helpers/database.class.php');

$school = new DBConnection();

$connection = $school->connect();

$profile = [];
$anthem = [];
$houses = [];
$crest = [];

$result_profile = mysqli_query($connection, 'SELECT * FROM school_profile WHERE TRUE');
$result_anthem = mysqli_query($connection, 'SELECT * FROM anthem WHERE TRUE');
$result_houses = mysqli_query($connection, 'SELECT * FROM houses WHERE TRUE');
$result_crest = mysqli_query($connection, 'SELECT * FROM crest WHERE TRUE');

while ($row_profile = mysqli_fetch_assoc($result_profile)) {
    $profile[] = $row_profile['title'];
    $profile[] = $row_profile['subtitle'];
    $profile[] = $row_profile['information'];
    $profile[] = $row_profile['picture1'];
    $profile[] = $row_profile['picture2'];
    $profile[] = $row_profile['picture3'];
    $profile[] = $row_profile['picture4'];
    $profile[] = $row_profile['picture5'];
    $profile[] = $row_profile['picture6'];
}

while ($row_anthem = mysqli_fetch_assoc($result_anthem)) {
    $anthem[] = $row_anthem['title'];
    $anthem[] = $row_anthem['audio'];
    $anthem[] = $row_anthem['text'];
}
while ($row_houses = mysqli_fetch_assoc($result_houses)) {
    $houses[] = $row_houses['title'];
    $houses[] = $row_houses['picture'];
    $houses[] = $row_houses['information'];
}
while ($row_crest = mysqli_fetch_assoc($result_crest)) {
    $crest[] = $row_crest['title'];
    $crest[] = $row_crest['picture'];
    $crest[] = $row_crest['information'];
}


?>

<?php

init_header('school', ['http://localhost/cmb/assets/css/jiSlider.css', 'http://localhost/cmb/assets/css/school.css', 'http://localhost/cmb/assets/css/tabs.css', 'http://localhost/cmb/assets/css/tabStyles.css'], false);

?>

<?php

require_once('../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Cambridge International School');

?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } );
  </script>
<div class="container-fluid" style='background: white;padding-top: 50px'>
        <div class="tabs tabs-style-bar">
        <nav>
            <ul>
                <li><a href="#profile"><span>PROFILE</span></a>
                </li>
                <li><a href="#anthem"><span>ANTHEM</span></a>
                </li>
                <li><a href="#houses"><span>HOUSES</span></a>
                </li>
                <li><a href="#crest"><span>CREST</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="profile">
            <h3 class="titleTabs" style="text-align: left;padding-left: 25px;">
                <strong>
                    <i><?php echo (isset($profile[0])) ? $profile[0] : ''; ?></i>
                </strong>
            </h3>
            <div style="text-align: left;">
                <h4><?php echo (isset($profile[1])) ? $profile[1] : ''; ?></h4>

                <p><small><?php echo (isset($profile[2])) ? $profile[2] : ''; ?></small></p>

                <div class="gallery">
                    <div id="section-bar-1" class="agileits w3layouts">
                        <div class="gallery-grids">
                            <?php

                            for ($n = 3; $n < 9; $n++) {

                                ?>
                                <div class="col-md-4 col-sm-4 gallery-top">
                                    <a data-fancybox='school-gallery'
                                       href="http://localhost/cmb/<?php echo (isset($profile[$n])) ? $profile[$n] : ''; ?>"
                                       class="swipebox">
                                        <figure class="effect-apollo">
                                            <img style="height: 275px"
                                                 src="http://localhost/cmb/<?php echo (isset($profile[$n])) ? $profile[$n] : ''; ?>"
                                                 alt="Health Plus" class="img-responsive">
                                            <figcaption></figcaption>
                                        </figure>
                                    </a>
                                </div>

                                <?php
                            }
                            ?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section id="anthem">
            <h3 class="titleTabs" style="text-align: left;padding-left: 25px">
                <strong>
                    <i><?php echo (isset($anthem[0])) ? $anthem[0] : ''; ?></i>
                </strong>
            </h3>
            <audio controls="">
                <source src="http://localhost/cmb/<?php echo (isset($anthem[1])) ? $anthem[1] : ''; ?>"
                        type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <div style="text-align: center;width: 100%">
                <?php echo (isset($anthem[2])) ? $anthem[2] : ''; ?>
            </div>
        </section>
         <section id="houses">
            <h3 class="titleTabs" style="text-align: left;padding-left: 25px">
                <strong>
                    <i><?php echo (isset($houses[0])) ? $houses[0] : ''; ?></i>
                </strong>
            </h3>
            <div>
                    <img border="0" src="http://localhost/cmb/<?php echo (isset($houses[1])) ? $houses[1] : ''; ?>"
                         width="400"></p>
                <?php echo (isset($houses[2])) ? $houses[2] : ''; ?>
            </div>
        </section>
         <section id="crest">
            <h3 class="titleTabs" style="text-align: left;padding-left: 25px">
                <strong>
                    <i><?php echo (isset($crest[0])) ? $crest[0] : ''; ?></i>
                </strong>
            </h3>
            <table style="width: 100%;margin-bottom: 25px;">
                <tr>
                    <td align="center">
                        <img src="http://localhost/cmb/<?php echo (isset($crest[1])) ? $crest[1] : ''; ?>" width="250"/>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <?php echo (isset($crest[2])) ? $crest[2] : ''; ?>
                    </td>
                </tr>
            </table>
        </section>
</div>
</div>
<!-- //banner -->
<script type="text/javascript" src="http://localhost/cmb/assets/js/tabs.js"></script>
<script type="text/javascript">
    [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
</script>
<?php

include('../../helpers/copyright.php');

?>
<?php init_footer() ?>
