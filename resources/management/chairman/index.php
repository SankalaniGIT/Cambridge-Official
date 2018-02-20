<?php require_once('../../layout/index.php') ?>

<?php

  init_header('management', ['http://localhost/cmb/assets/css/managemnt.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Chairman');

?>

</header>
<section id="profile">
    <div class="container-flud">
        <div class="row">
            <div class="container-fluid" style='background: white;padding-top: 50px'>
            <div class="col-md-4">
                
                <center>
                    <img class="img-circle" style="margin-top: 20px;" src="../../../assets/images/messages/dummy.png" width="350" alt="chairman"/>
                </center>
                
            </div>
            <div class="col-md-8">
              <h6 class="text-info"><strong><i>Mr.Muthusamy</i></strong></h6>
                    <p class="text-justify personDetail" style="padding: 10px 20px">
                        <i class="w3-text-blue">
                            Since attaining independence in 1948, our country has gone through tremendous changes in
                            the sphere of education. A good education is an asset for one to achieve the goal of
                            bright future. Taking into consideration this vital fact, I have launched Cambridge
                            International School for quality education, as there are no better educational
                            institutions in and around Kotahena to meet with the needs and aspirations of the
                            parents and pupils.<br/><br/>Over the last decade we have invested a significant amount
                            of money for the development of the school in providing a laboratory, a dance room and
                            music room. As further development project, we have started construction work for a new
                            building to provide auditorium and new classroom facilities. Equipped with qualified and
                            experienced teachers, the school is beset with the noble task of moulding the character
                            and personality of the pupils and assist them to become professionals in various fields
                            to face the challenges of the future.<br/><br/>It is my opinion the future challenges
                            could be tackled by restructuring the education and methods of teaching in compliance
                            with the technological advancement to meet with the manpower need of the country.
                            Undoubtedly, Cambridge International is beset with this task to churn out productive
                            manpower to the country.<br/><br/>I conclude this message with best wishes to students,
                            parents, the principal and teachers......<br/><br/>Mr.V.Muthusamy
                        </i>
                    </p>
</div>
</div>
<?php
include('../../../helpers/database.class.php');
include('../../../helpers/copyright.php');

?>
<?php init_footer(['http://localhost/cmb/assets/js/jiSlider.js']) ?>

       