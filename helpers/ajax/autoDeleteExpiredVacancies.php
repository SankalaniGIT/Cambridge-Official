<?php

//GETTING REQUEST DATA
$id = $_POST['id'];

include('../database.class.php');

$connection = new DBConnection();

$connCareer = $connection->connect();

$SQL = "DELETE FROM career WHERE id = '$id'";

$RESULT = mysqli_query($connCareer, $SQL);

if(is_resource($RESULT)){
    return true;
}
