<?php

//GETTING REQUEST DATA
$id = ($_POST['id'] - 1) * 3;

include('../database.class.php');

$connection = new DBConnection();

$connCareer = $connection->connect();

$getSQL = "SELECT id,position,description,noOfVacants,datePosted,postDuration,priority FROM career ORDER BY id DESC LIMIT $id,3";

$resultSQl = mysqli_query($connCareer, $getSQL);

if (mysqli_num_rows($resultSQl) > 0) {
    $career[][] = '';
}

$init = 0;
while ($row = mysqli_fetch_assoc($resultSQl)) {
    $career[$init]['id'] = $row['id'];
    $career[$init]['position'] = $row['position'];
    $career[$init]['description'] = $row['description'];
    $career[$init]['noOfVacant'] = $row['noOfVacants'];
    $career[$init]['datePosted'] = date('Y-M-d H:i:s', $row['datePosted']);
    $career[$init]['postDuration'] = $row['postDuration'] - round((time() - $row['datePosted']) / (3600 * 24));
    $career[$init]['priority'] = $row['priority'];

    $init++;
}

echo json_encode($career);



