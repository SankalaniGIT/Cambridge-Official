<?php require_once('../../layout/index.php') ?>

<?php

  init_header('management', ['http://localhost/cmb/assets/css/managemnt.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Director');

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
                            I am rejoiced to give this message on the occasion of the eleventh anniversary of
                            Cambridge International School. Launched in the year 2000 on a small scale, today the
                            school with over 600 students on its roll has rendered a decade of dedicated service in
                            the cause of education by implementing the National curriculum and the London
                            curriculum. During the period under review, the school has extended more facilities and
                            produced good result so that it has created a major impact in the realm of education to
                            become one of the leading educational institutes in the island. Equipped with a
                            qualified, experienced and dedicated teaching staff, Cambridge International encourages
                            the students after their secondary education to pursue a degree course of studies in a
                            university, so that they could become professionals like doctors, lawyers, engineers and
                            accountants to serve both in the private and state sectors.<br/><br/>Currently our
                            attention is focused on developing the school to be one of the leading schools in the
                            island and contemplates introducing additional sports and games, extra curricular
                            activities and cultural programs etc, so that each and every child develops mentally,
                            physically and intellectually.<br/><br/>Within the last decade the Management of the
                            school has been spending a significant amount of money by way of constructing modern and
                            comfortable classrooms, Laboratory, dancing room and library with a view to providing
                            better facilities to the students. Furthermore the new building under construction
                            comprises 42 classrooms, a new state of the art auditorium with additional play area and
                            is expected to be completed in the near future. This will greatly enhance facilities to
                            the students.<br/><br/>I would like to take this opportunity to admonish the present
                            students that their long path to the future is strewn with pitfalls; they should avoid
                            this and follow the guidance of their parents, principal and teachers to pave the way
                            for a bright future. Finally, I express my whole hearted gratitude to the principal,
                            teachers, non-teaching staff and all the past employees who have contributed in no small
                            measure for the upliftment of the school.<br/><br/>Mr.Pradeep Kumar Muthusamy<br/>Managing
                            Director
                        </i>
                    </p>
</div>
</div>
<?php
include('../../../helpers/database.class.php');
include('../../../helpers/copyright.php');

?>
<?php init_footer(['http://localhost/cmb/assets/js/jiSlider.js']) ?>

       