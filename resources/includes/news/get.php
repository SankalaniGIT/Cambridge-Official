<?php

$news_instance = new DBConnection();

$conn_news = $news_instance->connect();


$table = 'news';

$query = "SELECT * FROM $table ORDER BY id DESC LIMIT 4";

$result_news = mysqli_query($conn_news, $query);

$newsBlock[][] = "";

$init = 0;

while ($row_news = mysqli_fetch_assoc($result_news)) {
    $newsBlock[$init]['id'] = $row_news['id'];
    $newsBlock[$init]['title'] = $row_news['title'];
    $newsBlock[$init]['subtitle'] = $row_news['subtitle'];
    $newsBlock[$init]['content'] = $row_news['content'];
    $newsBlock[$init]['names'] = $row_news['names_concerned'];
    $newsBlock[$init]['i_path'] = $row_news['image_path'];
    $newsBlock[$init]['date_posted'] = $row_news['posted_on'];
    $newsBlock[$init]['archive'] = $row_news['archive'];

    $init++;
}

$counter_news = sizeof($newsBlock);

//Function for calculating time

function showTimeVal($time)
{
    $timeValues[] = '<strong>Posted On </strong>' . date('D n/d/Y', $time);

    $diff = time() - $time;

    $minute = 60;
    $hour = 3600;
    $day = 86400;
    $month = 2678400;
    $year = 32140800;


    if ($diff < 60) {
        $timeValues[] = '<h6 style="color: maroon">Just Now</h6>';
    } else if ($diff > 60 && $diff < 3600) {
        $timeValues[] = '<span style="color: maroon">' . round($diff / $minute) . ' Min ' . ceil($diff % $minute) . ' S Ago</span>';
    } else if ($diff > 3600 && $diff < 3600 * 24) {
        $timeValues[] = '<span style="color: maroon">' . round($diff / $hour) . ' Hours ' . ceil(($diff % $hour) / $minute) . ' Min Ago</span>';
    } else if ($diff > 3600 * 24 && $diff < 3600 * 24 * 31) {
        $timeValues[] = '<span style="color: maroon">' . round($diff / $day) . ' Days ' . ceil($diff % $day / $hour) . ' Hours Ago</span>';
    } else if ($diff > 3600 * 24 * 31 && $diff < 3600 * 24 * 31 * 12) {
        $timeValues[] = '<span style="color: maroon">' . round($diff / $month) . ' Months ' . ceil(($diff % $month) / $day) . ' Days Ago</span>';
    } else if ($diff > 3600 * 24 * 31 * 12) {
        $timeValues[] = '<span style="color: maroon">' . round($diff / $year) . ' Years ' . ceil(($diff % $year) / $month) . ' Months Ago</span>';
    }

    return $timeValues;

}

