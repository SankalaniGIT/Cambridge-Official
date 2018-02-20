<?php


$countData = mysqli_num_rows(mysqli_query($conn_gallery, 'SELECT category FROM galleryInfo'));

if ($countData % 7 == 0) {
    $categoryBlocks = ($countData - ($countData % 7)) / 7;
} else {
    $categoryBlocks = ($countData - ($countData % 7)) / 7 + 1;
}


$limiter = 0;

for ($n = 0; $n < ($categoryBlocks - 1); $n++) {

    echo '<div class="item">';
    echo '<ul class="galleryBlocks">';

    $table = 'gallery';

    if ($n == 0) {

        $result_category = mysqli_query($conn_gallery, "SELECT category FROM galleryData LIMIT $limiter,7");

        $limiter = $limiter + 7;
    } else {

        $result_category = mysqli_query($conn_gallery, "SELECT category FROM galleryData LIMIT $limiter,8");

        $limiter = $limiter + 8;
    }

    if ($n == 0) {
        echo '<li id="projectLink" class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">';
        echo '<a onclick="javascript: toggleOwlGallery()" class="more"><img src="./assets/images/icons/project.jpg"  alt=""/>';
        echo '<div class="textbox">
                    <h5><strong>PROJECTS</strong></h5>
                    <p>MORE <i class="fa fa-camera" aria-hidden="true"></i> PICS</p>
              </div></a>';
        echo '</li>';
    }

    while ($row_category = mysqli_fetch_assoc($result_category)) {
        echo '<li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">';
        $category = $row_category['category'];
        $query = "SELECT * FROM $table WHERE category = '$category' ORDER BY id DESC ";

        $result = mysqli_query($conn_gallery, $query);


        $starter = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            if ($starter == 0) {
                echo '<a data-fancybox="' . str_replace(' ', '', $category) . '" title="' . $row["description"] . '" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/>';
                echo '<div class="textbox">
                <h5><strong>' . $category . '</strong></h5>
                    <p>MORE <i class="fa fa-camera" aria-hidden="true"></i> PICS</p>
                </div></a>';
            } else {
                echo '<a data-fancybox="' . str_replace(' ', '', $category) . '" title="' . $row["description"] . '" style="display: none;" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/></a>';
            }

            $starter++;

        }

        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

