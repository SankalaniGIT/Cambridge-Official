<?php

$x = $_GET['id'];

$sQl = "CREATE VIEW categoryall AS SELECT c.id, c.category FROM category c INNER JOIN categorygroup cg WHERE cg.id = '$x' AND c.group_id = cg.id";


require_once('../database.class.php');

$gal_instance = new DBConnection();

$conn_gallery = $gal_instance->connect();

//  CREATES A VIEW FOR LATTER USE
mysqli_query($conn_gallery, 'DROP VIEW IF EXISTS categoryall');
mysqli_query($conn_gallery, $sQl);

//  SETTING CRITERIA FOR A FILTER
mysqli_query($conn_gallery, 'DROP VIEW IF EXISTS categoryfiltered');
mysqli_query($conn_gallery, 'CREATE VIEW categoryfiltered AS SELECT category FROM categoryall WHERE category NOT LIKE "PROJECT_%"');


$resultFilter = mysqli_query($conn_gallery, 'SELECT category FROM categoryfiltered');

$countData = mysqli_num_rows($resultFilter);

if ($countData % 8 == 0) {
    $categoryBlocks = ($countData - ($countData % 8)) / 8;
} else {
    $categoryBlocks = ($countData - ($countData % 8)) / 8 + 1;
}

$limiter = 0;

$galleryString = '';

for ($n = 0; $n < ($categoryBlocks); $n++) {

    $galleryString .= '<div class="item">';
    $galleryString .= '<ul class="galleryBlocks">';

    $table = 'gallery';

    $result_category = mysqli_query($conn_gallery, "SELECT category FROM categoryfiltered LIMIT $limiter,8");

    $limiter = $limiter + 8;


    while ($row_category = mysqli_fetch_assoc($result_category)) {
        $galleryString .= '<li class="wow fadeInRight animated" data-wow-offset="30" data-wow-duration="2s" data-wow-delay="0.25s">';
        $category = $row_category['category'];
        $query = "SELECT * FROM $table WHERE category = '$category' ORDER BY id DESC ";

        $result = mysqli_query($conn_gallery, $query);


        $starter = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            if ($starter == 0) {
                $galleryString .= '<a data-fancybox="fil' . str_replace(' ', '', $category) . '" title="' . $row["description"] . '" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/>';
                $galleryString .= '<div class="textbox">
                <h5><strong>' . $category . '</strong></h5>
                    <p>MORE <i class="fa fa-camera" aria-hidden="true"></i> PICS</p>
                </div></a>';
            } else {
                $galleryString .= '<a data-fancybox="fil' . str_replace(' ', '', $category) . '" title="' . $row["description"] . '" style="display: none;" class="more" href="' . $row["image_path"] . '"><img src="' . $row["image_path"] . '"  alt="' . $row["alt"] . '"/></a>';
            }


            $starter++;

        }

        $galleryString .= '</li>';
    }
    $galleryString .= '</ul>';
    $galleryString .= '</div>';
}


echo $galleryString;

