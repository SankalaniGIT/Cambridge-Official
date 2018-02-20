<?php


date_default_timezone_set('Asia/Colombo');

$newsID = $_POST['newsID'];

$name = $_POST['name'];

$email = $_POST['email'];

$number = $_POST['number'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$timestamp = date('Y|M|D h:i:s a');

require('../database.class.php');


//Global Variables


$comment_instance = new DBConnection();

$conn_comments = $comment_instance->connect();



$sql = "INSERT INTO comments VALUES('','$newsID','$name','$email','$subject','$number','$message','$timestamp')";

if(mysqli_query($conn_comments, $sql)){
	echo true;
}else{
	echo false;
}