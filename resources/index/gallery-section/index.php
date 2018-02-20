<?php


$gal_instance = new DBConnection();

$conn_gallery = $gal_instance->connect();


$resultGroups = mysqli_query($conn_gallery, 'SELECT * FROM categorygroup');


$initG = 0;
if (mysqli_num_rows($resultGroups) > 0) {
    $groups[][] = '';
}

while ($rowGroups = mysqli_fetch_assoc($resultGroups)) {
    $groups[$initG]['id'] = $rowGroups['id'];
    $groups[$initG]['name'] = $rowGroups['groupName'];
    $initG++;
}

$totalGroups = count($groups);


?>
<section class="gallery" id="gallery">
    <div class="container-fluid" style="padding-right: 30px;padding-left: 30px">
        <div class="section-header">
            <div class="header-title wow bounceInDown animated" data-wow-offset="30" data-wow-duration="1s"
                 data-wow-delay="0s"><strong>GALLERY</strong></div>
            <div class="doubleBar">
                <hr/>
                <hr/>
            </div>
        </div>
        <div class="row projects">
            <div id="loader">
                <div class="loader-icon"></div>
            </div>


            <div class="col-md-12" id="portfolio-list">
                <div class="container-fluid" id="filterBar">
                    <ul class="list-inline list-unstyled">
                        <li><strong>FILTER :</strong></li>
                        <li><a id="all" href="javascript: void()" onclick="javascript: showAllGallery()">ALL</li>

                        <?php
                        if ($totalGroups > 0) {
                            for ($g = 0; $g < $totalGroups; $g++) {
                                echo '<li><a id="' . $groups[$g]['id'] . '" href="javascript: void()" onclick="javascript: filterGallery(this.id)">' . $groups[$g]['name'] . '</a></li>';
                            }
                        }


                        ?>
                    </ul>
                </div>
                <?php
                require_once('./resources/includes/gallery/views.php');
                ?>
                <div id="galleryOwl" class="owl-carousel owl-theme">
                    <?php
                    require_once('./resources/includes/gallery/post.php');
                    ?>
                </div>

                <div id="filterOwl">

                </div>


                <!----------------------------------------------------------

                 PROJECT GROUP OWL CAROUSEL

                ------------------------------------------------------------>

                <div id="projectOwl" class="hidden">
                    <?php
                    require_once('./resources/includes/gallery/postProjects.php');
                    ?>
                </div>

            </div>


        </div>
        <script>
            function toggleOwlGallery() {
                $('#filterBar').hide();
                $('#galleryOwl').hide();
                $('#projectOwl').removeClass('hidden').append('<a style="cursor: pointer;" id="backToGallery" class="btn btn-neutral"><strong><i class="fa fa-chevron-left" aria-hidden="true"></i> GO BACK</strong></a>');

                $('#backToGallery').click(function () {

                    $('#filterBar').show();

                    $('#galleryOwl').show();

                    $('#projectOwl').addClass('hidden');

                    //Removing Self
                    $(this).remove();
                });
            }
            function showAllGallery() {
                $('#projectOwl').addClass('hidden');

                $('#filterOwl').addClass('hidden');

                $('#galleryOwl').removeClass('hidden');
            }
        </script>
</section>