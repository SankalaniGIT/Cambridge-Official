<?php


$countProject = mysqli_num_rows(mysqli_query($conn_gallery, 'SELECT category FROM galleryProject'));

if ($countProject % 8 == 0) {
    $categoryBlocksProject = ($countProject - ($countProject % 8)) / 8;
} else {
    $categoryBlocksProject = ($countProject - ($countProject % 8)) / 8 + 1;
}

$limiterProject = 0;

for ($z = 0; $z < $categoryBlocksProject; $z++) {

    echo '<div class="item">';
    echo '<ul class="galleryBlocks">';

    $table = 'gallery';


    $result_category_project = mysqli_query($conn_gallery, "SELECT category FROM galleryProject LIMIT $limiterProject,8");

    $limiterProject = $limiterProject + 8;


    while ($row_category_project = mysqli_fetch_assoc($result_category_project)) {
        echo '<li>';
        $category_project = $row_category_project['category'];
        $query_project = "SELECT * FROM $table WHERE category = '$category_project' ORDER BY id DESC ";

        $result = mysqli_query($conn_gallery, $query_project);


        $starter = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            if ($starter == 0) {
                echo '<a data-fancybox="' . str_replace(' ', '', $category_project) . '" title="' . $row["description"] . '" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/>';
                echo '<div class="textbox"><h5 class="text-info"><strong>' . str_replace('PROJECT_', '', $category_project) . '</strong></h5>
                    <p>MORE <i class="fa fa-camera" aria-hidden="true"></i> PICS</p>
                </div></a>';
            } else {
                echo '<a data-fancybox="' . str_replace(' ', '', $category_project) . '" title="' . $row["description"] . '" style="display: none;" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/></a>';
            }

            $starter++;

        }

        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
}

