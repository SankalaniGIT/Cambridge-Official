<?php

//GETTING REQUEST DATA
$searchKey = ($_GET['id'] !== '') ? $_GET['id'] : NULL;

include('../database.class.php');

$connection = new DBConnection();

//CONNECTION OBJECT

$conn = $connection->connect();

//CREATING A VIEW FOR JOINED NEWS & CATEGORIES
mysqli_query($conn, 'CREATE VIEW categorized AS SELECT n.id,n.title, n.subtitle, n.content, nc.category FROM news n INNER JOIN newscategory nc ON n.category_id = nc.id');

$sql = "SELECT * FROM categorized WHERE category LIKE  '%$searchKey%' OR title LIKE '%$searchKey%' OR subtitle LIKE '%$searchKey%' OR content LIKE '%$searchKey%' ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$init = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $newsBlock[$init]['id'] = $row['id'];
    $newsBlock[$init]['title'] = $row['title'];
    $newsBlock[$init]['content'] = $row['content'];
    $newsBlock[$init]['category'] = $row['category'];
    $init++;
}
if ($searchKey) {
    echo json_encode($newsBlock);
}




