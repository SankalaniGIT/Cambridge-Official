<?php require_once('../../layout/index.php') ?>

<?php

  init_header('management', ['http://localhost/cmb/assets/css/managemnt.css'], false);

?>

<?php 

require_once('../../../helpers/bannerNbreadcrumb.php');

bannerNbreadcrumb('Principal');

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
</div>
</div>
<?php
include('../../../helpers/database.class.php');
include('../../../helpers/copyright.php');

?>
<?php init_footer(['http://localhost/cmb/assets/js/jiSlider.js']) ?>

       