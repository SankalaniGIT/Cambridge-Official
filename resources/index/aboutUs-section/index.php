<?php
$hl_object = new DBConnection();
$hl_conn = $hl_object->connect();

$hl_query = 'SELECT * FROM highlights WHERE TRUE ORDER BY id DESC';

$hl_result = mysqli_query($hl_conn, $hl_query);

$highlights = '';
while ($hl_row = mysqli_fetch_assoc($hl_result)) {
    $highlights .= '<img src="' . $hl_row['image_path'] . '"/>';
}

?>
<section class="about-us" id="aboutus">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="slides">
                    <?php
                    echo $highlights;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section-header">

                <h2 class="wow bounceInUp animated" data-wow-offset="30" data-wow-duration="1s" data-wow-delay="0s"
                    style="font-family: Myriad Pro">About Cambridge International School</h2>

            </div>

            <div class="col-lg-4 col-md-4 column">
                <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s"
                     data-wow-delay="0.15s">
                    <center>
                        <img src="//localhost/cmb/assets/images/logos/LOGO.gif"
                             style="margin-top: 0" width="280" alt="school logo"/>
                    </center>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 column">
                <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                <h5 id="abt_mission" style="color: rgb(112,14,11)">MISSION</h5>
                <blockquote class="text-capitalize text-white">
                    “We aim to develop responsible and learned citizens of tomorrow by ensuring that every child is
                    given equal opportunity to excel in education”
                </blockquote>
                <h5 id="abt_mission" style="color: rgb(112,14,11)">VISION</h5>
                <blockquote class="text-capitalize text-white">
                    "The vision of the school is to help every child develop his or her mind, character, and physical
                    well-being through the creation of an environment that fosters academic excellence, maturity,
                    responsibility and mutual respect"
                </blockquote>
                </p>
            </div>


            <div class="col-lg-4 col-md-4 column" style="padding-left: 75px">
                <ul class="links wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s"
                    data-wow-delay="0.15s">

                    <li class="link">
                        <h6><img src="./Assets/images/icons/schoolIco.png" width="30"><a
                                    href="resources/school/">SCHOOL PROFILE</a></h6>
                        <p>
                            Goto school profile
                        </p>
                    </li>

                    <li class="link">
                        <h6><img src="./Assets/images/icons/schoolIco.png" width="30"><a href="resources/applications/applyOnline">ONLINE APPLICATION</a>
                        </h6>
                        <p>
                            Goto apply online
                        </p>
                    </li>

                    <li class="link">
                        <h6><img src="./Assets/images/icons/schoolIco.png" width="30"><a
                                    href="resources/applications/careers/">CAREERS</a></h6>
                        <p>
                            Goto see new job openings
                        </p>
                    </li>

                    <li class="link">
                        <h6><img src="./Assets/images/icons/schoolIco.png" width="30"><a
                                    href="resources/home/messages/">MESSAGES</a></h6>
                        <p>
                            See messages from Management
                        </p>
                    </li>

                </ul>
            </div>
        </div>

    </div>

</section>


    