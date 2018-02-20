<?php


require('../../../helpers/database.class.php');

//Status
require('../../../helpers/status.php');

require('../../../helpers/career/get.php');

require_once('../../layout/index.php');

?>
<?php

  init_header('careers', ['http://localhost/cmb/resources/applications/careers/css/careers.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Careers');

?>

</header>
<section class="careerScroll">
    <div class="container-fluid" style='background: white;padding-top: 50px'>
<div class="col-md-4">
  <div class="premiseDetail">
                    <div class="headDetail">
                        Life At School
                    </div>
                    <div class="bodyDetail">
                        <ul>
                            <li>Excellent Remuneration</li>
                            <li>Wonderful Staff Community</li>
                            <li>Diverse Culture</li>
                            <li>An opportunity to climb up in your career</li>
                        </ul>
                    </div>
                </div>
                <div class="premiseDetail">
                    <div class="bodyDetail">
                        <ul>
                            <li><h4 class="text-info">Here is a life enriching, challenging and fulfilling career
                                    opportunity</h4></li>
                        </ul>
                        <p class="text-success">
                            Put your passion for teaching into practice, as a facilitator who makes learning come
                            alive. We have an excellent teacher-student ratio, and provide our staff ample
                            opportunities for professional and career advancement through regular skills development
                            workshops.
                        </p>
                        <hr/>
                        <ol class="list-unstyled text-warning">
                            <li>Over <strong>700</strong> Students</li>
                            <li>Over <strong>70</strong> Academic Staff</li>
                            <li>Number Of Administrative and Labour Staff</li>
                        </ol>

                    </div>
                </div>
</div>
<div class="col-md-8">
        <div class="vacancyFlow">
                    <div class="currentVacancies">
                        Current Vacancies
                    </div>

                    <?php

                    echo '<ul class="list-unstyled list-inline careerPages">';
                    if ($pages > 0) {
                        for ($n = 1; $n < $pages + 1; $n++) {
                            echo '<li>' . $n . '</li>';
                        }
                    }
                    echo '</ul>';

                    ?>

                    <div class="vacantBlock">


                        <?php

                        $stream = '';

                        if (isset($countCareers)) {

                            if ($countCareers > 0) {
                                for ($i = 0; $i < $countCareers; $i++) {

                                    $stream .= '<div class="eachVacancy">';
                                    $stream .= '<table>';
                                    $stream .= '<tr><td><h6><strong>Position </strong></h6></td><td><span>' . $career[$i]['position'] . '</span> <span><strong>(' . $career[$i]['noOfVacants'] . ' vacant/s)</span></span></td></tr>';
                                    $stream .= '<tr><td><h6><strong>Description </strong></h6></td><td><span>' . $career[$i]['description'] . '</span></td></tr>';
                                    $stream .= '<tr><td><h6><strong>Date Posted </strong></h6></td><td><span>' . $career[$i]['datePosted'] . '</span></td></tr>';
                                    $stream .= '<tr><td><h6><strong>Expires In </strong></h6></td><td><span>' . $career[$i]['postDuration'] . ' days</span></td></tr>';
                                    $stream .= '<tr><td><h6><strong>Priority </strong></h6></td><td><span style="color: red">' . $career[$i]['priority'] . '</span></td></tr>';
                                    $stream .= '<tr><td colspan="2"><button id="' . $career[$i]['id'] . '" class="btn" onclick="javascript: showThisVacant(this.id)">View Job</button></td></tr>';
                                    $stream .= '</table></div>';
                                }

                                echo $stream;

                            }
                        } else {
                            $stream = '<div style="color: maroon">
                                            <strong>Sorry, Currently we don\'t have any vacancies. We\'ll update soon.</strong>
                                    </div>';

                            echo $stream;
                        }

                        ?>

                    </div>


                </div>
</div>
</div>
</section>

<?php

require('../../../helpers/modal/specificVacancy.php');
include('../../../helpers/copyright.php');
?>
<?php init_footer(['http://localhost/cmb/resources/applications/careers/js/careers.js']) ?>