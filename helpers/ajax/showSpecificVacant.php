<?php

//GETTING REQUEST DATA
$id = $_POST['id'];

include('../database.class.php');

$connection = new DBConnection();

$connCareer = $connection->connect();

$getSQL = "SELECT * FROM career WHERE id = '$id' LIMIT 1";

$resultSQl = mysqli_query($connCareer, $getSQL);

$career[][] = '';

$init = 0;
while ($row = mysqli_fetch_assoc($resultSQl)) {
    $career[$init]['id'] = $row['id'];
    $career[$init]['position'] = $row['position'];
    $career[$init]['banner'] = $row['banner'];
    $career[$init]['qualification'] = $row['qualification'];
    $career[$init]['description'] = $row['description'];
    $career[$init]['datePosted'] = $row['datePosted'];
    $career[$init]['expiresIn'] = $row['postDuration'];
    $career[$init]['priority'] = $row['priority'];
}

echo json_encode($career);



