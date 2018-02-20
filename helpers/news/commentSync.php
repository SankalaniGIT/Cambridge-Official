<?php


require('../database.class.php');


//Global Variables

$id = $_GET['newsID'];

$comment_instance = new DBConnection();

$conn_comments = $comment_instance->connect();


$sql = "select * from comments where news_id = $id";
$result = mysqli_query($conn_comments, $sql);
if(!mysqli_num_rows($result) > 0){
    $comments[][] = '';
}
$ci = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $comments[$ci]['name'] = $row['fullname'];
    $comments[$ci]['email'] = $row['email'];
    $comments[$ci]['comment'] = $row['comment'];
    $comments[$ci]['timestamp'] = $row['timestamp'];
    $ci++;
}

echo json_encode($comments); 

