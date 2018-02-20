<?php

//GETTING REQUEST DATA
$id = $_GET['id'];

include ('../database.class.php');

$connection = new DBConnection();

//Connection Object

$conn = $connection->connect();

$sql = "SELECT * FROM news WHERE category_id = '$id' ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

$init = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $newsBlock[$init]['id'] = $row['id'];
    $newsBlock[$init]['title'] = $row['title'];
    $newsBlock[$init]['subtitle'] = $row['subtitle'];
    $newsBlock[$init]['content'] = $row['content'];
    $newsBlock[$init]['namesRelated'] = $row['names_concerned'];
    $newsBlock[$init]['path'] = $row['image_path'];
    $newsBlock[$init]['postedOn'] = $row['posted_on'];
    $init++;
}

echo json_encode($newsBlock);



