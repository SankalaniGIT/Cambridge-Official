<?php
require('../../../helpers/database.class.php');


//Global Variables

$image_root = "../../../assets/images/";


$news_instance = new DBConnection();

$conn_news = $news_instance->connect();


$table = 'news';


if(isset($_GET['newsCategory']) && isset($_GET['newsID']) && isset($_GET['newsPage'])){
    $newsID = $_GET['newsID'];
    $categoryInfo = ($_GET['newsCategory'] === 'all') ? 'all': $_GET['newsCategory'];

    if($categoryInfo != 'all'){
    $query = "SELECT * FROM $table WHERE category_id = '$categoryInfo' AND id = '$newsID'";
}else{
    $query = "SELECT * FROM $table WHERE category_id LIKE '%_' AND id = '$newsID'";
}

}else if (isset($_GET['newsCategory']) && isset($_GET['newsID'])) {
    $newsID = $_GET['newsID'];
    $categoryInfo = ($_GET['newsCategory'] === 'all') ? 'all' : $_GET['newsCategory'];
    if($categoryInfo != 'all'){
    $query = "SELECT * FROM $table WHERE category_id = '$categoryInfo' AND id = '$newsID'";
}else{
    $query = "SELECT * FROM $table WHERE category_id LIKE '%_' AND id = '$newsID'";
}
   
}else if (isset($_GET['newsCategory'])) {
    $categoryInfo = ($_GET['newsCategory'] === 'all') ? 'all' : $_GET['newsCategory'];
    if($categoryInfo != 'all'){
    $query = "SELECT * FROM $table WHERE category_id = '$categoryInfo'";
}else{
    $query = "SELECT * FROM $table WHERE category_id LIKE '%_'";
}
   
}else if (isset($_GET['newsID'])) {
    $newsID = $_GET['newsID'];
    $query = "SELECT * FROM $table WHERE id = '$newsID'";
   
}else{
     $query = "SELECT * FROM $table WHERE TRUE";
}

/*-------------------------------------------------------------
Latest Three News
---------------------------------------------------------------*/
$sqlLatest = "SELECT * FROM $table ORDER BY id DESC LIMIT 3";


$result_news_latest = mysqli_query($conn_news, $sqlLatest);

$newsBlock_latest[][] = "";

$init_latest = 0;

$count_latest = mysqli_num_rows($result_news_latest);

while ($row_news_latest = mysqli_fetch_assoc($result_news_latest)) {
    $newsBlock_latest[$init_latest]['id'] = $row_news_latest['id'];
    $newsBlock_latest[$init_latest]['title'] = $row_news_latest['title'];
    $newsBlock_latest[$init_latest]['content'] = $row_news_latest['content'];
    $newsBlock_latest[$init_latest]['i_path'] = $row_news_latest['image_path'];
    $newsBlock_latest[$init_latest]['archive'] = $row_news_latest['archive'];

    $init_latest++;
}

/*--------------------------------------------------------------*/

$result_news = mysqli_query($conn_news, $query);

$newsBlock[][] = "";

$init = 0;

$count = mysqli_num_rows($result_news);

while ($row_news = mysqli_fetch_assoc($result_news)) {
    $newsBlock[$init]['id'] = $row_news['id'];
    $newsBlock[$init]['title'] = $row_news['title'];
    $newsBlock[$init]['subtitle'] = $row_news['subtitle'];
    $newsBlock[$init]['content'] = $row_news['content'];
    $newsBlock[$init]['names'] = $row_news['names_concerned'];
    $newsBlock[$init]['i_path'] = $row_news['image_path'];
    $newsBlock[$init]['date_posted'] = $row_news['posted_on'];
    $newsBlock[$init]['archive'] = $row_news['archive'];
    $newsBlock[$init]['category'] = getCategoryName($row_news['category_id']);

    $newsBlock[$init]['comments'] = getComments($row_news['id']);

    $newsBlock[$init]['comments_count'] = getCommentsCount($row_news['id']);

    $init++;
}
$counter_news = sizeof($newsBlock);


function getCategoryName($id){
global $conn_news;

$sql = "select category from newscategory where id = '$id'";
$result = mysqli_query($conn_news, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $category = $row['category'];
}

return $category; 
}

function getComments($id){
global $conn_news;

$sql = "select * from comments where news_id = $id";
$result = mysqli_query($conn_news, $sql);
if(!mysqli_num_rows($result) > 0){
    $comments[][] = '';
}
$ci = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $comments[$ci]['fullname'] = $row['fullname'];
    $comments[$ci]['email'] = $row['email'];
    $comments[$ci]['comment'] = $row['comment'];
    $comments[$ci]['timestamp'] = $row['timestamp'];
    $ci++;
}

    return $comments; 

}

function getCommentsCount($id){
global $conn_news;

$sql = "select * from comments where news_id = $id";
$result = mysqli_query($conn_news, $sql);



    return mysqli_num_rows($result); 

}

function showTimeVal($time)
{
    $timeValues[] = '<strong>Posted On </strong>' . date('D n d Y', $time);

    $diff = time() - $time;

    $minute = 60;
    $hour = 3600;
    $day = 86400;
    $month = 2678400;
    $year = 32140800;


    if ($diff < 60) {
        $timeValues[] = '<h6 style="color: dimgrey">Just now</h6>';
    } else if ($diff > 60 && $diff < 3600) {
        $timeValues[] = '<span style="color: dimgrey">' . round($diff / $minute) . 'min ' . ceil($diff % $minute) . 's ago</span>';
    } else if ($diff > 3600 && $diff < 3600 * 24) {
        $timeValues[] = '<span style="color: dimgrey">' . round($diff / $hour) . 'hour/s ' . ceil(($diff % $hour) / $minute) . 'min ago</span>';
    } else if ($diff > 3600 * 24 && $diff < 3600 * 24 * 31) {
        $timeValues[] = '<span style="color: dimgrey">' . round($diff / $day) . 'day/s ' . ceil($diff % $day / $hour) . 'hours ago</span>';
    } else if ($diff > 3600 * 24 * 31 && $diff < 3600 * 24 * 31 * 12) {
        $timeValues[] = '<span style="color: dimgrey">' . round($diff / $month) . 'month/s ' . ceil(($diff % $month) / $day) . 'days ago</span>';
    } else if ($diff > 3600 * 24 * 31 * 12) {
        $timeValues[] = '<span style="color: dimgrey">' . round($diff / $year) . 'year/s ' . ceil(($diff % $year) / $month) . 'months ago</span>';
    }

    return $timeValues;

}


/*--------------------------------------------------------------
                    CATEGORY RETRIEVAL SQL
---------------------------------------------------------------*/
$categorySQL = "SELECT * FROM newscategory WHERE TRUE ";

$resultCategory = mysqli_query($conn_news, $categorySQL);

$categories[][] = '';
$n = 0;

while ($row_category = mysqli_fetch_assoc($resultCategory)) {
    $categories[$n]['id'] = $row_category['id'];
    $categories[$n]['category'] = $row_category['category'];

    $n++;
}

/*--------------------------------------------------------------*/